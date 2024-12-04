
@extends('layouts.navbar')
@section('content')

<div class="product">

    <div class="product-container">
        <h2>Create Product</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Product Name -->
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" placeholder="Enter product name" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Description -->
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea id="description" name="description" rows="4" placeholder="Enter product description" required></textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*" required>
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Stack -->
            <div class="form-group">
                <label for="stack">Stack</label>
                <input type="number" placeholder="Enter Stock Qality">
                @error('stack')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
