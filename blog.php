<!-- Blog PHP file -->

<?php
$pageTitle = 'Blog';
$pageCSS = "assets/css/blog.css";
require_once('assets/inc/header.inc.php');
require_once('assets/inc/tools.inc.php');



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = sanitize($_POST['name'] ?? '', 255);
    $email = sanitize($_POST['email'] ?? '', 255);
    $rating = sanitize($_POST['rating'] ?? '', 10);
    $visit_count = sanitize($_POST['visit_count'] ?? '', 50);
    $comment = sanitize($_POST['comment'] ?? '', 1000);
    $blog_id = intval($_POST['blog_id'] ?? 0);

    if ($name && $email && $rating && $visit_count && $comment && $blog_id > 0) {
        $stmt = $mysqli->prepare("INSERT INTO UserComments (BlogID, Name, Email, Rating, VisitCount, Comment, CreatedAt) VALUES (?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("isssss", $blog_id, $name, $email, $rating, $visit_count, $comment);
        $stmt->execute();
        $stmt->close();

        header("Location: blog.php");
        exit();
    }
}



$first_blog_comments = [];
$sql = "SELECT `CommentID`, `BlogID`, `Name`, `Email`, `Rating`, `VisitCount`, `Comment`, `CreatedAt` FROM UserComments ORDER BY CreatedAt DESC";

