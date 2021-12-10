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
    <div class="row">
        <div class="col-sm-6">
            <h1 align="center" class="bg-primary">Add New Product</h1>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control mb-3" placeholder="Product Name" name="name"  autofocus>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control mb-3" placeholder="Product Price" name="price" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control mb-3" placeholder="Product Description"
                               name="description" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control mb-3" placeholder="Product Remarks" name="remarks"
                               required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary">Create</button>
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
</div>
</body>
</html>

