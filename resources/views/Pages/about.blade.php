@extends('layouts.header')

@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-170"
        style="background-image: url({{ URL::asset('/template/images/banners/slide-01.png') }});">
        <h2 class="ltext-105 cl0 txt-center">
            About
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
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
            </div>

            {{-- <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Mission
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Mauris non lacinia magna. Sed nec lobortis dolor. Vestibulum rhoncus dignissim risus, sed
                            consectetur erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                            turpis egestas. Nullam maximus mauris sit amet odio convallis, in pharetra magna gravida.
                            Praesent sed nunc fermentum mi molestie tempor. Morbi vitae viverra odio. Pellentesque ac velit
                            egestas, luctus arcu non, laoreet mauris. Sed in ipsum tempor, consequat odio in, porttitor
                            ante. Ut mauris ligula, volutpat in sodales in, porta non odio. Pellentesque tempor urna vitae
                            mi vestibulum, nec venenatis nulla lobortis. Proin at gravida ante. Mauris auctor purus at lacus
                            maximus euismod. Pellentesque vulputate massa ut nisl hendrerit, eget elementum libero iaculis.
                        </p>

                        <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                Creativity is just connecting things. When you ask creative people how they did something,
                                they feel a little guilty because they didn't really do it, they just saw something. It
                                seemed obvious to them after a while.
                            </p>

                            <span class="stext-111 cl8">
                                - Steve Job’s
                            </span>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ URL::asset('/template/images/about-02.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
