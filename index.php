<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova-Buy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f3f2;
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
            color: #ffcc00 !important;
        }
        .container {
            max-width: 1300px;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
        }
        .product-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-imgs {
            width: 100%;
            height: 196px;
            border-radius: 10px;
        }
        .btn-buy {
            background-color: #ffa500;
            color: white;
            font-weight: bold;
        }
        /* Styled Search Bar */
        .search-container {
            position: relative;
            max-width: 500px;
            margin: 20px auto;
        }
        .search-container input {
            width: 100%;
            padding: 12px 45px;
            border-radius: 25px;
            border: 2px solid #ffa500;
            outline: none;
            font-size: 16px;
            transition: 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .search-container input:focus {
            border-color: #ffcc00;
            box-shadow: 0 4px 12px rgba(255, 165, 0, 0.3);
        }
        .search-container .fa-search {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ffa500;
            font-size: 18px;
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
                    <li class="nav-item"><a class="nav-link" href="clothes.html"><i class="fas fa-tshirt"></i> Clothes</a></li>
                    <li class="nav-item"><a class="nav-link" href="phones.html"><i class="fas fa-mobile-alt"></i> Phones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_login.html"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1><b>Welcome to Nova-Buy!</b></h1>
        <p>Your one-stop shop for everything you need.</p>

        <!-- Styled Search Bar -->
        <div class="search-container">
            <i class="fas fa-search"></i>
            <input type="search" placeholder="Search your desired products...">
        </div>
    </div>

    <!-- Product Listings -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product-card">
                    <img src="images/hphone.jpeg" class="product-imgs">
                    <h5>Wireless Headphones</h5>
                    <p>$120 | In Stock: 15</p>
                    <button class="btn btn-buy btn-block">Buy Now</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="images/phone.jpg" class="product-imgs">
                    <h5>Smartphone X</h5>
                    <p>$699 | In Stock: 8</p>
                    <button class="btn btn-buy btn-block">Buy Now</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="images/sofa.jpg" class="product-imgs">
                    <h5>Stylish Sofa</h5>
                    <p>$350 | In Stock: 5</p>
                    <button class="btn btn-buy btn-block">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center p-3" style="background-color: #563d2d; color: white; margin-top: 180px;">
        &copy; 2025 Nova-Buy | All rights reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
