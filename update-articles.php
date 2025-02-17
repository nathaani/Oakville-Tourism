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
$category = $_POST["category"];
$title = $_POST["name"];
$img = $_POST["img"];
$text = $_POST["text"];
$location = $_POST["location"];
$hours = $_POST["hours"];

$id = $_POST["id"];

$dsn = "mysql:host=localhost;dbname=oakville;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `articles`
	SET 
    `category` = '$category', 
	`name` = '$title', 
    `location` = '$location', 
	`img` = '$img',
    `hours` = '$hours',
    `text` = '$text' 

	WHERE `id` = '$id' ;");

//execute
if($stmt->execute()){
	?><p>Record <?=$id ?> UPDATED</p><?php
}else{
	?><p>Could not UPDATE record</p><?php
}
?>
<a href="homepage.php">Back to Home</a>