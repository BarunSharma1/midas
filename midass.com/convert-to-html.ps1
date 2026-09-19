# Convert PHP pages to static HTML for GitHub Pages
$basePath = "d:\xamp\htdocs\midass.com"

# Define page-specific metadata
$pages = @{
    "about" = @{
        title = "About Us | MIDAS Skills"
        desc = "Learn about MIDAS Skills - Leading force in skill development, apprenticeship programs, and workforce solutions."
        keywords = "about MIDAS Skills, skill development company, apprenticeship India, workforce solutions"
    }
    "services" = @{
        title = "Services | MIDAS Skills"
        desc = "MIDAS Skills services - Apprenticeship Advisory, WILP, Workforce Services, and Corporate Upskilling solutions."
        keywords = "apprenticeship services, WILP, workforce services, corporate upskilling, NAPS, NATS"
    }
    "csr" = @{
        title = "CSR | MIDAS Skills"
        desc = "MIDAS Skills CSR initiatives - Corporate Social Responsibility led skill development programs."
        keywords = "CSR skill development, corporate social responsibility training, youth empowerment"
    }
    "career" = @{
        title = "Career | MIDAS Skills"
        desc = "Join MIDAS Skills - Explore career opportunities in skill development and workforce solutions."
        keywords = "MIDAS Skills careers, jobs in skill development, workforce jobs, HR careers"
    }
    "gallery" = @{
        title = "Gallery | MIDAS Skills"
        desc = "MIDAS Skills photo gallery - View our training sessions, events, CSR programs."
        keywords = "MIDAS Skills gallery, training photos, skill development events"
    }
    "blog" = @{
        title = "Blog | MIDAS Skills"
        desc = "MIDAS Skills Knowledge Center - Latest insights on skill development, apprenticeships, workforce trends."
        keywords = "skill development blog, apprenticeship news, workforce insights"
    }
    "contact" = @{
        title = "Contact Us | MIDAS Skills"
        desc = "Contact MIDAS Skills - Get in touch for workforce solutions and apprenticeship advisory."
        keywords = "contact MIDAS Skills, workforce solutions inquiry, apprenticeship consultation"
    }
}

foreach ($page in $pages.Keys) {
    $phpFile = "$basePath\$page.php"
    if (-not (Test-Path $phpFile)) {
        Write-Host "Skipping $page.php - file not found"
        continue
    }

    # Read PHP content
    $phpContent = Get-Content $phpFile -Raw

    # Extract body content (between include header and include footer)
    $bodyMatch = [regex]::Match($phpContent, "(?s)include\s+'includes/header\.php';\s*\?>(.*?)<\?php\s+include\s+'includes/footer\.php'")
    if (-not $bodyMatch.Success) {
        Write-Host "Could not extract body from $page.php"
        continue
    }
    $bodyContent = $bodyMatch.Groups[1].Value

    # Replace .php links with .html
    $bodyContent = $bodyContent -replace '\.php"', '.html"'
    $bodyContent = $bodyContent -replace "\.php'", ".html'"

    # Update old color references
    $bodyContent = $bodyContent -replace '#0a0e1a', '#0B1B2B'
    $bodyContent = $bodyContent -replace '#1a2035', '#142D42'
    $bodyContent = $bodyContent -replace '#111827', '#0F2236'
    $bodyContent = $bodyContent -replace 'rgba\(212,168,67', 'rgba(232,112,42'

    $meta = $pages[$page]

    $html = @"
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="$($meta.desc)">
  <meta name="keywords" content="$($meta.keywords)">
  <meta name="author" content="MIDAS Skills">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="$($meta.title)">
  <meta property="og:description" content="$($meta.desc)">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://midasskills.org/$page.html">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="$($meta.title)">
  <title>$($meta.title)</title>
  <link rel="canonical" href="http://midasskills.org/$page.html">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "MIDAS Skills",
    "url": "http://midasskills.org",
    "description": "Where Talent Meets Opportunity"
  }
  </script>
</head>
<body>
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

  <nav class="navbar" role="navigation" aria-label="Main Navigation">
    <div class="nav-container">
      <a href="index.html" class="nav-logo" aria-label="MIDAS Skills Home">
        <img src="images/logo.png" alt="MIDAS Skills Logo" width="160" height="45">
      </a>
      <ul class="nav-links" id="navLinks">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html" $(if($page -eq 'about'){'class="active"'})>About Us</a></li>
        <li><a href="services.html" $(if($page -eq 'services'){'class="active"'})>Services</a></li>
        <li><a href="csr.html" $(if($page -eq 'csr'){'class="active"'})>CSR</a></li>
        <li><a href="career.html" $(if($page -eq 'career'){'class="active"'})>Career</a></li>
        <li><a href="gallery.html" $(if($page -eq 'gallery'){'class="active"'})>Gallery</a></li>
        <li><a href="blog.html" $(if($page -eq 'blog'){'class="active"'})>Blog</a></li>
        <li><a href="contact.html" $(if($page -eq 'contact'){'class="active"'})>Contact</a></li>
      </ul>
      <div class="nav-right">
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">$(([char]0x1F319))</button>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </nav>

$bodyContent

  <section class="cta-section">
    <div class="container">
      <h2>Ready to Transform Your Workforce?</h2>
      <p>Partner with MIDAS Skills for comprehensive workforce solutions and skill development programs.</p>
      <a href="contact.html" class="btn btn-primary">Get in Touch $(([char]0x2192))</a>
    </div>
  </section>

  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-about">
          <h3>MIDAS Skills</h3>
          <p>We build lasting partnerships by delivering talent development, employment programs, and business process support.</p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div>
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.html">$(([char]0x2192)) Home</a></li>
            <li><a href="about.html">$(([char]0x2192)) About Us</a></li>
            <li><a href="services.html">$(([char]0x2192)) Services</a></li>
            <li><a href="csr.html">$(([char]0x2192)) CSR</a></li>
            <li><a href="career.html">$(([char]0x2192)) Career</a></li>
            <li><a href="gallery.html">$(([char]0x2192)) Gallery</a></li>
            <li><a href="blog.html">$(([char]0x2192)) Blog</a></li>
            <li><a href="contact.html">$(([char]0x2192)) Contact</a></li>
          </ul>
        </div>
        <div>
          <h3>Contact Info</h3>
          <ul class="footer-contact">
            <li><span class="icon"><i class="fas fa-map-marker-alt"></i></span><span>428A, Jai Ganesh Vision Mall, Akurdi Chowk, Pune - 411035</span></li>
            <li><span class="icon"><i class="fas fa-phone"></i></span><span><a href="tel:+919223005179">+91 9223 00 5179</a></span></li>
            <li><span class="icon"><i class="fas fa-envelope"></i></span><span><a href="mailto:info@midasskills.org">info@midasskills.org</a></span></li>
          </ul>
        </div>
        <div>
          <h3>Newsletter</h3>
          <p style="font-size:0.9rem;margin-bottom:15px;">Subscribe for latest updates on skill development.</p>
          <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Subscribed successfully!');">
            <input type="email" placeholder="Your email..." required aria-label="Email for newsletter">
            <button type="submit">$(([char]0x2192))</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        <p>$(([char]0x00A9)) 2026 MIDAS Skills. All Rights Reserved. | Developing Skills, Fostering Careers, Building Nation!</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
"@

    [System.IO.File]::WriteAllText("$basePath\$page.html", $html, [System.Text.Encoding]::UTF8)
    Write-Host "Created $page.html"
}

Write-Host "Done! All HTML files created."
