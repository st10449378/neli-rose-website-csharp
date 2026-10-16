// contact.js
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('navbar')?.classList.add('scrolled');

  // --- FORM VALIDATION ---
  const form = document.getElementById('contactForm');
  const formSuccess = document.getElementById('formSuccess');

  function validate(field, errorId, rule, message) {
    const el = document.getElementById(field);
    const err = document.getElementById(errorId);
    if (!el) return true;
    const valid = rule(el);
    err.textContent = valid ? '' : message;
    el.classList.toggle('error', !valid);
    return valid;
  }

  form?.addEventListener('submit', (e) => {

    const checks = [
      validate('firstName', 'err-firstName', el => el.value.trim().length > 0, 'Please enter your first name.'),
      validate('lastName', 'err-lastName', el => el.value.trim().length > 0, 'Please enter your last name.'),
      validate('email', 'err-email', el => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(el.value.trim()), 'Please enter a valid email address.'),
      validate('enquiry', 'err-enquiry', el => el.value !== '', 'Please select an enquiry type.'),
      validate('message', 'err-message', el => el.value.trim().length > 10, 'Please enter a message (at least 10 characters).'),
      validate('consent', 'err-consent', el => el.checked, 'You must agree to be contacted.'),
    ];

    if (checks.every(Boolean)) {
    form.submit();
    }
  });

  // Real-time validation clearing
  ['firstName','lastName','email','enquiry','message'].forEach(id => {
    document.getElementById(id)?.addEventListener('input', function() {
      this.classList.remove('error');
      const err = document.getElementById('err-' + id);
      if (err) err.textContent = '';
    });
  });

  // --- FAQ ACCORDION ---
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const btn = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    btn?.addEventListener('click', () => {
      const isOpen = btn.getAttribute('aria-expanded') === 'true';
      // Close all
      faqItems.forEach(fi => {
        fi.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        fi.querySelector('.faq-answer').classList.remove('open');
      });
      // Toggle clicked
      if (!isOpen) {
        btn.setAttribute('aria-expanded', 'true');
        answer.classList.add('open');
      }
    });
  });
});
