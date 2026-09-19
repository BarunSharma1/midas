<?php
$pageTitle = 'Home';
$pageDescription = 'MIDAS Skills - Where Talent Meets Opportunity. Premier workforce solutions, apprenticeship advisory, corporate upskilling and skill development programs across India.';
$pageKeywords = 'MIDAS Skills, workforce solutions, apprenticeship, skill development, corporate training, NAPS, WILP, upskilling, India';
include 'includes/header.php';
?>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-slider">
      <div class="hero-slide active" style="background:linear-gradient(135deg, #0a0e1a 0%, #1a2035 100%);">
        <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 70% 50%, rgba(212,168,67,0.08) 0%, transparent 50%);"></div>
      </div>
      <div class="hero-slide" style="background:linear-gradient(135deg, #111827 0%, #0a0e1a 100%);">
        <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 30% 50%, rgba(212,168,67,0.1) 0%, transparent 50%);"></div>
      </div>
      <div class="hero-slide" style="background:linear-gradient(135deg, #0a0e1a 0%, #111827 100%);">
        <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 30%, rgba(212,168,67,0.06) 0%, transparent 50%);"></div>
      </div>
    </div>

    <div class="container">
      <div class="hero-content">
        <div class="hero-badge">
          <i class="fas fa-star"></i> India's Leading Workforce Solutions Partner
        </div>
        <h1>Shaping <span class="highlight">Success</span>, Fueling <span class="highlight">Growth</span></h1>
        <p>We build lasting partnerships by delivering talent development, employment programs, and business process support backed by years of expertise.</p>
        <div class="hero-buttons">
          <a href="services.php" class="btn btn-primary">Our Services <i class="fas fa-arrow-right"></i></a>
          <a href="contact.php" class="btn btn-outline">Contact Us <i class="fas fa-phone"></i></a>
        </div>
      </div>
    </div>

    <div class="hero-dots">
      <button class="dot active" aria-label="Slide 1"></button>
      <button class="dot" aria-label="Slide 2"></button>
      <button class="dot" aria-label="Slide 3"></button>
    </div>
  </section>

  <!-- Services Section -->
  <section class="section" id="services">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-badge">Our Services</span>
        <h2>Premier Workforce Solutions</h2>
        <p>We offer workforce solutions, from apprenticeships to upskilling, ensuring efficiency, compliance, and business growth.</p>
      </div>

      <div class="services-grid">
        <div class="service-card fade-in">
          <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
          <h3>Apprenticeship Advisory & Services</h3>
          <p>End-to-end apprenticeship program management under NAPS & NATS for organizations across India.</p>
          <a href="services.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="service-card fade-in">
          <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
          <h3>Work Integrated Learning (WILP)</h3>
          <p>Bridging education and employment through structured work-integrated learning programs.</p>
          <a href="services.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="service-card fade-in">
          <div class="service-icon"><i class="fas fa-users-cog"></i></div>
          <h3>Workforce Services</h3>
          <p>Comprehensive end-to-end recruitment, staffing, and HR management solutions.</p>
          <a href="services.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="service-card fade-in">
          <div class="service-icon"><i class="fas fa-chart-line"></i></div>
          <h3>Corporate Upskilling</h3>
          <p>Customized training programs to enhance employee competency and productivity.</p>
          <a href="services.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Preview Section -->
  <section class="section" style="background:var(--bg-secondary);">
    <div class="container">
      <div class="about-grid">
        <div class="about-image fade-in">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, var(--bg-tertiary), var(--bg-card));display:flex;align-items:center;justify-content:center;font-size:4rem;color:var(--accent-primary);">
            <i class="fas fa-building"></i>
          </div>
          <div class="experience-badge">
            <div class="number">5+</div>
            <div class="label">Years Experience</div>
          </div>
        </div>

        <div class="about-content fade-in">
          <span class="section-badge">About Us</span>
          <h2>Developing Skills, Fostering Careers, Building Nation!</h2>
          <p>MIDAS Skills is a leading force in India's skill development and human resource landscape. With a proven track record of delivering comprehensive manpower solutions to clients nationwide, we are committed to bridging the gap between talent and opportunity.</p>
          <p>Our focus on skill development and HR excellence ensures seamless recruitment, staffing, and upskilling solutions. We are committed to driving growth, reducing costs, and enhancing enterprise value for our clients.</p>

          <div class="about-highlights">
            <div class="highlight-item">
              <span class="icon"><i class="fas fa-check-circle"></i></span>
              <span>Govt. Approved Programs</span>
            </div>
            <div class="highlight-item">
              <span class="icon"><i class="fas fa-check-circle"></i></span>
              <span>ISO 9001 Certified</span>
            </div>
            <div class="highlight-item">
              <span class="icon"><i class="fas fa-check-circle"></i></span>
              <span>Industry Expert Faculty</span>
            </div>
            <div class="highlight-item">
              <span class="icon"><i class="fas fa-check-circle"></i></span>
              <span>Placement Assistance</span>
            </div>
          </div>

          <div style="margin-top:30px;">
            <a href="about.php" class="btn btn-primary">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Values -->
  <section class="section">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-badge">Our Values</span>
        <h2>What Drives Us Forward</h2>
        <p>Our core values guide every decision and interaction we make.</p>
      </div>

      <div class="values-grid">
        <div class="value-card fade-in">
          <div class="value-icon">🤝</div>
          <h3>Integrity</h3>
          <p>We uphold trust, authenticity, and ethics in our beliefs, communication & actions.</p>
        </div>
        <div class="value-card fade-in">
          <div class="value-icon">🎯</div>
          <h3>Responsibility</h3>
          <p>We take ownership of our actions & decisions while fostering a culture of flexibility & adaptability.</p>
        </div>
        <div class="value-card fade-in">
          <div class="value-icon">⭐</div>
          <h3>Client Satisfaction</h3>
          <p>We go till the last mile to fulfill client expectations and establish loyalty.</p>
        </div>
        <div class="value-card fade-in">
          <div class="value-icon">🚀</div>
          <h3>Growth</h3>
          <p>We consistently keep progressing in all aspects, fostering excellence, development & expansion.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Impact Stats -->
  <section class="section stats-section">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-badge">Our Impact</span>
        <h2>Impact Summary At a Glance</h2>
      </div>
      <div class="stats-grid">
        <div class="stat-item fade-in">
          <div class="stat-number" data-count="50" data-suffix="+">0</div>
          <div class="stat-label">Clients Served</div>
        </div>
        <div class="stat-item fade-in">
          <div class="stat-number" data-count="5" data-suffix="+">0</div>
          <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-item fade-in">
          <div class="stat-number" data-count="2000" data-suffix="+">0</div>
          <div class="stat-label">Youth Trained</div>
        </div>
        <div class="stat-item fade-in">
          <div class="stat-number" data-count="25" data-suffix="+">0</div>
          <div class="stat-label">Industries Covered</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-badge">Testimonials</span>
        <h2>What Our Partners Say</h2>
        <p>Hear from organizations and individuals who have partnered with us.</p>
      </div>

      <div class="testimonials-wrapper fade-in">
        <div class="testimonial-track">
          <div class="testimonial-card">
            <div class="testimonial-inner">
              <div class="quote-icon">"</div>
              <p>MIDAS Skills provided exceptional workforce solutions for our organization. Their apprenticeship program helped us build a skilled workforce that perfectly aligned with our industry requirements.</p>
              <div class="testimonial-author">
                <div class="avatar">RK</div>
                <div class="info">
                  <h4>Rajesh Kumar</h4>
                  <span>HR Director, Manufacturing Corp</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-inner">
              <div class="quote-icon">"</div>
              <p>The corporate upskilling program transformed our team's capabilities. The customized training approach ensured our employees gained practical, industry-relevant skills.</p>
              <div class="testimonial-author">
                <div class="avatar">SP</div>
                <div class="info">
                  <h4>Sunita Patil</h4>
                  <span>Operations Manager, Tech Solutions</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-inner">
              <div class="quote-icon">"</div>
              <p>Their WILP programs bridge the gap between education and employment beautifully. Our interns transitioned seamlessly into full-time roles thanks to the structured training.</p>
              <div class="testimonial-author">
                <div class="avatar">AM</div>
                <div class="info">
                  <h4>Amit Mehta</h4>
                  <span>CEO, Logistics India</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-nav">
          <button id="testPrev" aria-label="Previous testimonial"><i class="fas fa-chevron-left"></i></button>
          <button id="testNext" aria-label="Next testimonial"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners -->
  <section class="section" style="background:var(--bg-secondary);">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-badge">Our Partners</span>
        <h2>Trusted By Leading Organizations</h2>
      </div>
      <div class="partners-overflow fade-in">
        <div class="partners-track">
          <div class="partner-logo">NSDC</div>
          <div class="partner-logo">NAPS</div>
          <div class="partner-logo">NATS</div>
          <div class="partner-logo">ISO 9001</div>
          <div class="partner-logo">ISO 27001</div>
          <div class="partner-logo">BOAT</div>
          <div class="partner-logo">AON</div>
          <div class="partner-logo">DGET</div>
          <!-- Duplicate for seamless scroll -->
          <div class="partner-logo">NSDC</div>
          <div class="partner-logo">NAPS</div>
          <div class="partner-logo">NATS</div>
          <div class="partner-logo">ISO 9001</div>
          <div class="partner-logo">ISO 27001</div>
          <div class="partner-logo">BOAT</div>
          <div class="partner-logo">AON</div>
          <div class="partner-logo">DGET</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog Preview -->
  <section class="section">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-badge">Knowledge Center</span>
        <h2>Latest Insights & Articles</h2>
        <p>Stay updated with the latest trends in skill development and workforce management.</p>
      </div>

      <div class="blog-grid">
        <div class="blog-card fade-in">
          <div class="blog-image" style="background:linear-gradient(135deg, #1a2035, #0a0e1a);display:flex;align-items:center;justify-content:center;color:var(--accent-primary);font-size:3rem;">
            <i class="fas fa-certificate"></i>
          </div>
          <div class="blog-body">
            <div class="blog-meta">
              <span><i class="fas fa-user"></i> Team MIDAS</span>
              <span><i class="fas fa-calendar"></i> Feb 2026</span>
            </div>
            <h3><a href="blog.php">From Certificates to Competence: The Shift India's Skill Ecosystem Must Make</a></h3>
            <p>Exploring how India's skill development landscape needs to evolve beyond certifications to true competency building.</p>
            <a href="blog.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="blog-card fade-in">
          <div class="blog-image" style="background:linear-gradient(135deg, #111827, #1a2035);display:flex;align-items:center;justify-content:center;color:var(--accent-primary);font-size:3rem;">
            <i class="fas fa-briefcase"></i>
          </div>
          <div class="blog-body">
            <div class="blog-meta">
              <span><i class="fas fa-user"></i> Team MIDAS</span>
              <span><i class="fas fa-calendar"></i> Jan 2026</span>
            </div>
            <h3><a href="blog.php">The Apprenticeship Advantage: Why Learning by Earning Will Redefine India's Workforce</a></h3>
            <p>How apprenticeship programs are creating a new paradigm of earn-while-you-learn for India's youth.</p>
            <a href="blog.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="blog-card fade-in">
          <div class="blog-image" style="background:linear-gradient(135deg, #0a0e1a, #111827);display:flex;align-items:center;justify-content:center;color:var(--accent-primary);font-size:3rem;">
            <i class="fas fa-lightbulb"></i>
          </div>
          <div class="blog-body">
            <div class="blog-meta">
              <span><i class="fas fa-user"></i> Team MIDAS</span>
              <span><i class="fas fa-calendar"></i> Jan 2026</span>
            </div>
            <h3><a href="blog.php">Why Most Talent Strategies Fail Before They Even Begin</a></h3>
            <p>Understanding the common pitfalls in talent acquisition and how to build strategies that actually work.</p>
            <a href="blog.php" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
