<?php
$pageTitle = 'Contact Us';
$pageDescription = 'Contact MIDAS Skills - Get in touch for workforce solutions, apprenticeship advisory, skill development, and corporate training inquiries.';
$pageKeywords = 'contact MIDAS Skills, workforce solutions inquiry, apprenticeship consultation, corporate training contact, Pune';
include 'includes/header.php';
?>

  <section class="page-hero">
    <div class="container">
      <h1>Contact <span style="color:var(--accent-primary);">Us</span></h1>
      <div class="breadcrumb">
        <a href="index.php">Home</a> <span>/</span> <span>Contact</span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="contact-grid">
        <!-- Contact Form -->
        <div class="fade-in">
          <span class="section-badge">Get in Touch</span>
          <h2 style="margin-bottom:10px;">Send Us a Message</h2>
          <p style="color:var(--text-secondary);margin-bottom:30px;">Whether you have inquiries about our services, need expert workforce solutions, or want to collaborate, feel free to reach out.</p>

          <form id="contactForm" data-webhook="https://your-n8n-instance.com/webhook/contact">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:15px;">
              <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" placeholder="Your full name" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" placeholder="your@email.com" required>
              </div>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:15px;">
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX">
              </div>
              <div class="form-group">
                <label for="subject">Subject *</label>
                <select id="subject" name="subject" required>
                  <option value="">Select a subject</option>
                  <option value="Apprenticeship Advisory">Apprenticeship Advisory</option>
                  <option value="Workforce Services">Workforce Services</option>
                  <option value="WILP Programs">WILP Programs</option>
                  <option value="Corporate Upskilling">Corporate Upskilling</option>
                  <option value="CSR Partnership">CSR Partnership</option>
                  <option value="Career Inquiry">Career Inquiry</option>
                  <option value="General Inquiry">General Inquiry</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message *</label>
              <textarea id="message" name="message" placeholder="Tell us about your requirements..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
              Send Message <i class="fas fa-paper-plane"></i>
            </button>
            <div class="form-status" id="formStatus"></div>
          </form>
        </div>

        <!-- Contact Info -->
        <div class="fade-in">
          <span class="section-badge">Contact Information</span>
          <h2 style="margin-bottom:10px;">We're Here for You</h2>
          <p style="color:var(--text-secondary);margin-bottom:30px;">Reach out directly through any of the channels below.</p>

          <div class="contact-info-cards">
            <div class="contact-info-card">
              <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
              <div>
                <h4>Corporate Address</h4>
                <p>428A, 427D & 427E, Jai Ganesh Vision Mall, Akurdi Chowk, A Wing, Pimpri-Chinchwad, Pune, Maharashtra 411035</p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="icon"><i class="fas fa-building"></i></div>
              <div>
                <h4>Registered Address</h4>
                <p>Plot No. 9, Racheta CHS, Sector - 21, Yamuna Nagar, Pune, Maharashtra 411044</p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="icon"><i class="fas fa-phone"></i></div>
              <div>
                <h4>Phone</h4>
                <p><a href="tel:+919223005179">+91 9223 00 5179</a></p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="icon"><i class="fas fa-envelope"></i></div>
              <div>
                <h4>Email</h4>
                <p><a href="mailto:info@midasskills.org">info@midasskills.org</a></p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <div>
                <h4>Working Hours</h4>
                <p>Monday - Saturday: 9:00 AM - 6:00 PM<br>Sunday: Closed</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Map -->
      <div class="map-container fade-in">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.3!2d73.784579!3d18.647261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b7630db0e0b7%3A0xcbc79f08485deb8!2sJai%20Ganesh%20Vision%20Mall!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
          width="100%" 
          height="350" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          title="MIDAS Skills Office Location">
        </iframe>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
