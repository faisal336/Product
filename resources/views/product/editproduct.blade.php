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
        <h1 align="center" class="bg-primary">Update Product</h1>
        <form action="{{ route('products.update', $products->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control mb-3" placeholder="Product Name" name="name" value="{{$products->name}}" required autofocus>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control mb-3" placeholder="Product Price" name="price" value="{{$products->price}}" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control mb-3" placeholder="Product Description" name="description" value="{{$products->description}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control mb-3" placeholder="Product Remarks" name="remarks" value="{{$products->remarks}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col-sm-6 mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-success btn-warning">Back</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>


