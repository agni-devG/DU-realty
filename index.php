<?php

declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="DU Realty helps you discover residential, commercial, and investment properties in Noida.">
  <title>DU Realty | Find the Right Real Estate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="site-header">
    <a class="site-logo" href="#home" aria-label="DU Realty home">
      <img src="assets/imgs/logo.svg" alt="DU Realty">
    </a>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
      <span class="sr-only">Toggle navigation</span>
      <span></span>
      <span></span>
    </button>

    <nav class="site-nav" id="site-nav" aria-label="Primary navigation">
      <a class="active" href="#home">Home</a>
      <a href="#properties">Property</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="hero-copy">
        <h1>Helping You<br>Find <span>The Right<br>Real Estate</span></h1>
        <p>Find the right property for your needs, whether it’s residential, commercial, or investment-focused. We help you explore real estate opportunities with clarity, trust, and the right guidance from start to finish.</p>
      </div>
      <img class="hero-image" src="assets/imgs/Hero img.png" alt="Modern residential buildings under a blue sky">
    </section>

    <section class="properties" id="properties">
      <div class="section-heading">
        <p class="eyebrow"><span aria-hidden="true"></span> What We Sell</p>
        <h2>Discover your perfect<br>property match</h2>
      </div>

      <div class="property-grid">
        <article class="property-card">
          <img class="card-image" src="assets/imgs/Onyx.png" alt="Onyx by Splendor commercial development">
          <h3>Onyx By Splendor</h3>
          <p>Noida, Sector 142</p>
          <a class="outline-button" href="onyx-yellow">
            <img src="assets/imgs/btn_arrow.svg" alt="" aria-hidden="true"> Discover More
          </a>
        </article>

        <article class="property-card">
          <img class="card-image" src="assets/imgs/cyberthum.png" alt="Cyberthum by Bhutani commercial towers">
          <h3>Cyberthum By Bhutani</h3>
          <p>Noida, Sector 140-A</p>
          <a class="outline-button" href="cyberthum-yellow">
            <img src="assets/imgs/btn_arrow.svg" alt="" aria-hidden="true"> Discover More
          </a>
        </article>

        <article class="property-card">
          <img class="card-image" src="assets/imgs/Plots.png" alt="Freehold plots and land near Jewar Airport">
          <h3>Freehold Plots/Land</h3>
          <p>Surrounding Jewar Airport</p>
          <a class="outline-button" href="#contact">
            <img src="assets/imgs/btn_arrow.svg" alt="" aria-hidden="true"> Discover More
          </a>
        </article>
      </div>
    </section>
  </main>

  <footer class="site-footer" id="contact">
    <div class="footer-grid">
      <div class="footer-details">
        <img class="footer-logo" src="assets/imgs/footer_logo.svg" alt="DU Realty">
        <address>
          <p>
            <img src="assets/imgs/location.svg" alt="" aria-hidden="true">
            1610, Block - C, 16th Floor, Bhutani Alphathum,<br>Sec - 90, Noida, 201305
          </p>
          <p>
            <img src="assets/imgs/call.svg" alt="" aria-hidden="true">
            <a href="tel:+919810109511">9810109851</a> |
            <a href="tel:+919315232240">9315232240</a>
          </p>
        </address>
      </div>

      <div class="visit-form-wrap">
        <h2>Schedule A Site Visit</h2>
        <form class="visit-form" action="onyx-yellow/api/send-lead.php" method="post" data-footer-form>
          <input name="lead_type" type="hidden" value="homepage_email">
          <input class="honeypot" name="website" type="text" tabindex="-1" autocomplete="off" aria-hidden="true">
          <label class="sr-only" for="visit-email">Enter your email</label>
          <input id="visit-email" name="email" type="email" placeholder="Enter your email" required>
          <button type="submit">Send</button>
        </form>
        <p class="form-status" role="status" aria-live="polite"></p>
      </div>
    </div>
    <p class="copyright">©2026 Copyright DU Realty. All right reserved.</p>
  </footer>

  <script src="js/sctipt.js"></script>
</body>
</html>
