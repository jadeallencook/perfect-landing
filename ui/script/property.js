$(function () {

  var propertyCity = new String();

  // relocated window
  function relocate(url) {
    window.location = url;
  }

  // converts vrp to readable price
  function displayPrice(rate) {
    if (rate.indexOf(' Nightly') === -1) {
      var search = ' Daily';
    } else {
      var search = ' Nightly';
    }
    var price = rate.substring(rate.indexOf('$') + 1, rate.indexOf(search));
    return price;
  }

  // formatting property
  function displayProperty(id) {
    $.ajax({
      type: 'GET',
      url: '../vrp/vrpexport/vrpexport_xprop.xml',
      dataType: 'xml',
      success: function (xml) {
        $('html, body').scrollTop(0);
        // cache json & xml
        var json = xmlToJson(xml);
        json = json.data.xprop;
        // create object for rentals
        function createProperty(data) {
          var object = {
            pets: data.nopets['#text'],
            beds: parseInt(data.numbedrms['#text']),
            baths: parseInt(data.numbaths['#text']),
            id: data.propid['#text'],
            name: data.propname['#text'],
            address: data.addr1['#text'],
            city: data.city['#text'],
            rate: data.grppgsum['#text'],
            description: data.longdesc['#text'],
            zip: parseInt(data.zip['#text']),
            amenities: [],
            fees: [],
            photos: [],
            photoDesc: [],
            short: data.shortdesc['#text'],
            meta: data.shortsum['#text']
          };
          $.each(data.photos['#text'].split(/\|/), function (i, val) {
            object.photos.push(val);
          });
          $.each(data.amenlist['#text'].split(/\|/), function (i, val) {
            object.amenities.push(val);
          });
          $.each(data.photodescs['#text'].split(/\|/), function (i, val) {
            object.photoDesc.push(val);
          });
          return object;
        };
        var build = {
          cities: [],
          amenities: [],
          max: json.length,
          properties: [],
          current: 0,
          photosURL: 'http://perfectlandingrentals.com/vrp/'
        }
        // gets each property
        for (var i = 0; i < build.max; i++) {
          build.properties.push(createProperty(json[i]));
          if ($.inArray(build.properties[i].city, build.cities) == -1) {
            build.cities.push(build.properties[i].city);
            $.each(build.properties[i].amenities, function (x, val) {
              if ($.inArray(val, build.amenities) == -1) {
                build.amenities.push(val);
              }
            });
          }
        }
        // insert cities into options
        if ($('div#cities-container')) {
          var html = '<select class="dropdown" data-settings=\'{"cutOff": 3}\' id="cities">"';
          html += '<option value="">-- All Cities --</option>';
          $.each(build.cities, function (x, val) {
            html += '<option value="' + val + '">' + val + '</option>';
          });
          html += '</select>';
          $('div#cities-container').append(html);
        }
        // main property build
        var property = $.grep(build.properties, function (properties) {
          return properties.id == id;
        });
        // set url and property
        property = property[0];
        if (property === undefined) relocate('../browse');
        else window.location.hash = '/' + property.id + '/' + property.name.split(' ').join('-') + '/' + property.address.split(' ').join('-') + '/' + property.city.split(' ').join('-');
        // after propery is found and url has been set..
        $('h1#property-title').text(property.name);
        $('h2#short-desc').text(property.meta);
        $('span#property-price').text('$' + displayPrice(property.rate) + '/night');
        $('span#photo-description').empty().text(property.photoDesc[0]);

        // set city for things to do
        propertyCity = property.city;

        function createPhotos() {
          var html = '<div class="fotorama" data-width="100%" data-fit="cover" data-max-width="100%" data-nav="thumbs" data-transition="crossfade" id="property-photos">';
          $.each(property.photos, function (x, val) {
            html += '<img src="' + build.photosURL + val + '" />';
          });
          html += '</div>';
          // prevent script error
          html += '<script src="../script/vendor/fotorama/fotorama.min.js"></script>';
          return html;
        }
        $('div#property-photos').append(createPhotos());
        $('div#property-description').append(property.description);
        // add id to each photo thumb
        $.each($('div.fotorama__thumb'), function (x, thumb) {
          thumb.setAttribute('id', x);
        });
        // photo desciption functionality
        var currentPhoto = 0;
        $('div.fotorama__arr--next').click(function () {
          currentPhoto = currentPhoto + 1;
          $('span#photo-description').empty().text(property.photoDesc[currentPhoto]);
        });
        $('div.fotorama__arr--prev').click(function () {
          currentPhoto = currentPhoto - 1;
          $('span#photo-description').empty().text(property.photoDesc[currentPhoto]);
        });
        $('div.fotorama__thumb').click(function () {
          currentPhoto = this.id;
          $('span#photo-description').empty().text(property.photoDesc[currentPhoto]);
        });

        function createDetails() {
          var html = '';
          $.each(property.amenities, function (x, val) {
            html += '<div class="col-sm-4 col-xs-6">';
            html += '<span class="detail"><i class="fa fa-square"></i> ' + val + '</span>';
            html += '</div>';
          });
          return html;
        }
        $('div#property-amenities').append(createDetails());
        var other1, other2;
        other1 = Math.floor(Math.random() * build.properties.length);
        do {
          other2 = Math.floor(Math.random() * build.properties.length);
        } while (other1 === other2);
        other1 = build.properties[other1];
        other2 = build.properties[other2];

        function buildOther(num, data) {
          $('img#other-' + num + '-image').attr('src', build.photosURL + data.photos[0]);
          $('a.other-' + num + '-link').attr('href', '../property/#/' + data.id).click(function () {
            location.reload();
          });
          $('h3#other-' + num + '-city').text(data.city);
          $('span#other-' + num + '-price').append('<small>$' + displayPrice(data.rate) + '/night</small>');
        }
        buildOther(1, other1);
        buildOther(2, other2);
        // place in reviews
        Tabletop.init({
          key: '1wkiuWqORux27xf5nZOiI44G-IjVRQPzlL3yk3Xhx7yk',
          callback: function (data, tabletop) {
            data = data.comments.elements;
            var validComments = [],
              html = '';
            // formats date
            function formatDate(date) {
              var monthNames = [
                "January", "February", "March",
                "April", "May", "June", "July",
                "August", "September", "October",
                "November", "December"
              ];
              var day = date.getDate();
              var monthIndex = date.getMonth();
              var year = date.getFullYear();
              if (monthNames[monthIndex] && day && year) {
                return monthNames[monthIndex] + ' ' + day + ', ' + year;
              } else {
                $('#property-content > div > div > div.col-md-9 > center > span').hide();
                return '';
              }
            }
            $.each(data, function (x, val) {
              if (val.id === id) {
                let reviewHTML = val.review;
                if (val.response) {
                  reviewHTML += '<br /><br />';
                  reviewHTML += '<b>Perfect Landing (Response): </b>';
                  reviewHTML += val.response;
                }
                html += '<div class="user-feedback">' +
                  '<span class="name">' + val.name + '</span>' +
                  '<span class="text">' + reviewHTML + '</span>' +
                  '<span class="date">' + formatDate(new Date(val['date_time'])) + '</span>' +
                  '<span class="vote">';
                for (var y = 1; y <= 5; y++) {
                  if (y <= val.overall) html += '<i class="fa fa-star"></i>';
                  else html += '<i class="fa fa-star-o"></i>';
                }
                html += '</span></div>';
              }
            });
            $('div#comments-container').empty();
            if (html.length > 0) $('div#comments-container').append(html);
            else $('div#comments-container').append('<h2 style="margin-left: 25px;">No reviews yet!</h2>');
          },
          simpleSheet: false
        });
        // place in reviews
        Tabletop.init({
          key: '11-4D1bHoBnzSAkd-BT8OAX0yXF3dQZr8PPPe9qKoYY0',
          callback: function (data, tabletop) {
            $.each(data, function (x, city) {
              if (propertyCity === city.name) {
                var thingsToDoHTML = '<ul>';
                $.each(data[city.name].elements, function (y, thing) {
                  thingsToDoHTML += '<li><a href="' + thing.link + '" target="_blank">' + thing.text + '</a></li>';
                });
                thingsToDoHTML += '<ul>';
                $('div#property-description').append(
                  '<br /><br />' +
                  '<b>Things To Do In ' + city.name + '</b>' +
                  '<br />' +
                  thingsToDoHTML
                );
              }
            });

          },
          simpleSheet: false
        });
        // add map
        var mapMarker = '../images/map-pin.png';
        var geocoder = new google.maps.Geocoder();
        var address = property.address + ' ' + property.city + ', MI ' + property.zip;
        $('span#property-address').text(address);
        geocoder.geocode({
          'address': address
        }, function (results, status) {

          if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
            var uluru = {
              lat: latitude,
              lng: longitude
            };
            var map = new google.maps.Map(document.getElementById('map-canvas'), {
              zoom: 15,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map,
              icon: mapMarker
            });
          }
        });
      }
    });
  }

  // get the hash and remove #
  var hash = window.location.hash;
  hash = hash.slice(2);

  // relocate if none - else display property
  if (!hash) {
    relocate('../browse');
  } else {
    hash = hash.split('/');
    displayProperty(hash[0]);
  }

  // build calendar module
  $.ajax({
    type: 'GET',
    url: '../script/availablity-online.json',
    dataType: 'json',
    success: function (propertyNums) {
      var aoUsername = 'perfectlanding';
      var roomId = propertyNums[hash[0]];
      var objDate = new Date();
      var cachePreventor = Math.floor(Math.random() * 100001);
      var currentMonth = objDate.getMonth() + 1;
      var currentYear = objDate.getFullYear();
      var month = currentMonth;
      var year = currentYear;
      var strMonth = '';
      var strYear = '';

      $('#nextMonth').click(function () {
        month = month + 1;
        strMonth = validateMonth();
        if (!strMonth) {
          return false;
        }
        loadImage();
      });

      $('#previousMonth').click(function() {
        month = month - 1;
        strMonth = validateMonth();
        if (!strMonth) {
          return false;
        }
        loadImage();
      });

      function validateMonth() {
        // Adjust the year if the month goes above 12 or below 1
        if (month > 12) {
          year = year + 1;
          month = month - 12;
        } else if (month < 1) {
          year = year - 1;
          month = 12;
        }
        // Make sure that the month selected isn't in the past
        if (year < currentYear || (year == currentYear && month < currentMonth)) {
          year = currentYear;
          month = currentMonth;
          return false;
        }
        // Make sure month is two digits
        if (month.length < 2) {
          strMonth = '0' + strMonth;
        } else {
          strMonth = month;
        }
        return strMonth;
      }

      $(function () {
        loadImage();
      });


      function loadImage() {

        $('#aoLoader').addClass('aoLoading');
        $('#aoLoader').html('');

        // cachePreventor = Math.floor(Math.random()*100001); // this line will cause the images to be refreshed on every click instead of once per load of the page
        var url = 'http://images.availabilityonline.com/api/gcal/index.php?un=' + aoUsername + '&year=' + year + '&month=' + strMonth + '&roomId=' + roomId + '&cachePreventor=' + cachePreventor;

        var aoCalendarImage = new Image();
        $(aoCalendarImage).load(function () {
          $(this).hide();
          $('#aoLoader').removeClass('aoLoading').append(this);
          $(this).fadeIn();
        }).error(function () {
          // the image wasn't received so display a placeholder
        }).attr('src', url);
      }
      
    }
  });

});
