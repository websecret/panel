@extends('root')

@section('body_class')login
@stop

@section('root')
    <div class="container">
        <div class="row">
            @yield('auth')
        </div>
    </div>
@stop
