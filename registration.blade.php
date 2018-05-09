@extends('layout')

@section('content')

    <script>
        function activateElem(elem){
            elem.addClass('active');
            elem.removeClass('disabled');
            elem.addClass('text-dark');
            elem.removeClass('text-white')
        }
        function deactivateElem(elem){
            elem.removeClass('active');
            elem.addClass('disabled');
            elem.removeClass('text-dark');
            elem.addClass('text-white')
        }
        $(document).ready(function () {
            $('#register-tab').click(function () {
                $('#register-form').show();
                $('#login-form').hide();
                activateElem($('#register-tab'));
                deactivateElem($('#login-tab'));
                event.stopPropagation();
            });
            $('#login-tab').click(function () {
                $('#register-form').hide();
                $('#login-form').show();
                activateElem($('#login-tab'));
                deactivateElem($('#register-tab'));
                event.stopPropagation();

            });
            $('#register-tab').trigger("click");
        })
    </script>
    <style>
        button:focus {outline:0 !important;}
    </style>
    <div class="container">
        <div class="row" style="height: 100px"></div>
        <div class="row mt-lg-5">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-nav text-white">
                        <ul class="nav nav-tabs card-header-tabs w-100">
                            <li class="nav-item w-50">
                                <button class="nav-link text-dark active w-100" id="register-tab">
                                    <i class="fas fa-user-plus"></i> Register
                                </button>
                            </li>
                            <li class="nav-item w-50">
                                <button class="nav-link text-white w-100 disabled"  id="login-tab" href="#" >
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body pb-0">
                        <form id="register-form" class="roboto">
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="email">Name: </label>
                                <div class="col-9"> <input type="text" class="form-control" name="name" placeholder="Full name"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="email">Email: </label>
                                <div class="col-9"> <input type="text" class="form-control" name="email" placeholder="Email"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="email">Password: </label>
                                <div class="col-9"> <input type="password" class="form-control" name="password" placeholder="Password"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="email">Confirm: </label>
                                <div class="col-9"> <input type="password" class="form-control" placeholder="Confirm"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-check"></i>
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form id="login-form" action="{{ url('/validate') }}" method="post">
                            <div class="form-group row">
                                {{ csrf_field() }}
                                <label class="col-3 col-form-label" for="email">Email: </label>
                                <div class="col-9"> <input type="text" class="form-control" name="email" placeholder="Email"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="email">Password: </label>
                                <div class="col-9"> <input type="password" class="form-control" name="password" placeholder="Password"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-check"></i>
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop