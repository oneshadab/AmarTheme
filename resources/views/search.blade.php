@extends('layout')
@section('content')

    @php
        #Remove this snippet once backend is complete
        $results = array(
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
        );
    @endphp
    <div class="container">
        <div class="row ml-3 mt-5"><h4><i class="fas fa-search"> </i> Search Results:</h4></div>

        <div class="row">
            <div class="col-3 w-100 mt-4">

                <div class="card w-100">
                    <div class="card-body w-100">
                        <img src="http://i63.tinypic.com/xe4osi.png" height="450px">
                    </div>
                </div>
                <div class="card w-100 mt-3">
                    <div class="card-body w-100">
                        <img src="http://i64.tinypic.com/2chmdug.png" height="250px">
                    </div>
                </div>
            </div>
            <div class="col-9   ">
                <div class="row mt-2">
                </div>
                @foreach($results as $r)
                <div class="row mt-3 mr-1">
                    <div class="col-12 card">
                        <div class="row clickable card-body p-0" data-url="#">
                            <div class="col-3 p-0">
                                <img src="{{$r['img']}}" height="190px" width="190px" style="object-fit: cover;">
                            </div>
                            <div class="col-9 w-100 p-3">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="text-left">{{$r['name']}}</h4>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="text-right">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($r['rating'] >= $i)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </h5>
                                        <div class="row mt-5"></div>
                                        <div class="text-right mt-5">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-shopping-cart"></i> Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>


                </div>

            </div>
                @endforeach
        </div>
    </div>
    </div>
@stop