@extends('layout')
@section('content')
<h2>Add Product</h2>
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="price" placeholder="Price">
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Save</button>
</form>
@endsection
