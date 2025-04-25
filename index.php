<?php
$pageTitle = 'Home';
$pageCSS = "./assets/css/style.css";
require_once('assets/inc/header.inc.php');

?>


    <header>
      <div class="section__container">
        <div class="header__content">
          <h1>Welcome to New York City</h1>
          <p>
            Experience the magic of New York City like never before. 
            Whether you're exploring world-famous attractions or uncovering local secrets, 
            our travel insights will help you make the most of your adventure.
          </p>
          <p id="typewriter-text" class="typewriter-text" data-message="Your unforgettable New York journey starts right here."></p>

        </div>
      </div>
    </header>


    <section class="journey_container">

      <div class="section__container">
        <h2 class="section__title">Start Your Journey</h2>
        <p class="section__subtitle">The most searched places in NYC</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./assets/images/manhattan.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Manhattan Bridge</span>
            </div>
          </div>
          <div class="country__card">
            <img src="./assets/images/flatiron.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Flatiron Building</span>
            </div>
          </div>
          <div class="country__card">
            <img src="./assets/images/empirestate.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Empire State Building</span>
            </div>
          </div>
          <div class="country__card">
            <img src="./assets/images/ChryslerBuilding.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Chrysler Building</span>
            </div>
          </div>
          <div class="country__card">
            <img src="./assets/images/MetropolitanMuseumofArt.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Metropolitan Museum of Art</span>
            </div>
          </div>
          <div class="country__card">
            <img src="./assets/images/GuggenheimMuseum.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Guggenheim Museum</span>
            </div>
          </div>
        </div>
      </div>
    </section>




<?php require_once('assets/inc/footer.inc.php'); ?>