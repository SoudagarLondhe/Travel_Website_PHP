<!-- Restaurants PHP file -->

<?php
$pageTitle = 'Restaurants';
$pageCSS = "assets/css/restaurants.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
        <div class="hero-content">
            <h1> Best Restaurants in NYC</h1>
            <p>Explore the top dining experiences in the city that never sleeps.</p>
        </div>
    </header>

    <section class="nyc-dining">
          <h2>New York City's Iconic Culinary Scene</h2>
          <p>
              New York City is a melting pot of cultures, and its culinary landscape reflects this diversity. 
              From historic delis and Michelin-starred fine dining establishments to bustling food markets 
              and trendy cafes, NYC's restaurant scene is a dynamic mix of traditional flavors and innovative creations. 
              With over 23,000 eateries, the city offers a gastronomic adventure that spans authentic street food, 
              elegant dining experiences, and hidden neighborhood gems. Whether you're savoring a world-famous slice of 
              New York-style pizza, indulging in high-end French cuisine, or discovering the next big food trend in Brooklyn, 
              there's always something to delight your taste buds.
          </p>

          <p>
              Some of the most famous restaurants have shaped the city's reputation as a global food capital. 
            Iconic places like Katz's Delicatessen serve legendary pastrami sandwiches, while 
              Le Bernardin continues to redefine seafood fine dining with its exquisite dishes. 
      Emerging food destinations in the Lower East Side and Williamsburg are home to contemporary 
              restaurants blending international flavors with modern techniques. NYC's vibrant food scene   
              isn't just about food; it's an experience that blends history, innovation, and culture into every bite.
          </p>
         
          <p>
            The city's food scene reflects its multicultural fabric, with vibrant neighborhoods like Chinatown, Little Italy, 
            and Harlem serving up authentic global cuisines. Trendy eateries in the West Village, upscale steakhouses in Midtown, and innovative 
            fusion spots in Williamsburg showcase the city's creativity and passion for food. Whether you're grabbing a quick bagel with lox, indulging in a gourmet tasting menu, 
            or exploring food trucks, NYC's restaurants are a testament to its status as a global food capital. Dining here is not just a meal—it's an experience that captures the energy and diversity of the city itself.
            
          </p>
      </section>


        <section class="popular-restaurants">
          <h2>Popular Restaurants in NYC</h2>
          <div class="restaurant-list">
              <div class="restaurant-item">
                  <img src="./assets/images/le_bernardin.jpg" alt="Le Bernardin">
                  <div class="restaurant-info">
                      <h3>Le Bernardin</h3>
                      <p>Michelin-starred seafood heaven. Le Bernardin offers an elegant dining experience with world-class flavors.</p>
                      <span>📍 Midtown Manhattan</span>
                      <p><a href="https://maps.app.goo.gl/BsghZMrtvx1BwqUf7" target="_blank" >Location</a></p>
                  </div>
              </div>
  
              <div class="restaurant-item">
                  <img src="./assets/images/katz_deli.jpg" alt="Katz's Delicatessen">
                  <div class="restaurant-info">
                      <h3>Katz's Delicatessen</h3>
                      <p>New York's most famous Jewish deli, serving its legendary pastrami sandwiches since 1888.</p>
                      <span>📍 Lower East Side </span>
                      <p><a href="https://maps.app.goo.gl/nKJ3F9njG69GrWvMA" target="_blank" >Location</a></p>
                 
                  </div>
              </div>
  
              <div class="restaurant-item">
                  <img src="./assets/images/per_se.jpg" alt="Per Se">
                  <div class="restaurant-info">
                      <h3>Per Se</h3>
                      <p>Fine dining at its peak. Per Se is known for its luxurious French cuisine and an unforgettable tasting menu.</p>
                      <span>📍 Columbus Circle </span>
                      <p><a href="https://maps.app.goo.gl/aktxpLo1bJmLTYZVA" target="_blank" >Location</a></p>
                 
                  </div>
              </div>
          </div>
      </section>
  

      <section class="cuisine-types">
          <h2>Types of Cuisine in NYC</h2>
          <div class="cuisine-grid">
              <div class="cuisine-item">🍕 New York-Style Pizza</div>
              <div class="cuisine-item">🍣 Japanese Sushi</div>
              <div class="cuisine-item">🥩 American Steakhouses</div>
              <div class="cuisine-item">🌮 Mexican Street Food</div>
              <div class="cuisine-item">🍝 Italian Pasta & Wine</div>
              <div class="cuisine-item">🥗 Vegan & Organic</div>
          </div>
      </section>
  
  
      <section class="gallery">
          <h2>Delicious NYC Eats</h2>
          <div class="gallery-grid">
              <img src="./assets/images/pizza_nyc.jpg" alt="New York Pizza">
              <img src="./assets/images/sushi.jpg" alt="Sushi in NYC">
              <img src="./assets/images/steak.jpg" alt="NYC Steakhouse">
              <img src="./assets/images/desserts.jpg" alt="NYC Desserts">
          </div>
      </section>


      <?php require_once('assets/inc/footer.inc.php'); ?>