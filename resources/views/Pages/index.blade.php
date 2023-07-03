@extends('layouts.header')

@section('content')
    <!-- Slider -->
    <section class="section-slide p-b-60">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1"
                    style="background-image: url({{ URL::asset('/template/images/banners/slide-1.png') }});">
                    <div class="container h-full">
                        <div class="flex-col-r-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-101 cl0 respon2">
                                    School & Office Stationary
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1">
                                    SALE OFF TO 50%
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1"
                    style="background-image: url({{ URL::asset('/template/images/banners/slide-3.png') }});">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="ltext-101 cl0 respon2">
                                    Read Books
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                <h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1">
                                    Gain Knowledge
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1"
                    style="background-image: url({{ URL::asset('/template/images/banners/slide-4.jpg') }});">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                                <span class="ltext-101 cl0 respon2" style="font-size:32px;">
                                    Stock Up Your Desk with
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                <h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1">
                                    New arrivals
                                </h2>
                            </div>
                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Animated Number Counter Section -->
    <div class="section-counter ">
        <div class="container grid cl5">
            <div class="box bg6 p-b-10">
                <span class="ltext-106 sta" data-max="17">0</span>
                <span class="data">Years</span>
            </div>
            <div class="box bg6 p-b-10">
                <span class="ltext-106 sta" data-max="15">0</span>
                <span class="data">Branches</span>
            </div>
            <div class="box bg6 p-b-10 sta">
                <span class="ltext-106 sta" data-max="1000">0</span>
                <span class="data">Clients</span>
            </div>
        </div>
    </div>

    <!-- Content page -->
    <section class="bg0 p-t-50">
        <div class="container">

            <div class="row">
                <div class="order-md-1 col-11 col-md-5 col-lg-5 m-lr-auto p-b-30">
                    <div class="hov-img0">
                        <img src="{{ URL::asset('/template/images/ads/h1-banner1.jpg') }}" height="600px" alt="IMG">

                    </div>

                    <a href="{{ url('/') }}" class="ab-t-l flex-col-l-sb p-lr-38 p-t-40 ">
                        <div class="block1-txt-child1 flex-col-l">

                            <span class="block1-name stext-102 trans-04 p-b-8">
                                Sales Up To 15% Off
                            </span>

                            <span class="block1-name ltext-107 trans-04 p-b-8">
                                Home Office
                            </span>
                            <span class="block1-name ltext-107 trans-04 p-b-8">
                                desks
                            </span>
                            <span class="block1-name ltext-107 trans-04 p-b-50">
                                Essentials
                            </span>

                            <span class="block1-name stext-102 p-t-30 trans-04 p-b-8 btnstyle">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </div>
                <div class="order-md-1 col-11 col-md-5 col-lg-3 m-lr-auto p-b-30">

                    <div class="hov-img0 ">
                        <img src="{{ URL::asset('/template/images/ads/h1-banner2.jpg') }}" height="600px" alt="IMG">
                    </div>

                    <a href="{{ url('/') }}" class="ab-t-l flex-col-l-sb p-lr-38 p-t-40 ">
                        <div class="block1-txt-child1 flex-col-l">

                            <span class="block1-name stext-102 trans-04 p-b-8">
                                All Page Types
                            </span>

                            <span class="block1-name ltext-107 trans-04 p-b-8">
                                Notebooks
                            </span>
                            <span class="block1-name ltext-101 trans-04 p-b-80">
                                25% Off
                            </span>

                            <span class="block1-name stext-102 p-t-30 trans-04 p-b-8 btnstyle">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="hov-img0 p-b-30">
                        <img src="{{ URL::asset('/template/images/ads/h1-banner3.jpg') }}" height="300px" alt="IMG">
                    </div>

                    <a href="{{ url('/') }}" class="ab-t-l flex-col-l-sb p-lr-38 p-t-40 ">
                        <div class="block1-txt-child1 flex-col-l">

                            <span class="block1-name stext-102 trans-04 p-b-8">
                                Office / Home
                            </span>

                            <span class="block1-name ltext-107 trans-04 p-b-8">
                                Metal Pens
                            </span>
                            <span class="block1-name ltext-101 trans-04 p-b-80">
                                15% Off
                            </span>

                            <span class="block1-name stext-102 p-t-30 trans-04 p-b-8 btnstyle">
                                Shop Now
                            </span>
                        </div>
                    </a>
                    <div class="hov-img0">
                        <img src="{{ URL::asset('/template/images/ads/h1-banner4.jpg') }}" height="270px"
                            alt="IMG">
                    </div>

                    <a href="{{ url('/') }}" class="ab-t-l flex-col-l-sb p-lr-38 p-t-350 ">
                        <div class="block1-txt-child1 flex-col-l">

                            <span class="block1-name stext-102 trans-04 p-b-8">
                                Office Adhesive
                            </span>

                            <span class="block1-name ltext-107 trans-04 p-b-8">
                                Tapes
                            </span>
                            <span class="block1-name ltext-101 trans-04 p-b-75" style="font-size:20px;">
                                From ₹80.00
                            </span>

                            <span class="block1-name stext-102 p-t-30 trans-04 p-b-8 btnstyle">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <div class="sec-banner bg0 p-t-30 p-b-50">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-101 cl5" style="font-weight:bold;">
                    Categories
                </h3>
            </div>
            <br />

            <div class="row">
                <div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{ URL::asset('/template/images/imgs/banner-1.png') }}" width="150px" height="250px"
                            alt="IMG-BANNER">

                        <a href="{{ url('/') }}"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Education Supplies
                                </span>

                                <span class="block1-info stext-102 trans-04">

                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{ URL::asset('/template/images/imgs/banner-3.png') }}" width="150px" height="250px"
                            alt="IMG-BANNER">

                        <a href="product.html"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Office Supplies
                                </span>

                                <span class="block1-info stext-102 trans-04">

                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{ URL::asset('/template/images/imgs/banner-5.jpg') }}" width="150px" height="250px"
                            alt="IMG-BANNER">

                        <a href="product.html"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Books
                                </span>

                                <span class="block1-info stext-102 trans-04">

                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{ URL::asset('/template/images/imgs/banner-6.jpg') }}" height="250px"
                            alt="IMG-BANNER">

                        <a href="product.html"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Study Books
                                </span>

                                <span class="block1-info stext-102 trans-04">

                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Product -->
    <section id="products" class="bg0 p-t-23 p-b-80">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-101 cl5" style="font-weight:bold;">
                    Featured Product
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".stationaries">
                        Stationaries
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".office">
                        Office Supplies
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".books">
                        Books
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".studybooks">
                        Study Books
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".general">
                        General
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".arts">
                        Arts and Crafts
                    </button>
                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div
                        class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Default
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Popularity
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Average rating
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}"
                                        class="filter-link stext-106 trans-04 filter-link-active">
                                        Newness
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ url('/') }}"
                                        class="filter-link stext-106 trans-04 filter-link-active">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹0.00 - ₹50.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹50.00 - ₹100.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹100.00 - ₹150.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹150.00 - ₹200.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sub Categories
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6">
                                        {{-- <i class="zmdi zmdi-circle"></i> --}}
                                    </span>

                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        NotBooks
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6">
                                        {{-- <i class="zmdi zmdi-circle"></i> --}}
                                    </span>

                                    <a href="{{ url('/') }}"
                                        class="filter-link stext-106 trans-04 filter-link-active">
                                        Pens
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6">
                                        {{-- <i class="zmdi zmdi-circle"></i> --}}
                                    </span>

                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Files
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6">
                                        {{-- <i class="zmdi zmdi-circle"></i> --}}
                                    </span>

                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Exam Preparation Books
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6">
                                        {{-- <i class="zmdi zmdi-circle"></i> --}}
                                    </span>

                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Arts and Crafts
                                    </a>
                                </li>

                                {{-- <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                        <i class="zmdi zmdi-circle-o"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        White
                                    </a>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="filter-col4 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Tags
                            </div>

                            <div class="flex-w p-t-4 m-r--5">
                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Stationaries
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Office Supplies
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Books
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Competetive Exam Books
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Arts and Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item stationaries">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-1.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Note Books
                                </a>

                                <span class="stext-105 cl3">
                                    ₹25.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item stationaries">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-2.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal2">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Pen
                                </a>

                                <span class="stext-105 cl3">
                                    ₹10.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item office">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-3.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal3">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    File
                                </a>

                                <span class="stext-105 cl3">
                                    ₹80.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item books">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-4.png') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal4">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Bhagavad Geetha
                                </a>

                                <span class="stext-105 cl3">
                                    ₹500.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item stationaries">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-6.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal5">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Pencil
                                </a>

                                <span class="stext-105 cl3">
                                    ₹10.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item arts">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-7.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal6">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Paint Brushes
                                </a>

                                <span class="stext-105 cl3">
                                    ₹85.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item general">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-8.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal7">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Book Stand
                                </a>

                                <span class="stext-105 cl3">
                                    ₹275.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item studybooks">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/banner-4.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal8">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    SBI PO Exam Preparation
                                </a>

                                <span class="stext-105 cl3">
                                    ₹380.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item arts">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-9.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal9">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Color Pencils
                                </a>

                                <span class="stext-105 cl3">
                                    ₹100.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item stationaries">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-10.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal10">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Rubber
                                </a>

                                <span class="stext-105 cl3">
                                    ₹8.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item general">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-11.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal11">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Tape
                                </a>

                                <span class="stext-105 cl3">
                                    ₹50.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item office">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/product-12.jpg') }}" width="300px"
                                height="275px" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal12">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Files and Paper Holder
                                </a>

                                <span class="stext-105 cl3">
                                    ₹125.00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/product-13.jpg') }}" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    T-Shirt with Sleeve
                                </a>

                                <span class="stext-105 cl3">
                                    $18.49
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/product-14.jpg') }}" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Pretty Little Thing
                                </a>

                                <span class="stext-105 cl3">
                                    $54.79
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/product-15.jpg') }}" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Mini Silver Mesh Watch
                                </a>

                                <span class="stext-105 cl3">
                                    $86.85
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/product-16.jpg') }}" alt="IMG-PRODUCT">

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Square Neck Back
                                </a>

                                <span class="stext-105 cl3">
                                    $29.64
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-01.png') }}"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="{{ URL::asset('/template/images/icons/icon-heart-02.png') }}"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="{{ url('/') }}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        </div>
    </section>

    <!-- All Categories -->
    <section id="categories" class="bg0 p-b-50">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    All Categories
                </h3> <br />
                {{-- <h4 class="ltext-101 cl5" style="font-weight:bold;font-size:28px;">
                    Shop By Categories
                </h4> --}}
            </div>

            <div class="bg6 flex-c-m flex-w m-t-10 p-tb-20">
                <div class="p-tb-30">
                    <h4 class="ltext-101 cl5 p-b-10"
                        style="font-weight:bold;font-size:28px;display:flex;justify-content: center;">
                        Shop By Categories
                    </h4>

                    <span class=" cl3 p-t-20 p-b-40" style="display: block;text-align:center">
                        All Essential Products In Our Stationery Shop That Keep Your <br /> School and Office Operations
                        Smooth And Efficient.
                    </span>

                    <span class="mybtnstyle stext-102 trans-04 m-l-110">
                        All Collections
                    </span>
                </div>
            </div>


            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All categories
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".stationaries">
                        Stationaries
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".office">
                        Office Supplies
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".books">
                        Books
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".studybooks">
                        Study Books
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".arts">
                        Arts and Crafts
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".general">
                        General
                    </button>
                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div
                        class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Default
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Popularity
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Average rating
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}"
                                        class="filter-link stext-106 trans-04 filter-link-active">
                                        Newness
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ url('/') }}"
                                        class="filter-link stext-106 trans-04 filter-link-active">
                                        All
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹0.00 - ₹50.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹50.00 - ₹100.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹100.00 - ₹150.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹150.00 - ₹200.00
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ url('/') }}" class="filter-link stext-106 trans-04">
                                        ₹200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col4 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Tags
                            </div>

                            <div class="flex-w p-t-4 m-r--5">
                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Note Book
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Pen
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Office Desk
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Competetive Exam Books
                                </a>

                                <a href="{{ url('/') }}"
                                    class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Crafts Materials
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item stationaries">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-1.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Note Books
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item general">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-2.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Desk Accessories
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item office">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-3.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Office Basics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item general">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/Holders.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Holders
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item office">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-4.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Files & Folders
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item arts">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/alcohol_1.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Alcohol Inks
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item arts">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/alcohol_2.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Paints
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item studybooks">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-6.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Calenders & Planners
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item studybooks">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-7.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Reference Books
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item books">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-8.jpg') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Books
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item stationaries">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/cate-9.png') }}" width="80px"
                                height="200px" alt="IMG-PRODUCT">

                            <a href="{{ url('/') }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                check
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ url('/') }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Papers
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-30">
                <a href="{{ url('/') }}"
                    class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Expand
                </a>
            </div>
        </div>
    </section>

    <!-- Content page -->
    <section class="bg0 p-b-80">
        <div class="container">
            {{-- <div class="row p-b-148">
                <div class="col-md-7 col-lg-7">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Story
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Led by a passion for innovative and entrancing stationery, the idea of ‘COZESTORE’ sparked in
                            2016. We realised that while India is filled with stationery enthusiasts, only a few knew about
                            the plethora of creative yet practical stationery, art and craft supplies available. We
                            travelled to various global stationery expos across Japan, Dubai and Germany handpicking some of
                            the most innovative stationery brands.


                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            We provide a variety of stationary products accross several countries. We have branches all over
                            India and also have oustide India.
                            We offer the best quality products for customers.

                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Any questions? call us on (+91) 6235766765
                        </p>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-5 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{ URL::asset('/template/images/imgs/About_us_01.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-6 p-b-30">
                    <div class="p-t-50 p-l-85 p-l-15-lg p-l-0-md">
                        <p class="stext-104">
                            COZASTORE
                        </p> <br />

                        <h3 class="mtext-111 cl2 p-b-16">
                            The Stationery Company
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Our Office Supplies Will Help You Organize Your Workspace From All Kinds Of Desk Essentials
                            To
                            Top Quality Staplers, Calculators And Organizers.
                        </p>

                        {{-- <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                Creativity is just connecting things. When you ask creative people how they did something,
                                they feel a little guilty because they didn't really do it, they just saw something. It
                                seemed obvious to them after a while.
                            </p>

                            <span class="stext-111 cl8">
                                - Steve Job’s
                            </span>
                        </div> --}}
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-3 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ URL::asset('/template/images/ads/ad_1.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
                <div class="order-md-1 col-11 col-md-5 col-lg-3 m-lr-auto p-t-50 p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ URL::asset('/template/images/ads/ad_2.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="sec-blog bg0 p-b-90">
        <div class="container">
            <div class="p-b-66">
                <h3 class="ltext-107 cl5 txt-center respon1">
                    From Our Blog
                </h3>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 p-b-40">
                    <div class="blog-item">
                        <div class="hov-img0">
                            <a href="{{ url('/') }}">
                                <img src="{{ URL::asset('/template/images/imgs/h3_banner_1.jpg') }}" height="257px"
                                    alt="IMG-BLOG">
                            </a>
                        </div>

                        <div class="p-t-15">
                            <div class="stext-107 flex-w p-b-14">


                                <span>


                                    <span class="cl5">
                                        June 29, 2023
                                    </span>
                                </span>
                            </div>

                            <h4 class="p-b-12">
                                <a href="{{ url('/') }}" class="mtext-101 cl2 hov-cl1 trans-04">
                                    Rose Gold and Marble Office and Home Desk Accessories and School Supplies.

                                </a>
                            </h4>
                            <a href="{{ url('/') }}">
                                <p class="stext-108 cl6">

                                    Read More

                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-40">
                    <div class="blog-item">
                        <div class="hov-img0">
                            <a href="{{ url('/') }}">
                                <img src="{{ URL::asset('/template/images/imgs/blog2.jpg') }}" alt="IMG-BLOG">
                            </a>
                        </div>

                        <div class="p-t-15">
                            <div class="stext-107 flex-w p-b-14">


                                <span>


                                    <span class="cl5">
                                        June 20, 2023
                                    </span>
                                </span>
                            </div>

                            <h4 class="p-b-12">
                                <a href="{{ url('/') }}" class="mtext-101 cl2 hov-cl1 trans-04">
                                    How to Brighten up your Office and Home Office
                                </a>
                            </h4>

                            <a href="{{ url('/') }}">
                                <p class="stext-108 cl6">

                                    Read More

                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-40">
                    <div class="blog-item">
                        <div class="hov-img0">
                            <a href="{{ url('/') }}">
                                <img src="{{ URL::asset('/template/images/imgs/blog3.jpg') }}" height="257px"
                                    alt="IMG-BLOG">
                            </a>
                        </div>

                        <div class="p-t-15">
                            <div class="stext-107 flex-w p-b-14">


                                <span>

                                    <span class="cl5">
                                        June 2, 2023
                                    </span>
                                </span>
                            </div>

                            <h4 class="p-b-12">
                                <a href="{{ url('/') }}" class="mtext-101 cl2 hov-cl1 trans-04">
                                    The Story Behind Planners
                                </a>
                            </h4>

                            <a href="{{ url('/') }}">
                                <p class="stext-108 cl6">

                                    Read More

                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // let section = document.querySelector(".section-counter");
        // let innersec = document.querySelectorAll(" .container .box .sta");
        // let start = false;

        // window.onScroll = function() {
        //     if (window.scrollY >= section.offsetTop) {
        //         if (!start) {
        //             innersec.forEach((sta) => startCount(sta));
        //         }
        //         start = true;
        //     }
        // }

        // function startCount(el) {
        //     let max = el.dataset.max;
        //     let count = setInterval(() => {
        //         el.textContent++;
        //         if (el.textContent == max) {
        //             clearInterval(count);
        //         }
        //     }, 2000 / innersec);
        // }


        // let valueDisplays = document.querySelectorAll(".sta");
        // let interval = 4000;

        // valueDisplays.forEach((valueDisplay) => {
        //     let startvalue = 0;
        //     let endValue = parseInt(valueDisplay.getAttribute("data-max"));
        //     let duration = Math.floor(interval / endValue);
        //     let counter = setInterval(function() => {
        //         startValue += 1;
        //         valueDisplay.textContent = startvalue;
        //         if (startvalue == endValue) {
        //             clearInterval(counter);
        //         }
        //     }, duration);
        // });
    </script>

    {{-- <script>
        let sections = document.querySelectorAll(".section-counter");
        let innersec = document.querySelectorAll(".container .box .sta");
        let start = false;

        window.addEventListener('scroll', function() {
            sections.forEach((section) => {
                if (window.scrollY >= section.offsetTop) {
                    if (!start) {
                        innersec.forEach((sta) => startCount(sta));
                    }
                    start = true;
                }
            });
        });

        function startCount(el) {
            let max = el.dataset.max;
            let count = setInterval(() => {
                el.textContent++;
                if (el.textContent == max) {
                    clearInterval(count);
                }
            }, 10);
        }
    </script> --}}
    <script>
        let sections = document.querySelectorAll(".section-counter");
        let innersec = document.querySelectorAll(".container .box .sta");
        let start = false;

        let observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (!start) {
                        innersec.forEach((sta) => startCount(sta));
                    }
                    start = true;
                }
            });
        });

        sections.forEach(section => {
            observer.observe(section);
        });

        function startCount(el) {
            let max = el.dataset.max;
            let count = setInterval(() => {
                el.textContent++;
                if (el.textContent == max) {
                    clearInterval(count);
                }
            }, 10);
        }
    </script>
@endsection
