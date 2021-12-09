<html>
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<sapn class="font-semibold text-xl leading-tight">
    <h1 align="center">Welcome to the Dashboard</h1>
</sapn>

<a href="{{ route('products.index') }}">{{ __('Go to Product') }}</a>

