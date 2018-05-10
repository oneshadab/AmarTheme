@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="row mt-5 mb-5">a</div>
        <div class="card">
            <div class="card-body text-center" style="height: 16em; line-height: 12em;">
                <a class="btn btn-primary text-white roboto" href="{{route('cart_download')}}" style="vertical-align: middle">
                    Complete Payment <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop