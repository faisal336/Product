<html>
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-sm-6">
        <h1 align="center" class="bg-primary">Add New Product</h1>
        <form acction="{{ route('products.store') }}" method="GET">
                @csrf
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

</body>
</html>
