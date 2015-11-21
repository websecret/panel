@extends('root')

@section('root')
    @include('partials.navbar')

    @include('partials.sidebar')

    <div class="main">
        @yield('main')
    </div>

    @include('partials.footer')
@stop
