<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Navbar</title>
    <style>
        body {
            background-color: #f7fafc; /* Light gray background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #ffffff; /* White background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 64px;
        }

        .brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: grey; /* Blue */
            text-decoration: none;
        }

        .menu {
            display: flex;
            gap: 16px;
        }

        .menu a {
            color: #374151; /* Gray */
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .menu a:hover {
            background-color: #e5e7eb; /* Light gray on hover */
            color: #1d4ed8; /* Blue on hover */
        }

        /* Mobile menu toggle */
        .toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
                gap: 8px;
                background-color: #ffffff;
                position: absolute;
                top: 64px;
                right: 16px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 16px;
                border-radius: 4px;
            }

            .menu.active {
                display: flex;
            }

            .toggle {
                display: block;
                cursor: pointer;
            }
        }
    


h1, h2, h3 {
    color: #222;
}

.container, .about-container, .product-page-container, .login-container, .register-container, .service-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Buttons */
button, .cta-button, .button {
    display: inline-block;
    background-color: grey;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
}

button:hover, .cta-button:hover, .button:hover {
    background-color: #0056b3;
}

/* Form Styles */
form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    margin-bottom: 5px;
    display: block;
    font-weight: bold;
}

.form-group input, .form-group textarea, .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.form-group .error {
    color: red;
    font-size: 12px;
}

button[type="submit"] {
    align-self: flex-start;
}

/* Products */
.products-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.product-item {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
}

.product-item img {
    max-width: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
}

.product-item h3 {
    font-size: 18px;
    margin: 10px 0;
}

.product-item .description {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.product-item .price {
    font-size: 16px;
    font-weight: bold;
    color: #666;
    margin-bottom: 10px;
}

/* Login & Register Pages */
.login-container, .register-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    /* text-align: center; */
}

.login-container h2, .register-container h2 {
    margin-bottom: 20px;
}

.form-footer {
    margin-top: 20px;
    font-size: 14px;
}

.form-footer a {
    color: #007BFF;
    text-decoration: none;
}

.form-footer a:hover {
    text-decoration: underline;
}

/* Services */
.service-section {
    margin-bottom: 20px;
}

.service-section h2 {
    margin-bottom: 10px;
    color: #444;
}

.service-section p {
    color: #555;
    line-height: 1.6;
}

/* Home Page */
.containerr {
    text-align: center;
    margin: 50px auto;
}

.title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 10px;
}

.description {
    font-size: 16px;
    margin-bottom: 20px;
}

/* Create Product Page */
.product-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.product-container h2 {
    margin-bottom: 20px;
}

/* Navbar (Optional Styling) */
.navbar {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

.navbar a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="{{ url('/') }}" class="brand">MyApp</a>
            <div class="toggle" id="menu-toggle">
                ☰
            </div>
            <div class="menu" id="menu">
                <a href="{{ url('/') }}">Welcome</a>
                <a href="{{Route('products.list')}}">Products</a>
                <a href="{{Route('products.form')}}">Create Products</a>
                <a href="{{url('/about')}}">About</a>
                <a href="{{url('/service')}}">Services</a>
                <a href="{{Route('login')}}">Login</a>
                <a href="{{Route('register')}}">Registration</a>
            </div>
        </div>
    </nav>
 @yield('content')

    <script>
        // Toggle mobile menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('menu');
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>
