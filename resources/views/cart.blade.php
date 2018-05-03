@extends('layout')
@section('content')


@php
    $items = array(
        array("name" => "Product", "image_url" => "http://i68.tinypic.com/124j41d.png", "price" => 100, "count" => 2),
        array("name" => "Product", "image_url" => "http://i68.tinypic.com/124j41d.png", "price" => 100, "count" => 2),
    );
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
                <h4>Shopping Cart</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th class="text-right">Price</th>
                        <th class="text-right">Quantity</th>
                        <th class="text-right">Cost</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($items as $i)
                    <tr>
                        <td style="width: 64px;">
                            <img src="{{$i['image_url']}}"  style="object-fit: cover;" align="right" height="128px" width="128px">
                        </td>
                        <td><?= $i['name']?></td>
                        <td class="text-right">{{$i['price']}}</td>
                        <td class="text-right">{{$i['count']}}</td>
                        <td class="text-right">{{$i['price'] * $i['count']}}</td>

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
                        <a class="btn btn-warning text-white" href="{{$refer}}">
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