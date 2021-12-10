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
<div class="container">
<div class="card card-bgcolor">

    <table class="table table-striped">
        <thead class="card-header">
        <tr>
            <td colspan="4" align="center">
                <sapn class="font-semibold text-xl">
                    <span class="" style="font-size:xxx-large;">Product</span>
                    </span>
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Remarks</th>

        </tr>
        </thead>
        <tbody>
            <tr valign="middle">
                <td>{{$product->name}}</td>
                <td width="20%">{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td width="25%">{{$product->remarks}}</td>
            </tr>
        </tbody>
    </table>
</div>
    <a href="{{ route('products.index') }}">Back to Listing</a>
</div>
</body>
</html>
