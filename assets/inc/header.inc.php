<!-- Header PHP file -->

<?php
    require_once('/home/MAIN/srl1622/connection.db.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/navbar.css" />

    <?php if (isset($pageCSS)) { ?>
        <link rel="stylesheet" href="<?php echo $pageCSS; ?>" />
     <?php } ?>


    <script src="./assets/js/script.js" defer></script>
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Wander NYC'; ?></title>

  </head>
  <body>

    <div id="navbar-container">
      <nav>
        <div class="nav__logo">
          <a href="./index.php">
            <img src="./assets/images/logo2.png" alt="Logo" />
            <h3>Wander NYC</h3>
          </a>
        </div>
      
        <div class="menu-toggle" id="menu-toggle">
          <i class="ri-menu-line" id="menu-icon"></i> 
        </div>
      
        <ul class="nav__links nav-menu" id="nav-menu">
          <li class="link dropdown">
            <a href="#" class="main_nav">Attractions</a>
            <ul class="dropdown-menu">
              <li><a href="./empireStateBuilding.php">Empire State Building</a></li>
              <li><a href="./central_park.php">Central Park</a></li>
              <li><a href="./times_square.php">Times Square</a></li>
              <li><a href="./statue_of_liberty.php">Statue of Liberty</a></li>
              <li><a href="./one_world_trade_center.php">One World Trade Center(WTC)</a></li>
            </ul>
          </li>
      
          <li class="link dropdown">
            <a href="#" class="main_nav">Food and Dining</a>
            <ul class="dropdown-menu">
              <li><a href="./restaurants.php">Restaurants</a></li>
              <li><a href="./pizza.php">Pizza</a></li>
              <li><a href="./clubs.php">Clubs and Bars</a></li>
            </ul>
          </li>
      
          <li class="link dropdown">
            <a href="#" class="main_nav">About NYC</a>
            <ul class="dropdown-menu">
              <li><a href="./history.php">History and Culture</a></li>
              <li><a href="./arts_museum.php">Arts and Museum</a></li>
              <li><a href="./facts.php">Immigration and Facts</a></li>
            </ul>
          </li>
      
          <li class="link dropdown">
            <a href="#" class="main_nav">Transportation Guide</a>
            <ul class="dropdown-menu">
              <li><a href="./bus_taxis.php">Bus Taxi/Uber</a></li>
              <li><a href="./subways.php">Subways</a></li>
            </ul>
          </li>
      
          <li class="link dropdown">
            <a href="#" class="main_nav">Blogs</a>
            <ul class="dropdown-menu">
              <li><a href="./blog.php">Travel Experience</a></li>
              <li><a href="./travel_tips.php">Travel Tips</a></li>
            </ul>
          </li>
      
          <li class="link" ><a href="./references.php" class="main_nav">References</a></li>
          <li class="link" ><a href="./documentation.php" class="main_nav">Documentation</a></li>
      
      
      
        </ul>
      </nav>
    </div>
   
    <button id="scrollToTop" title="Go to top">
      <i class="ri-arrow-up-line"></i>
    </button>