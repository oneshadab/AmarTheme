@extends('layout')
@section('content')
    @if(Session::has('email'))
        <div class="alert alert-danger success-block">
            <strong>Welcome{{Session::get('email')}}</strong>
            <br />
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
    @else
        {{"GO HOME"}}
    @endif
@stop