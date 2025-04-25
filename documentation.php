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
          I implemented a typewriter animation using vanilla JavaScript that displays contextual welcome text on pages like index.html, history.html, arts_museum.html, and facts.html.
      Each page uses a data-message attribute to dynamically control the message without duplicating JavaScript code.
      The text appears character-by-character using setTimeout(), creating a clean typing effect that enhances user engagement.
      No external libraries were used — the feature is fully custom, lightweight, and reusable across multiple pages.
        </p>
        </div>

        <div class="grading-item">
          <h2>3.DHTML Component</h2>
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
            Every page now sets its own $pageTitle (and optionally $pageCSS) before including the common header and footer.
            </p>
        </div>

        <div class="grading-item">
            <h2>1. Good Design Techniques - CRAP</h2>
            <p>The website follows CRAP principles (Contrast, Repetition, Alignment, and Proximity) to ensure a visually appealing and user-friendly design. Colors and typography were chosen for readability, and spacing is well-balanced for ease of navigation.</p>
        </div>

        <div class="grading-item">
            <h2>2. Organization of Information</h2>
            <p>Content is well-organized with logical chunking for better readability. Text and images are properly aligned, making the site easy to scan. Graphics are placed where they make sense, supporting the context of the content.</p>
        </div>

        <div class="grading-item">
            <h2>3. Quantity / Quality ofContent</h2>
            <p>10+ Content Pages with sufficent content on each page.</p>
        </div>

        <div class="grading-item">
            <h2>4. Content</h2>
            <p>All text content is original, engaging, and free of grammatical or spelling errors. A high-quality, relevant map has been included to enhance the user experience and provide accurate location-based information.</p>
        </div>

        <div class="grading-item">
            <h2>5. Code Design Requirements</h2>
            <p>Code is properly indented, and a global CSS file is used to maintain consistency. Selectors are well thought out, and no inline styles were used. HTML semantic elements were implemented for accessibility and readability. Comments were added in both CSS and HTML for clarity.</p>
        </div>

        <div class="grading-item">
            <h2>6. Interaction Design & Navigation</h2>
            <p>The website is easy to navigate, featuring a global navigation bar available on every page. Each page has a unique title for SEO and usability. </p>
        </div>

        <div class="grading-item">
            <h2>7. HTML & CSS Validation / Cross-Browser Compatibility</h2>
            <p>HTML and CSS code has been validated using W3C validators to ensure compliance with web standards. The site has been tested on multiple browsers, including Chrome, Firefox, Edge, and Safari, to verify consistent rendering.</p>
        </div>

        <div class="grading-item">
            <h2>8. Reference Page</h2>
            <p>A separate Reference Page is included to credit external sources, such as fonts, images, and content references. This ensures proper citation and acknowledgment of resources used in website development.</p>
        </div>

        <div class="grading-item">
            <h2>9. Grading Page Documentation</h2>
            <p>This grading page documents all aspects of the website's development and is linked from the homepage. It provides an overview of the thought process behind design, navigation, code quality, and content structure.</p>
        </div>

        <div class="grading-item">
            <h2>10. Responsive Web Design</h2>
            <p>The website has been designed with mobile users in mind. It adapts fluidly to different screen sizes, ensuring an optimal user experience on desktops, tablets, and smartphones.</p>
        </div>

        <div class="grading-item">
            <h2>11. JavaScript & Interactivity</h2>
            <p>Interactive components such as a scroll-to-top button, dynamic navbar loading, and dropdown menus enhance user engagement while maintaining performance efficiency.</p>
        </div>

        <div class="grading-item">
            <h2>12. Layout and Navigation</h2>
            <p>The website features a clean and responsive navigation system. It is designed for both desktop and mobile users, ensuring ease of access to all pages from any section.</p>
        </div>

        <div class="grading-item">
            <h2>13. Images & Sources</h2>
            <p>Most images are original. However, external images used are properly cited in the references page. This ensures proper attribution for images that are not my own.</p>
        </div>

        <div class="grading-item">
            <h2>14. Content & Organization</h2>
            <p>All written content within my website is original. If a citation/source is provided, it means I used it as a reference to verify information. Content is based on either firsthand knowledge or cited sources from the references page.</p>
        </div>

        <div class="grading-item">
            <h2>15. Validation</h2>
            <p>All HTML and CSS code has been validated using the W3C Markup Validation Service and W3C CSS Validator, ensuring compliance with web standards.</p>
        </div>

    </section>


    <?php require_once('assets/inc/footer.inc.php'); ?>