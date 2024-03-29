  @extends('layouts/app')
@section('content')
     <div class="body-wrapper">
            <!-- MENU MOBILE-->
            <div class="wrapper-mobile-nav">
                <div class="header-topbar">
                    <div class="topbar-search search-mobile">
                        <form class="search-form">
                            <div class="input-icon">
                                <i class="btn-search fa fa-search"></i>
                                <input type="text" placeholder="Search here..." class="form-control" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-main">
                    <div class="menu-mobile">
                        <ul class="nav-links nav navbar-nav">
                            <li class="dropdown">
                                <a href="index.html" class="main-menu">
                                    <span class="text">Home</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="index.html" class="link-page">Homepage default</a>
                                    </li>
                                    <li>
                                        <a href="homepage-02.html" class="link-page">Homepage 02</a>
                                    </li>
                                    <li>
                                        <a href="homepage-03.html" class="link-page">Homepage 03</a>
                                    </li>
                                    <li>
                                        <a href="homepage-04.html" class="link-page">Homepage 04</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html" class="main-menu">
                                    <span class="text">about</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="tour-result.html" class="main-menu">
                                    <span class="text">Tour</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="tour-result.html" class="link-page">tour result</a>
                                    </li>
                                    <li>
                                        <a href="tour-view.html" class="link-page">tour view</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="hotel-result.html" class="main-menu">
                                    <span class="text">packages</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="hotel-result.html" class="link-page">hotel result</a>
                                    </li>
                                    <li>
                                        <a href="hotel-view.html" class="link-page">hotel view</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="blog.html" class="main-menu">
                                    <span class="text">blog</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="blog.html" class="link-page">blog list</a>
                                    </li>
                                    <li>
                                        <a href="blog-detail.html" class="link-page">blog detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="car-rent-result.html" class="main-menu">
                                    <span class="text">page</span>
                                </a>
                                <span class="icons-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul class="dropdown-menu dropdown-menu-1">
                                    <li>
                                        <a href="car-rent-result.html" class="link-page">car rent result</a>
                                    </li>
                                    <li>
                                        <a href="cruises-result.html" class="link-page">cruises result</a>
                                    </li>
                                    <li>
                                        <a href="404.html" class="link-page">page 404</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html" class="main-menu">
                                    <span class="text">contact</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="list-unstyled list-inline login-widget">
                            <li>
                                <a href="#" class="item">login</a>
                            </li>
                            <li>
                                <a href="#" class="item">register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">
                <!-- HEADER-->
                <header>
                    <div class="bg-white header-03">
                        <div class="header-topbar">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-4 topbar-left">
                                        <div class="btn-menu">
                                            <i class="icons fa fa-align-left"></i>
                                            <p class="text">menu</p>
                                        </div>
                                        <div class="hamburger-menu">
                                            <div class="hamburger-menu-wrapper">
                                                <div class="icons"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 topbar-center">
                                        <a href="index.html" class="header-logo logo-black">
                                            <img src="{{asset('front_assets/images/logo/logo-black-color-1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-xs-4 topbar-right">
                                        <ul class="list-unstyled list-inline login-widget">
                                            <li>
                                                <a href="sign-up.html" class="item">login</a>
                                            </li>
                                            <li>
                                                <a href="register.html" class="item">register</a>
                                            </li>
                                            <li class="search">
                                                <a href="register.html" class="item">
                                                    <i class="icons fa fa-search"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-main">
                            <div class="container">
                                <div class="header-main-wrapper">
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="index.html" class="header-logo logo-black">
                                                <img src="{{asset('front_assets/images/logo/logo-black-color-1.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <nav class="navigation">
                                        <ul class="nav-links nav navbar-nav">
                                            <li class="dropdown active">
                                                <a href="javascript:void(0)" class="main-menu">
                                                    <span class="text">Home</span>
                                                    <span class="icons-dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li>
                                                        <a href="index.html" class="link-page">Homepage default</a>
                                                    </li>
                                                    <li>
                                                        <a href="homepage-02.html" class="link-page">Homepage 02</a>
                                                    </li>
                                                    <li>
                                                        <a href="homepage-03.html" class="link-page">Homepage 03</a>
                                                    </li>
                                                    <li>
                                                        <a href="homepage-04.html" class="link-page">Homepage 04</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about-us.html" class="main-menu">
                                                    <span class="text">about</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="main-menu">
                                                    <span class="text">Tour</span>
                                                    <span class="icons-dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li>
                                                        <a href="tour-result.html" class="link-page">tour result</a>
                                                    </li>
                                                    <li>
                                                        <a href="tour-view.html" class="link-page">tour view</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="main-menu">
                                                    <span class="text">packages</span>
                                                    <span class="icons-dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li>
                                                        <a href="hotel-result.html" class="link-page">hotel result</a>
                                                    </li>
                                                    <li>
                                                        <a href="hotel-view.html" class="link-page">hotel view</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="main-menu">
                                                    <span class="text">blog</span>
                                                    <span class="icons-dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li>
                                                        <a href="blog.html" class="link-page">blog list</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-detail.html" class="link-page">blog detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="main-menu">
                                                    <span class="text">page</span>
                                                    <span class="icons-dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-1">
                                                    <li>
                                                        <a href="car-rent-result.html" class="link-page">car rent result</a>
                                                    </li>
                                                    <li>
                                                        <a href="car-detail.html" class="link-page">car detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="cruises-result.html" class="link-page">cruises result</a>
                                                    </li>
                                                    <li>
                                                        <a href="cruises-detail.html" class="link-page">cruises detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="team-detail.html" class="link-page">team detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html" class="link-page">page 404</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.html" class="link-page">faq</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html" class="main-menu">
                                                    <span class="text">contact</span>
                                                </a>
                                            </li>
                                            <li class="button-search">
                                                <p class="main-menu">
                                                    <i class="fa fa-search"></i>
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="nav-search hide">
                                            <form>
                                                <input type="text" placeholder="Search" class="searchbox" />
                                                <button type="submit" class="searchbutton fa fa-search"></button>
                                            </form>
                                        </div>
                                    </nav>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- WRAPPER-->
                <div id="wrapper-content">
                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        <section class="page-banner-2 homepage-03">
                            <div class="container">
                                <h1 class="banner">HOW DO YOU MOVE?</h1>
                                <h4 class="sub-banner">Explore&nbsp;/ Embrace&nbsp;/ Learn&nbsp;/ Live</h4>
                                <div class="tab-search tab-search-long tab-search-transparent">
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li role="presentation" class="tab-btn-wrapper active">
                                            <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab" class="tab-btn">
                                                <i class="flaticon-three"></i>
                                                <span>HOTEL</span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="tab-btn-wrapper">
                                            <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab" class="tab-btn">
                                                <i class="flaticon-people"></i>
                                                <span>TOURS</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" id="hotel" class="tab-pane fade in active">
                                            <div class="find-widget find-hotel-widget widget">
                                                <h4 class="title-widgets">FIND HOTEL</h4>
                                                <form  class="content-widget" action="/search_for_hotels" method="POST">
                                                    @csrf
                                                    <div class="text-input small-margin-top">
                                                        <div class="place text-box-wrapper">
                                                            <label class="tb-label">Where do you want to go?</label>
                                                            <div class="input-group">
                                                                <input  type="text" placeholder="Write the place" class="tb-input city_place" >
                                                            </div>
                                                            <div id="display_cites"  class="" style="background-color: #c5c6c7">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="hidden_input" name="city_id">
                                                        <div class="input-daterange">
                                                            <div class="text-box-wrapper half">
                                                                <label class="tb-label">Check in</label>
                                                                <div class="input-group">
                                                                    <input type="text" placeholder="MM/DD/YY" class="tb-input" id="fromDate" name="checkin_date">
                                                                    <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                                </div>
                                                            </div>
                                                            <div class="text-box-wrapper half">
                                                                <label class="tb-label">Check out</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="checkout_date" placeholder="MM/DD/YY" class="tb-input" id="toDate">
                                                                    <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="roomcount room-count text-box-wrapper">
                                                            <label class="tb-label">Rooms</label>
                                                            <div class="select-wrapper">
                                                                <!--i.fa.fa-chevron-down-->
                                                                <select class="form-control custom-select selectbox" id="selectRoom" name="rooms">
                                                                    <option value="1" selected="selected">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option id="moreOption" value="more">More Options</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide">
                                                            <span class="text">SEARCH NOW</span>
                                                            <span class="icons fa fa-long-arrow-right"></span>
                                                        </button>  
                                                    </div>
                                                    <div class="moreOptions">
                                                        <div class="rooms">
                                                            <div class="addedRoom hidden">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="text-box-wrapper">
                                                                                <label class="tb-label">room <span id="roomNum">1</span></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="text-box-wrapper">
                                                                                <label class="tb-label">adults(+12 years)</label>
                                                                                <div class="select-wrapper">
                                                                                    <select class="form-control custom-select" name="adults_value[]">
                                                                                        <option value ="1">1</option>
                                                                                        <option value ="2">2</option>
                                                                                        <option value ="3">3</option>
                                                                                        <option value ="4">4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="text-box-wrapper">
                                                                                <label class="tb-label">children (1 - 11 years)</label>
                                                                                <div class="select-wrapper">
                                                                                    <select class="form-control custom-select childNum" name="children_value[]">
                                                                                       <option value="0">0</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                       </select>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="text-box-wrapper">
                                                                                <label class="tb-label">children age</label>
                                                                                <div class="childrenAge row"></div>
                                                                            </div>
                                                                            <div class="text-right">
                                                                                <button id="removeRoom"><i class="fa fa-minus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="addedRoom">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="text-box-wrapper">
                                                                            <label class="tb-label">room <span id="roomNum">1</span></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="text-box-wrapper">
                                                                            <label class="tb-label">adults(+12 years)</label>
                                                                            <div class="select-wrapper">
                                                                                <select class="form-control custom-select selectbox" name="adults_value[]">
                                                                                    <option value ="1">1</option>
                                                                                        <option value ="2">2</option>
                                                                                        <option value ="3">3</option>
                                                                                        <option value ="4">4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="text-box-wrapper">
                                                                            <label class="tb-label">children (1 - 11 years)</label>
                                                                            <div class="select-wrapper">
                                                                                <select class="form-control custom-select selectbox childNum" name ="children_value[]">
                                                                                    <option value="0">0</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="text-box-wrapper">
                                                                            <label class="tb-label">children age</label>
                                                                            <div class="childrenAge"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 text-right">
                                                                <h5 class="addRoom">add new room (4 max)</h5>
                                                                <button id="addRoom"><i class="fa fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </form> 
                                            </div>
                                        </div>
                                        <div role="tabpanel" id="tours" class="tab-pane fade">
                                            <div class="find-widget find-tours-widget widget">
                                                <h4 class="title-widgets">FIND TOURS</h4>
                                                <form class="content-widget">
                                                    <div class="text-input small-margin-top">
                                                        <div class="place text-box-wrapper">
                                                            <label class="tb-label">Where do you want to go?</label>
                                                            <div class="input-group">
                                                                <input type="text" placeholder="Write the place" class="tb-input">
                                                            </div>
                                                        </div>
                                                        <div class="date text-box-wrapper">
                                                            <label class="tb-label">When do you want to go?</label>
                                                            <div class="input-group">
                                                                <input type="text" placeholder="MM/DD/YY" class="tb-input">
                                                                <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                            </div>
                                                        </div>
                                                        <div class="count adult-count text-box-wrapper">
                                                            <label class="tb-label">Adult</label>
                                                            <div class="select-wrapper">
                                                                <!--i.fa.fa-chevron-down-->
                                                                <select class="form-control custom-select selectbox">
                                                                    <option selected="selected">1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="count child-count text-box-wrapper">
                                                            <label class="tb-label">Child</label>
                                                            <div class="select-wrapper">
                                                                <!--i.fa.fa-chevron-down-->
                                                                <select class="form-control custom-select selectbox">
                                                                    <option selected="selected">0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide">
                                                            <span class="text">SEARCH NOW</span>
                                                            <span class="icons fa fa-long-arrow-right"></span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-us layout-2 padding-top padding-bottom about-us-2">
                            <div class="container">
                                <div class="row">
                                    <div class="wrapper-contact-style">
                                        <div class="col-md-7">
                                            <div class="group-title">
                                                <div class="sub-title">
                                                    <p class="text">be born agian</p>
                                                    <i class="icons flaticon-people"></i>
                                                </div>
                                                <h2 class="main-title">we are exploore</h2>
                                            </div>
                                            <div class="about-us-wrapper">
                                                <p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat uisas
                                                    aute irure dolor ullamco laboris nisi in reprehenderit.</p>
                                                <div class="group-list">
                                                    <ul class="list-unstyled about-us-list">
                                                        <li>
                                                            <p class="text">First Class Flights</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">5 Star Accommodations</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Inclusive Packages</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Latest Model Vehicles</p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled about-us-list">
                                                        <li>
                                                            <p class="text">Handpicked Hotels</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Accesibility managment</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">10 Languages available</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">+120 Premium city tours</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-button">
                                                    <a href="tour-result.html" class="btn btn-maincolor">purchase now</a>
                                                    <a href="about-us.html" class="btn">read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.5s" class="about-us-image wow fadeInRight">
                                            <img src="{{asset('front_assets/images/homepage/about-us-2.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="tours padding-top padding-bottom">
                            <div class="container">
                                <div class="tours-wrapper">
                                    <div class="group-title">
                                        <div class="sub-title">
                                            <p class="text">PACK AND GO</p>
                                            <i class="icons flaticon-people"></i>
                                        </div>
                                        <h2 class="main-title">awesome tours</h2>
                                    </div>
                                    <div class="tours-content margin-top70">
                                        <div class="tours-list">
                                            <div class="tours-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{asset('front_assets/images/tours/tour-1.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">Newyork city</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                    <div class="label-sale">
                                                        <p class="text">sale</p>
                                                        <p class="number">35%</p>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <ul class="list-info list-inline list-unstyle">
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-eye"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-heart"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-comment"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="content">
                                                        <div class="title">
                                                            <div class="price">
                                                                <sup>$</sup>
                                                                <span class="number">350</span>
                                                            </div>
                                                            <p class="for-price">3 days 2 nights</p>
                                                        </div>
                                                        <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>
                                                        <div class="group-btn-tours">
                                                            <a href="tour-view.html" class="left-btn">book now</a>
                                                            <a href="blog.html" class="right-btn">add to list</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tours-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{asset('front_assets/images/tours/tour-2.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">paris city</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <ul class="list-info list-inline list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-eye"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-heart"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-comment"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="content">
                                                        <div class="title">
                                                            <div class="price">
                                                                <sup>$</sup>
                                                                <span class="number">250</span>
                                                            </div>
                                                            <p class="for-price">3 days 2 nights</p>
                                                        </div>
                                                        <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>
                                                        <div class="group-btn-tours">
                                                            <a href="tour-view.html" class="left-btn">book now</a>
                                                            <a href="blog.html" class="right-btn">add to list</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tours-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{asset('front_assets/images/tours/tour-3.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">tokyo city</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <ul class="list-info list-inline list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-eye"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-heart"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">
                                                                <i class="icons fa fa-comment"></i>
                                                                <span class="text number">234</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="content">
                                                        <div class="title">
                                                            <div class="price">
                                                                <sup>$</sup>
                                                                <span class="number">375</span>
                                                            </div>
                                                            <p class="for-price">3 days 2 nights</p>
                                                        </div>
                                                        <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>
                                                        <div class="group-btn-tours">
                                                            <a href="tour-view.html" class="left-btn">book now</a>
                                                            <a href="blog.html" class="right-btn">add to list</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="about-us.html" class="btn btn-transparent margin-top70">more tours</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="videos layout-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="video-wrapper padding-top padding-bottom">
                                            <h5 class="sub-title">it’s a
                                                <strong>big world</strong> out there</h5>
                                            <h2 class="title">go explore</h2>
                                            <div class="text">There are many variations of passages of. Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</div>
                                            <a href="tour-result.html"
                                                class="btn btn-maincolor">read more</a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="video-thumbnail">
                                            <div class="video-bg">
                                                <img src="{{asset('front_assets/images/homepage/video-bg.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="video-button-play">
                                                <i class="icons fa fa-play"></i>
                                            </div>
                                            <div class="video-button-close"></div>
                                            <iframe src="https://www.youtube.com/embed/moOosWuoDyA?rel=0" allowfullscreen="allowfullscreen" class="video-embed"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="hotels padding-top padding-bottom">
                            <div class="container">
                                <div class="hotels-wrapper">
                                    <div class="group-title">
                                        <div class="sub-title">
                                            <p class="text">GUARANTEED QUALITY</p>
                                            <i class="icons flaticon-people"></i>
                                        </div>
                                        <h2 class="main-title">Recommended hotels</h2>
                                    </div>
                                    <div class="hotels-content margin-top70">
                                        <div class="row hotels-list">
                                            <div class="col-sm-6">
                                                <div class="hotels-layout">
                                                    <div class="image-wrapper">
                                                        <a href="hotel-view.html" class="link">
                                                            <img src="{{asset('front_assets/images/hotels/hotel-1.jpg')}}" alt="" class="img-responsive">
                                                        </a>
                                                        <div class="title-wrapper">
                                                            <a href="hotel-view.html" class="title">sarina hotel</a>
                                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                                <span class="width-80">
                                                                    <strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                        <div class="label-sale">
                                                            <p class="text">sale</p>
                                                            <p class="number">35%</p>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="content">
                                                            <div class="title">
                                                                <div class="price">
                                                                    <sup>$</sup>
                                                                    <span class="number">30</span>
                                                                </div>
                                                                <p class="for-price">for person per night</p>
                                                            </div>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                                                            <div class="group-btn-tours">
                                                                <a href="hotel-view.html" class="left-btn">book now</a>
                                                            </div>
                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-eye"></i>
                                                                    <span class="number">234</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-heart"></i>
                                                                    <span class="number">156</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-comment"></i>
                                                                    <span class="number">19</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link">
                                                                    <i class="icons fa fa-share-alt"></i>
                                                                </a>
                                                                <ul class="share-social-list">
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-google-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-map-marker"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="hotels-layout">
                                                    <div class="image-wrapper">
                                                        <a href="hotel-view.html" class="link">
                                                            <img src="{{asset('front_assets/images/hotels/hotel-2.jpg')}}" alt="" class="img-responsive">
                                                        </a>
                                                        <div class="title-wrapper">
                                                            <a href="hotel-view.html" class="title">sarina hotel</a>
                                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                                <span class="width-100">
                                                                    <strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="content">
                                                            <div class="title">
                                                                <div class="price">
                                                                    <sup>$</sup>
                                                                    <span class="number">30</span>
                                                                </div>
                                                                <p class="for-price">for person per night</p>
                                                            </div>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                                                            <div class="group-btn-tours">
                                                                <a href="hotel-view.html" class="left-btn">book now</a>
                                                            </div>
                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-eye"></i>
                                                                    <span class="number">234</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-heart"></i>
                                                                    <span class="number">156</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-comment"></i>
                                                                    <span class="number">19</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link">
                                                                    <i class="icons fa fa-share-alt"></i>
                                                                </a>
                                                                <ul class="share-social-list">
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-google-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-map-marker"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="hotels-layout">
                                                    <div class="image-wrapper">
                                                        <a href="hotel-view.html" class="link">
                                                            <img src="{{asset('front_assets/images/hotels/hotel-3.jpg')}}" alt="" class="img-responsive">
                                                        </a>
                                                        <div class="title-wrapper">
                                                            <a href="hotel-view.html" class="title">sarina hotel</a>
                                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                                <span class="width-90">
                                                                    <strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="content">
                                                            <div class="title">
                                                                <div class="price">
                                                                    <sup>$</sup>
                                                                    <span class="number">30</span>
                                                                </div>
                                                                <p class="for-price">for person per night</p>
                                                            </div>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                                                            <div class="group-btn-tours">
                                                                <a href="hotel-view.html" class="left-btn">book now</a>
                                                            </div>
                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-eye"></i>
                                                                    <span class="number">234</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-heart"></i>
                                                                    <span class="number">156</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-comment"></i>
                                                                    <span class="number">19</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link">
                                                                    <i class="icons fa fa-share-alt"></i>
                                                                </a>
                                                                <ul class="share-social-list">
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-google-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-map-marker"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="hotels-layout">
                                                    <div class="image-wrapper">
                                                        <a href="hotel-view.html" class="link">
                                                            <img src="{{asset('front_assets/images/hotels/hotel-4.jpg')}}" alt="" class="img-responsive">
                                                        </a>
                                                        <div class="title-wrapper">
                                                            <a href="hotel-view.html" class="title">sarina hotel</a>
                                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                                <span class="width-100">
                                                                    <strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="content">
                                                            <div class="title">
                                                                <div class="price">
                                                                    <sup>$</sup>
                                                                    <span class="number">30</span>
                                                                </div>
                                                                <p class="for-price">for person per night</p>
                                                            </div>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                                                            <div class="group-btn-tours">
                                                                <a href="hotel-view.html" class="left-btn">book now</a>
                                                            </div>
                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-eye"></i>
                                                                    <span class="number">234</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-heart"></i>
                                                                    <span class="number">156</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons hidden-icon fa fa-comment"></i>
                                                                    <span class="number">19</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link">
                                                                    <i class="icons fa fa-share-alt"></i>
                                                                </a>
                                                                <ul class="share-social-list">
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-google-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-map-marker"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="about-us.html" class="btn btn-transparent margin-top70">more hotel</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="travelers">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="traveler-wrapper padding-top padding-bottom">
                                            <div class="group-title white">
                                                <div class="sub-title">
                                                    <p class="text">RELAX AND ENJOY</p>
                                                    <i class="icons flaticon-people"></i>
                                                </div>
                                                <h2 class="main-title">happy traveler</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="traveler-list">
                                            <div class="traveler">
                                                <div class="cover-image">
                                                    <img src="{{asset('front_assets/images/homepage/cover-image-1.jpg')}}" alt="">
                                                </div>
                                                <div class="wrapper-content">
                                                    <div class="avatar">
                                                        <img src="{{asset('front_assets/images/homepage/avatar-1.jpg')}}" alt="" class="img-responsive">
                                                    </div>
                                                    <p class="name">Sandara park</p>
                                                    <p class="address">roma, italy</p>
                                                    <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p>
                                                </div>
                                            </div>
                                            <div class="traveler">
                                                <div class="cover-image">
                                                    <img src="{{asset('front_assets/images/homepage/cover-image-2.jpg')}}" alt="">
                                                </div>
                                                <div class="wrapper-content">
                                                    <div class="avatar">
                                                        <img src="{{asset('front_assets/images/homepage/avatar-2.jpg')}}" alt="" class="img-responsive">
                                                    </div>
                                                    <p class="name">Kown Jiyong</p>
                                                    <p class="address">london, England</p>
                                                    <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p>
                                                </div>
                                            </div>
                                            <div class="traveler">
                                                <div class="cover-image">
                                                    <img src="{{asset('front_assets/images/homepage/cover-image-3.jpg')}}" alt="">
                                                </div>
                                                <div class="wrapper-content">
                                                    <div class="avatar">
                                                        <img src="{{asset('front_assets/images/homepage/avatar-3.jpg')}}" alt="" class="img-responsive">
                                                    </div>
                                                    <p class="name">taylor rose</p>
                                                    <p class="address">pari, France</p>
                                                    <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p>
                                                </div>
                                            </div>
                                            <div class="traveler">
                                                <div class="cover-image">
                                                    <img src="{{asset('front_assets/images/homepage/cover-image-4.jpg')}}" alt="">
                                                </div>
                                                <div class="wrapper-content">
                                                    <div class="avatar">
                                                        <img src="{{asset('front_assets/images/homepage/avatar-4.jpg')}}" alt="" class="img-responsive">
                                                    </div>
                                                    <p class="name">john smith</p>
                                                    <p class="address">new york, USA</p>
                                                    <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="news padding-top padding-bottom">
                            <div class="container">
                                <div class="news-wrapper">
                                    <div class="group-title">
                                        <div class="sub-title">
                                            <p class="text">EXPLORATIONAL STORIES</p>
                                            <i class="icons flaticon-people"></i>
                                        </div>
                                        <h2 class="main-title">news and updates</h2>
                                    </div>
                                    <div class="news-content margin-top70">
                                        <div class="news-list">
                                            <div class="new-layout">
                                                <div class="image-wrapper">
                                                    <a href="#" class="link">
                                                        <img src="{{asset('front_assets/images/homepage/new-1.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ...</div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <a href="#" class="title">DON’T GIVE IN TO FEAR OR HOW TO TRAVEL TO A PLACE YOU KNOW.</a>
                                                    <ul class="info list-inline list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">September 17, 2015 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">admin</a>
                                                        </li>
                                                    </ul>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                    <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. Ut enim ad minim veniam, quis trud
                                                        tionco laboris nisi ut aliquip.</p>
                                                    <a href="blog.html" class="btn btn-maincolor">read know</a>
                                                    <div class="tags">
                                                        <div class="title-tag">tags:</div>
                                                        <ul class="list-inline list-unstyled list-tags">
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">explore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">adventure</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">traveler</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="new-layout">
                                                <div class="image-wrapper">
                                                    <a href="#" class="link">
                                                        <img src="{{asset('front_assets/images/homepage/new-2.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ...</div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <a href="#" class="title">365 Days: 20 things I Learned from Traveling Around the World</a>
                                                    <ul class="info list-inline list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">november 29, 2015 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">admin</a>
                                                        </li>
                                                    </ul>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                    <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                                                    <a href="blog.html" class="btn btn-maincolor">read know</a>
                                                    <div class="tags">
                                                        <div class="title-tag">tags:</div>
                                                        <ul class="list-inline list-unstyled list-tags">
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">explore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">adventure</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">traveler</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="new-layout">
                                                <div class="image-wrapper">
                                                    <a href="#" class="link">
                                                        <img src="{{asset('front_assets/images/homepage/new-3.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ...</div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <a href="#" class="title">My 30 Best Travel Tips After 4 Years Traveling The World</a>
                                                    <ul class="info list-inline list-unstyled">
                                                        <li>
                                                            <a href="#" class="link">april 1, 2016</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link">admin</a>
                                                        </li>
                                                    </ul>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                    <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. Ut enim ad minim veniam, quis trud
                                                        tionco laboris nisi ut aliquip.</p>
                                                    <a href="blog.html" class="btn btn-maincolor">read know</a>
                                                    <div class="tags">
                                                        <div class="title-tag">tags:</div>
                                                        <ul class="list-inline list-unstyled list-tags">
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">explore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">adventure</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-detail.html" class="tag">traveler</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="banner-sale-3 new-style">
                            <div class="clouds_one"></div>
                            <div class="clouds_two"></div>
                            <div class="container">
                                <div class="text-salebox">
                                    <div class="text-left">
                                        <div class="sale-box">
                                            <div class="sale-box-top">
                                                <h2 class="number">50</h2>
                                                <span class="sup-1">%</span>
                                                <span class="sup-2">off</span>
                                            </div>
                                            <h2 class="text-sale">sale</h2>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="title">Epic Journeys From The Explooer</h5>
                                        <p class="text">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                            sint occaecat cupidatat non proident, sunt in culpa velit esse cillum dolore eu fugiat. Ut enim ad minim veniam.</p>
                                        <div class="group-button">
                                            <a href="tour-view.html" class="btn btn-maincolor">book now</a>
                                            <a href="tour-view.html" class="btn btn-transparent">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="a-fact padding-top padding-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="group-title">
                                            <div class="sub-title">
                                                <p class="text">PROUD NUMBERS</p>
                                                <i class="icons flaticon-people"></i>
                                            </div>
                                            <h2 class="main-title">a fact of explooer</h2>
                                        </div>
                                        <div class="a-fact-wrapper">
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, by injected humour. </p>
                                            <div class="a-fact-list">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <p class="text">1456 flight in the world.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text">2385 happy customer enjoy jouneys with Explooer.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text">356 best destinational we explore.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text">2345 package tours every year.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text">top 10 best tourism services.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-maincolor">read more</a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="a-fact-image-wrapper">
                                            <div class="a-fact-image">
                                                <a href="#" class="icons icons-1">
                                                    <i class="fa fa-plane"></i>
                                                </a>
                                                <img src="{{asset('front_assets/images/homepage/area-1.png')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="a-fact-image">
                                                <a href="#" class="icons icons-2">
                                                    <i class="fa fa-map-marker"></i>
                                                </a>
                                                <img src="{{asset('front_assets/images/homepage/area-2.png')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="a-fact-image">
                                                <a href="#" class="icons icons-3">
                                                    <i class="fa fa-users"></i>
                                                </a>
                                                <img src="{{asset('front_assets/images/homepage/area-3.png')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="a-fact-image">
                                                <a href="#" class="icons icons-4">
                                                    <i class="fa fa-suitcase"></i>
                                                </a>
                                                <img src="{{asset('front_assets/images/homepage/area-4.png')}}" alt="" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="contact style-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div data-wow-delay="0.4s" class="contact-wrapper padding-top padding-bottom wow zoomIn">
                                            <div class="contact-box">
                                                <h5 class="title">contact us</h5>
                                                <p class="text">Just pack and go! Let leave your travel plan to travel experts!</p>
                                                <form class="contact-form">
                                                    <input type="text" placeholder="Your Name" class="form-control form-input">
                                                    <!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                                    <input type="email" placeholder="Your Email" class="form-control form-input">
                                                    <!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                                    <textarea placeholder="Your Message" class="form-control form-input"></textarea>
                                                    <div class="contact-submit">
                                                        <button type="submit" data-hover="SEND NOW" class="btn btn-slide">
                                                            <span class="text">send message</span>
                                                            <span class="icons fa fa-long-arrow-right"></span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- BUTTON BACK TO TOP-->
                    <div id="back-top">
                        <a href="#top" class="link">
                            <i class="fa fa-angle-double-up"></i>
                        </a>
                    </div>
                </div>
                <!-- FOOTER-->
                <footer>
                    <div class="bg-blue-gradient">
                        <div class="footer-main bg-transparent padding-top padding-bottom">
                            <div class="container">
                                <div class="footer-main-wrapper">
                                    <a href="index.html" class="logo-footer logo-black">
                                        <img src="{{asset('front_assets/images/logo/logo-black-color-1.png')}}" alt="" class="img-responsive" />
                                    </a>
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="col-md-3 col-xs-5">
                                                <div class="contact-us-widget widget">
                                                    <div class="title-widget">contact us</div>
                                                    <div class="content-widget">
                                                        <div class="info-list">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <i class="icons fa fa-map-marker"></i>
                                                                    <a href="#" class="link">132, My Street, Kingston, New York 12401</a>
                                                                </li>
                                                                <li>
                                                                    <i class="icons fa fa-phone"></i>
                                                                    <a href="#" class="link">270 - 188 - 6026</a>
                                                                </li>
                                                                <li>
                                                                    <i class="icons fa fa-envelope-o"></i>
                                                                    <a href="#" class="link">domain@expooler.com</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="form-email">
                                                            <p class="text">Sign up for our mailing list to get latest updates and offers.</p>
                                                            <form action="index.html">
                                                                <div class="input-group">
                                                                    <input type="text" placeholder="Email address" class="form-control form-email-widget" />
                                                                    <span class="input-group-btn">
                                                                        <button type="submit" class="btn-email">&#10004;</button>
                                                                    </span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-3">
                                                <div class="booking-widget widget text-center">
                                                    <div class="title-widget">book now</div>
                                                    <div class="content-widget">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#" class="link">Flights</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tours</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Packages</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Transfer</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Car Rent</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Cruises</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-4">
                                                <div class="explore-widget widget">
                                                    <div class="title-widget">explore</div>
                                                    <div class="content-widget">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#" class="link">Tour Singapore City</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Manila City</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour New York City</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Sanghai City</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Hongkong City</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Tokyo City</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="col-md-2 col-xs-6">
                                                <div class="top-deals-widget widget">
                                                    <div class="title-widget">top deals</div>
                                                    <div class="content-widget">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="#" class="link">Tour Packages Singapore</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Packages Manila</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Packages New York</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Packages Sanghai</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Packages Hongkong</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">Tour Packages Tokyo</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <div class="destination-widget widget">
                                                    <div class="title-widget">Destination</div>
                                                    <div class="content-widget">
                                                        <ul class="list-unstyled list-inline">
                                                            <li>
                                                                <a href="#" class="thumb">
                                                                    <img src="{{asset('front_assets/images/footer/gallery-01.jpg')}}" alt="" class="img-responsive" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="thumb">
                                                                    <img src="{{asset('front_assets/images/footer/gallery-02.jpg')}}" alt="" class="img-responsive" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="thumb">
                                                                    <img src="{{asset('front_assets/images/footer/gallery-03.jpg')}}" alt="" class="img-responsive" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="thumb">
                                                                    <img src="{{asset('front_assets/images/footer/gallery-04.jpg')}}" alt="" class="img-responsive" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="thumb">
                                                                    <img src="{{asset('front_assets/images/footer/gallery-05.jpg')}}" alt="" class="img-responsive" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="thumb">
                                                                    <img src="{{asset('front_assets/images/footer/gallery-06.jpg')}}" alt="" class="img-responsive" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hyperlink bg-transparent">
                            <div class="container">
                                <div class="slide-logo-wrapper">
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-01-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-02-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-03-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-04-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-05-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-06-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-01-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-02-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-03-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-04-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-05-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="logo-item">
                                        <a href="#" class="link">
                                            <img src="{{asset('front_assets/images/footer/logo-06-g.png')}}" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                </div>
                                <div class="social-footer">
                                    <ul class="list-inline list-unstyled">
                                        <li>
                                            <a href="#" class="link facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="link twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="link pinterest">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="link google">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="name-company">&copy; Designed by SWLABS.</div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="theme-setting">
            <div class="theme-loading">
                <div class="theme-loading-content">
                    <div class="dots-loader"></div>
                </div>
            </div>
            <a href="javascript:;" class="btn-theme-setting">
                <i class="fa fa-tint"></i>
            </a>
            <div class="content-theme-setting">
                <h2 class="title">setting color</h2>
                <ul class="list-unstyled list-inline color-skins">
                    <li data-color="color-1"></li>
                    <li data-color="color-2"></li>
                    <li data-color="color-3"></li>
                    <li data-color="color-4"></li>
                    <li data-color="color-5"></li>
                    <li data-color="color-6"></li>
                    <li data-color="color-7"></li>
                    <li data-color="color-8"></li>
                    <li data-color="color-9"></li>
                    <li data-color="color-10"></li>
                </ul>
            </div>
        </div>
        @endsection

 @section('footer_scripts')
<script type="text/javascript">
$(document).ready(function(){
            $('input.city_place').keyup(function() {
                var display_cites = $('.city_place');
               //perform ajax call...
               var city_id =display_cites.val();
              // alert(city_id);
                var type = "GET";
                $.ajax({
                    type: type,
                    url: 'get_cities/'+city_id,
                     success:function(data){
                       $('#display_cites').fadeIn(); 
                       $('#display_cites').show(); 
                      $('#display_cites').html(data);
                       //alert('ddddd');
                      }
                   });
            });

        $(document).on('click', '.result', function(){  
        $('#hidden_input').val($(this).val());
        $('.city_place').val($(this).text());  
        $('#display_cites').fadeOut(); 
        });
    });    
 </script>
 @endsection