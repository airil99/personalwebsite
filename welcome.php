<?php
// Start the session at the beginning of the file (if needed)
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRIL DENIAL</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f0f4f7;
            color: white;
        }

        .navbar {
            background-color: transparent !important; /* Make the navbar background transparent */
            position: absolute; /* Make the navbar stay on top of the image */
            width: 100%; /* Full width */
            z-index: 10; /* Ensure the navbar stays on top of other elements */
        }

        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }

        .hero {
            position: relative;
            height: 70vh;
            overflow: hidden; /* Prevent video overflow */
        }

        .hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 1;
            transform: translate(-50%, -50%); /* Center the video */
        }

        .hero-content {
            position: relative;
            z-index: 2; /* Ensure text is above the video */
            display: flex; /* Enable flexbox */
            flex-direction: column; /* Align items in a column */
            justify-content: center; /* Center items vertically */
            align-items: center; /* Center items horizontally */
            height: 100%; /* Ensure it takes full height of the hero section */
            text-align: center;
            color: white;
            font-family: "Times New Roman", Times, serif;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #1976d2;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .features {
            padding: 50px 0;
            background-color: white;
            text-align: center;
            color: #333;
        }

        .features h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            font-family: "Times New Roman", Times, serif;
            color: black;
        }

        .footer {
            background-color: #0d6f78;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }

        /* Button Row Styling */
        .button-row {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    

    <!-- Hero Section -->
    <section class="hero">
        <video autoplay muted loop class="hero-video">
            <source src="pictures/vid1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container hero-content">
            <h1>WELCOME TO AIRIL DENIAL PERSONAL WEBSITE</h1>
            <p>Experience the balance and wellness that comes with professional cupping therapy.</p>
            <div class="button-row">
            <a href="biodata.html" class="btn btn-custom">Biodata</a>
            <a href="hobbies.html" class="btn btn-custom">Hobbies</a>
                <a href="campuslife.html" class="btn btn-custom">Campus Life</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Muhammad Airil Denial | All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

