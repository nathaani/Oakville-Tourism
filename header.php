<?php session_start();
if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true){

    ?><nav class="navigation-bar">
        <ul>
            <li class="official"><a href="https://www.oakville.ca/">Oakville.ca</a></li>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="activities.php">Activities</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav><?php 

}else{

    ?><nav class="navigation-bar">
        <ul>
            <li class="official"><a href="https://www.oakville.ca/">Oakville.ca</a></li>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="activities.php">Activities</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav><?php 

}