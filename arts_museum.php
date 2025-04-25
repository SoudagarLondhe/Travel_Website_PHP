<!-- Arts and Museum PHP file -->

<?php
$pageTitle = 'Arts & Museum';
$pageCSS = "assets/css/arts_museum.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
      <div class="hero-content">
        <h1>Arts & Museums of New York City</h1>
        <p id="typewriter-text" class="typewriter-text" data-message="A city where every street corner is a canvas."></p>

      </div>
    </header>


    <section class="history-section">
        <div class="history-grid">
            <img src="./assets/images/art_1.jpg" alt="NYC Art Scene">
            <div class="history-text">
              <h2>🎨 The Artistic Heart of NYC</h2>
              <p>New York City has long been a hub for artists, creatives, and innovators. From the abstract expressionism of the 1940s to the street art revolution of the 1980s, NYC has been at the forefront of artistic movements. The city's galleries, studios, and public art installations reflect its dynamic and ever-evolving creative spirit.</p>
              
              <p>Neighborhoods like Chelsea, SoHo, and Williamsburg are home to some of the most influential art galleries in the world. The annual Armory Show and Frieze Art Fair attract collectors and enthusiasts from around the globe, showcasing contemporary works by emerging and established artists.</p>
              
              <p>Public art is also a defining feature of NYC. From the iconic "Fearless Girl" statue on Wall Street to the vibrant murals of the Bushwick Collective, art is woven into the fabric of the city. The High Line, an elevated park built on a historic freight rail line, features rotating art installations and performances, blending nature and creativity.</p>
            </div>
        </div>
      </section>
  
      <section class="culture-section">
        <div class="culture-grid">
            <div class="culture-text">
                <h2>🏛️ World-Class Museums</h2>
                <p>NYC is home to some of the most renowned museums in the world, offering everything from ancient artifacts to cutting-edge contemporary art. The Metropolitan Museum of Art (The Met) is one of the largest and most prestigious museums, with a collection spanning 5,000 years of history. Its Costume Institute hosts the annual Met Gala, a star-studded event that celebrates fashion and art.</p> 
                
                <p>The Museum of Modern Art (MoMA) is a must-visit for modern and contemporary art lovers, featuring works by Picasso, Van Gogh, and Warhol. The Guggenheim Museum, designed by Frank Lloyd Wright, is an architectural masterpiece that houses an impressive collection of modern art. For those interested in American history and culture, the American Museum of Natural History and the Tenement Museum offer immersive experiences.</p> 
            </div>
            <img src="./assets/images/museum_1.jpg" alt="NYC Museums">
        </div>
      </section>
  
      <section class="highlights">
        <h2>🌟 Iconic Art & Museum Highlights</h2>
        <div class="highlights-grid">
            <div class="highlight-card">
                <img src="./assets/images/nyc_met.jpg" alt="The Met">
                <h3>🖼️ The Metropolitan Museum of Art</h3>
                <p>Explore over 2 million works of art, from ancient Egyptian artifacts to European masterpieces. The Met's rooftop garden offers stunning views of Central Park and the city skyline.</p>
            </div>
            <div class="highlight-card">
                <img src="./assets/images/nyc_guggenheim.jpg" alt="Guggenheim">
                <h3>🌀 The Guggenheim Museum</h3>
                <p>Designed by Frank Lloyd Wright, this iconic spiral building houses a remarkable collection of modern and contemporary art, including works by Kandinsky and Pollock.</p>
            </div>
            <div class="highlight-card">
                <img src="./assets/images/nyc_whitney.jpg" alt="Whitney Museum">
                <h3>🖌️ The Whitney Museum of American Art</h3>
                <p>Dedicated to 20th- and 21st-century American art, the Whitney showcases works by artists like Edward Hopper, Georgia O'Keeffe, and Jean-Michel Basquiat.</p>
            </div>
        </div>
      </section>
  
      <section class="festivals">
        <div class="festivals-content">
            <div class="festival-text">
                 <h2>🎨 Art Festivals & Events</h2>
                 <p>NYC hosts a variety of art festivals and events throughout the year. The Armory Show, held annually in March, is one of the largest contemporary art fairs in the world. Frieze New York, held on Randall's Island, features works by leading galleries and artists.</p>  
                 
                 <p>Outdoor events like the Washington Square Outdoor Art Exhibit and the Atlantic Antic street fair showcase local artists and craftspeople. The NYCxDESIGN festival celebrates the city's design community, featuring exhibitions, workshops, and installations across the five boroughs.</p>  
            </div>
            <img src="./assets/images/nyc_art_festival.jpeg" alt="NYC Art Festival">
        </div>
      </section>
  
      <section class="gallery">
        <h2>📸 NYC Art & Museum Gallery</h2>
        <div class="gallery-grid">
            <img src="./assets/images/art_gallery_1.jpg" alt="Street Art">
            <img src="./assets/images/art_gallery_2.jpg" alt="Museum Exhibit">
            <img src="./assets/images/art_gallery_3.jpg" alt="Public Art">
            <img src="./assets/images/art_gallery_4.jpg" alt="Art Installation">
        </div>
      </section>



<?php require_once('assets/inc/footer.inc.php'); ?>