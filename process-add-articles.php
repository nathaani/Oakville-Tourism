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

    if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true) {
        ?>
        <p>You are NOT logged in. This is secret info</p>
        <a href="login.php">Login here</a>
        <?php
        exit();
    } else {

        $category = $_POST["category"];
        $title = $_POST["name"];
        $img = $_POST["img"];
        $location = $_POST["location"];
        $hours = $_POST["hours"];
        $text = $_POST["text"];

        $id = $_POST["id"];

        //saves the user data to the database table
    
        $dsn = "mysql:host=localhost;dbname=oakville;charset=utf8mb4";
        $dbusername = "root";
        $dbpassword = "";

        //connect
        $pdo = new PDO($dsn, $dbusername, $dbpassword);

        //prepare
        $stmt = $pdo->prepare("INSERT INTO `articles`
    (`id`, `category`, `name`, `location`, `img`, `hours`, `text`) 
	VALUES 
	(NULL, '$category', '$title', '$img','$location', '$hours', '$text');");

        //execute
    
        if ($stmt->execute()) { ?>
            <h2>Success!</h2>
            <a href="homepage.php">Return Home</a>
            <?php
        } else {
            ?>
            <h2>Error</h2>
            <a href="homepage.php">Return Home</a>
            <?php

        }
        ?>

        <?php
    } ?>

</body>