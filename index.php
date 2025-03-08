<?php
session_start(); // Start the session

// Check if session exists (user is logged in)
if (!isset($_SESSION['email'])) {
    header("Location: sing.html"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Best Jal wala.com</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <script src="index.js" defer></script>
  <link rel="stylesheet" href="tanker2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="background-overlay">
  <nav class="nav" style="z-index: 999;">
    <i class="uil uil-bars navOpenBtn"></i>
    <div class="logos">
      <img src="logo.webp" alt="Water Supply Logo" class="logo">
      <a href="#" class="log">JAL Wala</a>
    </div>

    <ul class="nav-links">
      <i class="uil uil-times navCloseBtn"></i>
      <li><a class="ico" href="index.php">Home</a></li>
      <li><a class="ico" href="tanker2.html">Water Bottle</a></li>
      <li><a class="ico" href="aqua.html">Water Camper</a></li>
      <li><a class="ico" href="aqua.html">Water Tanker</a></li>
      <li><a class="ico" href="#">About Us</a></li>
      <li><a class="ico" href="feedback.php">Feedback</a></li>
      <li><a class="ico" href="sing.html">Login </a></li>
      <li><a class="ico" href="sing.html">Register</a></li>
    </ul>

    <i class="uil uil-search search-icon" id="searchIcon"></i>
    <div class="search-box">
      <i class="uil uil-search search-icon"></i>
      <input type="text" placeholder="Search here..." />
    </div>
  </nav>

  <!-- slider -->
  <div class="slider-container">
    <div class="slider">
        <div class="slide">
            <img src="/images/s5.jpeg" alt="Clean Water Supply">
            <div class="slide-content">
                <h2>Clean Water Supply</h2>
                <p>Providing fresh and clean water to communities.</p>
            </div>
        </div>
        <div class="slide">
            <img src="/images/aq.jpg" alt="Advanced Filtration">
            <div class="slide-content">
                <h2>Advanced Filtration</h2>
                <p>State-of-the-art filtration systems for pure water.</p>
            </div>
        </div>
        <div class="slide">
            <img src="/images/aq1.jpg" alt="Sustainable Solutions">
            <div class="slide-content">
                <h2>Sustainable Solutions</h2>
                <p>Eco-friendly water management for a better future.</p>
            </div>
        </div>
        <div class="slide">
            <img src="/images/water1.jpg" alt="24/7 Service">
            <div class="slide-content">
                <h2>24/7 Service</h2>
                <p>Round-the-clock support for uninterrupted water supply.</p>
            </div>
        </div>
    </div>
    <button class="prev-btn" aria-label="Previous slide">&lt;</button>
    <button class="next-btn" aria-label="Next slide">&gt;</button>
    <div class="dots"></div>
  </div>

  <!--  service section  -->
  <div>
    <section id="services" class="services">
      <h2>Our Services</h2>
      <div class="service-grid">
        <div class="service-card">
          <img src="\images\water-bottle-bottle-svgrepo-com.svg?height=100&width=100" alt="Water Conservation">
          <h3>Water Bottles</h3>
          <p>Implementing strategies to reduce water waste and improve efficiency.</p>
        </div>
        <div class="service-card">
          <img src="images\bottle-of-water-svgrepo-com.svg?height=100&width=100" alt="Water Quality Testing">
          <h3>Water Campers</h3>
          <p>Comprehensive analysis of water quality to ensure safety and purity.</p>
        </div>
        <div class="service-card">
          <img src="images\water-truck-svgrepo-com.svg?height=100&width=100" alt="Education Programs">
          <h3>Water Tankers</h3>
          <p>Raising awareness about water conservation through community outreach.</p>
        </div>
      </div>
    </section>
  </div>

  <!-- footer -->
  <footer>
    <div class="footer-content">
      <div class="social-icons">
        <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
        <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="icon"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
      </div>

      <ul class="footer-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <p>©2025 Jal Wala | All Rights Reserved</p>
    </div>
  </footer>
</body>

</html>
