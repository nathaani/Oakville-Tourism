<?php session_start();
    session_destroy();
?>

<!--HEADER-->
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Things to do in Oakville</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/home.css" />
</head>

<body>

    <header>
        <div class="backP"></div>
        <!-- <img src="img/activity/aHeaderPic.png" > -->
        <div>
            <img src="img/headerLogo.png" class="whiteLogo">
        </div>
    </header>
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
<?php ?>

<p>You have logged out.</p>
<a href="login.php">Login here</a>