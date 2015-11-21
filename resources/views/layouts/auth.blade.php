@extends('panel.root')

@section('body_class', 'login')

@section('root')
    <div class="container">
        <div class="row">
            @yield('auth')
        </div>
    </div>
@stop
