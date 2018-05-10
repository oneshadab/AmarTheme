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
        $filters = array(
            array("name" => "Category", "options" => array("E-Commerce", "Event", "WordPress")),
        );
    @endphp
    <div class="container pt-5">
        <div class="row ml-3 mt-5">
            <div class="col-6">
                <h4><i class="fas fa-list-ul"> </i> Your Products:</h4>
            </div>
            <div class="col-6 text-right">
                <button type="button" class="btn btn-primary text-right" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fas fa-upload"> </i> Upload
                </button>
            </div>
        </div>

        <div class="row ml-3">
            <div class="col-8 ">
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
                                            <h4 class="text-left pl-4">{{$r['name']}}</h4>
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
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('upload')}}" method='post' enctype="multipart/form-data">

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="description" >Description</label>
                                    <textarea class="form-control" type="text" name="description"id="description"></textarea>
                                </div>
                                @foreach($filters as $f)
                                    <div class="form-group">
                                        <label for="{{$f['name']}}">{{$f['name']}}</label>
                                        <select class="form-control" id="{{$f['name']}}" name='category'>
                                            @foreach($f['options'] as $op)
                                                <option>{{$op}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endforeach
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input class="form-control" type="text" name="price" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="image">File</label>
                                    <input class="form-control" type="file" id="image" name="zip">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-upload"> </i> Upload
                                </button>

                            </div>
                            {{ csrf_field() }}
                        </form>

                    </div>
                </div><div class="col-4 w-100 mt-4 mb-5">
                <div class="card w-100 shadow-nav" style="min-height: 500px;">
                    <div class="card-header bg-dark">
                        <h4 class="text-center text-white">
                            Profile
                        </h4>
                    </div>
                    <div class="card-body w-100 text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 pl-5 pr-5">
                                    <img class="rounded-circle w-100" src="http://i68.tinypic.com/124j41d.png">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 text-right">Name: </div>
                                <div class="col-6 text-left ">Antor </div>
                            </div>
                            <div class="row">
                                <div class="col-6 text-right">Age: </div>
                                <div class="col-6 text-left ">Male </div>
                            </div>
                            <div class="row">
                                <div class="col-6 text-right">Type: </div>
                                <div class="col-6 text-left ">Zunayed </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop