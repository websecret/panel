<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @include('panel::partials.styles')
</head>

<body class="@yield('body_class')">

@yield('root')

@include('panel::partials.scripts')

</body>
</html>								
