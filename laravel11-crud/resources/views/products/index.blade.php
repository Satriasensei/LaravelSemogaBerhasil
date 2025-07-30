@extends('layout')
@section('content')
<h2>Product List</h2>
<a href="{{ route('products.create') }}">Add New</a>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }} - ${{ $product->price }}
            <a href="{{ route('products.edit', $product) }}">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
