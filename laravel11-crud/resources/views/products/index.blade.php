@extends('products.layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Product List</h2>
        <a class="btn btn-primary" href="{{ route('products.create') }}">+ Add Product</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th><th>Name</th><th>Price</th><th>Stock</th><th>Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('products.show', $product) }}">Show</a>
                    <a class="btn btn-warning btn-sm" href="{{ route('products.edit', $product) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
