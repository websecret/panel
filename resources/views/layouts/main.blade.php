@extends('panel::root')

@section('root')
    <div id="wrapper">
        @include('panel::layouts.partials.sidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('panel::layouts.partials.navbar')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    @include('panel::layouts.partials.breadcrumbs')
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        @yield('actions')
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                @include('panel::helpers.alert')
                @yield('main')
            </div>
            @include('panel::layouts.partials.footer')
        </div>
    </div>
@stop