<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cgm48";

// Create connection
$conn = mysqli_connect($์MEMBER, $NAME, $LASTNAME, $CHIANGMAI106);
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>