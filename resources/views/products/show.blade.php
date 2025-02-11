@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="800">
    @endif
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
@endsection