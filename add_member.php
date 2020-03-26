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
  
  $dir = "uploads/";
  $fileImages = $dir. $_FILES["file"]["name"];

  $id=$_REQUEST['id'];

  // echo "status_id: ". $status_id . "<br/>";
  // echo "status_th: ". $status_th . "<br/>";
  // echo "status_en: ". $status_en . "<br/>";
 
  // แก้ไข
  if($id!=''){
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
                             hobby='" . $hobby ."'
                      
                             WHERE id='".$id."'   
                            ";
    if($_FILES["file"]["name"] != ''){  
      $sql="UPDATE members SET img='" . $fileImages ."'  WHERE id='".$id."'   
     ";
    }
  
  }
  
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

  if (mysqli_query($conn, $sql)) {
    //เอาไฟล์เข้าfolder uploads
    move_uploaded_file($_FILES["file"]["tmp_name"],$fileImages);
    header("Location:edit.php");
    // echo $id;
    // print_r( $_FILES);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//header("Location:show_status.php");

?>