<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
<head>
  <!-- Site Title-->
  <title>Home</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
  <link rel="stylesheet" href="assets/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <div>
        <header class="page-header">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap bg-gray-dark">
            <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" class="rd-navbar">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="index.html" class="reveal-inline-block brand-name"><img src="assets/images/logo-white.png" width="166" height="55" alt="" class="img-responsive center-block"></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href=<?php echo base_url();?>>Home</a></li>
                    <li><a href=<?php echo base_url("#");?>>About</a>
                      <li><a href=<?php echo base_url("#");?>>Contacts</a></li>
                      <li><a href=<?php echo base_url("login");?>>Log in</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </header>
          <!-- Swiper-->
          <div class="swiper-slide-wrapper">
            <div data-simulate-touch="false" data-autoplay="3500" data-slide-effect="fade" class="swiper-container swiper-slider">
              <div class="swiper-wrapper">
                <div data-slide-bg="assets/images/background-06.jpg" class="swiper-slide"></div>
                <div data-slide-bg="assets/images/background-08.jpg" class="swiper-slide"></div>
              </div>
            </div>
            <div class="swiper-onSlider">
              <div class="shell shell-wide section-70 section-xl-top-200 section-xl-bottom-220">
                <div class="range range-xs-center">
                  <div class="cell-xl-6 cell-lg-9 cell-md-11">
                    <div data-type="horizontal" class="responsive-tabs text-md-left nav-custom-dark view-animate fadeInUpSmall">
                      <!-- Responsive-tabs-->
                      <ul class="nav-custom-tabs resp-tabs-list">
                        <li class="nav-item"><span class="icon mdi mdi-airplane"></span><span>Flights</span></li>
                        <li class="nav-item"><span class="icon mdi mdi-hotel"></span><span>Hotels</span></li>
                        <li class="nav-item"><span class="icon mdi mdi-car"></span><span>Car Hire</span></li>
                      </ul>
                      <div class="resp-tabs-container nav-custom-tab nav-custom-wide">
                        <div>
                          <form method="post" action="#" class="small">
                            <div class="range">
                              <div class="cell-md-8">
                                <div class="form-group radio-inline-wrapper">
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-1" type="radio" checked>Round Trip
                                  </label>
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-2" type="radio">One Way
                                  </label>
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-3" type="radio">Multi-city
                                  </label>
                                </div>
                              </div>
                              <div class="offset-top-6 offset-md-top-0 cell-md-4 text-md-right">
                                <div class="form-group">
                                  <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-1" type="checkbox">Direct Flights Only
                                  </label>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">From</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>New Delhi (DEL)</option>
                                      <option value="2">Demo Item 1-1</option>
                                      <option value="3">Demo Item 1-2</option>
                                      <option value="4">Demo Item 1-2</option>
                                      <option value="5">Demo Item 2-1</option>
                                      <option value="6">Demo Item 2-2</option>
                                      <option value="7">Demo Item 2-3</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="checkbox-inline">
                                      <input name="input-group-radio" value="checkbox-1" type="checkbox">Add Nearby Airports
                                    </label>
                                  </div>
                                </div>
                                <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">To</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>New York (JFK)</option>
                                      <option value="2">Demo Item 1-1</option>
                                      <option value="3">Demo Item 1-2</option>
                                      <option value="4">Demo Item 1-2</option>
                                      <option value="5">Demo Item 2-1</option>
                                      <option value="6">Demo Item 2-2</option>
                                      <option value="7">Demo Item 2-3</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="checkbox-inline">
                                      <input name="input-group-radio" value="checkbox-2" type="checkbox">Add Nearby Airports
                                    </label>
                                  </div>
                                </div>
                                <div class="cell-md-1-5 offset-top-10 offset-md-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Cabin Class</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>Economy</option>
                                      <option value="2">Demo Item 1-1</option>
                                      <option value="3">Demo Item 1-2</option>
                                      <option value="4">Demo Item 1-2</option>
                                      <option value="5">Demo Item 2-1</option>
                                      <option value="6">Demo Item 2-2</option>
                                      <option value="7">Demo Item 2-3</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">Departure</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" name="departure" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Return</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" name="return" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-sm-6 cell-lg-4 offset-top-15 offset-sm-top-0">
                                  <div class="range">
                                    <div class="cell-xs-6">
                                      <div class="form-group">
                                        <label class="form-group-label">Adults (16+)</label>
                                        <input type="number" min="0" value="2" class="form-control">
                                      </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-15 offset-xs-top-0">
                                      <div class="form-group">
                                        <label class="form-group-label">Children</label>
                                        <input type="number" min="0" value="0" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="cell-lg-clear-flex cell-sm-bottom cell-lg text-center text-lg-right offset-top-15 offset-lg-top-0">
                                  <button class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-search"></span><span>Search Flight</span></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div>
                          <form method="post" action="#" class="small">
                            <div class="range">
                              <div class="cell-md-8">
                                <div class="form-group radio-inline-wrapper">
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-1" type="radio" checked>Work
                                  </label>
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-2" type="radio">Vacation
                                  </label>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">Destination</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>New York (JFK)</option>
                                      <option value="2">Demo Item 1-1</option>
                                      <option value="3">Demo Item 1-2</option>
                                      <option value="4">Demo Item 1-2</option>
                                      <option value="5">Demo Item 2-1</option>
                                      <option value="6">Demo Item 2-2</option>
                                      <option value="7">Demo Item 2-3</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Rooms</label>
                                    <input type="number" min="0" value="1" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-md-1-5 offset-top-10 offset-md-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Star rating</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>5</option>
                                      <option value="2">5</option>
                                      <option value="3">4</option>
                                      <option value="4">3</option>
                                      <option value="5">2</option>
                                      <option value="6">1</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">Arrival</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" name="departure" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Leave</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" name="return" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-sm-6 cell-lg-4 offset-top-15 offset-sm-top-0">
                                  <div class="range">
                                    <div class="cell-xs-6">
                                      <div class="form-group">
                                        <label class="form-group-label">Adults (16+)</label>
                                        <input type="number" min="0" value="2" class="form-control">
                                      </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-15 offset-xs-top-0">
                                      <div class="form-group">
                                        <label class="form-group-label">Children</label>
                                        <input type="number" min="0" value="0" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="cell-lg-clear-flex cell-sm-bottom cell-lg text-center text-lg-right offset-top-15 offset-lg-top-0">
                                  <button class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-search"></span><span>Search Hotels</span></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div>
                          <form method="post" action="#" class="small">
                            <div class="range">
                              <div class="cell-md-8">
                                <div class="form-group radio-inline-wrapper">
                                  <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-2" type="checkbox">Return car to different location
                                  </label>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">Select car</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>Group A (e.g.  Ford Fiesta 1.2)</option>
                                      <option value="2">Demo Item 1-1</option>
                                      <option value="3">Demo Item 1-2</option>
                                      <option value="4">Demo Item 1-2</option>
                                      <option value="5">Demo Item 2-1</option>
                                      <option value="6">Demo Item 2-2</option>
                                      <option value="7">Demo Item 2-3</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">AWD</label>
                                    <input type="text" data-constraints="@Required @Integer" placeholder="000-000-000" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-xs offset-top-10 offset-md-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Car class</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>Coupe</option>
                                      <option value="4">Demo Item 1-1</option>
                                      <option value="3">Demo Item 1-2</option>
                                      <option value="2">Demo Item 1-2</option>
                                      <option value="1">Demo Item 2-1</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs">
                                  <div class="form-group">
                                    <label class="form-group-label">Pick-up Date</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" name="departure" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Drop-off Date</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" name="return" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-sm-4 cell-lg-3 offset-top-15 offset-sm-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Passengers</label>
                                    <input type="number" min="0" value="2" class="form-control">
                                  </div>
                                </div>
                                <div class="cell-lg-clear-flex cell-sm-bottom cell-lg text-center text-lg-right offset-top-15 offset-lg-top-0">
                                  <button class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-search"></span><span>Search Cars</span></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Content-->
        <main class="page-content">
          <section class="section-60 section-lg-top-90 section-lg-bottom-80 bg-gray-lighter">
            <div class="shell shell-wide">
              <div data-wow-delay="0.1s" class="wow fadeInUp">
                <!-- Owl Carousel-->
                <div data-dots="true" data-nav="true" data-items="3" data-xs-items="4" data-sm-items="5" data-md-items="5" data-lg-items="6" data-margin="30" data-mouse-drag="false" class="owl-nav-variant-3 owl-dots-lg owl-carousel owl-carousel-middle owl-dots-primary"><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-14.png" width="107" height="74" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-15.png" width="190" height="17" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-16.png" width="151" height="71" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-17.png" width="163" height="46" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-18.png" width="183" height="68" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-19.png" width="178" height="53" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-14.png" width="107" height="74" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-15.png" width="190" height="17" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-16.png" width="151" height="71" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-17.png" width="163" height="46" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-18.png" width="183" height="68" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-19.png" width="178" height="53" alt="" class="img-responsive"></a><a href="#" class="thumbnail-opacity"><img src="assets/images/logo-15.png" width="190" height="17" alt="" class="img-responsive"></a></div>
              </div>
            </div>
          </section>
          <section class="section-80 section-md-120">
            <div class="shell shell-wide">
              <h5 class="view-animate fadeInUpBigger delay-04 text-info-dr">Why People Choose Us</h5>
              <h2 class="view-animate fadeInUpBigger delay-04 offset-top-20 text-ubold">Our Advantages</h2>
              <hr class="view-animate fadeInUpBigger delay-06 divider divider-primary divider-80">
              <div class="range offset-md-top-90 offset-top-50">
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-airplane"></span>
                  <h5 class="text-bold offset-top-30">The Most Reliable<br class="veil reveal-md-block">Airlines</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">We cooperate only with the most reliable airlines who can boast the perfect reputation.</p>
                </div>
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-account-multiple"></span>
                  <h5 class="text-bold offset-top-30">More Than 7M Visitors<br class="veil reveal-md-block">Each Month</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">More than 7 million people use our services to find and book airline tickets.</p>
                </div>
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle fa-search"></span>
                  <h5 class="text-bold offset-top-30">User-Friendly<br class="veil reveal-md-block">Search System</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">Convenient and fast search for airline tickets, hotels and cars.</p>
                </div>
                <div class="cell-md-3 icon-box view-animate fadeInUpSmall delay-08"><span style="font-size: 52px;" class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-calendar-multiple-check"></span>
                  <h5 class="text-bold offset-top-30">Fast and Reliable<br class="veil reveal-md-block">Ticket Booking</h5>
                  <hr class="divider divider-info divider-50">
                  <p class="inset-xl-left-40 inset-xl-right-40">We provide reliable ticket booking system, which is also perfect for first-time travellers.</p>
                </div>
              </div>
            </div>
          </section>
          <section class="bg-image-05 context-dark section-70 section-lg-120">
            <div class="shell parallax-scene-wrapper">
              <div class="offset-top-0 range range-xs-center">
                <div data-wow-delay="0.1s" class="cell-lg-6 cell-md-8 wow fadeInUp">
                  <h1 class="text-spacing-60 text-uppercase text-ubold p">24/7 Support</h1>
                  <p class="offset-top-20 offset-md-top-30 big">Our Support Service is available 24 hours a day, 7 days a week to help you buy your tickets.</p><a href="contacts.html" class="offset-top-30 btn btn-primary">get in touch</a>
                </div>
              </div>
            </div>
          </section>
          <section class="section-80 section-md-120 bg-gray-lighter">
            <div class="shell shell-wide">
              <h5 data-wow-delay="0.1s" class="text-info-dr wow fadeInUp">Recent Blog Posts</h5>
              <h2 data-wow-delay="0.2s" class="offset-top-20 text-ubold wow fadeInUp">Tips & Tricks</h2>
              <hr data-wow-delay="0.3s" class="divider divider-primary divider-80 wow fadeInUp">
              <div class="range offset-md-top-90 offset-top-50">
                <div data-wow-delay="0.2s" class="cell-lg-6 wow fadeInLeft">
                  <!-- Owl Carousel-->
                  <div data-nav="true" data-items="1" data-mouse-drag="false" class="owl-carousel-fullheight owl-nav-light owl-nav-position-variant-1 owl-nav-variant-1 owl-carousel">
                    <div style="background: url(&quot;assets/images/post-32.jpg&quot;) right; background-size: cover;" class="context-dark post-blog post-blog-type-3">
                      <div class="post-blog-caption">
                        <div class="range range-xs-middle">
                          <div class="cell-sm-4 text-sm-left"><a href="blog-classic.html" class="label label-primary">Photos</a></div>
                          <div class="cell-sm-8 text-sm-right offset-top-10 offset-sm-top-0">
                            <p class="text-italic">September 7, 2016</p>
                          </div>
                        </div>
                        <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">Visiting Paris on a Budget</a></h4>
                        <p>Paris is one of top-rated European cities – people  usually try to spend there as much time as possible, and you also may be lucky enough to spend an autumn house-sitting there. But even if you have somewhere to...</p><a href="blog-single-post.html" class="post-blog-link">Read more</a>
                      </div>
                    </div>
                    <div style="background: url(&quot;assets/images/post-06.jpg&quot;); background-size: cover;" class="context-dark post-blog post-blog-type-3">
                      <div class="post-blog-caption">
                        <div class="range range-xs-middle">
                          <div class="cell-sm-4 text-sm-left"><a href="blog-classic.html" class="label label-primary">Article</a></div>
                          <div class="cell-sm-8 text-sm-right offset-top-10 offset-sm-top-0">
                            <p class="text-italic">September 12, 2016</p>
                          </div>
                        </div>
                        <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">How to Make Travel Videos</a></h4>
                        <p>Introducing our new Travel Video Course, taught by experts Sharon Carpenter and Beverly Bennett! They have over 31,000,000 YouTube views, have worked with big brands, tourism boards, and production...</p><a href="blog-single-post.html" class="post-blog-link">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-lg-6">
                  <div class="range text-left">
                    <div data-wow-delay="0.4s" class="cell-sm-6 wow fadeInRight">
                      <!-- Post type 2-->
                      <div class="post-blog post-blog-type-2"><img src="assets/images/post-33.jpg" width="420" height="300" alt="" class="img-responsive"><a href="blog-modern.html" class="label label-primary">Article</a>
                        <div class="post-blog-caption">
                          <p class="text-italic text-gray">September 9, 2016</p>
                          <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">9 Ways to Become a Successful Travel Blogger</a></h4>
                          <p class="text-base">Travel blogging is a crowded field — and it gets more crowded day by day. And a lot of the advice that people give are actually counterintuitive to...</p><a href="blog-single-post.html" class="post-blog-link">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div data-wow-delay="0.5s" class="cell-sm-6 wow fadeInRight">
                      <!-- Post type 2-->
                      <div class="post-blog post-blog-type-2"><img src="assets/images/post-34.jpg" width="420" height="300" alt="" class="img-responsive"><a href="blog-modern.html" class="label label-primary">Article</a>
                        <div class="post-blog-caption">
                          <p class="text-italic text-gray">September 11, 2016</p>
                          <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">The Ultimate Packing List For Female Travelers</a></h4>
                          <p class="text-base">It can be daunting trying to figure out what to pack for a week, a month, or a year abroad without much — or any — prior experience in the place you want...</p><a href="blog-single-post.html" class="post-blog-link">Read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="offset-top-50 offset-lg-top-90">
                <div class="view-animate fadeInUpSmall delay-08"><a href="blog-classic.html" class="btn btn-primary btn-naira btn-naira-up"><span class="icon mdi mdi-arrow-right-bold"></span><span>View all blog posts</span></a></div>
              </div>
            </div>
          </section>
          <section class="section-top-80 section-md-top-120">
            <div class="shell shell-wide">
              <h5 class="text-info-dr">Hot Deals</h5>
              <h2 class="offset-top-20 text-ubold">Popular Destinations</h2>
              <hr class="divider divider-primary divider-80">
            </div>
          </section>
          <div class="row offset-top-50 offset-lg-top-90 isotope-wrap">
            <!-- Isotope Filters-->
            <div class="col-lg-12">
              <div class="isotope-filters isotope-filters-horizontal">
                <ul class="nav-custom">
                  <li><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="active">All Offers</a></li>
                  <li><a data-isotope-filter="Type 1" data-isotope-group="gallery" href="#">Europe</a></li>
                  <li><a data-isotope-filter="Type 2" data-isotope-group="gallery" href="#">North America</a></li>
                  <li><a data-isotope-filter="Type 3" data-isotope-group="gallery" href="#">Asia</a></li>
                  <li><a data-isotope-filter="Type 4" data-isotope-group="gallery" href="#">Australia</a></li>
                </ul>
              </div>
            </div>
            <!-- Isotope Content-->
            <div class="col-lg-12 offset-top-60">
              <div data-isotope-layout="masonry" data-isotope-group="gallery" class="row row-no-gutter isotope isotope-no-padding">
                <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-35.jpg" alt="" class="img-responsive center-block thumbnail-image">
                  <div class="caption">
                    <h3 class="text-ubold">Barcelona</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
                  <div data-filter="Type 2" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-36.jpg" alt="" class="img-responsive center-block thumbnail-image">
                    <div class="caption">
                      <h3 class="text-ubold">London</h3>
                      <p>The cultural, commercial, and financial center of Northern California.</p>
                      <div class="thumbnail-link"></div>
                    </div></a></div>
                    <div data-filter="Type 3" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-37.jpg" alt="" class="img-responsive center-block thumbnail-image">
                      <div class="caption">
                        <h3 class="text-ubold">New York</h3>
                        <p>The cultural, commercial, and financial center of Northern California.</p>
                        <div class="thumbnail-link"></div>
                      </div></a></div>
                      <div data-filter="Type 4" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-38.jpg" alt="" class="img-responsive center-block thumbnail-image">
                        <div class="caption">
                          <h3 class="text-ubold">Rome</h3>
                          <p>The cultural, commercial, and financial center of Northern California.</p>
                          <div class="thumbnail-link"></div>
                        </div></a></div>
                        <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-39.jpg" alt="" class="img-responsive center-block thumbnail-image">
                          <div class="caption">
                            <h3 class="text-ubold">Paris</h3>
                            <p>The cultural, commercial, and financial center of Northern California.</p>
                            <div class="thumbnail-link"></div>
                          </div></a></div>
                          <div data-filter="Type 3" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-40.jpg" alt="" class="img-responsive center-block thumbnail-image">
                            <div class="caption">
                              <h3 class="text-ubold">Blue Mountains</h3>
                              <p>The cultural, commercial, and financial center of Northern California.</p>
                              <div class="thumbnail-link"></div>
                            </div></a></div>
                            <div data-filter="Type 4" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-42.jpg" alt="" class="img-responsive center-block thumbnail-image">
                              <div class="caption">
                                <h3 class="text-ubold">Berlin</h3>
                                <p>The cultural, commercial, and financial center of Northern California.</p>
                                <div class="thumbnail-link"></div>
                              </div></a></div>
                              <div data-filter="Type 2" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-43.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                <div class="caption">
                                  <h3 class="text-ubold">Phuket</h3>
                                  <p>The cultural, commercial, and financial center of Northern California.</p>
                                  <div class="thumbnail-link"></div>
                                </div></a></div>
                                <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-41.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                  <div class="caption">
                                    <h3 class="text-ubold">Venice</h3>
                                    <p>The cultural, commercial, and financial center of Northern California.</p>
                                    <div class="thumbnail-link"></div>
                                  </div></a></div>
                                  <div data-filter="Type 4" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-44.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                    <div class="caption">
                                      <h3 class="text-ubold">San Francisco</h3>
                                      <p>The cultural, commercial, and financial center of Northern California.</p>
                                      <div class="thumbnail-link"></div>
                                    </div></a></div>
                                    <div data-filter="Type 1" class="col-xs-12 col-sm-6 col-md-4 col-lg-1-5 isotope-item"><a href="tickets.html" class="thumbnail-variant-4"><img src="assets/images/post-45.jpg" alt="" class="img-responsive center-block thumbnail-image">
                                      <div class="caption">
                                        <h3 class="text-ubold">Mediterranean</h3>
                                        <p>The cultural, commercial, and financial center of Northern California.</p>
                                        <div class="thumbnail-link"></div>
                                      </div></a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="section-bottom-80 section-md-bottom-120">
                                  <div class="offset-top-50 offset-lg-top-90"><a href="tickets.html" class="btn btn-primary btn-naira btn-naira-up">
                                    <div class="icon fa-search"></div><span>find tickets</span></a></div>
                                  </div>
                                </main>
                                <!-- Page Footer-->
                                <footer class="page-footer">
                                  <div class="shell shell-wide text-sm-left">
                                    <div class="range section-60 section-md-90">
                                      <div class="cell-sm-6 cell-lg-3"><a href="./" class="reveal-inline-block"><img src="assets/images/logo-white.png" width="166" height="55" alt="" class="img-responsive center-block"></a>
                                        <p class="offset-top-24">SkyBooking is a travel search engine which instantly searches all available flight, bus and train prices on an exhaustive number of travel sites such as online travel agencies, major and low-cost airlines and tour-operators. We also compare hotel rooms and car rental deals. You can easily narrow down your search as much (or as little!) as you want. That means that if the trip you'd like is anywhere out there, you'll find it right away.</p>
                                      </div>
                                      <div class="cell-sm-6 cell-lg-3">
                                        <h5 class="text-bold">Latest Blog Posts</h5>
                                        <hr class="divider divider-50 divider-info divider-sm-left">
                                        <div class="offset-top-40">
                                          <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                                            <div class="unit-left"><img src="assets/images/footer-01.jpg" width="100" height="10" alt="" class="img-responsive center-block"></div>
                                            <div class="unit-body"><span class="extra-small">Sep 8, 2016</span>
                                              <p class="offset-top-6 offset-sm-top-10 text-bold"><a href="blog-single-post.html">How These 5 People Found The Path to Their Dream Trip</a></p>
                                            </div>
                                          </div>
                                          <div class="offset-top-30 unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                                            <div class="unit-left"><img src="assets/images/footer-02.jpg" width="100" height="10" alt="" class="img-responsive center-block"></div>
                                            <div class="unit-body"><span class="extra-small">Sep 8, 2016</span>
                                              <p class="offset-top-6 offset-sm-top-10 text-bold"><a href="blog-single-post.html">How These 5 People Found The Path to Their Dream Trip</a></p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="cell-sm-6 cell-lg-3 offset-top-40 offset-lg-top-0">
                                        <div class="inset-xl-left-50">
                                          <h5 class="text-bold">What People Say</h5>
                                          <hr class="divider divider-50 divider-info divider-sm-left">
                                          <!-- Owl Carousel-->
                                          <div data-dots="true" data-items="1" data-margin="30" data-mouse-drag="false" class="offset-top-20 offset-md-top-40 owl-dots-left owl-dots-white owl-carousel">
                                            <blockquote class="quote quote-sm">
                                              <p>
                                                <q>“I must tell you how impressed I am by your customer service. I have contacted you twice now and each time I received a prompt reply plus the additional attention of a manager. I have never received this kind of response from any other airline tickets booking site.”</q>
                                              </p>
                                              <p>
                                                <cite>Phillip Holland</cite>
                                              </p>
                                            </blockquote>
                                            <blockquote class="quote quote-sm">
                                              <p>
                                                <q>“I found your web site very easy to use. The entire process was very quick, and the price of my ticket was very affordable.”</q>
                                              </p>
                                              <p>
                                                <cite>Amber Barnett</cite>
                                              </p>
                                            </blockquote>
                                            <blockquote class="quote quote-sm">
                                              <p>
                                                <q>“Thank you for making it so easy. I really love the way I can view the itinerary and put payment info on the same page!”</q>
                                              </p>
                                              <p>
                                                <cite>Ralph Green</cite>
                                              </p>
                                            </blockquote>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="cell-sm-6 cell-lg-3 offset-top-40 offset-lg-top-0">
                                        <div class="inset-xl-left-50">
                                          <h5 class="text-bold">Contact Us</h5>
                                          <hr class="divider divider-50 divider-info divider-sm-left">
                                          <!-- RD Mailform-->
                                          <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="offset-top-40 rd-mailform text-sm-left">
                                            <div class="form-group form-group-sm">
                                              <label for="footer-name" class="text-gray-light form-label">Your name</label>
                                              <input id="footer-name" type="text" name="name" data-constraints="@Required" class="form-control form-control-dark">
                                            </div>
                                            <div class="form-group form-group-sm">
                                              <label for="footer-email" class="text-gray-light form-label">Your e-mail</label>
                                              <input id="footer-email" type="email" name="email" data-constraints="@Email @Required" class="form-control form-control-dark">
                                            </div>
                                            <div class="form-group form-group-sm">
                                              <label for="footer-message" class="text-gray-light form-label">Message</label>
                                              <textarea id="footer-message" style="height: 90px;" name="message" data-constraints="@Required" class="form-control form-control-dark"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-xs btn-naira btn-naira-up"><span class="icon fa-envelope-o"></span><span>Send</span></button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                  <div class="shell shell-wide page-footer-min small">
                                    <div class="range range-xs-middle">
                                      <div class="cell-sm-6 text-sm-left">
                                        <ul class="list-inline">
                                          <li><a href="#" class="icon fa-facebook"></a></li>
                                          <li><a href="#" class="icon fa-twitter"></a></li>
                                          <li><a href="#" class="icon fa-pinterest-p"></a></li>
                                          <li><a href="#" class="icon fa-vimeo"></a></li>
                                          <li><a href="#" class="icon fa-google-plus"></a></li>
                                          <li><a href="#" class="icon fa-rss"></a></li>
                                        </ul>
                                      </div>
                                      <div class="cell-sm-6 text-sm-right offset-top-20 offset-sm-top-0">
                                        <p>&#169; <span id="copyright-year"></span> All rights reserved. <a href="privacy.html">Privacy Policy</a>
                                          <!-- {%FOOTER_LINK}-->
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </footer>
                              </div>

                              <!-- Java script-->
                              <script src="assets/js/core.min.js"></script>
                              <script src="assets/js/script.js"></script>

                              </html>