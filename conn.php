<?php
$servername = "localhost";
$dbname = "admission64";
$username = "root";
$password = "";




// Create connection
$connected = mysqli_connect($servername, $username, $password);
$select_db = mysqli_select_db($connected,$dbname);
mysqli_query($connected,"SET character_set_results=utf8");
mysqli_query($connected,"SET character_set_client=utf8");
mysqli_query($connected,"SET character_set_connection=utf8");
