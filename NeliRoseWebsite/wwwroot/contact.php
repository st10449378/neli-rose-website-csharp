<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Neli-Rose Retirement Home</title>
  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="about.css" />
  <link rel="stylesheet" href="contact.css" />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
</head>
<body>

  <nav class="navbar scrolled" id="navbar">
    <div class="nav-inner">
      <a href="home.php" class="nav-logo">
        <img src="Photos/Logo.png" alt="Neli-Rose Logo" onerror="this.style.display='none'"/>
        <span class="logo-fallback" style="display:none">Neli-Rose</span>
      </a>
      <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php" class="active">Contact Us</a></li>
      </ul>
      <button class="nav-cta" onclick="location.href='contact.php'">Book a Visit</button>
      <button class="hamburger" id="hamburger"><span></span><span></span><span></span></button>
    </div>
    <div class="mobile-menu" id="mobileMenu">
      <a href="home.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="services.php">Services</a>
      <a href="contact.php">Contact Us</a>
    </div>
  </nav>

  <section class="page-hero">
    <div class="page-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1400&q=80')"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
      <span class="section-tag light">We are here for you</span>
      <h1>Contact <em>Us</em></h1>
      <p>Reach out to our friendly team, we are always ready to help and answer your questions.</p>
    </div>
  </section>

  <div class="breadcrumb-bar">
    <div class="container">
      <a href="home.php">Home</a> <span>/</span> <span>Contact Us</span>
    </div>
  </div>

  <!-- CONTACT MAIN -->
  <section class="contact-section">
    <div class="container contact-layout">

      <!-- INFO SIDEBAR -->
      <div class="contact-info reveal-left">
        <span class="section-tag">Get In Touch</span>
        <h2>We Would Love to <em>Hear From You</em></h2>
        <p>Whether you are enquiring about care options for a loved one, want to book a tour, or simply need more information, our team is here to guide you with warmth and expertise.</p>

        <div class="info-items">
          <div class="info-item">
            <div class="info-icon">
              <svg viewBox="0 0 24 24" fill="none"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" stroke="currentColor" stroke-width="1.5"/></svg>
            </div>
            <div>
              <h4>Phone</h4>
              <p>+27 61 584 8341</p>
             
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon">
              <svg viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="1.5"/><path d="M22 6l-10 7L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <div>
              <h4>Email</h4>
              <p>colette@nelirose.co.za</p>
              
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon">
              <svg viewBox="0 0 24 24" fill="none"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="1.5"/></svg>
            </div>
            <div>
              <h4>Location</h4>
              <p>EastLynne, Pretoria<br/>South Africa</p>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon">
              <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M12 6v6l4 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <div>
              <h4>Visiting Hours</h4>
              <p>Mon – Fri: 09:00 – 18:00</p>
              <p>Sat – Sun: 10:00 – 16:00</p>
              <p style="color:var(--green-primary); font-weight:600;">Emergency: 24/7</p>
            </div>
          </div>
        </div>

        <div class="whatsapp-cta">
          <a href="https://wa.me/27615848341" class="btn-whatsapp">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.553 4.117 1.522 5.845L.057 23.476a.5.5 0 00.617.617l5.631-1.465A11.95 11.95 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.93 0-3.74-.524-5.29-1.437l-.379-.228-3.943 1.025 1.025-3.943-.228-.379A9.958 9.958 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
            Chat on WhatsApp
          </a>
        </div>
      </div>

      <!-- CONTACT FORM -->
      <div class="contact-form-wrap reveal-right">
        <div class="form-card">
          <h3>Send Us a Message</h3>
          <p>Fill in the form below and a member of our team will be in touch within 24 hours.</p>

          <div id="formSuccess" class="form-success" style="display:none">
            <div class="success-icon">
              <svg viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2"/><path d="M14 24l7 7 13-13" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h4>Message Sent!</h4>
            <p>Thank you for reaching out. We will be in touch with you shortly.</p>
          </div>

          <form id="contactForm" method="POST" action="save_contact.php">
            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" placeholder="Your first name" required />
                <span class="field-error" id="err-firstName"></span>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" placeholder="Your last name" required />
                <span class="field-error" id="err-lastName"></span>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" placeholder="Your email address" required />
              <span class="field-error" id="err-email"></span>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="Your phone number" />
            </div>
            <div class="form-group">
              <label for="enquiry">Type of Enquiry *</label>
              <select id="enquiry" name="enquiry" required>
                <option value="">Please select...</option>
                <option value="care">Care Options for a Family Member</option>
                <option value="tour">Schedule a Facility Tour</option>
                <option value="pricing">Pricing Information</option>
                <option value="employment">Employment Opportunities</option>
                <option value="other">Other Enquiry</option>
              </select>
              <span class="field-error" id="err-enquiry"></span>
            </div>
            <div class="form-group">
              <label for="message">Message *</label>
              <textarea id="message" name="message" rows="5" placeholder="Please tell us how we can help you..." required></textarea>
              <span class="field-error" id="err-message"></span>
            </div>
            <div class="form-group checkbox-group">
              <label class="checkbox-label">
                <input type="checkbox" id="consent" name="consent" required />
                <span>I consent to Neli-Rose Retirement Home contacting me with regards to my enquiry.</span>
              </label>
              <span class="field-error" id="err-consent"></span>
            </div>
            <button type="submit" class="btn-submit" id="submitBtn">
              <span class="btn-text">Send Message</span>
              <span class="btn-loading" style="display:none">Sending...</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- MAP PLACEHOLDER -->
  <section class="map-section">
    <div class="map-placeholder">
      <div class="map-overlay-card">
        <h4>Find Us</h4>
        <p>39 Rooihaaskoppie Ave, East Lynne, Pretoria, 0186<br/>South Africa</p>
        <a href="https://www.google.com/maps/dir//Neli-Rose+Retirement+Home,+39+Rooihaaskoppie+Ave,+East+Lynne,+Pretoria,+0186/@-25.8163518,28.2643563,15z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x1ebfdf857c321971:0xb95bab6977ed4e6b!2m2!1d28.2740045!2d-25.7037298?entry=ttu&g_ep=EgoyMDI2MDQxNS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn-primary" style="font-size:0.9rem; padding:0.7rem 1.5rem;">Open in Google Maps</a>
      </div>
      <div class="map-bg">
        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=1400&q=80" alt="Map view" />
        <div class="map-tint"></div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header reveal-up">
        <span class="section-tag">Common Questions</span>
        <h2>Frequently Asked Questions</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item reveal-up" style="--delay:0.1s">
          <button class="faq-question" aria-expanded="false">
            What is the admission process at Neli-Rose?
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>The admission process begins with an initial enquiry and a tour of our facilities. We then conduct a comprehensive care needs assessment to determine the most appropriate level of care. Our admissions team will guide you through all the necessary paperwork and ensure a smooth, supportive transition for your loved one.</p>
          </div>
        </div>
        <div class="faq-item reveal-up" style="--delay:0.2s">
          <button class="faq-question" aria-expanded="false">
            Can family members visit at any time?
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>We welcome family visits during our visiting hours (Monday to Friday 09:00 – 18:00, Saturday and Sunday 10:00 – 16:00). We understand the importance of family connection and work to accommodate special requests outside these hours. During certain health circumstances, visiting protocols may be adjusted in the best interests of all residents.</p>
          </div>
        </div>
        <div class="faq-item reveal-up" style="--delay:0.3s">
          <button class="faq-question" aria-expanded="false">
            What funding and payment options are available?
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>We accept private payments, medical aid contributions, and can assist families with applications for government subsidies and the South African Social Security Agency (SASSA) grants where applicable. Our financial advisory team is happy to discuss options confidentially and help you find the best solution for your family.</p>
          </div>
        </div>
        <div class="faq-item reveal-up" style="--delay:0.4s">
          <button class="faq-question" aria-expanded="false">
            What happens if my loved one's care needs change?
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Care plans are reviewed regularly and updated as residents' needs evolve. Our multidisciplinary team continuously monitors each resident's health and wellbeing, and we proactively communicate any changes with families. We can adjust care levels within our facility or, if required, assist with transitions to more specialised care environments.</p>
          </div>
        </div>
        <div class="faq-item reveal-up" style="--delay:0.5s">
          <button class="faq-question" aria-expanded="false">
            Can residents bring their own furniture and belongings?
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>Absolutely. We strongly encourage residents to personalise their rooms with meaningful belongings, photographs, and small items of furniture that make them feel at home. Our admissions team will provide a detailed list of what is included and what residents are welcome to bring to help make their space uniquely their own.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-inner">
      <div class="footer-brand">
        <img src="Photos/Logo.png" alt="Neli-Rose" class="footer-logo" onerror="this.style.display='none'" />
        <p>Neli-Rose Retirement Home<br/><em>Where care is care giver</em></p>
        
      </div>
      <div class="footer-nav">
        <h4>Quick Links</h4>
        <a href="home.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact Us</a>
      </div>
      <div class="footer-contact">
        <h4>Contact Us</h4>
        <p>Phone: +27  84 587 3631</p>
        <p>Email: colette@nelirose.co.za</p>
        <p>Address: 39 Rooihaaskoppie Ave, East Lynne, Pretoria, 0186<br/>South Africa</p>
      </div>
      <div class="footer-hours">
        <h4>Visiting Hours</h4>
        <p>Monday – Friday<br/>09:00 – 18:00</p>
        <p>Saturday – Sunday<br/>10:00 – 16:00</p>
        <p class="emerg">Emergency: 24/7</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 Neli-Rose Retirement Home. All rights reserved.</p>
    </div>
  </footer>

  <script src="home.js"></script>
  <script src="contact.js"></script>
</body>
</html>