if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        if ($row['BlogID'] == 1) {
            $first_blog_comments[] = $row;
        } elseif ($row['BlogID'] == 2) {
            $second_blog_comments[] = $row;
        } elseif ($row['BlogID'] == 3) {
            $third_blog_comments[] = $row;
        }
    }
    $result->free();
}
// echo "<script>console.log('PHP Debug: " . $first_blog_comments[0]['Name'] . "');</script>";


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


                    <div class="comment-section">
                        <h4>Comments section</h4>
                        
                        <?php if (!empty($first_blog_comments)): ?>
                            <?php foreach ($first_blog_comments as $comment): ?>
                                <div class="comment">
                                    <p><strong>Name:</strong> <?= htmlspecialchars($comment['Name']) ?></p>
                                    <p><strong>Email:</strong> <?= htmlspecialchars($comment['Email']) ?></p>
                                    <p><strong>Rating:</strong> <?= htmlspecialchars($comment['Rating']) ?>/5</p>
                                    <p><strong>Visit Count:</strong> <?= htmlspecialchars($comment['VisitCount']) ?></p>
                                    <p><strong>Comment:</strong> <?= htmlspecialchars($comment['Comment']) ?></p>
                                    <p><i>Posted on: <?= htmlspecialchars($comment['CreatedAt']) ?></i></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No comments yet. Be the first to comment!</p>
                        <?php endif; ?>

                        <form method="POST" class="comment-form" onsubmit="return validateCommentForm(this,event)">
                            <h4>Add new Comment</h4>
                            <input type="hidden" name="blog_id" value="1">

                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Name">
                            
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email">
                            
                            <label for="rating">Rate this location:</label>
                            <select id="rating" name="rating">
                                <option value="">--Select--</option>
                                <option value="5">5 - Amazing</option>
                                <option value="4">4 - Great</option>
                                <option value="3">3 - Good</option>
                                <option value="2">2 - Average</option>
                                <option value="1">1 - Needs Improvement</option>
                            </select>
                            
                            <label for="visit_count">How Many Times You Visited?</label>
                            <select id="visit_count" name="visit_count">
                                <option value="">--Select--</option>
                                <option value="First Time">First Time</option>
                                <option value="2-5 Times">2-5 Times</option>
                                <option value="More than 5">More than 5</option>
                            </select>
                            
                            <label for="comment">Your Comment:</label>
                            <textarea id="comment" name="comment" placeholder="Write your comment here..."></textarea>
                            
                            <button type="submit" class="post-comment">Post Comment</button>
                        </form>


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
                 
                    <div class="comment-section">
                        <h4>Comments section</h4>
                        
                        <?php if (!empty($second_blog_comments)): ?>
                            <?php foreach ($second_blog_comments as $comment): ?>
                                <div class="comment">
                                    <p><strong>Name:</strong> <?= htmlspecialchars($comment['Name']) ?></p>
                                    <p><strong>Email:</strong> <?= htmlspecialchars($comment['Email']) ?></p>
                                    <p><strong>Rating:</strong> <?= htmlspecialchars($comment['Rating']) ?>/5</p>
                                    <p><strong>Visit Count:</strong> <?= htmlspecialchars($comment['VisitCount']) ?></p>
                                    <p><strong>Comment:</strong> <?= htmlspecialchars($comment['Comment']) ?></p>
                                    <p><i>Posted on: <?= htmlspecialchars($comment['CreatedAt']) ?></i></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No comments yet. Be the first to comment!</p>
                        <?php endif; ?>

                        <form method="POST" class="comment-form" onsubmit="return validateCommentForm(this,event)">
                            <h4>Add new Comment</h4>
                            <input type="hidden" name="blog_id" value="2">

                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Name">
                            
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email">
                            
                            <label for="rating">Rate this location:</label>
                            <select id="rating" name="rating">
                                <option value="">--Select--</option>
                                <option value="5">5 - Amazing</option>
                                <option value="4">4 - Great</option>
                                <option value="3">3 - Good</option>
                                <option value="2">2 - Average</option>
                                <option value="1">1 - Needs Improvement</option>
                            </select>
                            
                            <label for="visit_count">How Many Times You Visited?</label>
                            <select id="visit_count" name="visit_count">
                                <option value="">--Select--</option>
                                <option value="First Time">First Time</option>
                                <option value="2-5 Times">2-5 Times</option>
                                <option value="More than 5">More than 5</option>
                            </select>
                            
                            <label for="comment">Your Comment:</label>
                            <textarea id="comment" name="comment" placeholder="Write your comment here..."></textarea>
                            
                            <button type="submit" class="post-comment">Post Comment</button>
                        </form>
                       
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
            
                    <div class="comment-section">
                        <h4>Comments section</h4>
                        
                        <?php if (!empty($third_blog_comments)): ?>
                            <?php foreach ($third_blog_comments as $comment): ?>
                                <div class="comment">
                                    <p><strong>Name:</strong> <?= htmlspecialchars($comment['Name']) ?></p>
                                    <p><strong>Email:</strong> <?= htmlspecialchars($comment['Email']) ?></p>
                                    <p><strong>Rating:</strong> <?= htmlspecialchars($comment['Rating']) ?>/5</p>
                                    <p><strong>Visit Count:</strong> <?= htmlspecialchars($comment['VisitCount']) ?></p>
                                    <p><strong>Comment:</strong> <?= htmlspecialchars($comment['Comment']) ?></p>
                                    <p><i>Posted on: <?= htmlspecialchars($comment['CreatedAt']) ?></i></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No comments yet. Be the first to comment!</p>
                        <?php endif; ?>

                        <form method="POST" class="comment-form" onsubmit="return validateCommentForm(this,event)">
                            <h4>Add new Comment</h4>
                            <input type="hidden" name="blog_id" value="3">

                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Name">
                            
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email">
                            
                            <label for="rating">Rate this location:</label>
                            <select id="rating" name="rating">
                                <option value="">--Select--</option>
                                <option value="5">5 - Amazing</option>
                                <option value="4">4 - Great</option>
                                <option value="3">3 - Good</option>
                                <option value="2">2 - Average</option>
                                <option value="1">1 - Needs Improvement</option>
                            </select>
                            
                            <label for="visit_count">How Many Times You Visited?</label>
                            <select id="visit_count" name="visit_count">
                                <option value="">--Select--</option>
                                <option value="First Time">First Time</option>
                                <option value="2-5 Times">2-5 Times</option>
                                <option value="More than 5">More than 5</option>
                            </select>
                            
                            <label for="comment">Your Comment:</label>
                            <textarea id="comment" name="comment" placeholder="Write your comment here..."></textarea>
                            
                            <button type="submit" class="post-comment">Post Comment</button>
                        </form>
                 

                    </div>



                </div>
            </div>

        </div>
    </section>

<?php require_once('assets/inc/footer.inc.php'); ?>