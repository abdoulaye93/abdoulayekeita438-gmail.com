@extends('home.layouts.app')
@section('style')
    <link rel="stylesheet" href="css/searchcard.css">
@endsection

@section('content')


    <section style="background-color: #daf0f4">
        <div  style="background-image: url({{asset('images/dashboard/ecommerce1.jpg')}}); background-size: cover;height: 600px; background-position: center;">
            <div>
                <div class="text-center" style="z-index:2;position:absolute;color:#ffffff;margin-top:200px;width:100%;">
                    <h6 class="text-dark" style="font-size: 3.5em;">Tous vos annonces</h6>
                </div>
            </div>
        </div>
        <div class="kt-container--fluid pt-5 " style="background-color: #daf0f4" >
            <div class="kt-portlet container ">
                <div class="kt-portlet__body ">
                    <h2 class="row justify-content-center">Nom de la Boutiques</h2>
                    <div class="row">
                        <a href="{{route('detail_annonce')}}">
                            <div class="card-media">
                                <!-- media container -->
                                <div class="card-media-object-container">
                                    <div class="card-media-object" style="background-image: url({{asset('images/dashboard/ecommerce1.jpg')}});"></div>
                                </div>
                                <!-- body container -->
                                <div class="card-media-body">
                                    <div class="card-media-body-top" style="margin-bottom: 2rem;">
                                        <span class="font-weight-bold  lead" style="color: #478fcd;font-size: 20px">nom du produit</span>
                                        <div class="card-media-body-top-icons u-float-right">
                                        </div>
                                    </div>
                                    <span class="card-media-body-heading text-primary h-pay" style="font-size: 15px"><strong>4000 FCFA</strong></span>
                                    <span class="card-media-body-heading text-success h-pay mt-4"><span class="text-dark">publier depuis 10/10/2020 </span></span>
                                    <div class="card-media-body-supporting-bottom">
                                        <span class="card-media-body-supporting-bottom-text subtle">Immobilier</span>
                                    </div>
                                    <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                                        <br>
                                        <a href="" class="card-media-body-supporting-bottom-text card-media-link u-float-right">En savoir plus</a>
                                    </div>
                                </div>{{--        <span class="card-media-body-supporting-bottom-text mt-2 text-primary">#Music #Party</span>--}}
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="{{route('detail_annonce')}}">
                            <div class="card-media">
                                <!-- media container -->
                                <div class="card-media-object-container">
                                    <div class="card-media-object" style="background-image: url({{asset('images/dashboard/cafe.jpg')}});"></div>
                                </div>
                                <!-- body container -->
                                <div class="card-media-body">
                                    <div class="card-media-body-top" style="margin-bottom: 2rem;">
                                        <span class="font-weight-bold  lead" style="color: #478fcd;font-size: 20px">nom du produit</span>
                                        <div class="card-media-body-top-icons u-float-right">
                                        </div>
                                    </div>
                                    <span class="card-media-body-heading text-primary h-pay" style="font-size: 15px"><strong>4000 FCFA</strong></span>
                                    <span class="card-media-body-heading text-success h-pay mt-4"><span class="text-dark">publier depuis 10/10/2020 </span></span>
                                    <div class="card-media-body-supporting-bottom">
                                        <span class="card-media-body-supporting-bottom-text subtle">Immobilier</span>
                                    </div>
                                    <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                                        <br>
                                        <a href="" class="card-media-body-supporting-bottom-text card-media-link u-float-right">En savoir plus</a>
                                    </div>
                                </div>{{--        <span class="card-media-body-supporting-bottom-text mt-2 text-primary">#Music #Party</span>--}}
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="{{route('detail_annonce')}}">
                            <div class="card-media">
                                <!-- media container -->
                                <div class="card-media-object-container">
                                    <div class="card-media-object" style="background-image: url({{asset('images/dashboard/shop1.jpg')}});"></div>
                                </div>
                                <!-- body container -->
                                <div class="card-media-body">
                                    <div class="card-media-body-top" style="margin-bottom: 2rem;">
                                        <span class="font-weight-bold  lead" style="color: #478fcd;font-size: 20px">nom du produit</span>
                                        <div class="card-media-body-top-icons u-float-right">
                                        </div>
                                    </div>
                                    <span class="card-media-body-heading text-primary h-pay" style="font-size: 15px"><strong>4000 FCFA</strong></span>
                                    <span class="card-media-body-heading text-success h-pay mt-4"><span class="text-dark">publier depuis 10/10/2020 </span></span>
                                    <div class="card-media-body-supporting-bottom">
                                        <span class="card-media-body-supporting-bottom-text subtle">Immobilier</span>
                                    </div>
                                    <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                                        <br>
                                        <a href="" class="card-media-body-supporting-bottom-text card-media-link u-float-right">En savoir plus</a>
                                    </div>
                                </div>{{--        <span class="card-media-body-supporting-bottom-text mt-2 text-primary">#Music #Party</span>--}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




