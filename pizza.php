<?php
$pageTitle = 'Pizza';
$pageCSS = "assets/css/pizza.css";
require_once('assets/inc/header.inc.php');

?>
    <header class="hero">
      <div class="hero-content">
          <h1>🍕 NYC's Legendary Pizza Scene</h1>
          <p>Discover the best slices & pizzerias in the heart of New York City.</p>
      </div>
  </header>

  <section class="about-pizza">
      <div class="content-container">
          <h2>Why is NYC Pizza So Famous? 🍕</h2>
          <p>New York-style pizza is world-famous for its thin, foldable crust, flavorful tomato sauce, and gooey mozzarella cheese. Many say the secret lies in NYC's water, which gives the dough its distinct texture.
          Originating from Italian immigrants in the early 1900s, NYC's pizza has become a cultural icon, with thousands of pizzerias serving both traditional and modern slices across the city.
          </p>
          <p>
          Pizza in NYC is more than just food—it's a cultural experience. Whether it's a quick dollar slice from a street-side joint or a gourmet wood-fired pie at a high-end pizzeria, there's a pizza for everyone in the Big Apple. You can find traditional slice shops, Roman-style pizzas, deep-dish variations, and even creative toppings like truffle oil, hot honey, and even mac & cheese.
          One of the most unique aspects of NYC pizza culture is the "fold and go" technique. Unlike Chicago's deep-dish pizza, NYC's slices are designed to be eaten on the move—you grab a slice, fold it in half, and enjoy it as you walk through the bustling streets of Manhattan or Brooklyn. It's quick, delicious, and deeply satisfying.
          NYC's pizza scene continues to evolve while keeping its historic roots intact. Whether you prefer a traditional cheese slice, a Sicilian square, or an artisan Neapolitan pie, there's no denying that New York is the pizza capital of the world. Next time you visit the city, grab a slice, fold it, and experience a true NYC tradition! 
          </p>
      </div>
  </section>


  <section class="best-pizza">
      <h2>🏆 Top Pizzerias in NYC</h2>
      <div class="pizza-grid">
          <div class="pizza-card">
              <img src="./assets/images/lombardis.jpg" alt="Lombardi's Pizza">
              <h3>Lombardi's</h3>
              <p>🍕 Since: 1905</p>
              <p>America's first pizzeria serving classic coal-fired pizza with fresh ingredients.</p>
              <p>📍Little Italy </p>
              <p><a href="https://maps.app.goo.gl/96BHDigPRDCW9KTY7" target="_blank" >Location</a></p>
                 
            </div>
          <div class="pizza-card">
              <img src="./assets/images/joes.jpg" alt="Joe's Pizza">
              <h3>Joe's Pizza</h3>
              <p>🍕 Since: 1975</p>
              <p>Iconic NYC slice shop known for its thin-crust, foldable pizzas.</p>
              <p>📍Greenwich Village </p>
              <p><a href="https://www.google.com/maps/search/Joe's+Pizza/@40.721602,-74.0059853,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDIyNi4xIKXMDSoASAFQAw%3D%3D" target="_blank" >Location</a></p>
                 
          </div>
          <div class="pizza-card">
              <img src="./assets/images/difara.jpg" alt="Di Fara Pizza">
              <h3>Di Fara Pizza</h3>
              <p>🍕 Since: 1965</p>
              <p>Legendary Brooklyn pizzeria where every pie is handcrafted by Domenico DeMarco.</p>
              <p>📍Brooklyn</p>
              <p><a href="https://www.google.com/maps/search/Di+Fara+Pizza,+NYC/@40.7217186,-74.078086,12z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDIyNi4xIKXMDSoASAFQAw%3D%3D" target="_blank" >Location</a></p>
                 
            </div>
          <div class="pizza-card">
              <img src="./assets/images/roberta.jpg" alt="Roberta's Pizza">
              <h3>Roberta's</h3>
              <p>🍕 Since: 2008</p>
              <p>Trendy Brooklyn pizzeria offering artisanal, wood-fired pizzas.</p>
              <p>📍Bushwick</p>
              <p><a href="https://www.google.com/maps/search/Roberta's+Pizza,+NYC/@40.7219202,-74.0780861,12z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDIyNi4xIKXMDSoASAFQAw%3D%3D" target="_blank" >Location</a></p>
                 
            </div>
      </div>
  </section>

  <section class="gallery">
      <h2>📸 NYC Pizza Gallery</h2>
      <div class="gallery-grid">
           <div class="gallery1">
            <img src="./assets/images/nyc_pizza_slice.jpg" alt="Classic NYC Slice">
            <img src="./assets/images/pizza_gallery1.jpg" alt="Classic NYC Slice">
        
           </div>
          <img src="./assets/images/nyc_pizza_margherita.jpg" alt="Margherita Pizza">
          
          <div class="gallery1">
            <img src="./assets/images/nyc_pizza_pepperoni.jpg" alt="Pepperoni Pizza">
            <img src="./assets/images/pizza_gallery2.jpg" alt="Classic NYC Slice">
        
           </div>
          
          <div class="gallery1">
            <img src="./assets/images/nyc_pizza_woodfired.jpg" alt="Wood-fired Pizza">
            <img src="./assets/images/pizza_gallery3.jpg" alt="Classic NYC Slice">
        
           </div>
        </div>
  </section>


  <?php require_once('assets/inc/footer.inc.php'); ?>
