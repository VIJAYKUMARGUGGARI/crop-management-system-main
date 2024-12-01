<nav id="navbar-main" class="navbar navbar-expand-lg navbar-light bg-light position-sticky top-0 shadow py-0">
  <div class="container-fluid">
    <!-- Navbar Brand -->
    <a class="navbar-brand" href="index.php">Crop Management System</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
      aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar_global">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php" id="home-link">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="crop_prediction.php" id="crop-prediction-link">Crop Prediction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yield_prediction.php" id="yield-prediction-link">Yield Prediction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rainfall_prediction.php" id="rainfall-prediction-link">Rainfall Prediction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="crop_recommendation.php" id="crop-recommendation-link">Crop Recommendation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fertilizer_recommendation.php" id="fertilizer-recommendation-link">Fertilizer Recommendation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style>/* Navbar Brand Styling */
.navbar-brand {
  font-family: Arial, sans-serif;
  font-size: 30px;
  font-weight: bold;
  color: #4CAF50;
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: 10px;
  transition: all 0.3s ease;
}

.navbar-brand:hover {
  color: #FF5722;
  text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
}

/* Navbar Links Styling */
.navbar-nav .nav-item .nav-link {
  font-size: 16px;
  font-weight: 500;
  padding: 12px 20px;
  transition: all 0.3s ease;
  color: #333;
}

/* Navbar Active Link Styling */
.nav-link.active {
  color: #FF5733;
  border-bottom: 3px solid #FF5733;
}

/* Hover Effect for Links */
.navbar-nav .nav-item .nav-link:hover {
  color: #FF5722;
}

/* Make the navbar responsive on mobile */
@media (max-width: 768px) {
  .navbar-nav {
    text-align: center;
  }

  .navbar-nav .nav-item {
    margin: 10px 0;
  }

  .navbar-brand {
    font-size: 24px;
  }
}
</style>
<script>
  // Highlight the active page in the navbar
  document.querySelectorAll('.nav-link').forEach(link => {
    if (link.href === window.location.href) {
      link.classList.add('active');
    }
  });
</script>
