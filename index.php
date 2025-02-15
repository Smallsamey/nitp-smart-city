<?php

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certificate Application</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <nav>
    <div class="logo">
      <svg width="40" height="40" viewBox="0 0 40 40">
        <path d="M20 0L40 20L30 20L30 40L10 40L10 20L0 20Z" fill="#2196f3"/>
      </svg>
      NITP FCT
    </div>
    <div class="nav-links">
      <a href="https://smartcityplanner.com/about">About</a>
      <a href="login.html" class="btn btn-outline">Login</a>
      <a href="register.html" class="btn btn-primary">Register</a>
    </div>
  </nav>

  <main>
    <section class="hero">
      <div class="hero-content">
        <h1>Welcome to The Nigeria Institute of Town Planners(FCT Chapter) Website</p>
        <a href="register.html" class="btn btn-large btn-primary">Get Started</a>
      </div>
      <div class="hero-animation" id="cityAnimation"></div>
    </section>

    <section class="features">
      <h2>Explore Smart Cities</h2>
      <div class="feature-grid">
        <div class="feature-card">
          <i class="fas fa-city"></i>
          <h3>3D Visualization</h3>
          <p>Interactive 3D models of your urban planning projects</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-chart-line"></i>
          <h3>Data Analytics</h3>
          <p>Smart insights for better urban development decisions</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-leaf"></i>
          <h3>Sustainability Metrics</h3>
          <p>Track and optimize environmental impact</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-users"></i>
          <h3>Collaboration</h3>
          <p>Work together with stakeholders in real-time</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h4>NITP FCT</h4>
        <i class="fas fa-city"></i>
        <p>Building better cities through technology</p>
      </div>
      <div class="footer-section">
        <h4>Quick Links</h4>
        <a href="https://smartcityplanner.com/about">About</a>
        <a href="https://smartcityplanner.com/contact">Contact</a>
        <a href="https://smartcityplanner.com/privacy">Privacy Policy</a>
      </div>
      <div class="footer-section">
        <h4>Connect</h4>
        <div class="social-links">
          <a href="https://twitter.com/smartcityplanner"><i class="fab fa-twitter"></i></a>
          <a href="https://linkedin.com/company/smartcityplanner"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/smartcityplanner"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/cityAnimation.js"></script>
  <script src="main.js"></script>
</body>
</html>
