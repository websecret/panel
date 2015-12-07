@extends('panel::root')

@section('root')
    @include('panel::partials.navbar')

    @include('panel::partials.sidebar')

    <div class="main">
        @yield('main')
        <a href="#" class="sidebar-overlay"></a>
    </div>

    @include('panel::partials.footer')
@stop
