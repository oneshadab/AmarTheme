
@extends('layout')
@section('content')
    @php
        #Remove this snippet once backend is complete


    @endphp
    <script>
        $(document).ready(function ($) {
            var navbar = $('.nav-row');
            navbar.css('transition', 'all 300ms ease-in');
            $(window).scroll(function(){
                if($(window).scrollTop() >= 40){
                    navbar.css('background', 'linear-gradient(145deg, #349aed 50%, #34d8ed 100%');
                    navbar.css('box-shadow', '0 1px 2px rgba(0, 0, 0, 0.3)');
                } else {
                    navbar.css('background', 'none');
                    navbar.css('box-shadow', 'none');
                }
            });
        });
    </script>
    <style>
        .splash {
            padding: 12em 0 6em;
            background: #349aed;
            background-image: url('http://i68.tinypic.com/a1kcxf.jpg');
            background-size: 100%;
            color: #fff;
            text-align: center;
        }
        .nav-row{
            background: none;
            box-shadow: none;
        }
    </style>
    <div class="container-fluid splash" style="min-height: 500px;">
        <div class="col-12 fade">
            <div class="row">
                <h1 class="col-12 roboto">Welcome to Amar Theme</h1>
            </div>
            <div class="row">
                <h1 class="col-12 roboto" style="font-size: 18px;">Jinish jeta bhalo, dam tar ektu beshi...</h1>
            </div>
            <div class="row">
                <form class="mx-auto col-7">
                    <div class="input-group py-5">
                        <input class="form-control border-light py-3 roboto" type="search" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn bg-transparent text-white btn-outline-light px-5">
                                <h4><i class="fas fa-search"></i></h4>
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-12 text-center">
                <h2 class="roboto fade">Most popular</h2>
            </div>
        </div>
        @foreach($categories as $c)
            <div class="row">
                    @foreach($c['products'] as $p)
                    <div class="col-4">
                        <div class="row" >
                            <div class="col-12">
                                <div class="w-100 card pl-0 pr-0 clickable rounded-0 product-card fade" data-url="{{route('product', $p['id'])}}">
                                    <img src="{{ $p['img'] }}" style="object-fit: cover;" height="290px" width="348px">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <p class="col-12 mb-1" style="font-size: 22px;">{{ $p['name']  }}</p>
                                        </div>
                                        <div class="row" style="height: 50px;">
                                            <p class="col-12 text-secondary">
                                                Joomla Template for Home Maintenance and Handyman Service Websites
                                            </p>
                                        </div>
                                        <div class="row align-middle pt-1" style="align-content: center">
                                            <p class="col-6 text-warning align-middle pt-2" style="font-size: 12px">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($p['rating'] >= $i)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                            </p>
                                            <h4 class="col-6 text-right align-middle roboto">
                                                $5
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>
            <div class="row ml-2 mt-3 mb-2 text-center">
            </div>
        @endforeach
    </div>
@stop