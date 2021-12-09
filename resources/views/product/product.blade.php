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
<sapn class="font-semibold text-xl leading-tight">
    <h1 align="center">Welcome to Products</h1>
    <a type="button" class="btn btn-primary" href="{{route('products.create')}}">Add New Product</a>
</sapn>

<div class="card card-bgcolor">
    <table class="table table-striped">
        <thead class="card-header">
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Remarks</th>
            <th colspan="2">Action</th>

        </tr>
        </thead>
        <tbody>
        @php $i=1 @endphp
        @forelse($products as $product)
            <tr valign="middle">
                <th>{{$loop->iteration}}</th>
                <td>{{$product->name}}</td>
                <td width="20%">{{$product->price}}</td>
                <td>{{$product->price}}</td>
                <td width="25%">{{$product->remarks}}</td>
                <td class="d-flex">
                    <a type="button" href="" class="">Edit</a> &nbsp;&nbsp;
                    <form method="POST" action="{{ route('products.destroy',$product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="confirm('Are You Sure To Delete this Product')">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td scope="row" class="text-center" colspan="6">No Products found</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
