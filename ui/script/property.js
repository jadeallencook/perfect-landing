$(function () {
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
            url: '../vrp/rentals.xml',
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
                        short: data.shortdesc['#text']
                    };
                    $.each(data.photos['#text'].split(/\|/), function (i, val) {
                        object.photos.push(val);
                    });
                    $.each(data.amenlist['#text'].split(/\|/), function (i, val) {
                        object.amenities.push(val);
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
                $('h2#short-desc').text(property.short);
                $('span#property-price').text('$' + displayPrice(property.rate) + '/night');
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
});