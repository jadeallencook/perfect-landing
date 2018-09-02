<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Perfect Landing Vacation Rentals & Real Estate</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/vendor/font-awesom/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/vendor/mmenu/jquery.mmenu.all.css" />
    <!-- Menu Responsive -->
    <link rel="stylesheet" href="css/vendor/animate-wow/animate.css">
    <!-- Animation WOW -->
    <link rel="stylesheet" href="css/vendor/labelauty/labelauty.css">
    <!-- Checkbox form Style -->
    <link rel="stylesheet" href="css/vendor/nouislider/nouislider.min.css">
    <!-- Slider Price -->
    <link rel="stylesheet" href="css/vendor/easydropdown/easydropdown.css">
    <!-- Select form Style -->
    <link rel="stylesheet" href="css/ui-spinner.css">
    <!-- Spinner -->
    <link rel="stylesheet" href="css/menu.css">
    <!-- Include Menu stylesheet -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/media-query.css">
    <link rel="stylesheet" href="css/template/color/E37C19.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom-ui.css">
    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="images/favicon/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="script/modernizr.min.js"></script>
    <script src="script/tabletop.js"></script>
    <script src="script/gDoc.js"></script>
    <script src="script/xml-to-json.js"></script>
    <?php include_once('partials/ga.php'); ?>

</head>

