@extends('layout')
@section('content')
<h2>Edit Product</h2>
<form method="POST" action="{{ route('products.update', $product) }}">
    @csrf @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}">
    <input type="text" name="price" value="{{ $product->price }}">
    <textarea name="description">{{ $product->description }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection
