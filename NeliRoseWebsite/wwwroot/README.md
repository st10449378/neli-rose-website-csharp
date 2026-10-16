# Neli-Rose Retirement Home Website

## File Structure

```
home.html       + home.css       + home.js        → Home Page
about.html      + about.css      + about.js       → About Us
services.html   + services.css   + services.js    → Services
contact.html    + contact.css    + contact.js     → Contact Us
```

## How to Add Your Logo

1. Save your logo image as **logo.png** in the same folder as all the HTML files.
2. The white background of your logo will automatically blend with the white page background
   because the nav logo uses `mix-blend-mode: multiply`.
3. If your logo has a transparent background (PNG), it will also work perfectly.
4. If no logo.png is found, the site gracefully shows "Neli-Rose" text as a fallback.

## How to Customise

### Update Contact Details
Search for `[Your Address]`, `+27 (0) 00 000 0000`, and `info@nelirose.co.za` 
across all HTML files and replace with your real details.

### Update WhatsApp Link
In contact.html, change the WhatsApp number in:
`<a href="https://wa.me/27000000000">`
Replace `27000000000` with your full international number (e.g. `27821234567`).

### Google Maps
In contact.html, replace the Google Maps link with your actual address:
`<a href="https://maps.google.com?q=Your+Full+Address">`

### Staff Photos and Content
Replace the Unsplash image URLs with your own photos for a fully personalised site.

## Browser Support
Works in all modern browsers (Chrome, Firefox, Safari, Edge).
No build step required — open home.html directly in a browser.
