@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="row mt-5 mb-5">a</div>
        <div class="card">
            <div class="card-header">
                <h2 class="roboto text-center">Payment Gateway</h2>
            </div>
            <div class="card-body text-center" style="height: 16em; line-height: 12em;">
                <div class="row">
                    <div class="col-12">
                        <img src="http://i63.tinypic.com/k5397a.jpg">
                        <img src="http://i64.tinypic.com/n53cet.jpg">
                        <img src="http://i66.tinypic.com/slma9y.jpg">
                        <img src="http://i63.tinypic.com/2922pgg.jpg">

                    </div>
                </div>
                <div class="row">

                </div>

            </div>
            <div class="card-footer">
                <div class="col-12 text-right">
                    <a class="btn btn-primary text-white roboto" href="{{route('cart_download')}}" style="vertical-align: middle">
                        Complete Payment <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop