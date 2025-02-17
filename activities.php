<?php

$dsn = "mysql:host=localhost;dbname=oakville;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `category` = 'Activity'");


$stmt->execute();

// Print the result for debugging
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Things to do in Oakville</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/activity.css">
</head>

<body>
    <header class="hero-banner">

        <div class="backP"></div>

        <div>
            <img src="img/headerLogo.png" class="logo">
        </div>

        <?php include("header.php"); ?>

        <section class="title">
            <h1>ACTIVITIES</h1>
            <p>Town of Oakville’s longest running farmer’s market. All proceeds earned by the market stall rentals
                are donated to local Oakville charities.
            </p>
        </section>

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

                <img class="carousel-image active" src="img/activity/carousel1.png">
                <img class="carousel-image active" src="img/activity/carousel2.png">
                <img class="carousel-image active" src="img/activity/carousel3.png">

                <div class="thumbnails">
                    <img src="img/activity/carousel1.png" class="thumbnail" data-index="0">
                    <img src="img/activity/carousel2.png" class="thumbnail" data-index="1">
                    <img src="img/activity/carousel3.png" class="thumbnail" data-index="2">
                </div>
            </div>
        </section>
        <?php if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true) { ?>

            <h2>Explore</h2>

            <?php if ($row = $stmt->fetch()) { ?>
                <?php
                $counter = 0;
                while ($row = $stmt->fetch()) {
                    if ($counter % 3 === 0) {
                        echo '<section class="explore">';
                    }
                    ?>

                    <div class="item">
                        <a href="activityArticle.php?id=<?= $row["id"] ?>"><img src="<?= $row["img"] ?>"
                                alt="<?= $row["name"] ?>"></a>
                        <div class="itemName">
                            <?= $row["name"] ?>
                        </div>
                        <div class="location">
                            <?= $row["location"] ?>
                        </div>
                    </div>

                    <?php
                    $counter++;
                    if ($counter % 3 === 0) {
                        echo '</section>';
                    }
                }
                if ($counter % 3 !== 0) {
                    echo '</section>';
                }

            }
        } else { ?>
            <div class="admin">
                <h2>Hey Admin!
                    <div>
                        <p>Click an article to edit or delete</p>
                        <a href="add-articles.php?id=">Add</a>
                    </div>
                </h2>

            </div>
            <h2>Explore</h2>
            <?php
            if ($row = $stmt->fetch()) {
                $counter = 0;
                while ($row = $stmt->fetch()) {
                    if ($counter % 3 === 0) {
                        echo '<section class="explore">';
                    }
                    ?>

                    <div class="item">
                        <a href="activityArticle.php?id=<?= $row["id"] ?>"><img src="<?= $row["img"] ?>"
                                alt="<?= $row["name"] ?>"></a>
                        <div class="itemName">
                            <?= $row["name"] ?>
                        </div>
                        <div class="location">
                            <?= $row["location"] ?>
                        </div>
                    </div>

                    <?php
                    $counter++;
                    if ($counter % 3 === 0) {
                        echo '</section>';
                    }
                }
                if ($counter % 3 !== 0) {
                    echo '</section>';
                }
            }
        }


        ?>
    </main>


    <script src="js/activity.js"></script>
</body>

</html>