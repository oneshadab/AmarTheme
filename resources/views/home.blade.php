
@extends('layout')
@section('content')
    @php
        #Remove this snippet once backend is complete


    @endphp
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
            <div class="row ml-2 mt-5 mb-2">
                <h4>
                    <i class="{{$c['icon']}}"></i>
                    {{ $c['title'] }}
                </h4>
            </div>

            <div class="card">
                <div class="row card-body">
                    @foreach($c['products'] as $p)
                    <div class="col-4">
                        <div class="row" >
                            <div class="col-2"></div>
                            <div class="col-9 card pl-0 pr-0 text-center clickable" data-url="{{route('product', $p['id'])}}">
                                <img src="{{ $p['img'] }}" style="object-fit: cover;" height="206px" width="265px">
                                <div class="row mt-1 p-1">
                                    <div class="col-12 mx-auto">
                                        <div class="row mx-auto">
                                            <h5 class="text-center mx-auto">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($p['rating'] >= $i)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                            </h5>
                                        </div>
                                        <div class="row mx-auto">
                                            <h4 class="mx-auto">{{ $p['name']  }}</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@stop