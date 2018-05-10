
@extends('layout')
@section('content')
    @php
        #Remove this snippet once backend is complete


    @endphp
    <div class="container mt-5">
        <div class="row mt-5">a</div>
        <div class="row mt-5 mb-3">
            <div class="col-12 text-center">
                <h2 class="roboto amar-fade">My Products</h2>
            </div>
        </div>
        @foreach($categories as $c)
            <div class="row">
                @foreach($c['products'] as $p)
                    <div class="col-4">
                        <div class="row" >
                            <div class="col-12">
                                <div class="w-100 card pl-0 pr-0 clickable rounded-0 product-card amar-fade shadow-nav" data-url="{{route('product', $p['id'])}}">
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
                                            <div class="col-6 text-right">
                                                <a class="btn btn-success text-white" href="#">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
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