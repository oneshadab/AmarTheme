@extends('layout')

@section('content')
    @php
        #Remove this snippet once backend is complete
        $product = array(
            'name' => "Product",
            "rating" => 3,
            "id" => 1,
            "details" => "lorem",
        );
        $images = array(
            "http://i68.tinypic.com/124j41d.png",
            "http://i68.tinypic.com/124j41d.png",
            "http://i68.tinypic.com/124j41d.png",
        )
    @endphp
    <script>
        $(document).ready(function ($) {
           $('.carousel-indicators-li').first().addClass('active');
           $('.carousel-item').first().addClass('active');

        });
    </script>
    <style type='text/css'>
        #product-carousel {
            margin: 20px auto;
        }
        #product-carousel .carousel-indicators {
            margin: 10px 0 0;
            overflow: auto;
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
    </style>
    <div class="container " style="height: 450px;">
        <div class="row mt-5 h-100" >
            <div class="col-8 h-100">
                <div class="card h-100"  >
                    <div class="card-body p-0">
                        <div id="product-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($images as $i)
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{$i}}" style="object-fit: cover;" height="350px" width="500px">
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
                            <ol class="carousel-indicators">
                                @for($index = 0; $index < sizeof($images); $index++)
                                    @php($i = $images[$index])
                                    <li class="carousel-indicators-li" data-target="#product-carousel" data-slide-to="{{$index}}">
                                        <img src="{{$i}}" height="80px">
                                    </li>
                                @endfor
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="container-fluid">
                            <h3 class="text-center">{{$product['name']}}</h3>
                            <h5 class="text-center">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($product['rating'] >= $i)
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </h5>
                            <div class="row">
                                <div class="col-6 text-right pl-4 pr-1">
                                    <button class="btn btn-primary btn-block">Demo</button>
                                </div>
                                <div class="col-6 text-left pl-1 pr-4">
                                    <button class="btn btn-primary btn-block">Add to cart</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-body" >

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop