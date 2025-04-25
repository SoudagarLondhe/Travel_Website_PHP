<!-- Times square PHP file -->

<?php
$pageTitle = 'Times Square';
$pageCSS = "assets/css/times_square.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
        <div class="hero-content">
            <h1>Times Square</h1>
            <p>The dazzling hub of New York City.</p>
        </div>
    </header>

    <section class="about">
        <div class="about-container">
            <div class="about-content">
                <h2>History</h2>
                <br>
                <p>
                    Times Square, originally known as Longacre Square, was a commercial and residential district in the late 19th century. The area transformed significantly in 1904 when The New York Times moved its headquarters to the newly built Times Building, prompting the city's decision to rename the area as Times Square. The construction of the first electrified billboards in the early 1900s marked the beginning of its evolution into an entertainment hub, attracting theaters, businesses, and cultural institutions.
                </p>
                <br>
                <p>
                    During the 1920s and 1930s, Times Square became synonymous with Broadway, vaudeville, and cinematic premieres, making it the epicenter of American entertainment. However, by the mid-20th century, the area saw a decline due to economic struggles and an increase in crime, leading to a period of urban decay. The bright lights and bustling energy were overshadowed by rising concerns over safety and deteriorating infrastructure.
                </p>
                <br>
                <p>
                    In the 1990s, a major revitalization effort led by the city government and private investors transformed Times Square into a global attraction once again. Strict zoning laws, cleanup initiatives, and corporate investments helped bring back theaters, shops, and pedestrian-friendly areas. Today, Times Square is an iconic landmark, famous for its neon billboards, bustling crowds, Broadway performances, and the annual New Year’s Eve Ball Drop, attracting millions of visitors from around the world.
                </p>
             </div>
            <div class="about-image">
                <img src="./assets/images/ts4.avif" alt="Inside Times Square">
            </div>
        </div>

        <div class="about-container">
            <div class="about-image">
                <img src="./assets/images/ts5.jpg" alt="Times Square at night">
            </div>
            <div class="about-content">
                <h2>Notable Attractions</h2>
                <br>
                <p>
                    Times Square is home to world-famous attractions such as Broadway theaters, the dazzling electronic billboards, and renowned landmarks like the TKTS booth and Madame Tussauds Wax Museum. The district hosts flagship stores, iconic restaurants, and entertainment venues, making it a must-visit location. The New Year’s Eve Ball Drop attracts millions, while street performances and interactive exhibits keep the area lively year-round. Visitors can explore the Theater District, catch a Broadway show, or simply take in the electric atmosphere that defines Times Square.
                </p>
          </div>
        </div>

        <div class="about-container">
            <div class="map_details">
                <p>Times Square on map</p>
                <img src="./assets/images/times_on_map.png" alt="View from the Top">
            </div>
        </div>
    </section>

    <section class="fun-facts">
        <h2>Interesting Facts</h2>
        <div class="facts-grid">
            <div class="fact-item">
                <i class="ri-lightbulb-line"></i>
                <p><strong>Bright Lights</strong> - Times Square's billboards use more electricity than some small towns.</p>
            </div>
            <div class="fact-item">
                <i class="ri-calendar-line"></i>
                <p><strong>Annual Events</strong> - Over 50 million people visit Times Square each year.</p>
            </div>
            <div class="fact-item">
                <i class="ri-movie-line"></i>
                <p><strong>Broadway Hub</strong> - Home to over 40 theaters showcasing world-class performances.</p>
            </div>
            <div class="fact-item">
                <i class="ri-sparkling-line"></i>
                <p><strong>New Year's Eve</strong> - The iconic Ball Drop has been a tradition since 1907.</p>
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
              <img src="./assets/images/ts2.avif" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts9.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_10.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_11.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_12.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_13.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_14.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_15.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_16.jpg" alt="Times Square" />
            </div>
            
          
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_17.jpg" alt="Times Square" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/ts_18.jpg" alt="Times Square" />
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
                <li><strong>📍 Location:</strong> <a href="https://maps.app.goo.gl/3EjkSrHJCdmWdRyU6" target="_blank">Manhattan, NY 10036, USA</a> </li>
                <hr>
                <li><strong>⏰ Open Hours:</strong> Open 24/7</li>
                <hr>
                <li><strong>🎟️ Admission:</strong> Free for all visitors</li>
                <hr>
                <li><strong>🌐 Website:</strong> <a href="https://www.timessquarenyc.org" target="_blank">www.timessquarenyc.org</a></li>
            </ul>
        </div>
    </section>

    <?php require_once('assets/inc/footer.inc.php'); ?>
