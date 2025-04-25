<!-- Documentation PHP file -->
<?php
$pageTitle = 'Documentation';
$pageCSS = "assets/css/documentation.css";
require_once('assets/inc/header.inc.php');
?>

<section class="grading-container">

  <div class="grading-item">
    <h2>1. Improved Hover Effect (Improvement from Individual Part 1 feedback)</h2>
    <p>
      Based on the previous feedback regarding distracting size changes during hover interactions,
      I updated the hover effect for all Attractions pages (Empire State Building, Central Park, 
      Times Square, Statue of Liberty, and One World Trade Center). Instead of scaling the entire 
      content or button area, I limited the hover effect to only scale the image inside each 
      gallery item. This was achieved by applying a CSS transform: scale(1.1) on the .gallery-image-wrapper:hover img selector. 
      This ensures that only the image subtly zooms on hover, providing a more focused and smoother user experience without shifting 
      surrounding content.
    </p>
  </div>

  <div class="grading-item">
    <h2>2. Original JavaScript Component</h2>
    <p>
      I implemented a typewriter animation using vanilla JavaScript that displays contextual welcome text on pages like index.php, history.php, arts_museum.php, and facts.php.
      Each page uses a data-message attribute to dynamically control the message without duplicating JavaScript code.
      The text appears character-by-character using setTimeout(), creating a clean typing effect that enhances user engagement.
      No external libraries were used  the feature is fully custom, lightweight, and reusable across multiple pages.
    </p>
  </div>

  <div class="grading-item">
    <h2>3. DHTML Component</h2>
    <p>
      For all pages under the Attractions section (Empire State Building, Central Park, Times Square, Statue of Liberty, and One World Trade Center), I implemented a responsive image carousel using custom JavaScript and DHTML.
      The carousel supports both desktop navigation via left/right buttons and mobile swipe gestures built with touchstart and touchmove events.
      Unlike fixed-step scrolling, the mobile swipe scrolls based on the actual gesture distance, creating a natural, app-like interaction.
      Additionally, a fade-in animation is applied to gallery images on scroll using DHTML techniques, improving visual flow and user experience.
    </p>
  </div>

  <div class="grading-item">
    <h2>4. Modularization Using PHP Includes</h2>
    <p>
      To avoid code repetition and follow best practices, I modularized my website using PHP includes. I created two reusable files: header.inc.php and footer.inc.php.
      Every page now sets its own $pageTitle before including the common header and footer.
    </p>
  </div>

  <div class="grading-item">
    <h2>5. Comment Form with JavaScript Validation</h2>
    <p>
      Under Blogs 'Travel Experience', a comment form exists where users can add their comments with Name, Email, Rating, Visit Count, and Comment fields.
      The comment form includes JavaScript validation that checks if all fields are properly filled before submission. 
      The form uses a custom validateCommentForm() function that displays alerts if any input is missing or invalid, instead of relying on HTML5 required attributes.
    </p>
  </div>

  <div class="grading-item">
    <h2>6. PHP Data Fetching and Sanitization</h2>
    <p>
      Before inserting user input into the database, all form data is sanitized using a custom <code>sanitize()</code> function to prevent malicious inputs.
      Comments are inserted securely into the database using MySQLi prepared statements.
      Existing comments are retrieved using <code>fetch_assoc()</code> to display them under each blog post safely.
    </p>
  </div>

  <div class="grading-item">
    <h2>7. Extra 1: Blog Specific Comments</h2>
    <p>
      Three blogs have been created, and users can submit comments on a specific blog. 
      When a user posts a comment, it is only added to the relevant blog and not to all blogs. 
      Comments are properly grouped per blog, and the most recent comments are displayed at the top.
    </p>
  </div>

  <div class="grading-item">
    <h2>8. Extra 2: Scroll to Top Functionality</h2>
    <p>
      On every page, when the user scrolls down, a "Go to Top" arrow button appears, allowing users 
      to quickly return to the top of the page, enhancing navigation experience and usability.
    </p>
  </div>

  <div class="grading-item">
    <h2>9. Extra 3: Mobile-Responsive Navigation</h2>
    <p>
      Implemented a fully responsive navigation bar with a hamburger menu toggle for mobile devices.
      The menu dynamically opens and closes using custom JavaScript without using any external libraries.
    </p>
  </div>

  <div class="grading-item">
    <h2>10. Extra 4: Advanced Gallery Animations</h2>
    <p>
      In the Attractions section, gallery images use a fade-in animation when they come into the viewport during scrolling,
      creating a smooth and visually pleasing experience.
    </p>
  </div>

  <div class="grading-item">
    <h2>11. Extra 5: Navbar JavaScript & Interactivity</h2>
    <p>
      Implemented a dynamic navbar using JavaScript including responsive menu toggling and interactive dropdown menus that expand on hover, providing intuitive navigation.
    </p>
  </div>

  <div class="grading-item">
    <h2>12. Good Design Techniques - CRAP</h2>
    <p>
      The website follows CRAP principles (Contrast, Repetition, Alignment, and Proximity) to ensure a clean, visually appealing, and user-friendly design.
    </p>
  </div>

  <div class="grading-item">
    <h2>13. Organization of Information</h2>
    <p>
      Content is organized logically into sections and subsections, making it easier for users to navigate and understand the information.
    </p>
  </div>

  <div class="grading-item">
    <h2>14. Quantity / Quality of Content</h2>
    <p>
      10+ pages of original content have been created with sufficient detailed information on each page.
    </p>
  </div>

  <div class="grading-item">
    <h2>15. Content</h2>
    <p>
      All written content is original and free from grammatical errors. Citations and references have been added where necessary.
    </p>
  </div>

  <div class="grading-item">
    <h2>16. Code Design Requirements</h2>
    <p>
      Code is properly formatted, indented, and commented. A global CSS file is used to maintain consistency, and semantic HTML tags are used where appropriate.
    </p>
  </div>

  <div class="grading-item">
    <h2>17. Interaction Design & Navigation</h2>
    <p>
      Global navigation is available on every page. The navigation adapts gracefully to smaller screen sizes, providing a seamless experience.
    </p>
  </div>

  <div class="grading-item">
    <h2>18. HTML & CSS Validation / Cross-Browser Compatibility</h2>
    <p>
      HTML and CSS have been validated using W3C validators. The site has been tested on Chrome, Firefox, Edge, and Safari for consistent appearance.
    </p>
  </div>

  <div class="grading-item">
    <h2>19. Reference Page</h2>
    <p>
      A dedicated References page is included citing all external fonts, images, and content sources used throughout the project.
    </p>
  </div>

  <div class="grading-item">
    <h2>20. Responsive Web Design</h2>
    <p>
      The website is fully responsive and mobile-friendly, ensuring a smooth user experience across desktops, tablets, and smartphones.
    </p>
  </div>

</section>

<?php require_once('assets/inc/footer.inc.php'); ?>
