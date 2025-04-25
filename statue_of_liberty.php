<!-- Statue of Liberty PHP file -->

<?php
$pageTitle = 'Statue of Liberty';
$pageCSS = "assets/css/statue_of_liberty.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
        <div class="hero-content">
            <h1>Statue of Liberty</h1>
            <p>A symbol of freedom and democracy.</p>
        </div>
    </header>

    <section class="about">
        <div class="about-container">
            <div class="about-content">
                <h2>History</h2>
                <br>
                <p>
                    The Statue of Liberty, a gift from France to the United States, was dedicated on October 28, 1886. Designed by French sculptor Frédéric Auguste Bartholdi and built by Gustave Eiffel, the statue represents freedom and democracy. It was originally conceived as a symbol of friendship between the two nations, but over time, it became a symbol of hope and inspiration to millions of immigrants arriving in the U.S. through Ellis Island.
                </p>
                <br>
                <p>
                    Standing at 305 feet tall, the statue's design features a female figure holding a torch high in her right hand, representing enlightenment, and a tablet inscribed with the date July 4, 1776, symbolizing American independence. The statue's base, which also houses a museum, was constructed in 1884, and the whole monument was completed and unveiled two years later.
                </p>
                <br>
                <p>
                    Throughout the 20th century, the Statue of Liberty became a powerful symbol of freedom and refuge for those seeking a better life. Today, it remains a key symbol of the United States, welcoming immigrants and visitors from around the world. The National Park Service now oversees Liberty Island, which attracts millions of visitors each year.
                </p>
             </div>
            <div class="about-image">
                <img src="./assets/images/sl2.jpg" alt="Statue of Liberty">
            </div>
        </div>

        <div class="about-container">
            <div class="about-image">
                <img src="./assets/images/sl3.jpg" alt="Statue of Liberty in the Evening">
            </div>
            <div class="about-content">
                <h2>Notable Features</h2>
                <br>
                <p>
                    The Statue of Liberty is not only an iconic symbol of freedom, but it also boasts several features that make it a must-visit landmark. Standing at 305 feet tall from the base to the tip of the torch, it is one of the largest statues in the world. The statue itself is made of copper and has developed its signature green color due to oxidation over time.
                    Visitors to Liberty Island can explore the statue's pedestal, which offers stunning panoramic views of New York Harbor, Ellis Island, and the Manhattan skyline. The pedestal houses a museum that showcases the history of the statue, from its construction to its role in American culture. Inside, you'll find exhibits that feature the original design models, photographs, and artifacts that chronicle its construction and restoration.
                </p>
                <br>
                <p>
                    The Crown Access is one of the most sought-after features of the statue, offering visitors the chance to climb up to the crown, where they can enjoy an even more breathtaking view. However, due to the steep climb and restricted space, access to the crown is limited and requires advanced reservations. Crown visitors also get a closer look at the statue's inner structure, which was designed by the renowned engineer Gustave Eiffel, who also designed the Eiffel Tower.
                    The statue is surrounded by Liberty Island, a beautiful park where visitors can enjoy walking tours, have a picnic, or relax while taking in the views of the iconic monument. 
                </p>

          </div>
        </div>

        <div class="about-container">
            <div class="map_details">
                <p>Statue of Liberty on map</p>
                <img src="./assets/images/statue_on_map.png" alt="View from the Top">
            </div>
        </div>
    </section>

    <section class="fun-facts">
        <h2>Interesting Facts</h2>
        <div class="facts-grid">
            <div class="fact-item">
                <i class="ri-lightbulb-line"></i>
                <p><strong>Height</strong> - The Statue of Liberty stands at 305 feet, including its pedestal.</p>
            </div>
            <div class="fact-item">
                <i class="ri-calendar-line"></i>
                <p><strong>Over 4 Million Visitors</strong> - The statue attracts millions of visitors annually from all over the world.</p>
            </div>
            <div class="fact-item">
                <i class="ri-movie-line"></i>
                <p><strong>Movie Icon</strong> - The Statue of Liberty has appeared in numerous movies</p>
            </div>
            <div class="fact-item">
                <i class="ri-sparkling-line"></i>
                <p><strong>Restoration</strong> - The statue was fully restored in 1986 for its 100th anniversary.</p>
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
              <img src="./assets/images/sl4.avif" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl7.avif" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl6.avif" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl21.avif" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl22.jpg" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl23.jpg" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl24.jpg" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl25.jpg" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl26.jpg" alt="Statue of Liberty" />
            </div>
            
          
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl27.jpg" alt="Statue of Liberty" />
            </div>
            
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl28.webp" alt="Statue of Liberty" />
            </div>
  
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl29.jpg" alt="Statue of Liberty" />
            </div>
  
            <div class="gallery-image-wrapper">
              <img src="./assets/images/sl30.jpg" alt="Statue of Liberty" />
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
                <li><strong>📍 Location:</strong>  <a href="https://maps.app.goo.gl/TkA5dsk1LbHKALUM7" target="_blank">Liberty Island, New York Harbor, New York, NY 10004, USA</a></li>
                <hr>
                <li><strong>⏰ Open Hours:</strong> 8:30 AM - 4:00 PM Daily</li>
                <hr>
                <li><strong>🎟️ Admission:</strong> 
                    <ul>
                        <li>Ferry Ticket: $0 (Under 4), $16.50 (4-12 years), $25.50 (Adults 13+), $22.50 (Seniors 62+)</li>
                        <li>Pedestal Access: $0 for all ages</li>
                        <li>Crown Access: +$0.30 for all ages (Restricted for younger visitors)</li>
                    </ul>
                </li>
                
                <hr>
                <li><strong>🌐 Website:</strong> <a href="https://www.nps.gov/stli/index.htm" target="_blank">www.nps.gov/stli</a></li>
            </ul>
        </div>
    </section>

    <?php require_once('assets/inc/footer.inc.php'); ?>