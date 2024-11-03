@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="product-detail">
        <h1>{{ $product->name }}</h1>
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
        <p class="product-price">{{ number_format($product->price) }}</p>
        <p>{{ $product->description }}</p>
        <a href="{{ url('/products/') }}" class="btn btn-primary">戻る</a>
    </div>
@endsection