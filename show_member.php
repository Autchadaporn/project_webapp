<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM members ORDER BY id asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($conn, $query); 
//4 . แสดงข้อมูลที่ query ออกnมา โดยใช้ตารางในการจัดข้อมูล: 
 
//echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
//echo "<tr align='center' bgcolor='#CCCCCC'><td>ชื่อ</td><td>Uername</td><td>ชื่อ</td><td>นามสกุล</td><td>อีเมล์</td><td>แก้ไข</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  //echo "<tr>";
//แก้ไขข้อมูล
  echo "<td><a href='showmemtest.php?ID=" . $row['id'] ."'>show</a></td> ";

  echo "<div class='gallery'> 
  <a target='blank' href='img_5terre.jpg'>
  <img src='https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/86349117_199715568086190_2259954285838073856_n.jpg?_nc_cat=109&_nc_sid=85a577&_nc_ohc=5XPx80aewasAX-IyGpN&_nc_ht=scontent.fbkk5-1.fna&oh=1c1b081fb520757a6416623fde1afcee&oe=5E93463D' alt='Cinque Terre' width='600' height='400'>
  </a>
  <div class='desc'>".$row["nickname"]."</div>
  </div>";
  
  //ลบข้อมูล
  //echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
 // echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($conn);
?>