@extends('products.layout')

@section('content')
    <h2>{{ isset($product) ? 'Edit' : 'Create' }} Product</h2>
    <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product)) @method('PUT') @endif

        @include('products.form')
    </form>
@endsection
