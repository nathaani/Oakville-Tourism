<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Things to do in Oakville</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/home.css" />
</head>

<body>

  <header class="hero-banner">
    <div class="backP"></div>
    <!-- <img src="img/activity/aHeaderPic.png" > -->
    <div>
      <img src="img/headerLogo.png" class="whiteLogo">
    </div>
  </header>
  <nav class="navigation-bar">
    <img src="img/headerLogoBlack.png" alt="" class="logo">
    <ul>

      <?php session_start();

      if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true) {
        ?>
        <li class="official"><a href="https://www.oakville.ca/">Oakville.ca</a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="activities.php">Activities</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="login.php">Login</a></li>
        <?php
      } else {
        ?>
        <li class="official"><a href="https://www.oakville.ca/">Oakville.ca</a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="activities.php">Activities</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="logout.php">Logout</a></li>
        <?php
      } ?>

    </ul>
    <div class="search-bar">
      <input type="text" placeholder="Search..." />
      <button type="button" class="button">Search</button>
    </div>
  </nav>

  <section class="activity-tiles">
    <div class="activity">
      <img src="img/home/activity1.jpg" alt="Activity 1" />
      <h2>Adventure Hiking</h2>
      <div class="divider"></div>
    </div>
    <div class="activity">
      <img src="img/home/activity2.jpg" alt="Activity 2" />
      <h2>Beach Relaxation</h2>
      <div class="divider"></div>
    </div>
    <div class="activity">
      <img src="img/home/activity3.jpg" alt="Activity 3" />
      <h2>Mountain Exploration</h2>
      <div class="divider"></div>
    </div>
    <div class="activity">
      <img src="img/home/activity4.jpg" alt="Activity 4" />
      <h2>City Excursion</h2>
      <div class="divider"></div>
    </div>
    <script src="js/ajax.js"></script>

  </section>

  <section class="justText">
    <p>The antidote to exhaustion isnt rest. It's nature</p>
    <button onclick="window.location.href='activities.php';">Explore Activities</button>
  </section>

  <section class="full-width-banner">
    <div class="carousel" id="bannerCarousel">
      <img class="banner-slide active" src="img/home/activity2.jpg">
      <img class="banner-slide" src="img/home/activity1.jpg">
      <img class="banner-slide" src="img/home/activity3.jpg">
    </div>
    <div class="thumbnails">
      <img src="img/home/activity2.jpg" class="thumbnail active" data-index="0">
      <img src="img/home/activity1.jpg" class="thumbnail" data-index="1">
      <img src="img/home/activity3.jpg" class="thumbnail" data-index="2">
    </div>
    <div class="banner-text">
      <h2>Events</h2>
      <button class="actbut" onclick="window.location.href='events.php';">See All </button>
    </div>
  </section>





  <script src="js/home.js"></script>
</body>