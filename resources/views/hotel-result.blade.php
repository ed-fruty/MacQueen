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
                            <li class="dropdown active">
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
                    <div class="bg-transparent">
                        <div class="header-topbar">
                            <div class="container">
                                <ul class="topbar-left list-unstyled pull-left">
                                    <li>
                                        <a href="javascript:void(0)" class="country dropdown-text">
                                            <span>Country</span>
                                            <i class="topbar-icon icons-dropdown fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-topbar list-unstyled hide">
                                            <li>
                                                <a href="#" class="link">Vietnam</a>
                                            </li>
                                            <li>
                                                <a href="#" class="link">Japan</a>
                                            </li>
                                            <li>
                                                <a href="#" class="link">Korea</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="language dropdown-text">
                                            <span>English</span>
                                            <i class="topbar-icon icons-dropdown fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-topbar list-unstyled hide">
                                            <li>
                                                <a href="#" class="link">Vietnam</a>
                                            </li>
                                            <li>
                                                <a href="#" class="link">Japan</a>
                                            </li>
                                            <li>
                                                <a href="#" class="link">Korea</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="monney dropdown-text">
                                            <span>USD</span>
                                            <i class="topbar-icon icons-dropdown fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-topbar list-unstyled hide">
                                            <li>
                                                <a href="#" class="link">VND</a>
                                            </li>
                                            <li>
                                                <a href="#" class="link">Euro</a>
                                            </li>
                                            <li>
                                                <a href="#" class="link">JPY</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="topbar-right pull-right list-unstyled list-inline login-widget">
                                    <li>
                                        <a href="sign-up.html" class="item">login</a>
                                    </li>
                                    <li>
                                        <a href="register.html" class="item">register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-main">
                            <div class="container">
                                <div class="header-main-wrapper">
                                    <div class="hamburger-menu">
                                        <div class="hamburger-menu-wrapper">
                                            <div class="icons"></div>
                                        </div>
                                    </div>
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="index.html" class="header-logo">
                                                <img src="{{ asset('front_assets/images/logo/logo-color-1.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <nav class="navigation">
                                        <ul class="nav-links nav navbar-nav">
                                            <li class="dropdown">
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
                                            <li class="dropdown active">
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
                        <section class="page-banner hotel-result">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="index.html" class="link home">Home</a>
                                            </li>
                                            <li class="active">
                                                <a href="#" class="link">Hotel</a>
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                        <h2 class="captions">HOTEL</h2>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="page-main">
                            <div class="trip-info">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="label-route-widget">
                                                <span class="departure">
                                                    <span class="city">Singapore, </span>
                                                    <span class="country">Singapore</span>
                                                </span>
                                                <i class="fa fa-long-arrow-right"></i>
                                                <span class="arrival">
                                                    <span class="city">Kuala Lumpur, </span>
                                                    <span class="country">Malaysia</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="label-time-widget">From
                                                <span class="departure">
                                                    <span class="date">6 March </span>at
                                                    <span class="hour">10:00</span>
                                                </span> to
                                                <span class="arrival">
                                                    <span class="date">9 March </span>at
                                                    <span class="hour">10:00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="hotel-result-main padding-top padding-bottom">
                                <div class="container">
                                    <div class="result-meta">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="result-count-wrapper">Results Found:
                                                    <span class="result-count">132</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="result-filter-wrapper">
                                                    <form>
                                                        <label class="result-filter-label">Sort by :</label>
                                                        <div class="selection-bar">
                                                            <div class="select-wrapper">
                                                                <select name="Recommended" class="custom-select selectbox">
                                                                    <option value="" disabled="disabled" selected="selected" hidden="hidden">Recommended</option>
                                                                    <option value="1">Recommended 1</option>
                                                                    <option value="2">Recommended 2</option>
                                                                </select>
                                                            </div>
                                                            <div class="select-wrapper">
                                                                <select name="Shortest" class="custom-select selectbox">
                                                                    <option value="" disabled="disabled" selected="selected" hidden="hidden">deals</option>
                                                                    <option value="1">deal 1</option>
                                                                    <option value="2">deal 2</option>
                                                                </select>
                                                            </div>
                                                            <div class="select-wrapper">
                                                                <select name="Nearby airport" class="custom-select selectbox">
                                                                    <!--option(value="" disabled selected hidden) price-->
                                                                    <option value="expensive">expensive</option>
                                                                    <option value="cheap">cheap</option>
                                                                </select>
                                                            </div>
                                                            <div class="select-wrapper">
                                                                <select name="Time" class="custom-select selectbox">
                                                                    <option value="" disabled="disabled" selected="selected" hidden="hidden">review score</option>
                                                                    <option value="5">5 stars</option>
                                                                    <option value="4">4 stars</option>
                                                                    <option value="3">3 stars</option>
                                                                    <option value="2">2 stars</option>
                                                                    <option value="1">1 stars</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result-body">
                                        <div class="row">
                                            <div class="col-md-8 main-right">
                                                <div class="hotel-list">
                                                    <div class="row">
                                                        @foreach($results->data as $key=>$object)
                                                        <div class="col-sm-12">
                                                            <div class="hotels-layout">
                                                                <div class="image-wrapper">
                                                                    <a href="hotel-view.html" class="link">
                                                                        <img src="{{ asset('front_assets/images/hotels/hotel-6.jpg')}}" alt="" class="img-responsive">
                                                                    </a>
                                                                    <div class="title-wrapper">
                                                                        <a href="hotel-view.html" class="title">{{$object->name}}</a>
                                                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span class="width-{{$object->stars /5}}">
                                                                                <strong class="rating">{{$object->stars}} out of 5</strong>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="content-wrapper">
                                                                    <div class="content">
                                                                        <div class="title">
                                                                            <div class="price">
                                                                                <!-- {{$object->deals[0]->currency}} -->
                                                                                <sup>$</sup>
                                                                                <span class="number">{{$object->promotions_price}}</span>
                                                                            </div>
                                                                            <!-- <p class="for-price">for person per night</p> -->
                                                                        </div>
                                                                        <p class="text">{{strip_tags($object->description)}}</p>
                                                                        <div class="group-btn-tours">
                                                                            <a href="hotels/details/{{$object->id}}" class="left-btn">book now</a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-info list-unstyled">
                                                                        <li>
                                                                            <a href="#" class="link">
                                                                                <i class="icons hidden-icon fa fa-eye"></i>
                                                                                <span class="number" id=>234</span>
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
                                                        @endforeach
                                                       
                                                    </div>
                                                </div>
                                                <nav class="pagination-list margin-top70">
                                                    <ul class="pagination">
                                                        <li>
                                                            <a href="#" aria-label="Previous" class="btn-pagination previous">
                                                                <span aria-hidden="true" class="fa fa-angle-left"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-pagination active">01</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-pagination">02</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-pagination">03</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-pagination">...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" aria-label="Next" class="btn-pagination next">
                                                                <span aria-hidden="true" class="fa fa-angle-right"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-md-4 sidebar-widget">
                                                <div class="col-2">
                                                    <div class="find-widget find-flight-widget widget">
                                                        <h4 class="title-widgets">find your hotel</h4>
                                                        <form class="content-widget">
                                                            <div class="ffw-radio-selection">
                                                                <span class="ffw-radio-btn-wrapper">
                                                                    <input type="radio" name="flight type" value="one way" id="flight-type-1" checked="checked" class="ffw-radio-btn">
                                                                    <label for="flight-type-1" class="ffw-radio-label">One Way</label>
                                                                </span>
                                                                <span class="ffw-radio-btn-wrapper">
                                                                    <input type="radio" name="flight type" value="round trip" id="flight-type-2" class="ffw-radio-btn">
                                                                    <label for="flight-type-2" class="ffw-radio-label">Round Trip</label>
                                                                </span>
                                                                <span class="ffw-radio-btn-wrapper">
                                                                    <input type="radio" name="flight type" value="multiple cities" id="flight-type-3" class="ffw-radio-btn">
                                                                    <label for="flight-type-3" class="ffw-radio-label">Multiple Cities</label>
                                                                </span>
                                                                <div class="stretch">&nbsp;</div>
                                                            </div>
                                                            <div class="text-input small-margin-top">
                                                                <div class="text-box-wrapper">
                                                                    <label class="tb-label">Where do you want to go?</label>
                                                                    <div class="input-group">
                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                    </div>
                                                                </div>
                                                                <div class="input-daterange">
                                                                    <div class="text-box-wrapper half left">
                                                                        <label class="tb-label">Check in</label>
                                                                        <div class="input-group">
                                                                            <input type="text" placeholder="MM/DD/YY" class="tb-input">
                                                                            <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-box-wrapper half right">
                                                                        <label class="tb-label">Check out</label>
                                                                        <div class="input-group">
                                                                            <input type="text" placeholder="MM/DD/YY" class="tb-input">
                                                                            <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-box-wrapper half left">
                                                                    <label class="tb-label">Number of Adult</label>
                                                                    <div class="input-group">
                                                                        <button disabled="disabled" data-type="minus" data-field="quant[1]" class="input-group-btn btn-minus">
                                                                            <span class="tb-icon fa fa-minus"></span>
                                                                        </button>
                                                                        <input type="number" name="quant[1]" min="1" max="9" value="1" class="tb-input count">
                                                                        <button data-type="plus" data-field="quant[1]" class="input-group-btn btn-plus">
                                                                            <span class="tb-icon fa fa-plus"></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="text-box-wrapper half right">
                                                                    <label class="tb-label">Number of Child</label>
                                                                    <div class="input-group">
                                                                        <button disabled="disabled" data-type="minus" data-field="quant[2]" class="input-group-btn btn-minus">
                                                                            <span class="tb-icon fa fa-minus"></span>
                                                                        </button>
                                                                        <input type="number" name="quant[2]" min="0" max="9" value="0" class="tb-input count">
                                                                        <button data-type="plus" data-field="quant[2]" class="input-group-btn btn-plus">
                                                                            <span class="tb-icon fa fa-plus"></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" data-hover="SEND NOW" class="btn btn-slide small-margin-top">
                                                                <span class="text">search now</span>
                                                                <span class="icons fa fa-long-arrow-right"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="col-1">
                                                        <div class="price-widget widget">
                                                            <div class="title-widget">
                                                                <div class="title">price</div>
                                                            </div>
                                                            <div class="content-widget">
                                                                <div class="price-wrapper">
                                                                    <div data-range_min="0" data-range_max="3000" data-cur_min="450" data-cur_max="1800" class="nstSlider">
                                                                        <div class="leftGrip indicator">
                                                                            <div class="number" id="min_price"></div>
                                                                        </div>
                                                                        <div class="rightGrip indicator">
                                                                            <div class="number" id="max_price"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="leftLabel">0</div>
                                                                    <div class="rightLabel">3000</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="turkey-cities-widget widget">
                                                            <div class="title-widget">
                                                                <div class="title">rating</div>
                                                            </div>
                                                            <div class="content-widget">
                                                                <form class="radio-selection">
                                                                     <meta name="csrf-token" content="{{ csrf_token() }}" />
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="rating"  value="5" id="1stars" class="radio-btn" id="5stars">
                                                                        <label for="1stars" class="radio-label stars stars5">1stars</label>
                                                                        <span class="count">27</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="rating"  value="4" id="2stars" class="radio-btn" id="4stars">
                                                                        <label for="2stars" class="radio-label stars stars4">2stars</label>
                                                                        <span class="count">75</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="rating"  id="3stars" value="3" class="radio-btn" id="3stars">
                                                                        <label for="3stars" class="radio-label stars stars3">3stars</label>
                                                                        <span class="count">35</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="rating"  id="4stars" value="2" class="radio-btn" id="2stars">
                                                                        <label for="4stars" class="radio-label stars stars2">4stars</label>
                                                                        <span class="count">34</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="rating"  id="5stars" value="1" class="radio-btn" id="1stars">
                                                                        <label for="5stars" class="radio-label stars stars1">5stars</label>
                                                                        <span class="count">65</span>
                                                                    </div>

                                                                     <input type="button" id="filter_button" class="btn-block" name="filter">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="accommodation-widget widget">
                                                            <div class="title-widget">
                                                                <div class="title">accommodation</div>
                                                            </div>
                                                            <div class="content-widget">
                                                                <form class="radio-selection">
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="accommodation" value="Hotel" id="Hotel" class="radio-btn">
                                                                        <label for="Hotel" class="radio-label">Hotel</label>
                                                                        <span class="count">27</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="accommodation" value="Hostel" id="Hostel" class="radio-btn">
                                                                        <label for="Hostel" class="radio-label">Hostel</label>
                                                                        <span class="count">75</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="accommodation" value="Resort" id="Resort" class="radio-btn">
                                                                        <label for="Resort" class="radio-label">Resort</label>
                                                                        <span class="count">35</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="accommodation" value="Villa" id="Villa" class="radio-btn">
                                                                        <label for="Villa" class="radio-label">Villa</label>
                                                                        <span class="count">34</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="accommodation" value="Motel" id="Motel" class="radio-btn">
                                                                        <label for="Motel" class="radio-label">Motel</label>
                                                                        <span class="count">65</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="accommodation" value="Bungalow" id="Bungalow" class="radio-btn">
                                                                        <label for="Bungalow" class="radio-label">Bungalow</label>
                                                                        <span class="count">65</span>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="col-1">
                                                        <div class="stop-widget widget">
                                                            <div class="title-widget">
                                                                <div class="title">facilities</div>
                                                            </div>
                                                            <div class="content-widget">
                                                                <form class="radio-selection">
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="facilities" value="Swimming-pool" id="Swimming-pool" class="radio-btn">
                                                                        <label for="Swimming-pool" class="radio-label">Swimming Pool</label>
                                                                        <span class="count">27</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="facilities" value="Restaurant" id="Restaurant" class="radio-btn">
                                                                        <label for="Restaurant" class="radio-label">Restaurant</label>
                                                                        <span class="count">75</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="facilities" value="Airport" id="Airport" class="radio-btn">
                                                                        <label for="Airport" class="radio-label">Airport Transfer</label>
                                                                        <span class="count">35</span>
                                                                    </div>
                                                                    <div class="radio-btn-wrapper">
                                                                        <input type="radio" name="facilities" value="Nightclub" id="Nightclub" class="radio-btn">
                                                                        <label for="Nightclub" class="radio-label">Nightclub</label>
                                                                        <span class="count">34</span>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="special-offer margin-top70">
                                        <h3 class="title-style-2">special offer</h3>
                                        <div class="special-offer-list">
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-5.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">alpha</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-6.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">otipus</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-7.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">sunrise</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-8.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">carisbean</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-5.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">alpha</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-6.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">otipus</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-7.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">sunrise</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="special-offer-layout">
                                                <div class="image-wrapper">
                                                    <a href="tour-view.html" class="link">
                                                        <img src="{{ asset('front_assets/images/footer/offer-8.jpg')}}" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="title-wrapper">
                                                        <a href="tour-view.html" class="title">carisbean</a>
                                                        <i class="icons flaticon-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <div class="subscribe-email">
                        <div class="container">
                            <div class="subscribe-email-wrapper">
                                <div class="subscribe-email-left">
                                    <p class="subscribe-email-title">Subscribe
                                        <span class="logo-text">Exploore</span>&nbsp;to get latest offers and deals to day</p>
                                    <p class="subscribe-email-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                                <div class="subscribe-email-right">
                                    <form action="index.html">
                                        <div class="input-group form-subscribe-email">
                                            <input type="text" placeholder="Write your email" class="form-control" />
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn-email">&#8594;</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main padding-top padding-bottom">
                        <div class="container">
                            <div class="footer-main-wrapper">
                                <a href="index.html" class="logo-footer">
                                    <img src="{{ asset('front_assets/images/logo/logo-white-color-1.png')}}" alt="" class="img-responsive" />
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
                                                <div class="title-widget">Gallary</div>
                                                <div class="content-widget main-gallery-fancybox">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="gallery-content">
                                                            <a href="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" data-fancybox-group="gallery" class="wp-gallery glry-relative fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" data-fancybox-group="gallery" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-01.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" data-fancybox-group="gallery-1" class="wp-gallery glry-relative fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" data-fancybox-group="gallery-1" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-02.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" data-fancybox-group="gallery-2" class="wp-gallery glry-relative fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" data-fancybox-group="gallery-2" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-03.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" data-fancybox-group="gallery-3" class="wp-gallery glry-relative fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" data-fancybox-group="gallery-3" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-04.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" data-fancybox-group="gallery-4" class="wp-gallery glry-relative fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" data-fancybox-group="gallery-4" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-05.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                        </li>
                                                        <li class="gallery-content">
                                                            <a href="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" data-fancybox-group="gallery-5" class="wp-gallery glry-relative fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" alt="" class="img-responsive" />
                                                            </a>
                                                            <a href="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" data-fancybox-group="gallery-5" class="wp-gallery glry-absolute fancybox thumb">
                                                                <img src="{{ asset('front_assets/images/footer/gallery-06.jpg')}}" alt="" class="img-responsive" />
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
                    <div class="hyperlink">
                        <div class="container">
                            <div class="slide-logo-wrapper">
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-01.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-02.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-03.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-04.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-05.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-06.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-01.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-02.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-03.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-04.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-05.png')}}" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="logo-item">
                                    <a href="#" class="link">
                                        <img src="{{ asset('front_assets/images/footer/logo-06.png')}}" alt="" class="img-responsive" />
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
  <script>
 $(document).ready(function () {
           $('#filter_button').click(function () { 
            var min_price= jQuery('#min_price').val();
            var max_price= jQuery('#max_price').val();
            var price= jQuery('#real_price').val();
            var rating = $('input[name=rating]:checked').val();
            console.log(rating);
            var ar = <?php echo json_encode($results) ?>;
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var type = "POST";
                $.ajax({
                    type: type,
                    url: '/search_hotel_by_name',
                    data:{hotels:ar,min_price:min_price,max_price:max_price,rating:rating,_token: CSRF_TOKEN},
                       success:function(all_data) {
                        //     var i;
                        //     var items = all_data.data;
                        //     var search_results= jQuery('#search_results');
                        //      if (items === undefined || items.length == 0) {
 
                        //         search_results.html('<div class="alert alert-danger not_found">No Results found !</div>');                                
                        //     }
                        //     $.each(all_data.data, function(index,all_data) {        
                        //           search_results.html('<div class="airport hotel" ><div class="col-md-4 p-0"><div class="airport-l"><img src="'+all_data.mainImage+'"/></div></div><div class="col-md-5"><div class="airport-r"><div class="airport-1"><h3>'+all_data.name+'</h3><p> stars :'+all_data.stars+'</p><div class="f-12 mt-10"><img src="{{ asset("frontend/img/location3.png") }}">'+all_data.location+'</div><!--<div class="bold f-12 mt-10">address here for Hotel.</div>--></div></div></div><div class="col-md-3"><div class="airport-r"><div class="airport-1"><div class="bold mt-10">'+all_data.promotions_price + all_data.deals[0].currency+'</div><div class="f-12 mt-5 mb-10">'+all_data.name+'</div><a href="hotels/details/'+all_data.id+'" class="the-btn2 hvr-sweep-to-top btn-block">Read more</a></div></div></div></div>');

                        // });
                     //   alert('sssss');
                           
                       }
                   });
            });
           });
      </script>

 @endsection