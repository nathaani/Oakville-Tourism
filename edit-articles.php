<!--HEADER-->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Things to do in Oakville</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/home.css" />
</head>

<header>
  <div class="backP"></div>
  <!-- <img src="img/activity/aHeaderPic.png" > -->
  <div>
    <img src="img/headerLogo.png" class="whiteLogo">
  </div>

  <nav class="navigation-bar">
    <img src="img/headerLogoBlack.png" alt="" class="logo">
    <ul>

      <li class="official"><a href="https://www.oakville.ca/">Oakville.ca</a></li>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="activities.php">Activities</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="login.php">Login</a></li>

    </ul>

  </nav>
</header>



<body class="login">

  <?php session_start();



  if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true || $_SESSION["member"]) {

    ?>
    <p>You are NOT an admin. This is secret info</h>
      <a href="login.php">Login here</a>
      <?php
      exit();

  } else {
    $id = $_GET["id"];

    $dsn = "mysql:host=localhost;dbname=oakville;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $stmt = $pdo->prepare("SELECT * FROM `articles`
      WHERE `id` = '$id' ;");
    $stmt->execute();

    $row = $stmt->fetch();


    ?>
    <form action="update-articles.php" method="POST">
      <p>Category: <input type="text" name="category" value="<?= $row["category"] ?>"></p>
      <p>Title: <input type="text" name="name" value="<?= $row["name"] ?>"></p>

      <p>Image Link:<input type="img" name="img" value="<?= $row["img"] ?>"></p>

      <p>Distance:  <textarea name="location" cols="100" rows="10"><?= $row["location"] ?></textarea></p>
     

      <p>Hours:  <textarea name="hours" cols="100" rows="10"><?= $row["hours"] ?></textarea></p>
     

      <p>Text:  <textarea name="text" cols="100" rows="10"><?= $row["text"] ?></textarea></p>
     

      <input type="hidden" name="id" value="<?= $row["id"] ?>">
      <input type="submit">
    </form>
    <?php
  }

  ?>
</body>