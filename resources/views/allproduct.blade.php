@extends('layouts.navbar')
@section('content')

    <div class="product-page-container">
        <h1>All Products</h1>
        
        <div class="products-container">
            <!-- Product 1 -->
            <div class="product-item">
                <img src="https://via.placeholder.com/200" alt="Product Image">
                <h3>Product Name 1</h3>
                <p class="description">This is a short description of the product.</p>
                <p class="price">$25.00</p>
                <button class="cta-button">Add to Cart</button>
            </div>

            <!-- Product 2 -->
            <div class="product-item">
                <img src="https://via.placeholder.com/200" alt="Product Image">
                <h3>Product Name 2</h3>
                <p class="description">This is a short description of the product.</p>
                <p class="price">$30.00</p>
                <button class="cta-button">Add to Cart</button>
            </div>

            <!-- Product 3 -->
            <div class="product-item">
                <img src="https://via.placeholder.com/200" alt="Product Image">
                <h3>Product Name 3</h3>
                <p class="description">This is a short description of the product.</p>
                <p class="price">$15.00</p>
                <button class="cta-button">Add to Cart</button>
            </div>

            <!-- Product 4 -->
            <div class="product-item">
                <img src="https://via.placeholder.com/200" alt="Product Image">
                <h3>Product Name 4</h3>
                <p class="description">This is a short description of the product.</p>
                <p class="price">$40.00</p>
                <button class="cta-button">Add to Cart</button>
            </div>

            <!-- Additional products can be added similarly -->
        </div>
    </div>
@endsection
