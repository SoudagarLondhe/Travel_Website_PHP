<?php
$pageTitle = 'Subways';
$pageCSS = "./assets/css/subways.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
        <div class="hero-content">
            <h1>🚇 NYC Subways</h1>
            <p>Your essential guide to navigating New York City's vast subway system.</p>
      
        </div>
    </header>


    <section class="about">
        <div class="about-container">
            <div class="about-content">
                <h2>🚇 New York City Subway</h2>
                <p>The NYC subway is one of the busiest and most extensive transit systems in the world, with 472 stations and 36 lines operating 24/7. It is the fastest and most affordable way to get around the city. Here's what you need to know:</p>
                <ul>
                    <li><strong>Payment:</strong> Use a MetroCard or OMNY contactless payment. A single ride costs $2.90.</li>
                    <li><strong>Routes:</strong> Trains are labeled by letters (A, B, C) and numbers (1, 2, 3). <a href="https://www.mta.info/maps">Subway Maps</a></li>
                    <li><strong>Transfers:</strong> Free transfers are available between subway lines and certain bus routes.</li>
                    <li><strong>Safety Tips:</strong> Stay behind the yellow line, avoid empty subway cars, and be mindful of your belongings.</li>
                </ul>
            
            </div>
            <div class="about-image">
                <img src="./assets/images/subway_1.jpg" alt="Inside the Empire State Building">
            </div>
        </div>


        <div class="about-container">
            <div class="about-content">
                <h2>🚉 Subway Etiquette</h2>
                <p>Following proper etiquette ensures a smooth and pleasant subway experience for everyone:</p>
                <ul>
                    <li><strong>Let passengers exit first:</strong> Always step aside to allow people to get off before boarding.</li>
                    <li><strong>Stand right, walk left:</strong> When using escalators, stand on the right and leave the left side for walking.</li>
                    <li><strong>Give up priority seating:</strong> Offer priority seats to elderly, disabled passengers, and pregnant women.</li>
                    <li><strong>Keep noise levels low:</strong> Use headphones and avoid loud conversations or music.</li>
                </ul>
            
            </div>
            <div class="about-image">
                <img src="./assets/images/subway_2.jpg" alt="Inside the Empire State Building">
            </div>
        </div>



    </section>

  
    <section class="fun-facts">
        <h2>Interesting Facts</h2>
        <div class="facts-grid">
            <div class="fact-item">
                <i class="ri-building-2-line"></i>
                <p>The NYC subway opened in 1904, making it one of the oldest in the world.</p>
            </div>
            <div class="fact-item">
                <i class="ri-calendar-line"></i>
                <p>The A train is the longest in the system, stretching 31 miles from Inwood to Far Rockaway.</p>
            </div>
            <div class="fact-item">
                <i class="ri-lightbulb-flash-line"></i>
                <p>Over 5 million people use the subway daily, making it one of the busiest transit systems globally.</p>
            </div>
            <div class="fact-item">
                <i class="ri-movie-line"></i>
                <p>The City Hall Station, opened in 1904, is now abandoned but remains one of the most beautiful stations.</p>
            </div>
           
            
        </div>
    </section>

   
    <section class="gallery">
        <h2>Gallery</h2>
        <div class="gallery-grid">
            <img src="./assets/images/subway_gallery_1.jpg" alt="facts1">
            <img src="./assets/images/subway_gallery_2.jpg" alt="facts2">
             <img src="./assets/images/subway_gallery_3.jpg" alt="facts3">
             <img src="./assets/images/subway_gallery_4.jpg" alt="facts4">

        </div>
    </section>


    <?php require_once('assets/inc/footer.inc.php'); ?>