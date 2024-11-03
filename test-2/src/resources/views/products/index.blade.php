@extends('layouts.app')

@section('title', 'もぎたて')

@section('content')
    <link rel="stylesheet" href="css/index.css">
    <div class="container">
        <main class="top-contents">
            <div class="product-container">
                @foreach ($products as $product)
                <a href="{{ url('/products/' . $product->id) }}" class="product-tile">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
                        <div class="product-text">
                            <p class="product-name">{{ $product->name }}</p>
                            <p class="product-price">¥{{ number_format($product->price) }}</p>
                        </div>
                </a>
                @endforeach
            </div>
            <div class="pagination">
            {{ $products->links() }}
            </div>
        </main>
    </div>
@endsection