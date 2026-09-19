<?php
$pageTitle = 'Gallery';
$pageDescription = 'MIDAS Skills photo gallery - View our training sessions, events, CSR programs, and office activities.';
$pageKeywords = 'MIDAS Skills gallery, training photos, skill development events, CSR activities, workshop photos';
include 'includes/header.php';
?>

  <section class="page-hero">
    <div class="container">
      <h1>Our <span style="color:var(--accent-primary);">Gallery</span></h1>
      <div class="breadcrumb">
        <a href="index.php">Home</a> <span>/</span> <span>Gallery</span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-badge">Photo Gallery</span>
        <h2>Moments That Matter</h2>
        <p>A glimpse into our training programs, events, and community impact.</p>
      </div>

      <!-- Filters -->
      <div class="gallery-filters fade-in">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="training">Training</button>
        <button class="filter-btn" data-filter="events">Events</button>
        <button class="filter-btn" data-filter="csr">CSR</button>
        <button class="filter-btn" data-filter="office">Office</button>
      </div>

      <!-- Gallery Grid -->
      <div class="gallery-grid">
        <div class="gallery-item fade-in" data-category="training">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #1a2035, #0d1117);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-chalkboard-teacher" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Training Session</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="events">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #111827, #1a2035);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-calendar-check" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Annual Event</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="csr">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #0a0e1a, #111827);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-hands-helping" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">CSR Program</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="training">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #1a2035, #111827);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-laptop" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Computer Training</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="office">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #111827, #0a0e1a);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-building" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Our Office</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="events">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #0d1117, #1a2035);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-award" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Certification Ceremony</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="csr">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #1a2035, #0a0e1a);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-users" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Community Workshop</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="training">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #111827, #1a2035);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-tools" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Practical Workshop</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>

        <div class="gallery-item fade-in" data-category="office">
          <div style="width:100%;height:100%;background:linear-gradient(135deg, #0a0e1a, #111827);display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--accent-primary);">
            <i class="fas fa-handshake" style="font-size:3rem;margin-bottom:10px;"></i>
            <span style="color:var(--text-muted);font-size:0.8rem;">Team Meeting</span>
          </div>
          <div class="overlay"><span>🔍</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Lightbox -->
  <div class="lightbox" id="lightbox">
    <button class="close-btn" id="lightboxClose" aria-label="Close lightbox">&times;</button>
    <img src="" alt="" id="lightboxImg">
  </div>

<?php include 'includes/footer.php'; ?>