<body class="fixed-header">

    <div id="loading-container">
        <div>
            <img src="images/logo-badge.png" id="loading-logo" />
            <br />
            <br />
            <h2 id="loading-msg" style="color: #fff"></h2>
            <script>
                var lines = new Array(
                    'Loading your dream vacation...',
                    'What a great choice you have made...',
                    'Sweeping off the welcome mat...',
                    'Looking forward to your visit...'
                );
                document.getElementById('loading-msg').innerText = lines[Math.round(Math.random() * (lines.length - 1))];
            </script>
        </div>
    </div>

    <div id="page-container">
        <header class="menu-color-line" id="header-container-box">
            <div class="info">
                <!-- info -->
                <div class="container">
                    <div class="row">
                        <a id="mobile-menu-button" href="#mobile-menu" class="visible-xs"><i class="fa fa-bars"></i></a>
                        <div class="col-md-2 logo-withe">
                            <a href="#"><img src="images/logo_x1_w.png" alt="Logo" /></a>
                        </div>
                        <!-- /.logo -->
                        <div class="col-md-10 hidden-xs" id="login-pan">
                            <a href="call:1-989-362-3300"><i class="icon fa fa-phone"></i> (989)362-3300</a>
                            <a class="hidden-sm" href="contact/"><i class="icon fa fa-envelope-o"></i> hello@perfectlandingrentals.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.info -->
            <div class="container" id="menu-nav">
                <nav id="navigation">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="browse/">Browse</a>
                        </li>
                        <li>
                            <a href="blog/">Blog</a>
                        </li>
                        <li>
                            <a href="idx/">Real Estate</a>
                        </li>
                        <li>
                            <a href="http://www.rentals4you.info/" target="_blank">Monthly Rentals</a>
                        </li>
                        <li>
                            <a href="contact/">Contact</a>
                        </li>
                </nav>
            </div>
            <a href="#" class="fixed-button top"><i class="fa fa-chevron-up"></i></a>
            <a href="contact/" class="hidden-xs fixed-button email"><i class="fa fa-envelope-o"></i></a>
        </header>

        <section id="home-slide" class="header-margin-color-line">
            <div class="home-slider carousel" data-navigation=".home-slider-nav">
                <div class="crsl-wrap">
                    <figure class="crsl-item" id="banner-1-image" data-image="">
                        <div class="container slider-box">
                            <div class="content">
                                <h2 id="banner-1-top-text"></h2>
                            </div>
                            <div class="content">
                                <h1 id="banner-1-big-text"></h1>
                            </div>
                            <div class="content">
                                <h3 id="banner-1-decription"></h3>
                            </div>
                        </div>
                    </figure>
                    <figure class="crsl-item" id="banner-2-image" data-image="">
                        <div class="container slider-box">
                            <div class="content">
                                <h2 id="banner-2-top-text"></h2>
                            </div>
                            <div class="content">
                                <h1 id="banner-2-big-text"></h1>
                            </div>
                            <div class="content">
                                <h3 id="banner-2-decription"></h3>
                            </div>
                        </div>
                    </figure>
                    <figure class="crsl-item" id="banner-3-image" data-image="">
                        <div class="container slider-box">
                            <div class="content">
                                <h2 id="banner-3-top-text"></h2>
                            </div>
                            <div class="content">
                                <h1 id="banner-3-big-text"></h1>
                            </div>
                            <div class="content">
                                <h3 id="banner-3-decription"></h3>
                            </div>
                        </div>
                    </figure>
                </div>
                <p class="home-slider-nav previus">
                    <a href="#" class="previous">previous</a>
                </p>
                <p class="home-slider-nav next">
                    <a href="#" class="next">next</a>
                </p>
            </div>
        </section>

        <section id="search-box" class="no-margin">
            <div class="container search-container fixed-map">
                <div class="search-options sample-page">
                    <span class="botton-options"><i class="fa fa-chevron-down"></i> Hide Search Options</span>
                    <div class="searcher">
                        <div class="row margin-div" id="searcher-container">
                            <div class="col-sm-6 col-md-2 margin-bottom">
                                <input class="form-control" type="text" name="prop-name" id="prop-name" placeholder="Property Name" />
                            </div>
                            <div class="col-sm-12 col-md-2" id="cities-container">

                            </div>
                            <div class="col-sm-6 col-md-2 margin-bottom">
                                <span id="label-checkin" data-text="Check In"></span>
                                <input class="form-control" type="text" name="checkin" id="checkin" placeholder="Check In" />
                            </div>
                            <div class="col-sm-6 col-md-2 margin-bottom">
                                <span id="label-checkout" data-text="Check Out"></span>
                                <input class="form-control" type="text" name="checkout" id="checkout" placeholder="Check Out" />
                            </div>
                            <div class="col-sm-6 col-md-2 margin-bottom">
                                <span id="label-bathroom" data-text="Bathroom"></span>
                                <input class="form-control" type="text" name="bathroom" id="bathroom" value="1" />
                            </div>
                            <div class="col-sm-6 col-md-2 margin-bottom">
                                <span id="label-bedroom" data-text="Bedroom"></span>
                                <input class="form-control" type="text" name="bedroom" id="bedroom" value="1" />
                            </div>
                            <!-- 
                            <div class="col-sm-12 col-md-3 margin-bottom">
                                <div class="slider" id="price-range"></div>
                                <div class="price-slider price">
                                    <span id="price-value-min"></span>
                                    <span class="separator">$</span>
                                    <span id="price-value-max"></span>
                                </div>
                            </div>
                            -->
                        </div>
                        <!-- ./row 2 -->
                        <div class="row filter hide-filter hidden-xs hidden-sm" id="filters">
                        </div>
                        <!-- ./filter -->
                        <div class="margin-div footer">
                            <!-- <button type="button" class="btn btn-default more-button hidden-xs hidden-sm">MORE FILTERS</button> -->
                            <button type="button" class="btn btn-default search-button" id="find-rental">Find Rental</button>
                        </div>
                        <!-- ./footer -->
                    </div>
                    <!-- ./searcher -->
                </div>
                <!-- search-options -->
            </div>
            <!-- search-container fixed-map -->
        </section>

        <section id="recent-list">
            <div class="section-detail">
                <h1>
                    <span>Find Your </span>
                    <span id="spinner-show">
					  <em class="current">Perfect</em>
					  <span class="next"><span></span></span>
                    </span>
                    <span>Rental</span>
                </h1>
                <ul id="spinner">
                    <li>Charming</li>
                    <li>Spacious</li>
                    <li>Secluded</li>
                    <li>Unique</li>
                    <li>Waterfront</li>
                </ul>
                <h2>Welcome to Perfect Landing Rentals!</h2>
            </div>
            <div class="container">
                <div class="list-box-title">
                    <span><i class="icon fa fa-plus-square"></i>Featured Properties</span>
                </div>
                <div class="row" id="featured-list"></div>
                <div class="list-box-title">
                    <span><i class="icon fa fa-plus-square"></i>Recently Listed</span>
                </div>
                <div class="row" id="recent-list"></div>
            </div>
        </section>

        <section id="submit-property" data-parallax-speed="0">
            <span class="overlay"></span>
            <div class="container">
                <div class="section-detail">
                    <h1>About Us</h1>
                    <h2>Perfect Landing Specializes in Vacation & Monthly Rentals, in addition to Real Estate Services, and Property Management.</h2>
                </div>
                <div class="row text-center">
                    <a href="browse/" class="btn btn-reverse button-large">Browse Our Properties</a>
                </div>
            </div>
        </section>

        <section id="recent-news">
            <div class="section-detail">
                <h1>Recent News</h1>
                <h2>If you need assistance in finding your ideal rental just give us a call!</h2>
            </div>
            <div class="container" id="blog">
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-list masonry-post">
                            <div class="image blog-image" id="blog-image-1"></div>
                            <div class="text" id="blog-desc-1">
                                <h3 class="subtitle" id="blog-title-1"></h3>
                                <span id="blog-description-1"></span>
                            </div>
                            <a target="_blank" id="blog-link-1" class="btn btn-default button-read">Read now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-list masonry-post">
                            <div class="image blog-image" id="blog-image-2"></div>
                            <div class="text" id="blog-desc-2">
                                <h3 class="subtitle" id="blog-title-2"></h3>
                                <span id="blog-description-2"></span>
                            </div>
                            <a target="_blank" id="blog-link-2" class="btn btn-default button-read">Read now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-list masonry-post">
                            <div class="image blog-image" id="blog-image-3"></div>
                            <div class="text" id="blog-desc-3">
                                <h3 class="subtitle" id="blog-title-3"></h3>
                                <span id="blog-description-3"></span>
                            </div>
                            <a target="_blank" id="blog-link-3" class="btn btn-default button-read">Read now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer-page" class="section-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <span class="title with-icon">
							<img class="logo-footer" src="images/mini-logo-x1.png" alt="logo" />
							About Us
						</span>
                        <span class="text">
							Perfect Landing Specializes in Vacation & Monthly Rentals, in addition to Real Estate Services, and Property Management.
						</span>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <span class="title">CALL US NOW</span>
                        <span class="phone"><i class="fa fa-phone"></i> (989)362-3300</span>
                        <span class="address">
						</span> 125 Birch Street <strong>Tawas City</strong>
                        <br />
                        <i class="fa fa-map-marker"></i> MI 48763, USA
                    </div>
                    <div class="hidden-xs hidden-sm col-md-3">
                        <span class="title">Extras</span>
                        <ul class="link-extra">
                            <li><a href="idx/">Real Estate</a></li>
                            <li><a href="contact/">Contact Us</a></li>
                            <li><a href="http://www.rentals4you.info/" target="_blank">Monthly Rentals</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <span class="title">Social Media</span> Happy to connect!
                        <br />
                        <br />
                        <b>Feel Free To Email Us!</b>
                        <br /> hello@perfectlandingrentals.com
                    </div>
                </div>
            </div>
            <div class="credits">
                <div class="container">
                    <div id="badges-wrapper">
                        <img src="images/bbb-badge.png" />
                        <img src="images/pure-michigan.png" />
                    </div>
                    <br />
                    <div class="row">
                        <div class="hidden-xs col-md-9 credits-text">Copyright <span id="footer-year"></span>
                            <script>
                                document.getElementById('footer-year').innerText = new Date().getFullYear();
                            </script> 
                            <b id="perfectlanding">Perfect Landing</b> | Developed By <b id="jadeallencook">Jade Allen Cook</b> | UI Designed By <b id="andylab">AndyLab</b></div>
                        <div class="col-md-3">
                            <ul class="social-icons">
                                <li><a target="_blank" href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a target="_blank" href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- /#page-container -->

    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase-database.js"></script>
    <script src="script/firebase-connect.js"></script>
    <!-- cpm -->
    <script src="script/cloud-property-manager.js"></script>
    <script src="script/jquery.min.js"></script>
    <!-- jQuery	(necessary for Bootstrap's JavaScript plugins) -->
    <script src="script/jquery-ui.min.js"></script>
    <!-- jQuery	UI is a	curated	set	of user	interface interactions,	effects, widgets, and themes -->
    <script src="script/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="script/vendor/mmenu/mmenu.min.all.js"></script>
    <!-- Menu Responsive -->
    <script src="script/vendor/animation-wow/wow.min.js"></script>
    <!-- Animate Script	-->
    <script src="script/vendor/labelauty/labelauty.min.js"></script>
    <!-- Checkbox Script -->
    <script src="script/vendor/parallax/parallax.min.js"></script>
    <!-- Parallax Script -->
    <script src="script/vendor/images-fill/imagesloaded.min.js"></script>
    <!-- Loaded	image with ImageFill -->
    <script src="script/vendor/images-fill/imagefill.min.js"></script>
    <!-- ImageFill Script -->
    <script src="script/vendor/easydropdown/jquery.easydropdown.min.js"></script>
    <!-- Select	list Script	-->
    <script src="script/vendor/carousel/responsiveCarousel.min.js"></script>
    <!-- Carousel Script -->
    <script src="script/vendor/noui-slider/nouislider.all.min.js"></script>
    <!-- Range Slider -->
    <script src="script/custom.js"></script>
    <script src="script/homepage.js"></script>
    <script src="script/search.js"></script>

</body>

</html>