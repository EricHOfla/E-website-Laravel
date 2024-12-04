   @extends('layouts.navbar')
    @section('content')
    
    <div class="containerr">
        <h1 class="title">Welcome to MyApp!</h1>
        <p class="description">
            Your one-stop solution for managing products, services, and more.
        </p>
        <a href="{{ route('products.form') }}" class="button">Create a Product</a>
    </div>
    @endsection

