
@extends('layout')
@section('content')
    @php
        #Remove this snippet once backend is complete


    @endphp
    <style>

    </style>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body row p-0 pl-3">
                <div class="col-4 p-0">
                    <img class="p-0 m-0" src="http://i66.tinypic.com/rcqces.jpg" height="300px" width="300px" style="object-fit: cover;">
                </div>
                <div class="col-8 pl-4">
                    <h3>Amar Theme</h3>
                    <p>Amar Theme is an online market .At Amartheme you can buy and sell HTML templates as well as themes for popular CMS products like WordPress,
                        Joomla and Drupal. Here product price is reasonable and fixed. We provide the customers with all types of facilities, guidelines to help them use the product with ease.
                        We welcome both local and interntional customers. We also provide them with easy payment method (according to their region).
                        The site is home to a bustling community of web designers and developers and is the biggest marketplace of its kind.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        @foreach($categories as $c)
            <div class="row ml-2 mt-5 mb-2 text-center">

            </div>

            <div class="row">
                    @foreach($c['products'] as $p)
                    <div class="col-4">
                        <div class="row" >
                            <div class="col-12">
                                <div class="w-100 card pl-0 pr-0 clickable rounded-0 product-card" data-url="{{route('product', $p['id'])}}">
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
                                            <h4 class="col-6 text-right align-middle">
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
        @endforeach
    </div>
@stop