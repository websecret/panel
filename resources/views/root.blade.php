<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @include('panel::partials.styles')
</head>

<body class="@yield('body_class')">

@yield('root')

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<script>
    var urlUpload = '{{ route('panel::upload') }}';
    var urlUploadRedactor = '{{ route('panel::upload-redactor') }}';
    var urlUploadFroala = '{{ route('panel::upload-froala') }}';
</script>
@include('panel::partials.scripts')

</body>
</html>