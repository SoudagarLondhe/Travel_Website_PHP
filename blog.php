<?php
$pageTitle = 'Blog';
$pageCSS = "assets/css/blog.css";
require_once('assets/inc/header.inc.php');

?>

    <header class="hero">
        <div class="hero-content">
            <h1>📖 My Blogs</h1>
            <p>Exploring the beauty of New York City, one adventure at a time.</p>
      
        </div>
    </header>

    <section class="blogs">
        <div class="blog-container">

   
            <div class="blog-card">
                <img src="./assets/images/blog_brooklyn.jpeg" alt="Brooklyn Bridge">
                <div class="blog-content">
                    <h2>🚶 Walking Across Brooklyn Bridge</h2>
                    <p><strong>Date:</strong> December 25, 2023</p>
                    <p><strong>Time:</strong> 09:00 PM - 11:00 PM</p>
                    <p>The Brooklyn Bridge offers a breathtaking walk with stunning skyline views. Starting from Brooklyn, I experienced the golden hour glow over Manhattan, making it an unforgettable moment.</p>
                    <p>As I walked along the wooden pathway, the suspension cables created a unique geometric pattern against the sky. I stopped frequently to take in the views of the East River, the Statue of Liberty in the distance, and the never-ending movement of ferries below. The breeze was refreshing, and despite the usual crowd of tourists and cyclists, the bridge felt peaceful.</p>
                    
                    <div class="post-meta">
                        <span class="likes">
                            <i class="ri-thumb-up-line"></i> 120 Likes
                        </span>
                        <span class="views">
                            <i class="ri-eye-line"></i> 1,500 Views
                        </span>
                    </div>
        
                    <div class="comment-section">
                        <h4>Comments:</h4>
                        <div class="comment">
                            <p><strong>John Smith:</strong> That sounds amazing! I'll definitely check out the pizza spots.</p>
                        </div>
                        <div class="comment">
                            <p><strong>Emily Johnson:</strong> The Brooklyn Bridge at sunset is such a stunning view. Glad you enjoyed your trip!</p>
                        </div>
                        <textarea placeholder="Add a comment..."></textarea>
                        <button class="post-comment">Post Comment</button>
                    </div>
                </div>
               
            </div>

    
            <div class="blog-card">
                <img src="./assets/images/blog_ts.jpeg" alt="Times Square">
                <div class="blog-content">
                    <h2>🌟 Exploring Times Square</h2>
                    <p><strong>Date:</strong> August 22, 2024</p>
                    <p><strong>Time:</strong> 8:00 AM - 10:00 AM</p>
                    <p>Times Square is mesmerizing with bright billboards, street performers, and an energetic crowd. The vibrant atmosphere makes it a must-visit destination in NYC.</p>
                    <p>As soon as I stepped into Times Square, I felt the overwhelming energy of the city. The massive LED billboards illuminated the streets, advertising everything from Broadway shows to global brands. The air was filled with a mix of conversations, honking taxis, and the distant sounds of street musicians.</p>
                     <div class="post-meta">
                        <span class="likes">
                            <i class="ri-thumb-up-line"></i> 120 Likes
                        </span>
                        <span class="views">
                            <i class="ri-eye-line"></i> 1,500 Views
                        </span>
                    </div>
        
                    <div class="comment-section">
                        <h4>Comments:</h4>
                        <div class="comment">
                            <p><strong>John Smith:</strong> That sounds amazing! I'll definitely check out the pizza spots.</p>
                        </div>
                        <div class="comment">
                            <p><strong>Emily Johnson:</strong> The Brooklyn Bridge at sunset is such a stunning view. Glad you enjoyed your trip!</p>
                        </div>
                        <textarea placeholder="Add a comment..."></textarea>
                        <button class="post-comment">Post Comment</button>
                    </div>
                </div>
            </div>


            <div class="blog-card">
                <img src="./assets/images/blog_subway.jpg" alt="NYC Subway">
                <div class="blog-content">
                    <h2>🚇 Riding the NYC Subway for the First Time</h2>
                    <p><strong>Date:</strong> December 26, 2023</p>
                    <p><strong>Time:</strong> 9:00 PM - 9:45 AM</p>
                    <p>The NYC subway is an adventure in itself. My first ride from Times Square to Brooklyn was efficient, affordable, and a great way to experience city life.</p>
                    <p>After purchasing a MetroCard, I navigated through the busy Times Square station. The hustle and bustle were overwhelming, with people rushing in every direction. I could hear the distant sound of a saxophonist playing jazz, a reminder of the artistic soul of NYC.</p>
                    <p>When the A train arrived, I stepped in and quickly grabbed a seat. The train was packed with commuters—some reading newspapers, others scrolling on their phones. The rhythmic sounds of the subway wheels against the tracks created a soothing background noise.</p>
                    <div class="post-meta">
                        <span class="likes">
                            <i class="ri-thumb-up-line"></i> 120 Likes
                        </span>
                        <span class="views">
                            <i class="ri-eye-line"></i> 1,500 Views
                        </span>
                    </div>
        
                    <div class="comment-section">
                        <h4>Comments:</h4>
                        <div class="comment">
                            <p><strong>John Smith:</strong> That sounds amazing! I'll definitely check out the pizza spots.</p>
                        </div>
                        <div class="comment">
                            <p><strong>Emily Johnson:</strong> The Brooklyn Bridge at sunset is such a stunning view. Glad you enjoyed your trip!</p>
                        </div>
                        <textarea placeholder="Add a comment..."></textarea>
                        <button class="post-comment">Post Comment</button>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>

<?php require_once('assets/inc/footer.inc.php'); ?>