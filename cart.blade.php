@extends('layout')
@section('content')


@php
    $total = 0;
    foreach ($items as $i){
        $total += $i['price'] * $i['count'];
    }
    $refer = "";
@endphp
<div class="container p-5 " style="min-height: 700px;">
    <div class="row pl-5 mt-5">
        <div class="card ml-5 mr-5 w-100">
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
                        <th class="text-right"><p class="lead mb-0" style="font-size: 22px;">Price</p></th>
                        <th class="text-right"><p class="lead mb-0" style="font-size: 22px;">Quantity</p></th>
                        <th class="text-right"><p class="lead mb-0" style="font-size: 22px;">Cost</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($items as $i)
                    <tr>
                        <td style="width: 64px;">
                            <img src="{{$i['img']}}"  style="object-fit: cover;" align="right" height="128px" width="188px">
                        </td>
                        <th class="text-left "><p class="lead mb-0" style="font-size: 18px;">{{$i['name']}}</p></th>
                        <th class="text-right"><p class="lead mb-0" style="font-size: 18px;">${{$i['price']}}</p></th>
                        <th class="text-right"><p class="lead mb-0" style="font-size: 18px;">{{$i['count']}}</p></th>
                        <th class="text-right"><p class="lead mb-0" style="font-size: 18px;">${{$i['price'] * $i['count']}}</p></th>

                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"><h4 class="lead" style="font-size: 28px;">Total:</h4> </td>
                        <td class="text-right"><h4 class="lead" style="font-size: 28px;">${{$total}}</h4></td>
                    </tr>
                    </tfoot>

                </table>

            </div>

            <div class="footer m-3">
                <form class="row" method="post">
                    <input type="hidden" name="total" value="{{ $total }}">
                    <div class="col-6 text-left">
                        <a class="btn btn-warning text-white" href="{{URL::previous()}}">
                            <i class="fas fa-chevron-left"></i> Continue shopping
                        </a>
                    </div>

                    <div class="col-6 text-right">
                        <button type="submit" class="btn btn-primary text-white">
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