@extends('frontend.Home.layouts.master')
@section('content')
    @include('frontend.Home.components.slider')
    <!--=============================
                                                        BANNER END
                                                    ==============================-->


    <!--=============================
                                                        WHY CHOOSE START
                                                    ==============================-->
    @include('frontend.Home.components.why-choose')
    <!--=============================
                                                        WHY CHOOSE END
                                                    ==============================-->


    <!--=============================
                                                        OFFER ITEM START
                                                    ==============================-->
    @include('frontend.Home.components.offer-item')

    <!-- CART POPUT START -->
    @include('frontend.Home.components.card-pop-up')
    <!-- CART POPUT END -->
    <!--=============================
                                                        OFFER ITEM END
                                                    ==============================-->


    <!--=============================
                                                        MENU ITEM START
                                                    ==============================-->
    @include('frontend.Home.components.menu-item')
    <!--=============================
                                                        MENU ITEM END
                                                    ==============================-->


    <!--=============================
                                                        ADD SLIDER START
                                                    ==============================-->
    @include('frontend.Home.components.add-slider')
    <!--=============================
                                                        ADD SLIDER END
                                                    ==============================-->


    <!--=============================
                                                        TEAM START
                                                    ==============================-->
    @include('frontend.Home.components.team')
    <!--=============================
                                                        TEAM END
                                                    ==============================-->


    <!--=============================
                                                        DOWNLOAD APP START
                                                    ==============================-->
    @include('frontend.Home.components.app-download')
    <!--=============================
                                                        DOWNLOAD APP END
                                                    ==============================-->


    <!--=============================
                                                       TESTIMONIAL  START
                                                    ==============================-->
    @include('frontend.Home.components.testimonial')
    <!--=============================
                                                        TESTIMONIAL END
                                                    ==============================-->


    <!--=============================
                                                        COUNTER START
                                                    ==============================-->
    @include('frontend.Home.components.counter')
    <!--=============================
                                                        COUNTER END
                                                    ==============================-->


    <!--=============================
                                                        BLOG 2 START
                                                    ==============================-->
    @include('frontend.Home.components.blog')
    <!--=============================
                                                        BLOG 2 END
                                                    ==============================-->
@endsection
