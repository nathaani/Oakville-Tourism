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
	$id = $_GET["id"];

	$dsn = "mysql:host=localhost;dbname=oakville;charset=utf8mb4";
	$dbusername = "root";
	$dbpassword = "";

	//connect
	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	//prepare
	$stmt = $pdo->prepare("SELECT * FROM `articles` 
	WHERE `articles`.`id` = $id;");

	//execute
	$stmt->execute();

	//process results
	$row = $stmt->fetch();


	?>
	<h1>Delete Confirmation</h1>
	<p>Are you sure you want to delete this record?</p>
	<div>
		<p>Article Title:
			<?= $row["name"] ?>
		</p>
	</div>

	<a href="home.php">No</a>
	<form action="delete.php" method="POST">
		<input type="hidden" name="id" value="<?= $row['id'] ?>">
		<input type="submit" value="Yes">
	</form>

</body>