<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova-Buy Smart Phones</title>
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
            background-color: #f8f9fa;
            color: #333;
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
            color: #42a5f5 !important;
        }

        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.pexels.com/photos/1294886/pexels-photo-1294886.jpeg');
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
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }

        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product-card:hover {
            transform: scale(1.03);
        }

        .product-card img {
            width: 100%;
            height: 300px;
            object-fit: contain;
            padding: 20px;
            background-color: #fff;
        }

        .product-info {
            padding: 1.5rem;
        }

        .specs {
            font-size: 0.9rem;
            color: #666;
            margin: 10px 0;
        }

        .price {
            color: #1a237e;
            font-weight: bold;
            font-size: 1.4rem;
        }

        .btn-buy {
            background-color: #1a237e;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 10px 20px;
        }

        .btn-buy:hover {
            background-color: #283593;
            color: white;
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
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-mobile-alt"></i> Nova-Buy Tech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-phone"></i> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div>
            <h2>Latest Smartphones</h2>
            <p>Discover cutting-edge mobile technology</p>
        </div>
    </div>

    <div class="product-grid">
        <div class="product-card">
            <img src="https://images.pexels.com/photos/404280/pexels-photo-404280.jpeg" alt="iPhone 14 Pro">
            <div class="product-info">
                <h3>iPhone 14 Pro</h3>
                <div class="specs">
                    <p>• 6.1" Super Retina XDR display</p>
                    <p>• A16 Bionic chip</p>
                    <p>• 48MP Triple camera system</p>
                    <p>• 256GB Storage</p>
                </div>
                <p class="price">$999.99</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.pexels.com/photos/1042143/pexels-photo-1042143.jpeg" alt="Samsung Galaxy S23">
            <div class="product-info">
                <h3>Samsung Galaxy S23 Ultra</h3>
                <div class="specs">
                    <p>• 6.8" Dynamic AMOLED 2X</p>
                    <p>• Snapdragon 8 Gen 2</p>
                    <p>• 200MP Quad camera</p>
                    <p>• 512GB Storage</p>
                </div>
                <p class="price">$1199.99</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.pexels.com/photos/47261/pexels-photo-47261.jpeg" alt="Google Pixel 7">
            <div class="product-info">
                <h3>Google Pixel 7 Pro</h3>
                <div class="specs">
                    <p>• 6.7" LTPO OLED display</p>
                    <p>• Google Tensor G2</p>
                    <p>• 50MP Triple camera</p>
                    <p>• 128GB Storage</p>
                </div>
                <p class="price">$899.99</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.pexels.com/photos/607812/pexels-photo-607812.jpeg" alt="OnePlus 11">
            <div class="product-info">
                <h3>OnePlus 11</h3>
                <div class="specs">
                    <p>• 6.7" AMOLED display</p>
                    <p>• Snapdragon 8 Gen 2</p>
                    <p>• 50MP Triple camera</p>
                    <p>• 256GB Storage</p>
                </div>
                <p class="price">$699.99</p>
                <button class="btn-buy btn btn-block">Add to Cart</button>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Nova-Buy Tech. All rights reserved.</p>
    </footer>
</body>
</html>
