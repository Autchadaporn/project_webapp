<html>
<header>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href ="css/home.css">
    <link rel="stylesheet" href="/lib/w3.css">

   <!--bootstrap เริ่ม -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--bootstrap จบ -->
</header>
<style>
  body {
    background-image: url("cgm.jpg");
}
.class{
    width: 1550px;
    height: auto;  
    padding: 5px 5px 5px 5px;
    background :rgba(255, 255, 255, 0.8);;}
.button {
    float :right;
    margin-right: 20px;
    margin-bottom: 20px;
}    

</style>
<body>

    <div class="header">
    <a href="homepage.php" class="text-center">
    <img class="header-logo" src="https://www.cgm48official.com/assets/images/logo-cgm48.svg">
    </a>
    </div>

<div class="class">
<!-- <a href='addmember.php'>เพิ่ม</a>  -->
<a href="loginpage.php" class="btn btn-outline-secondary button" role="button" aria-pressed="true" style="margin-top: 10px; ">Logout</a>
<a href="addmember.php" class="btn btn-outline-secondary button" role="button" aria-pressed="true" style="margin-top: 10px;">เพิ่ม</a>


<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM members " or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($conn, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 


    
    echo "<table border='1' align='center' width='1500'>";
    //หัวข้อตาราง
    echo "<tr align='center' bgcolor='#CCCCCC'> <td>ชื่อเล่น</td> <td>ชื่อ</td> <td>นามสกุล</td> <td>Name</td> <td>LastName</td> <td>team</td> <td>วันเกิด</td> <td>ส่วนสูง</td> <td>จังหวัด</td> <td>สิ่งที่ชอบ</td> <td>กรุ๊ปเลือด</td> <td>งานอดิเรก</td> <td>แก้ไข</td> <td>ลบ</td> </tr>";
    while($row = mysqli_fetch_array($result)) { 
    echo "<tr>";
    echo strtoupper("<td>" .$row["nickname"]).  "</td> "; 
    echo "<td>" .$row["fnameTH"] .  "</td> ";  
    echo "<td>" .$row["lnameTH"] .  "</td> ";
    echo strtoupper("<td>" .$row["fnameEN"]) .  "</td> ";
    echo strtoupper("<td>" .$row["lnameEN"]) .  "</td> ";
    echo "<td>" .$row["team"] .  "</td> ";
    echo "<td>" .$row["birth"] .  "</td> ";
    echo "<td>" .$row["height"] .  "</td> ";
    echo "<td>" .$row["province"] .  "</td> ";
    echo "<td>" .$row["favor"] .  "</td> ";
    echo "<td>" .$row["bloodgroup"] .  "</td> ";
    echo "<td>" .$row["hobby"] .  "</td> ";

    //แก้ไขข้อมูล
    echo "<td><a href='addmember.php?id=$row[id]'>edit</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='delete.php?id=$row[id]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
    echo "</tr>";
    }
    echo "</table>";
    //5. close connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html> 
