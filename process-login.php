<!--HEADER-->

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
            <li><a href="logout.php">Logout</a></li>

        </ul>
    </nav>
    <?php session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$dsn = "mysql:host=localhost;dbname=oakville;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";  

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//prepare
$stmt = $pdo->prepare("SELECT `personId`, `username`, `role` 
	FROM `members` 
	WHERE `username` = '$username' AND `password` = '$password';");
$stmt->execute();

$row = $stmt->fetch(); // Fetch the row once
$role = $row['role'];

if ($row && $role == 'admin') {
    ?><p>Welcome Admin</p><?php

    $_SESSION["personId"] = $row['personId'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["loggedIn"] = true;
    $_SESSION["member"] = false;
    $_SESSION["admin"] = true;

} else {
    ?><p>Error. <a href="login.php">Try login again</a></p><?php

    $_SESSION["admin"] = false;
}
?>