<!-- Bus and Taxi file -->

<?php
$pageTitle = 'Bus & Taxi';
$pageCSS = "assets/css/bus_taxi.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
        <div class="hero-content">
            <h1>Getting Around NYC</h1>
            <p>Your guide to buses, taxis, and rideshares in the city that never sleeps.</p>
        </div>
    </header>


    <section class="about">
        <div class="about-container">
            <div class="about-content">
                <h2>🚌 NYC Buses</h2>
                <p>NYC's bus system is one of the largest and most comprehensive in the world, with over 300 routes serving all five boroughs. Buses are a great way to explore neighborhoods and avoid subway transfers. Here's what you need to know:</p>
                <ul>
                    <li><strong>Payment:</strong> Use a MetroCard or contactless payment (OMNY) to board. Fare is $2.90 per ride.</li>
                    <li><strong>Routes:</strong> Check the MTA website or app for real-time bus schedules and routes. <a href="https://www.mta.info/">Click Here</a></li>
                    <li><strong>Accessibility:</strong> All buses are wheelchair accessible and equipped with ramps.</li>
                    <li><strong>Tips:</strong> Signal the driver to stop by pulling the cord or pressing the stop button before your destination.</li>
                </ul>
            
            </div>
            <div class="about-image">
                <img src="./assets/images/bus_1.jpg" alt="Inside the Empire State Building">
            </div>
        </div>


        <div class="about-container">
            <div class="about-content">
                <h2>🚖 NYC Taxis</h2>
                <p>Yellow cabs are an iconic symbol of NYC. They are available 24/7 and can be hailed on the street or found at designated taxi stands. Here's what you should know:</p>
                <ul>
                    <li><strong>Fares:</strong> The base fare is $2.50, plus $0.50 per 1/5 mile or 60 seconds in traffic. There's a flat rate for trips to JFK Airport.</li>
                    <li><strong>Payment:</strong> Taxis accept credit/debit cards, cash, and mobile payments.</li>
                    <li><strong>Tips:</strong> A 15-20% tip is customary for taxi drivers.</li>
                    <li><strong>Accessibility:</strong> Look for accessible taxis with the "WAV" (Wheelchair Accessible Vehicle) logo.</li>
                </ul>
            
            </div>
            <div class="about-image">
                <img src="./assets/images/taxi_1.jpg" alt="Inside the Empire State Building">
            </div>
        </div>


        <div class="about-container">
            <div class="about-content">
                <h2>🚗 Uber & Rideshares</h2>
                <p>Uber, Lyft, and other rideshare services are widely available in NYC. They offer convenience and flexibility, especially for late-night trips or group travel. Here's what to keep in mind:</p>
                <ul>
                    <li><strong>Booking:</strong> Use the Uber or Lyft app to request a ride. Choose from options like UberX, Uber Pool, or Uber Black.</li>
                    <li><strong>Pricing:</strong> Fares vary based on demand (surge pricing) and distance. Check the app for estimated costs.</li>
                    <li><strong>Pickup Points:</strong> Some areas, like airports, have designated rideshare pickup zones.</li>
                    <li><strong>Tips:</strong> Tipping is optional but appreciated. You can add a tip through the app after your ride.</li>
                </ul>
            
            </div>
            <div class="about-image">
                <img src="./assets/images/taxi_3.jpg" alt="Inside the Empire State Building">
            </div>
        </div>


    </section>

  
    <section class="fun-facts">
        <h2>Interesting Facts</h2>
        <div class="facts-grid">
            <div class="fact-item">
                <i class="ri-building-2-line"></i>
                <p>NYC has over 13,000 yellow taxis, making it the largest taxi fleet in the U.S.</p>
            </div>
            <div class="fact-item">
                <i class="ri-calendar-line"></i>
                <p>The MTA's M101 bus route is one of the busiest, carrying over 16,000 passengers daily.</p>
            </div>
            <div class="fact-item">
                <i class="ri-lightbulb-flash-line"></i>
                <p>Over 100,000 Uber and Lyft drivers operate in NYC, making it one of the most competitive markets.</p>
            </div>
            <div class="fact-item">
                <i class="ri-movie-line"></i>
                <p>Yellow cabs were introduced in 1967 to make taxis more visible and distinguishable.</p>
            </div>
           
            
        </div>
    </section>

   
    <section class="gallery">
        <h2>Gallery</h2>
        <div class="gallery-grid">
            <img src="./assets/images/bus_gallery_1.jpg" alt="facts1">
            <img src="./assets/images/bus_gallery_2.jpg" alt="facts2">
             <img src="./assets/images/bus_gallery_3.jpg" alt="facts3">
             <img src="./assets/images/bus_gallery_4.jpg" alt="facts4">

        </div>
    </section>


    <?php require_once('assets/inc/footer.inc.php'); ?>