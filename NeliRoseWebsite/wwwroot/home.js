// =============================================
// NELI-ROSE RETIREMENT HOME — HOME.JS
// Shared JavaScript used on ALL pages.
// Handles: navbar scroll, hero animation,
// mobile menu, scroll reveal, stat counters,
// testimonial slider, parallax.
// =============================================

// Wait for the full HTML to be parsed before running any code.
// DOMContentLoaded fires before images load, which is fast.
document.addEventListener('DOMContentLoaded', () => {


  // ==================================================
  // 1. NAVBAR SCROLL BEHAVIOUR
  // When the user scrolls more than 50px, add the
  // .scrolled class to the navbar — this triggers the
  // white background and shadow defined in home.css.
  // ==================================================
  const navbar = document.getElementById('navbar');

  const onScroll = () => {
    // classList.toggle(class, condition) adds or removes
    // the class depending on whether the condition is true
    navbar.classList.toggle('scrolled', window.scrollY > 50);
  };

  // passive: true tells the browser this listener will NOT
  // call preventDefault(), allowing smoother scroll performance
  window.addEventListener('scroll', onScroll, { passive: true });

  // Run once on load in case page is already scrolled
  onScroll();


  // ==================================================
  // 2. HERO ZOOM ANIMATION
  // Adding .loaded to the hero element after a short
  // delay triggers the CSS transition that zooms the
  // background image from scale(1.05) to scale(1).
  // ==================================================
  setTimeout(() => document.querySelector('.hero')?.classList.add('loaded'), 100);


  // ==================================================
  // 3. MOBILE HAMBURGER MENU
  // Toggles the .open class on the mobile menu panel
  // and animates the three hamburger bars into an X.
  // ==================================================
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');

  hamburger?.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
    const spans = hamburger.querySelectorAll('span');
    const isOpen = mobileMenu.classList.contains('open');

    if (isOpen) {
      // Rotate top and bottom bars to form an X; hide middle bar
      spans[0].style.transform = 'translateY(7px) rotate(45deg)';
      spans[1].style.opacity   = '0';
      spans[2].style.transform = 'translateY(-7px) rotate(-45deg)';
    } else {
      // Reset all bars back to horizontal
      spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
    }
  });


  // ==================================================
  // 4. SCROLL REVEAL ANIMATIONS
  // Uses the IntersectionObserver API to watch elements
  // with .reveal-up / .reveal-left / .reveal-right classes.
  // When they enter the viewport, .visible is added which
  // triggers the CSS transition (fade + slide in).
  // ==================================================
  const revealEls = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');

  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        // Stop observing once revealed — no need to re-animate
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 }); // trigger when 12% of the element is visible

  revealEls.forEach(el => revealObserver.observe(el));


  // ==================================================
  // 5. ANIMATED STAT COUNTERS
  // Finds all elements with .stat-num, reads their
  // data-target attribute, then counts up from 0 to that
  // target using requestAnimationFrame (smooth 60fps).
  // ==================================================
  const counters = document.querySelectorAll('.stat-num');

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target); // only animate once
      }
    });
  }, { threshold: 0.5 }); // trigger when element is 50% visible

  counters.forEach(c => counterObserver.observe(c));

  /**
   * Animates a counter element from 0 to its data-target value.
   * Uses cubic easing (ease-out) so the count slows near the end.
   * @param {HTMLElement} el - The element to animate
   */
  function animateCounter(el) {
    const target   = parseInt(el.dataset.target);
    const duration = 1800; // milliseconds for full animation
    const start    = performance.now();

    const update = (now) => {
      const elapsed  = now - start;
      const progress = Math.min(elapsed / duration, 1);

      // Ease-out cubic: slows down as it approaches the target
      const eased = 1 - Math.pow(1 - progress, 3);

      el.textContent = Math.floor(eased * target);

      if (progress < 1) {
        requestAnimationFrame(update); // keep animating
      } else {
        el.textContent = target; // ensure exact final value
      }
    };

    requestAnimationFrame(update);
  }


  // ==================================================
  // 6. TESTIMONIAL SLIDER (CAROUSEL)
  // Shows cards in groups based on screen width.
  // Auto-plays every 5 seconds, pauses on hover.
  // Prev/Next buttons and dot indicators for navigation.
  // ==================================================
  const track        = document.getElementById('testimonialsTrack');
  const cards        = track?.querySelectorAll('.testimonial-card');
  const dotsContainer = document.getElementById('testimonialDots');
  const prevBtn      = document.getElementById('prevTestimonial');
  const nextBtn      = document.getElementById('nextTestimonial');

  if (track && cards.length) {
    let currentIndex  = 0;
    let cardsPerView  = getCardsPerView();
    let totalSlides   = Math.ceil(cards.length / cardsPerView);

    /**
     * Returns how many cards to show at once based on viewport width.
     * Desktop: 4, Tablet: 2, Mobile: 1
     */
    function getCardsPerView() {
      if (window.innerWidth < 768)  return 1;
      if (window.innerWidth < 1024) return 2;
      return 4;
    }

    /** Rebuilds the dot indicators to match the current slide count */
    function renderDots() {
      dotsContainer.innerHTML = '';
      for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('div');
        dot.className = 'dot' + (i === currentIndex ? ' active' : '');
        dot.addEventListener('click', () => goTo(i));
        dotsContainer.appendChild(dot);
      }
    }

    /**
     * Navigates to a specific slide index.
     * Hides all cards not in the current "page" of cards.
     * @param {number} index - The target slide index
     */
    function goTo(index) {
      currentIndex = Math.max(0, Math.min(index, totalSlides - 1));
      const offset = currentIndex * cardsPerView;

      // Show only cards in the current page, hide the rest
      cards.forEach((card, i) => {
        card.style.display = (i >= offset && i < offset + cardsPerView) ? 'block' : 'none';
      });

      renderDots();
    }

    /** Recalculates layout when window is resized */
    function updateLayout() {
      cardsPerView  = getCardsPerView();
      totalSlides   = Math.ceil(cards.length / cardsPerView);
      track.style.display = 'grid';
      track.style.gridTemplateColumns = `repeat(${cardsPerView}, 1fr)`;
      cards.forEach(c => c.style.display = 'block'); // reset all visible
      currentIndex = 0;
      renderDots();
    }

    // Button click handlers
    prevBtn?.addEventListener('click', () => goTo(currentIndex - 1));
    nextBtn?.addEventListener('click', () => goTo((currentIndex + 1) % totalSlides));

    // Auto-play: advance one slide every 5 seconds
    let autoPlay = setInterval(() => goTo((currentIndex + 1) % totalSlides), 5000);

    // Pause auto-play when the user hovers over the carousel
    track.addEventListener('mouseenter', () => clearInterval(autoPlay));
    track.addEventListener('mouseleave', () => {
      autoPlay = setInterval(() => goTo((currentIndex + 1) % totalSlides), 5000);
    });

    // Re-layout on window resize
    window.addEventListener('resize', updateLayout);

    // Initialise
    updateLayout();
  }


  // ==================================================
  // 7. SMOOTH SCROLL FOR ANCHOR LINKS
  // Intercepts clicks on links like href="#section"
  // and scrolls smoothly instead of jumping.
  // ==================================================
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        e.preventDefault(); // stop default instant jump
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });


  // ==================================================
  // 8. HERO PARALLAX EFFECT
  // As the user scrolls, the hero background image
  // moves at 25% of the scroll speed — creating a
  // depth/parallax illusion.
  // ==================================================
  const heroBg = document.querySelector('.hero-bg');

  window.addEventListener('scroll', () => {
    if (heroBg) {
      const scrollY = window.scrollY;
      // translateY moves the bg slower than the scroll
      heroBg.style.transform = `scale(1.05) translateY(${scrollY * 0.25}px)`;
    }
  }, { passive: true });


}); // end DOMContentLoaded
