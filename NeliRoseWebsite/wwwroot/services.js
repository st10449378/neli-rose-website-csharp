// services.js
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('navbar')?.classList.add('scrolled');

  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const tab = btn.dataset.tab;

      tabBtns.forEach(b => b.classList.remove('active'));
      tabContents.forEach(c => { c.classList.remove('active'); });

      btn.classList.add('active');
      const target = document.getElementById('tab-' + tab);
      if (target) {
        target.classList.add('active');
        // Re-trigger reveal animations
        target.querySelectorAll('.reveal-left, .reveal-right').forEach(el => {
          el.classList.remove('visible');
          requestAnimationFrame(() => el.classList.add('visible'));
        });
      }
    });
  });

  // Trigger first tab reveals
  document.querySelectorAll('.tab-content.active .reveal-left, .tab-content.active .reveal-right').forEach(el => {
    setTimeout(() => el.classList.add('visible'), 200);
  });
});
