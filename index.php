<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fayama Stays - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background: url('assets/images/hero.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .property-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .property-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Fayama Stays</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Properties</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="#">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <h1>Find Your Perfect Stay</h1>
    <p>Discover and book unique homes and experiences all over Nairobi</p>
    <form class="d-flex justify-content-center">
        <input type="text" class="form-control w-50 me-2" placeholder="Search location...">
        <button class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Featured Properties -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Featured Listings</h2>
    <div class="row">
        <?php
        // Sample Properties (Later, fetch from database)
        $properties = [
            ["Luxury Kilimani", "Kilimani", "5000", "assets/images/house1.jpg"],
            ["Whispering Pines", "Karen", "8000", "assets/images/house2.jpg"],
            ["Elysian Stays", "Westlands", "6000", "assets/images/house3.jpg"]
        ];

        foreach ($properties as $property) {
            echo "
            <div class='col-md-4 mb-4'>
                <div class='card property-card'>
                    <img src='{$property[3]}' alt='Property Image'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$property[0]}</h5>
                        <p class='card-text'>{$property[1]} - KES {$property[2]}/night</p>
                        <a href='#' class='btn btn-primary'>View Details</a>
                    </div>
                </div>
            </div>
            ";
        }
        ?>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center py-3 mt-5">
    <p>&copy; 2025 Fayama Stays. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
