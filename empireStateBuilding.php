<?php
$pageTitle = 'Empire State Building';
$pageCSS = "assets/css/empireStateBuilding.css";
require_once('assets/inc/header.inc.php');

?>
    <header class="hero">
        <div class="hero-content">
            <h1>Empire State Building</h1>
            <p>Witness the grandeur of New York City's most iconic skyscraper.</p>
        </div>
    </header>


    <section class="about">
        <div class="about-container">
            <div class="about-content">
                <h2>History</h2>
                <p>
                    The Empire State Building, an iconic 102-story Art Deco skyscraper in Midtown Manhattan, 
                    New York City, was designed by the architectural firm Shreve, Lamb & Harmon and constructed by Starrett Brothers and Eken. 
                    Its construction began on March 17, 1930, and was completed in just 13 months, opening on May 1, 1931. 
                    At the time, it became the tallest building in the world, standing at 1,454 feet (443.2 meters) including its antenna, 
                    and held this title for nearly 40 years until the completion of the World Trade Center's North Tower in 1970. Commissioned by John J. Raskob, 
                    a former General Motors executive, and Alfred E. Smith, a former New York governor, the building was intended as a symbol of progress during the Great Depression.
                     However, it struggled financially in its early years, earning the nickname "Empty State Building" due to low occupancy rates.
                </p>
                <br>
                <p>
                    The Empire State Building is celebrated for its Art Deco design, featuring a steel frame clad in Indiana limestone and granite, with setbacks and decorative elements. 
                    Its 86th-floor observatory offers panoramic views of New York City and has been a major tourist attraction since its opening. The building gained further cultural significance through its appearance in films, 
                    most notably the 1933 movie King Kong, where the titular character climbs the skyscraper. Over the years, it has become a global symbol of New York City and American ambition.
                </p>
             </div>
            <div class="about-image">
                <img src="./assets/images/empire_inside_exhibit.jpg" alt="Inside the Empire State Building">
            </div>
        </div>

        <div class="about-container">
            <div class="about-image">
                <img src="./assets/images/empire_top.jpg" alt="View from the Top">
            </div>
            <div class="about-content">
                <h2>The Observatory</h2>
                <p>
                    The Empire State Building Observatory is one of the most famous and visited attractions in New York City, offering breathtaking panoramic views of the city and beyond. Located on the 86th floor, the open-air observation deck stands at a height of 1,050 feet (320 meters) and provides 360-degree views of iconic landmarks such as Central Park, the Statue of Liberty, the Brooklyn Bridge, and Times Square. On clear days, visibility can extend up to 80 miles (129 kilometers), allowing visitors to see parts of New Jersey, Pennsylvania, Connecticut, and Massachusetts. For an even higher vantage point, the 102nd-floor observatory, enclosed with glass windows, sits at 1,250 feet (381 meters) and offers a more intimate viewing experience.
                </p>
          </div>
        </div>


        <div class="about-container">
            <div class="map_details">
                <p>Empire State building on map</p>
                <img src="./assets/images/empire_on_map.png" alt="View from the Top">
            </div>
        </div>
    </section>

  
    <section class="fun-facts">
        <h2>Interesting Facts</h2>
        <div class="facts-grid">
            <div class="fact-item">
                <i class="ri-building-2-line"></i>
                <p><strong>102 Floors</strong> - The building has 102 floors and an observation deck at the top.</p>
            </div>
            <div class="fact-item">
                <i class="ri-calendar-line"></i>
                <p><strong>Built in Record Time</strong> - Completed in just 1 year and 45 days.</p>
            </div>
            <div class="fact-item">
                <i class="ri-lightbulb-flash-line"></i>
                <p><strong>16 Million Colors</strong> - The tower lights change colors for holidays and events.</p>
            </div>
            <div class="fact-item">
                <i class="ri-movie-line"></i>
                <p><strong>Movie Star</strong> - Featured in over 250 films, including King Kong.</p>
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
            <img src="./assets/images/empire_day.jpg" alt="Empire State Building Day View" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empire_night.jpg" alt="Empire State Building Night View" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empire_inside_exhibit3.jpg" alt="View from the Top" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_4.jpg" alt="Empire State Building" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_5.jpg" alt="Empire State Building" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_6.jpg" alt="Empire State Building" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_7.jpg" alt="Empire State Building" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_8.jpg" alt="Empire State Building" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_13.jpg" alt="Empire State Building" />
          </div>
          
        
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_15.jpg" alt="Empire State Building" />
          </div>
          
          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_16.jpg" alt="Empire State Building" />
          </div>

          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_14.jpg" alt="Empire State Building" />
          </div>

          <div class="gallery-image-wrapper">
            <img src="./assets/images/empireState_13.jpg" alt="Empire State Building" />
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
                <li><strong>📍 Location:</strong> <a href="https://maps.app.goo.gl/uxfCoxZHtLrAnPdi7" target="_blank"><u>20 W 34th St, New York, NY 10001, USA</u></a></li>
                <hr>
                <li><strong>⏰ Observatory Hours:</strong> 8:00 AM - 2:00 AM</li>
                <hr>
                <li><strong>🎟️ Ticket Prices:</strong> Starting at $44 for adults</li>
                <hr>
                <li><strong>🌐 Website:</strong> <a href="https://www.esbnyc.com" target="_blank">www.esbnyc.com</a></li>
            </ul>
        </div>
    </section>

    <?php require_once('assets/inc/footer.inc.php'); ?>
