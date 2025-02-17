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
        <p>You are NOT an admin. This is secret info</p>
        <a href="login.php">Login here</a>
        <?php
        exit();
    } else {
        ?>
        <form action="process-add-articles.php" method="POST">

            <p>Category:<input type="text" name="category"> </p>
            <p>Title:<input type="text" name="name"> </p>

            <p>Image Link: <input type="text" name="img"></p>

            <p>Distance: <textarea name="location" cols="50" rows="10"></textarea></p>


            <p>Hours:<input type="text" name="hours"> </p>

            <p>Text: <textarea name="text" cols="100" rows="10"></textarea> </p>



            <p>
                <input type="hidden" name="id">
                <input type="submit">
            </p>
        </form>

        <?php
    }
    ?>

</body>