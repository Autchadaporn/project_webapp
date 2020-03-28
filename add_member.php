<?php
  // 1. CONNECT
  require("connect.php");  


  // $status_id = $_REQUEST['status_id'];
  $nickname = $_REQUEST['nickname'];
  $fnameTH = $_REQUEST['fnameTH'];
  $lnameTH = $_REQUEST['lnameTH'];
  $fnameEN = $_REQUEST['fnameEN'];
  $lnameEN = $_REQUEST['lnameEN'];
  $team = $_REQUEST['team'];
  $birth = $_REQUEST['birth'];
  $height = $_REQUEST['height'];
  $province = $_REQUEST['province'];
  $favor = $_REQUEST['favor'];
  $bloodgroup = $_REQUEST['bloodgroup'];
  $hobby = $_REQUEST['hobby'];
  
    
  // $approve = $_REQUEST['approve'];
  $dir = "uploads/";
  $fileImages = $dir. $_FILES["file"]["name"];

  if(isset($_REQUEST["id"]))
  {
    $id=$_REQUEST["id"];
  }

  if(isset($_REQUEST["approve"]))
  {
    $approve = $_REQUEST['approve'];
  }
  
 

  // echo "status_id: ". $status_id . "<br/>";
  // echo "status_th: ". $status_th . "<br/>";
  // echo "status_en: ". $status_en . "<br/>";
 
  // แก้ไข
  if (isset($_REQUEST["id"])) {
    // echo $_GET['id'];
    
    $sql="UPDATE members SET nickname='".$nickname ."',
                             fnameTH= '" . $fnameTH ."', 
                             lnameTH='" . $lnameTH ."',
                             fnameEN='" . $fnameEN ."',
                             lnameEN='" . $lnameEN ."',
                             team='" . $team ."',
                             birth='" . $birth ."',
                             height='" . $height ."',
                             province='" . $province ."',
                             favor='" . $favor ."',
                             bloodgroup='" . $bloodgroup ."',
                             hobby='" . $hobby ."',
                             approve='". $approve ."'
                             WHERE id='".$id."'   
                            ";
    if($_FILES["file"]["name"] != ''){  
      $sql="UPDATE members SET img='" . $fileImages ."'  WHERE id='".$id."'   
     ";
    }

    if (mysqli_query($conn, $sql)) {
      //เอาไฟล์เข้าfolder uploads
      move_uploaded_file($_FILES["file"]["tmp_name"],$fileImages);
      header("Location:edit.php");
      // echo $approve;
      // print_r( $_FILES);
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  //header("Location:show_status.php");
  
  }
  
  else{
    $check = "
    SELECT   fnameEN,lnameEN,fnameTH,lnameTH
    FROM members  
    WHERE fnameEN  = '$fnameEN' AND lnameEN  = '$lnameEN'
    ";
      $result = mysqli_query($conn, $check) or die(mysqli_error());
      $num=mysqli_num_rows($result);

    $checkTH = "
    SELECT   fnameEN,lnameEN,fnameTH,lnameTH
    FROM members  
    WHERE fnameTH  = '$fnameTH' AND lnameTH  = '$lnameTH'
    ";
      $resultTH = mysqli_query($conn, $checkTH) or die(mysqli_error());
      $numTH=mysqli_num_rows($resultTH);
   
      if($num > 0 or $numTH > 0)
      {
      echo "<script>";
      echo "alert(' ชื่อซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
      echo "window.history.back();";
      echo "</script>";
      }
      // if($numTH > 0)
      // {
      // echo "<script>";
      // echo "alert(' ชื่อไทยซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
      // //  echo "window.history.back();";
      // echo "</script>";
      // }
      else{

    // 2. SELECT (SQL: INSERT)
  $sql = "INSERT INTO members (nickname, fnameTH,lnameTH,fnameEN,lnameEN,team,birth,height,province,favor,bloodgroup,hobby,img) VALUES ";
  $sql .= "('" . $nickname ."',
            '" . $fnameTH ."',
            '" . $lnameTH ."',
            '" . $fnameEN ."',
            '" . $lnameEN ."',
            '" . $team ."',
            '" . $birth ."',
            '" . $height ."',
            '" . $province ."',
            '" . $favor ."',
            '" . $bloodgroup ."',
            '" . $hobby ."',
            '" . $fileImages ."'
            )";
 }
  //$sql = "INSERT INTO status (status_id, status_th, status_en) VALUES ";
  //$sql .= "(". $status_id .",'" . $status_th ."','" . $status_en ."')";

  // echo $sql;

  // if(isset($_GET['conn,sql'])){
  if (mysqli_query($conn, @$sql)) {
    //เอาไฟล์เข้าfolder uploads
    move_uploaded_file($_FILES["file"]["tmp_name"],$fileImages);
    header("Location:edit.php");
    // echo $check;
    // print_r( $_FILES);
} else {
    echo "Error: " .@$sql . "<br>" . mysqli_error($conn);
    // echo $result;

  }

mysqli_close($conn);
//header("Location:show_status.php");
  }
?>