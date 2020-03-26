<?php
// Start SESSION
session_start();

// 1. Connect
require("connect.php");

//checkLogin.php

$user = $_REQUEST['uname'];
$pass = $_REQUEST['psw'];
//echo $user . ", " . $pass;

// 2. SELECT SQL
$sql = "SELECT * FROM users WHERE name='$user' AND password='$pass'";

echo $sql;

// 3. Execute SQL
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) { // Login OK

    $row = mysqli_fetch_assoc($result);

  
    $_SESSION['name'] = $row['name'];


    header("Location:edit.php");
}
else {
    header("Location:login.php");
}


?>