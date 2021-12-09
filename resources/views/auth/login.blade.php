
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<style>
    body{
    background: lightcyan;
    }

</style>
<body>
<div class="row">
    <div class="col-md-6 mb-3">
        <h1>Please Login</h1>
    <x-jet-validation-errors class="mb-4 text-danger" />

    <form method="POST" action="{{ route('login') }}">
                @csrf
        <div class="row">
<div class="col-md-6 mb-3">
        <label for="email">{{ __('Email: ') }}</label><br />
        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required/>
</div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="password"><span>{{ __('Password: ') }}</span></label><br />
        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
        </div></div>
        <div class="row">
        <div class="col-md-6 mb-3">
        <label for="remember_me" class="flex items-center"></label>
        <input type="checkbox" class="" id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span></div>
        </div>
        <div class="row">
        <div class="col-md-12 mb-3">
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}</a>
            @endif</div></div>
        <div class="row">
            <div class="col-md-12 mb-3">
        <button class="btn btn-primary">
            {{ __('Log in') }}
        </button>
            </div>
        </div>
    </form>
    </div>
</div>

</body>
</html>
