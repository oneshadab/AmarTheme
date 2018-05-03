@extends('layout')

@section('content')

    <script>
        $(document).ready(function () {
            $('#register-tab').click(function () {
                $('#register-form').show();
                $('#login-form').hide();
                $('#register-tab').addClass('active');
                $('#login-tab').removeClass('active');
            });
            $('#login-tab').click(function () {
                $('#register-form').hide();
                $('#login-form').show();
                $('#login-tab').addClass('active');
                $('#register-tab').removeClass('active');
            });
            $('#register-tab').trigger("click");
        })
    </script>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link text-dark active" id="register-tab" href="#">
                                    <i class="fas fa-user-plus"></i> Register
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark"  id="login-tab" href="#" >
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form id="register-form">
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