<?php
// delete_status.php

$row = $_GET['id'];
// echo $status_id;

// 1. Connect DB
require("connect.php");

// 2. Select SQL
$sql = "DELETE FROM members WHERE id = $row";

//echo $sql;

// 3. Execute SQL
if (mysqli_query($conn, $sql)) {
    echo "Delete record successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:edit.php");
?>