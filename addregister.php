<?php
require('connect.php');

$name = $_REQUEST['uname'];
$password= $_REQUEST['psw'];

$sql = "INSERT INTO users (name, password) VALUES ";
$sql .= "('" . $name ."',
            '" . $password."')";


if (mysqli_query($conn, $sql)) {

    header("Location:loginpage.php");

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
            
mysqli_close($conn);
//header("Location:show_status.php");


?>