<?php
// Get current page for active nav link
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'MIDAS Skills - Where Talent Meets Opportunity. Workforce solutions, apprenticeships, upskilling and corporate training.'; ?>">
  <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'skill development, apprenticeship, workforce solutions, corporate training, NAPS, WILP, upskilling, MIDAS Skills'; ?>">
  <meta name="author" content="MIDAS Skills">
  <meta name="robots" content="index, follow">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'MIDAS Skills'; ?>">
  <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Where Talent Meets Opportunity'; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://midasskills.org/">
  <meta property="og:image" content="http://midasskills.org/images/og-image.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'MIDAS Skills'; ?>">
  <meta name="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Where Talent Meets Opportunity'; ?>">

  <title><?php echo isset($pageTitle) ? $pageTitle . ' | MIDAS Skills' : 'MIDAS Skills - Where Talent Meets Opportunity'; ?></title>

  <!-- Canonical -->
  <link rel="canonical" href="http://midasskills.org/<?php echo $currentPage; ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/logo.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Schema.org -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "MIDAS Skills",
    "url": "http://midasskills.org",
    "description": "Where Talent Meets Opportunity - Workforce solutions, apprenticeships, and corporate training",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "428A, 427D & 427E, Jai Ganesh Vision Mall, Akurdi Chowk, A Wing",
      "addressLocality": "Pimpri-Chinchwad",
      "addressRegion": "Maharashtra",
      "postalCode": "411035",
      "addressCountry": "IN"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91-9223005179",
      "contactType": "customer service"
    }
  }
  </script>
</head>
<body>

  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-left">
        <a href="tel:+919223005179"><i class="fas fa-phone"></i> +91 9223 00 5179</a>
        <a href="mailto:info@midasskills.org"><i class="fas fa-envelope"></i> info@midasskills.org</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i> Pune, Maharashtra</a>
      </div>
      <div class="top-bar-right">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar" role="navigation" aria-label="Main Navigation">
    <div class="nav-container">
      <a href="index.php" class="nav-logo" aria-label="MIDAS Skills Home">
        <img src="images/logo.png" alt="MIDAS Skills Logo" width="160" height="45">
      </a>

      <ul class="nav-links" id="navLinks">
        <li><a href="index.php" class="<?php echo $currentPage == 'index.php' ? 'active' : ''; ?>">Home</a></li>
        <li><a href="about.php" class="<?php echo $currentPage == 'about.php' ? 'active' : ''; ?>">About Us</a></li>
        <li><a href="services.php" class="<?php echo $currentPage == 'services.php' ? 'active' : ''; ?>">Services</a></li>
        <li><a href="csr.php" class="<?php echo $currentPage == 'csr.php' ? 'active' : ''; ?>">CSR</a></li>
        <li><a href="career.php" class="<?php echo $currentPage == 'career.php' ? 'active' : ''; ?>">Career</a></li>
        <li><a href="gallery.php" class="<?php echo $currentPage == 'gallery.php' ? 'active' : ''; ?>">Gallery</a></li>
        <li><a href="blog.php" class="<?php echo $currentPage == 'blog.php' ? 'active' : ''; ?>">Blog</a></li>
        <li><a href="contact.php" class="<?php echo $currentPage == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
      </ul>

      <div class="nav-right">
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">🌙</button>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </nav>
