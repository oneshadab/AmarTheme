@extends('layout')
@section('content')


@php
    $total = 0;
    foreach ($items as $i){
        $total += $i['price'] * $i['count'];
    }
    $refer = "";
@endphp
<div class="container pb-5 " style="min-height: 700px;">
    <div class="row pl-5 mt-5">
        <div class="card ml-5 mr-5 w-100">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4>Shopping Cart</h4>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-danger text-right text-white" href="{{route('clearCart')}}">
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
                        <th><h5>Name</h5></th>
                        <th class="text-right"><h5>Price</h5></th>
                        <th class="text-right"><h5>Quantity</h5></th>
                        <th class="text-right"><h5>Cost</h5></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($items as $i)
                    <tr>
                        <td style="width: 64px;">
                            <img src="{{$i['img']}}"  style="object-fit: cover;" align="right" height="128px" width="128px">
                        </td>
                        <td><h5>{{$i['name']}}</h5></td>
                        <td class="text-right"><h5>{{$i['price']}}</h5></td>
                        <td class="text-right"><h5>{{$i['count']}}</h5></td>
                        <td class="text-right"><h5>{{$i['price'] * $i['count']}}</h5></td>

                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"><h4>Total:</h4> </td>
                        <td class="text-right"><h4>{{$total}}</h4></td>
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