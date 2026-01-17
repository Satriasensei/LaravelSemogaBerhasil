@extends('products.layout')

@section('content')
    <h2>Show Product</h2>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
@endsection
