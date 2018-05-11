@extends('layout')
@section('content')


@php
    $total = 0.0;
    foreach ($items as $i){
        $total += $i['price'] * $i['count'];
    }
    $refer = "";
@endphp
<script>
    $(document).ready(function () {
        var logged_in = false;
        @if(Session::has('email'))
            logged_in = true;
        @endif
        $('#checkout-button').click(function (e) {
           if(!logged_in){
               $('#login-message').html('Please login first');
               $('#login-message').show();
               $('#login-button').click();
               e.preventDefault();
           }
        });
    });

</script>

<div class="container p-5 " style="min-height: 700px;">
    <div class="row pl-5 mt-5">
        <div class="card ml-5 mr-5 w-100 mt-2 shadow-nav">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <p class="display-4" style="font-size: 32px;">Shopping Cart</p>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-danger text-right text-white mt-1" href="{{route('clearCart')}}">
                            <i class="fas fa-trash"></i> Clear
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th class="text-left "><p class="lead mb-0" style="font-size: 22px;">Name</p></th>
                        <th class="text-right"><p class="lead mb-0" style="font-size: 22px;">Price</p></th></tr>
                    </thead>
                    <tbody>
                    @foreach ($items as $i)
                    <tr>
                        <td style="width: 64px;">
                            <img src="{{$i['img']}}"  style="object-fit: cover;" align="right" height="128px" width="188px">
                        </td>
                        <th class="text-left "><p class="lead mb-0" style="font-size: 18px;">{{$i['name']}}</p></th>
                        <th class="text-right"><p class="lead mb-0" style="font-size: 28px;">{{formatPrice($i['price'])}}</p></th>

                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td class="text-right"><h4 class="lead" style="font-size: 36px;">Total:</h4> </td>
                        <td class="text-right"><h4 class="lead" style="font-size: 36px;">{{formatPrice($total)}}</h4></td>
                    </tr>
                    </tfoot>

                </table>

            </div>

            <div class="footer m-3">
                <form class="row" method="post" action="{{url('checkout')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="total" value="{{ $total }}">
                    <div class="col-6 text-left">
                        <a class="btn btn-warning text-white" href="{{URL::previous()}}">
                            <i class="fas fa-chevron-left"></i> Continue shopping
                        </a>
                    </div>

                    <div class="col-6 text-right">
                        <button id='checkout-button' type="submit" class="btn btn-primary text-white">
                            Proceed to checkout
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop