<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Furniture Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f3f2;
            color: #333;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .navbar {
            background-color: #563d2d;
            padding: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .navbar-brand {
            color: #ffa500 !important;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            color: #ffa500 !important;
            font-size: 1.1rem;
        }
        .navbar-nav .nav-link:hover {
            color: #ffcc00 !important;
        }

        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1555041469-a586c61ea9bc');
            height: 400px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 1rem;
        }

        .price {
            color: #2ecc71;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .btn-buy {
            background-color: #ffa500;
            color: white;
            font-weight: bold;
        }

        footer {
            background-color: #563d2d;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
     <!-- Navigation Bar -->
     <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-shopping-bag"></i> Nova-Buy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html"><i class="fas fa-info-circle"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"><i class="fas fa-phone"></i> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="furniture.html"><i class="fas fa-couch"></i> Furniture</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_login.html"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    

    <div class="hero">
        <div>
            <h2>Transform Your Space</h2>
            <p>Discover our exclusive collection of premium furniture</p>
        </div>
    </div>

    <div class="product-grid">
        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc" alt="Modern Sofa">
            <div class="product-info">
                <h3>Modern Sofa</h3>
                <p>Elegant and comfortable three-seater sofa</p>
                <p class="price">$999</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267" alt="Dining Table">
            <div class="product-info">
                <h3>Dining Table</h3>
                <p>Solid wood dining table for 6</p>
                <p class="price">$799</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1505693314120-0d443867891c" alt="Armchair">
            <div class="product-info">
                <h3>Luxury Armchair</h3>
                <p>Comfortable accent chair</p>
                <p class="price">$499</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1591129841117-3adfd313e34f" alt="Bed Frame">
            <div class="product-info">
                <h3>Queen Size Bed</h3>
                <p>Modern platform bed frame</p>
                <p class="price">$1299</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Nova-Buy. All rights reserved.</p>
    </footer>
</body>
</html>
