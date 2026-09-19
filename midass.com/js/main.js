/* ========================================
   MIDAS SKILLS - Main JavaScript
   Theme, Navigation, Animations, Forms
   ======================================== */

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initNavbar();
  initMobileMenu();
  initHeroSlider();
  initCounters();
  initTestimonials();
  initGallery();
  initFadeAnimations();
  initContactForm();
});

/* ========== THEME TOGGLE ========== */
function initTheme() {
  const toggle = document.getElementById('themeToggle');
  if (!toggle) return;
  const saved = localStorage.getItem('midas-theme') || 'light';
  document.documentElement.setAttribute('data-theme', saved);
  updateThemeIcon(toggle, saved);

  toggle.addEventListener('click', () => {
    const current = document.documentElement.getAttribute('data-theme');
    const next = current === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', next);
    localStorage.setItem('midas-theme', next);
    updateThemeIcon(toggle, next);
  });
}

function updateThemeIcon(btn, theme) {
  btn.innerHTML = theme === 'dark' ? '☀️' : '🌙';
  btn.setAttribute('aria-label', `Switch to ${theme === 'dark' ? 'light' : 'dark'} mode`);
}

/* ========== NAVBAR SCROLL ========== */
function initNavbar() {
  const navbar = document.querySelector('.navbar');
  if (!navbar) return;
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
  });

  // Active link
  const current = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === current || (current === '' && href === 'index.php')) {
      link.classList.add('active');
    }
  });
}

/* ========== MOBILE MENU ========== */
function initMobileMenu() {
  const toggle = document.getElementById('mobileToggle');
  const nav = document.getElementById('navLinks');
  if (!toggle || !nav) return;

  toggle.addEventListener('click', () => {
    toggle.classList.toggle('active');
    nav.classList.toggle('active');
  });

  // Close on link click
  nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      toggle.classList.remove('active');
      nav.classList.remove('active');
    });
  });

  // Close on outside click
  document.addEventListener('click', (e) => {
    if (!toggle.contains(e.target) && !nav.contains(e.target)) {
      toggle.classList.remove('active');
      nav.classList.remove('active');
    }
  });
}

/* ========== HERO SLIDER ========== */
function initHeroSlider() {
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('.hero-dots .dot');
  if (slides.length === 0) return;

  let current = 0;
  const total = slides.length;

  function showSlide(index) {
    slides.forEach(s => s.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));
    slides[index].classList.add('active');
    if (dots[index]) dots[index].classList.add('active');
    current = index;
  }

  // Auto play
  let interval = setInterval(() => {
    showSlide((current + 1) % total);
  }, 5000);

  // Dot clicks
  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      clearInterval(interval);
      showSlide(i);
      interval = setInterval(() => showSlide((current + 1) % total), 5000);
    });
  });
}

/* ========== ANIMATED COUNTERS ========== */
function initCounters() {
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length === 0) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.dataset.counted) {
        entry.target.dataset.counted = 'true';
        animateCounter(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(c => observer.observe(c));
}

function animateCounter(el) {
  const target = parseInt(el.dataset.count);
  const suffix = el.dataset.suffix || '';
  const duration = 2000;
  const start = performance.now();

  function update(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.floor(target * eased) + suffix;
    if (progress < 1) requestAnimationFrame(update);
  }

  requestAnimationFrame(update);
}

/* ========== TESTIMONIALS CAROUSEL ========== */
function initTestimonials() {
  const track = document.querySelector('.testimonial-track');
  const cards = document.querySelectorAll('.testimonial-card');
  const prevBtn = document.getElementById('testPrev');
  const nextBtn = document.getElementById('testNext');
  if (!track || cards.length === 0) return;

  let idx = 0;

  function goTo(i) {
    idx = ((i % cards.length) + cards.length) % cards.length;
    track.style.transform = `translateX(-${idx * 100}%)`;
  }

  if (prevBtn) prevBtn.addEventListener('click', () => goTo(idx - 1));
  if (nextBtn) nextBtn.addEventListener('click', () => goTo(idx + 1));

  // Auto play
  setInterval(() => goTo(idx + 1), 6000);
}

/* ========== GALLERY FILTER & LIGHTBOX ========== */
function initGallery() {
  // Filter
  const filterBtns = document.querySelectorAll('.filter-btn');
  const items = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.dataset.filter;

      items.forEach(item => {
        if (filter === 'all' || item.dataset.category === filter) {
          item.style.display = 'block';
          setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 50);
        } else {
          item.style.opacity = '0';
          item.style.transform = 'scale(0.8)';
          setTimeout(() => { item.style.display = 'none'; }, 300);
        }
      });
    });
  });

  // Lightbox
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const closeBtn = document.getElementById('lightboxClose');

  items.forEach(item => {
    item.addEventListener('click', () => {
      const img = item.querySelector('img');
      if (img && lightbox && lightboxImg) {
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
        lightbox.classList.add('active');
      }
    });
  });

  if (closeBtn) closeBtn.addEventListener('click', () => lightbox.classList.remove('active'));
  if (lightbox) lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) lightbox.classList.remove('active');
  });
}

/* ========== FADE-IN ANIMATIONS ========== */
function initFadeAnimations() {
  const els = document.querySelectorAll('.fade-in');
  if (els.length === 0) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

  els.forEach((el, i) => {
    el.style.transitionDelay = `${i % 4 * 0.1}s`;
    observer.observe(el);
  });
}

/* ========== CONTACT FORM → n8n WEBHOOK ========== */
function initContactForm() {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const status = document.getElementById('formStatus');
    const btn = form.querySelector('button[type="submit"]');
    const original = btn.textContent;

    btn.textContent = 'Sending...';
    btn.disabled = true;

    const data = Object.fromEntries(new FormData(form));

    try {
      // Send to n8n webhook - update URL with your actual n8n webhook
      const webhookUrl = form.dataset.webhook || 'https://your-n8n-instance.com/webhook/contact';

      const response = await fetch(webhookUrl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
      });

      if (response.ok) {
        status.className = 'form-status success';
        status.textContent = '✅ Message sent successfully! We will get back to you soon.';
        form.reset();
      } else {
        throw new Error('Failed');
      }
    } catch (err) {
      status.className = 'form-status error';
      status.textContent = '❌ Something went wrong. Please try again or contact us directly.';
    }

    btn.textContent = original;
    btn.disabled = false;
    setTimeout(() => { status.className = 'form-status'; }, 8000);
  });
}
