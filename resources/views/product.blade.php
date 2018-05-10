@extends('layout')

@section('content')
    @php
        #Remove this snippet once backend is complete
        $images = array(
            $product['img'],
            $product['img'],
            $product['img'],
        );
        $features = array(
            "30 day money-back guarantee",
            "Future updates",
            "6 months support",
            "Detailed documentation",
            "Live support",
        );
        $info = array(
            "Wordpress",
            "Reactive",
            "Resposive",
            "E-Commerce",
        );
    @endphp
    <script>
        function checkCart(id){
            var d =  '<i class="fas fa-check"></i> Added to cart';
            $.ajax({
                type: "GET",
                url: '{{route('viewCartREST')}}',
                success: function (data) {
                    data = JSON.parse(data);
                    $('.cart-count').text(Object.keys(data).length);
                    cart = data;
                    console.log(cart);
                    if(id in cart){
                        $('.cart-add').html(d);
                        $('.cart-add').removeClass('btn-success');
                        $('.cart-add').addClass('btn-dark');

                    }
                }
            });

        }
        $(document).ready(function ($) {
            $('[data-toggle="popover"]').popover();
            $('.carousel-indicators-li').first().addClass('active');
            $('.carousel-item').first().addClass('active');
            checkCart({{$product['id']}})
            $('.cart-add').click(function (e) {
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (data) {
                        data = JSON.parse(data);
                        console.log(Object.keys(data).length)
                        $('.cart-count').text(Object.keys(data).length);
                        checkCart({{$product['id']}})
                        $('.search-icon').popover('show');
                        setTimeout(function (){$('.search-icon').popover('hide')}, 1500 );
                    }
                });
            });
        });
    </script>
    <style type='text/css'>
        #product-carousel {
            margin: 00px auto;
        }
        #product-carousel .carousel-indicators {
            margin: 10px 0 0;
            overflow: hidden;
            position: static;
            text-align: left;
            white-space: nowrap;
            width: 100%;
        }
        #product-carousel .carousel-indicators li {
            background-color: transparent;
            -webkit-border-radius: 0;
            border-radius: 0;
            display: inline-block;
            height: auto;
            margin: 0 !important;
            width: auto;
        }
        #product-carousel .carousel-indicators li img {
            display: block;
        }
        #product-carousel .carousel-outer {
            position: relative;
        }
        .carousel-indicators-li.active img{
            border: 2px solid #005cbf;
        }

        .product-description {
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .carousel-indicators {
            justify-content: flex-start;
        }
    </style>
    <div class="container ">
        <div class="row pt-5" style="height: 100px;"></div>
        <div class="row mt-5 " >
            <div class="col-8">
                <div class="card shadow-nav h-100"  >
                    <div class="card-body p-0">
                        <div id="product-carousel" class="carousel slide m-0" data-ride="carousel">
                            <div class="">
                                <div class=" col-12 carousel-inner p-0">
                                    @foreach($images as $i)
                                    <div class="carousel-item">
                                        <img class="d-block w-100 bg-secondary" src="{{$i}}" style="object-fit: contain;" height="440px" width="500px">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                                <ol class="carousel-indicators m-0 bg-dark text-right">
                                    @for($i = 0; $i < sizeof($images); $i++)
                                    <li class="carousel-indicators-li p-1 clickable"  data-target="#product-carousel" data-slide-to="{{$i}}">
                                        <img src="{{$images[$i]}}" height="90px" width="90px" style="object-fit: cover;" align="left">
                                    </li>
                                    @endfor
                                </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card h-100 rounded-0 text-white shadow-nav">
                    <div class="card-header bg-dark" >
                        <div class="container-fluid">
                            <div class="row mb-0">
                                <div class="col-8">
                                    <div class="row">
                                        <p class="col-12 text-left lead mb-1" style="font-size: 28px;">{{$product['name']}}</p>
                                    </div>
                                    <div class="row pb-0">
                                        <p class="col-12 text-left text-warning mb-1" style="font-size: 12px;">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($product['rating'] >= $i)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <p class="text-right" style="font-size: 36px;">$5</p>
                                </div>
                            </div>



                        </div>


                    </div>
                    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Palanquin" rel="stylesheet">
                    <div class="card-body text-secondary" >
                        <ul class="list-group" style="font-size: 15px;font-family: 'Palanquin', sans-serif;">
                            @foreach($features as $f)
                                <li class="list-group-item border-0 p-0 pb-2 pl-3"><i class="fas fa-check text-dark" style="font-size: 13px;"></i> <span class="p-2">{{$f}}</span></li>
                            @endforeach
                        </ul>
                        <div class="text-right">
                            <img class="text-right" src="http://i67.tinypic.com/2r2m9tk.png" height="100px">
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row p-1">
                            <a class="btn btn-dark btn-block text-white border" href='#'>
                                <i class="fas fa-desktop"></i> Demo
                            </a>
                        </div>
                        <div class="row p-1">
                            <button class="btn btn-success btn-block text-white cart-add" data-url="{{route('addToCartREST', $product['id'])}}" >
                                <i class="fas fa-shopping-cart"></i> Add to cart
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-5 " style="height: 400px;">
            <div class="col-12">
                <div class="card rounded-0 h-100 shadow-nav"  >
                    <div class="card-header bg-dark text-white rounded-0">
                        <p class="lead mb-0" style="font-size: 22px;">Details</p>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-8">
                                <p class="lead" style="font-size: 18px;">
                                    {{$product['details']}}
                                </p>
                            </div>
                            <div class="col-4" >
                                <ul class="list-group h-100" style="font-family: 'Palanquin', sans-serif;">
                                    @foreach($info as $i)
                                        <li class="list-group-item"><span class="p-2">{{$i}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="row pt-5" style="height: 100px;"></div>
        <div class="row ml-2 mt-5 mb-2 text-center">
            <p class="col-12 text-center lead" style="font-size: 32px;">You may also like</p>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="w-100 card pl-0 pr-0 clickable rounded-0 product-card" data-url="http://localhost/Git/AmarTheme/public/product/1">
                            <img src="http://i67.tinypic.com/6h8ec9.jpg" style="object-fit: cover;" height="290px" width="348px">
                            <div class="card-body p-4">
                                <div class="row">
                                    <p class="col-12 mb-1" style="font-size: 22px;">80's MOD</p>
                                </div>
                                <div class="row" style="height: 50px;">
                                    <p class="col-12 text-secondary">
                                        Joomla Template for Home Maintenance and Handyman Service Websites
                                    </p>
                                </div>
                                <div class="row align-middle pt-1" style="align-content: center">
                                    <p class="col-6 text-warning align-middle pt-2" style="font-size: 12px">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                    <h4 class="col-6 text-right align-middle">
                                        $5
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="w-100 card pl-0 pr-0 clickable rounded-0 product-card" data-url="http://localhost/Git/AmarTheme/public/product/2">
                            <img src="http://i66.tinypic.com/2najjw4.jpg" style="object-fit: cover;" height="290px" width="348px">
                            <div class="card-body p-4">
                                <div class="row">
                                    <p class="col-12 mb-1" style="font-size: 22px;">Bootshop</p>
                                </div>
                                <div class="row" style="height: 50px;">
                                    <p class="col-12 text-secondary">
                                        Joomla Template for Home Maintenance and Handyman Service Websites
                                    </p>
                                </div>
                                <div class="row align-middle pt-1" style="align-content: center">
                                    <p class="col-6 text-warning align-middle pt-2" style="font-size: 12px">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                    <h4 class="col-6 text-right align-middle">
                                        $5
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="w-100 card pl-0 pr-0 clickable rounded-0 product-card" data-url="http://localhost/Git/AmarTheme/public/product/3">
                            <img src="http://i65.tinypic.com/2vanla1.jpg" style="object-fit: cover;" height="290px" width="348px">
                            <div class="card-body p-4">
                                <div class="row">
                                    <p class="col-12 mb-1" style="font-size: 22px;">MayaShop</p>
                                </div>
                                <div class="row" style="height: 50px;">
                                    <p class="col-12 text-secondary">
                                        Joomla Template for Home Maintenance and Handyman Service Websites
                                    </p>
                                </div>
                                <div class="row align-middle pt-1" style="align-content: center">
                                    <p class="col-6 text-warning align-middle pt-2" style="font-size: 12px">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                    <h4 class="col-6 text-right align-middle">
                                        $5
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


@stop