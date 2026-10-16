// =============================================
// NELI-ROSE RETIREMENT HOME — ABOUT.JS
// Page-specific JavaScript for the About Us page.
// home.js is also loaded and handles: navbar scroll,
// mobile menu, scroll reveal, and parallax.
// =============================================

document.addEventListener('DOMContentLoaded', () => {

  // ==================================================
  // 1. FORCE NAVBAR TO SCROLLED STATE
  // Inner pages (About, Services, etc.) don't have a
  // full-screen hero section underneath the navbar,
  // so we immediately apply the .scrolled class to
  // show the white background — no need to scroll first.
  // ==================================================
  document.getElementById('navbar')?.classList.add('scrolled');



  // ==================================================
  // 2. GALLERY HOVER ACCESSIBILITY
  // On touch devices (phones/tablets) CSS :hover doesn't
  // trigger naturally. This adds a 'touched' class on tap
  // so the gallery overlay caption still appears on touch.
  // ==================================================
  const galleryItems = document.querySelectorAll('.gallery-item');

  galleryItems.forEach(item => {
    item.addEventListener('touchstart', () => {
      // Remove 'touched' from all items first (close any open overlay)
      galleryItems.forEach(g => g.classList.remove('touched'));
      // Then add to the tapped item
      item.classList.add('touched');
    }, { passive: true });
  });

  // Close gallery overlay if user taps outside any gallery item
  document.addEventListener('touchstart', (e) => {
    if (!e.target.closest('.gallery-item')) {
      galleryItems.forEach(g => g.classList.remove('touched'));
    }
  }, { passive: true });

}); // end DOMContentLoadedv
