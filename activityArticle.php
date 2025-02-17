<?php

$dsn = "mysql:host=localhost;dbname=oakville;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

// Connect to the database
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$id = $_GET["id"];

// Prepare the SQL statement with a parameter
$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `id` = $id");

// Execute the query
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Things to do in Oakville</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/activityArticle.css">


</head>

<body>
    <header class="hero-banner">
        <div class="backP"></div>
        <!-- <img src="img/activity/aHeaderPic.png" > -->
        <div>
            <img src="img/headerLogo.png" class="logo">
        </div>

        <?php include("header.php"); ?>

        <section class="title">
            <h1>ACTIVITY</h1>
            <p>Town of Oakville’s longest running farmer’s market. All proceeds earned by the market stall rentals
                are donated to local Oakville charities.
            </p>
        </section>

        <section class="share">
            <a href="https://www.instagram.com/"> <img src="img/insta.png"></a>
            <a href="https://twitter.com/"> <img src="img/twitter.png"> </a>
            <a href="https://www.youtube.com/"> <img src="img/youtube.png"> </a>
        </section>
    </header>
    <main>
        <section>
            <div class="carousel">
                <img class="carousel-image active" src="img/activityArticle/p1.png">
                <img class="carousel-image active" src="img/activityArticle/p2.png">
                <img class="carousel-image active" src="img/activityArticle/p3.png">
                <img class="carousel-image active" src="img/activityArticle/p4.png">
                <img class="carousel-image active" src="img/activityArticle/p5.png">

                <div class="thumbnails">
                    <img src="img/activityArticle/p1.png" class="thumbnail" data-index="0">
                    <img src="img/activityArticle/p2.png" class="thumbnail" data-index="1">
                    <img src="img/activityArticle/p3.png" class="thumbnail" data-index="2">
                    <img src="img/activityArticle/p4.png" class="thumbnail" data-index="3">
                    <img src="img/activityArticle/p5.png" class="thumbnail" data-index="4">
                </div>
            </div>

            <?php if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true) { ?>
                <?php if ($row = $stmt->fetch()) { ?>
                    <section class="info">

                        <h2>
                            <?= $row["name"] ?>
                        </h2>

                        <section class="grid">
                            <section class="grid1">
                                <img src="<?= $row["img"] ?>">
                            </section>

                            <section class="grid2">
                                <h3>DISTANCE</h3>
                                <P>
                                    <?= $row["location"] ?>
                                </P>

                                <h3>HOURS of OPERATION</h3>
                                <p>
                                    <?= $row["hours"] ?>
                                </p>


                                <h3>ABOUT</h3>
                                <p>
                                    <?= $row["text"] ?>
                                </p>

                            </section>
                        </section>
                    </section>
                    <?php
                }
            } else{
                if ($row = $stmt->fetch()) {

                    ?>


                        <section class="info">

                        
                        <div class = "admin">
                            <h1>Hey Admin!</h1>
                            <a href="edit-articles.php?id=<?= $row["id"] ?>">Edit</a>
                            <a href="delete-articles.php?id=<?= $row["id"] ?>">Delete</a>
                            <a href="add-articles.php?id=<?= $row["id"] ?>">Add</a>
                            </div>

                            <h2>
                            <?= $row["name"] ?>
                            </h2>

                            <section class="grid">
                                <section class="grid1">
                                    <img src="<?= $row["img"] ?>">
                                </section>

                                <section class="grid2">
                                    <h3>DISTANCE</h3>
                                    <P>
                                    <?= $row["location"] ?>
                                    </P>

                                    <h3>HOURS of OPERATION</h3>
                                    <p>
                                    <?= $row["hours"] ?>
                                    </p>


                                    <h3>ABOUT</h3>
                                    <p>
                                    <?= $row["text"] ?>
                                    </p>

                                </section>
                            </section>
                        </section>
                    <?php

                }
            } ?>

        </section>
    </main>



    <script src="js/articleCarousel.js">
    </script>
</body>

</html>