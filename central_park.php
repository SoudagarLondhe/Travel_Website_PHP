<!-- Central Park PHP file -->

<?php
$pageTitle = 'Central Park';
$pageCSS = "assets/css/central_park.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
        <div class="hero-content">
            <h1>Central Park</h1>
            <p>Explore the green heart of New York City.</p>
        </div>
    </header>


    <section class="about">
        <div class="about-container">
            <div class="about-content">
                <h2>History</h2>
                <br>
                <p>
                    Central Park's construction, based on the modified Greensward Plan from 1868, was led by designers Frederick Law Olmsted 
                    and Calvert Vaux, alongside various engineers, architects, and landscape experts. The project was challenging due to the 
                    park's rocky and swampy terrain, requiring extensive excavation, soil importation, and innovative machinery. By 1858, 
                    major work had begun, employing mostly Irish and European immigrant laborers under difficult conditions. Early features 
                    like The Lake and The Ramble were completed by 1860, while the Civil War did not halt progress. Disputes over cost and 
                    management led to Olmsted and Vaux's temporary resignations, but they were re-hired in 1865 to oversee the final phases 
                    of construction. By 1876, Central Park was officially completed, with new structures, roadways, and recreational spaces 
                    attracting a broad public audience.
                </p>
                <br>
                <p>
                    Throughout the late 19th and early 20th centuries, Central Park faced neglect, funding shortages, and increased commercialization, 
                    leading to its decline. Efforts to preserve its landscape, led by figures like Samuel Parsons and advocacy groups, helped resist 
                    large-scale modifications. However, it wasn't until the 1930s, under parks commissioner Robert Moses, that a major revitalization 
                    took place. Moses initiated large-scale cleanups, built new playgrounds, restored landscapes, and introduced modern amenities using 
                    New Deal funding. Despite further developments in the mid-20th century, Moses' approach faced criticism for prioritizing infrastructure over 
                    Olmsted's original vision. Central Park remained a vital public space, evolving through various restoration efforts to balance preservation with urban demands.

                </p>
             </div>
            <div class="about-image">
                <img src="./assets/images/cp2.jpg" alt="Inside the Central Park">
            </div>
        </div>

        <div class="about-container">
            <div class="about-image">
                <img src="./assets/images/cp4.jpg" alt="bethadral fountain">
            </div>
            <div class="about-content">
                <h2>Notable Attractions</h2>
                <br>
                <p>
                    Central Park offers a diverse range of attractions and activities, making it a vibrant destination for visitors of all ages. Iconic landmarks like Bethesda Terrace and Fountain, Bow Bridge, and the Belvedere Castle provide scenic spots for photography and relaxation. The park’s vast green spaces, such as Sheep Meadow and the Great Lawn, are perfect for picnics, sunbathing, and outdoor sports. Visitors can explore The Ramble, a woodland area ideal for birdwatching, or take a leisurely boat ride on The Lake. The Central Park Zoo and Conservatory Garden add to the park’s charm, while seasonal activities like ice skating at Wollman Rink in winter and open-air performances at the Delacorte Theater in summer keep the park lively year-round. Cyclists and joggers frequent the park’s winding paths, and guided tours provide historical insights into its design and evolution. Whether seeking adventure, relaxation, or cultural experiences, Central Park offers something for everyone.
                </p>
          </div>
        </div>

        <div class="about-container">
            <div class="map_details">
                <p>Central Park on map</p>
                <img src="./assets/images/central_on_map.png" alt="View from the Top">
            </div>
        </div>
    </section>

  
    <section class="fun-facts">
        <h2>Interesting Facts</h2>
        <div class="facts-grid">
            <div class="fact-item">
                <i class="ri-leaf-line"></i>
                <p><strong>843 Acres</strong> - The park covers a vast area in the heart of Manhattan.</p>
            </div>
            <div class="fact-item">
                <i class="ri-calendar-line"></i>
                <p><strong>Over 160 Years Old</strong> - Established in 1857 as a public park.</p>
            </div>
            <div class="fact-item">
                <i class="ri-football-line"></i>
                <p><strong>Sports & Recreation</strong> - Offers biking, boating, jogging, and more.</p>
            </div>
            <div class="fact-item">
                <i class="ri-movie-line"></i>
                <p><strong>Famous Film Location</strong> - Featured in hundreds of movies and TV shows.</p>
            </div>
        </div>
    </section>



    <section class="gallery">
      <h2>Gallery</h2>
    <div class="gallery-wrapper">
      <button class="gallery-btn left" id="gallery-prev"><i class="ri-arrow-left-s-line"></i></button>
    
      <div class="gallery-slider" id="gallery-slider">
        <div class="gallery-track" id="gallery-track">

          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp3.jpg" alt="Central Park" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp7.webp" alt="Central Park" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp_10.jpg" alt="Central Park" />
          </div>

          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp_11.jpg" alt="Central Park" />
          </div>

          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp_12.jpg" alt="Central Park" />
          </div>

          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp_13.jpg" alt="Central Park" />
          </div>

          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp_14.jpg" alt="Central Park" />
          </div>

          <div class="gallery-image-wrapper">
            <img src="./assets/images/cp_15.jpg" alt="Central Park" />
          </div>
        

        </div>
      </div>
    
      <button class="gallery-btn right" id="gallery-next"><i class="ri-arrow-right-s-line"></i></button>
    </div>
    </section>

    <section class="visit-info-data">
        <h2>Plan Your Visit</h2>
        <div class="visit-card">
            <ul>
                <li><strong>📍 Location:</strong><a href="https://maps.app.goo.gl/iLCZUUdu2koRFjyF8" target="_blank">New York, NY 10022, USA</a> </li>
                <hr>
                <li><strong>⏰ Open Hours:</strong> 6:00 AM - 1:00 AM Daily</li>
                <hr>
                <li><strong>🎟️ Admission:</strong> Free for all visitors</li>
                <hr>
                <li><strong>🌐 Website:</strong> <a href="https://www.centralparknyc.org" target="_blank">www.centralparknyc.org</a></li>
            </ul>
        </div>
    </section>

    <?php require_once('assets/inc/footer.inc.php'); ?>