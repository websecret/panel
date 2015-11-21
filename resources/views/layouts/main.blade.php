@extends('panel::root')

@section('root')
    @include('panel::partials.navbar')

    @include('panel::partials.sidebar')

    <div class="main">
        @yield('main')
    </div>

    @include('panel::partials.footer')
@stop
