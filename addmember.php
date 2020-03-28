<?php
include('connect.php');
session_start();
$id=isset($_GET['id']) ? $_GET['id']:'';

if($id!=''){

    // เลือกข้อมูลออกมาแก้ไข
    $query = "SELECT * FROM members WHERE id='".$id."' " ;
    $result = $conn->query($query);
    $row=$result->fetch_assoc();
    // เลือกข้อมูลออกมาแก้ไข
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href ="css/mem.css">
    <link rel="stylesheet" href="/lib/w3.css">

   <!--bootstrap เริ่ม -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--bootstrap จบ -->


<style>
  body {
    background-image: url("cgm.jpg");
}
</style>


    <title><?php if($id!=''){echo "Edit Member";}else{echo"Add Member";}?></title>
</head>
<body class="body"> 
<div class="header">
  <h1><?php if($id!=''){echo "Edit Member";}else{echo"Add Member";}?></h1>
</div>

<div class="row">
  <div class="column side">
  </div>

<div class="column middle">

<form class="class" name="myForm" action="add_member.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

<?php if($id!=''){?>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" >

<?php } ?>


<div class="inputarea">
  <div style="width:141px">
    <h5>ชื่อเล่น:</h5>
  </div>
  <input type="text" name="nickname" value="<?php if($id!=''){echo $row['nickname'];} ?> " >
</div>

<div class="inputarea">
  <div style="width:141px">
    <h5>ชื่อ:</h5>
  </div> 
  <input type="text" name="fnameTH" value="<?php if($id!=''){echo $row['fnameTH'];} ?> " onkeyup="lettersOnlyTH(this)"> 
  <div style="width:141px">
    <h5>นามสกุล:</h5>
  </div>
  <input type="text" name="lnameTH" value="<?php if($id!=''){echo $row['lnameTH'];} ?>" onkeyup="lettersOnlyTH(this)">
</div>

<div class="inputarea">
  <div style="width:141px">
    <h5>Name:</h5> 
  </div>
  <input type="text" name="fnameEN" value="<?php if($id!=''){echo $row['fnameEN'];} ?>" onkeyup="lettersOnlyEN(this)"/>
  <div style="width:141px">
    <h5>Last Name:</h5> 
  </div>
  <input type="text" name="lnameEN" value="<?php if($id!=''){echo $row['lnameEN'];} ?>" onkeyup="lettersOnlyEN(this)"/>
</div>

<div class="inputarea">
  <div style="width:141px">
    <h5>Team:</h5> 
  </div>
  <select  name="team">
      <option <?php if($id !='' && $row['team'] == 'Trainee') {?>selected<?php } ?>>Trainee</option>
      <option <?php if($id !='' && $row['team'] == 'C') {?>selected<?php } ?>>C</option>
  </select>
</div>

<div class="inputarea" >
  <div style="width:141px" >
    <h5>วันเกิด:</h5> 
  </div>
  <input type="date" name="birth" value="<?php if($id!=''){echo $row['birth'];} ?>">
</div>

<div class="inputarea" >
  <div style="width:141px">
    <h5>ส่วนสูง:</h5> 
  </div>
  <input type="text" name="height" value="<?php if($id!=''){echo $row['height'];} ?>" >
</div>

<div class="inputarea" >
  <div style="width:141px">
    <h5>จังหวัด:</h5> 
  </div>
  <input type="text" name="province" value="<?php if($id!=''){echo $row['province'];} ?>" >
</div>

<div class="inputarea" >
  <div style="width:141px">
    <h5>สิ่งที่ชอบ: </h5>
  </div>
  <input type="text" name="favor" value="<?php if($id!=''){echo $row['favor'];} ?>" >
</div>

<div class="inputarea" >
  <div style="width:141px">
    <h5>กรุ๊ปเลือด:</h5> 
  </div>
  <select name="bloodgroup">
        <option <?php if($id !='' &&  $row['bloodgroup'] == 'A') {?>selected<?php } ?>>A</option>
        <option <?php if($id !='' &&  $row['bloodgroup'] == 'B') {?>selected<?php } ?>>B</option>
        <option <?php if($id !='' &&  $row['bloodgroup'] == 'O') {?>selected<?php } ?>>O</option>
        <option <?php if($id !='' &&  $row['bloodgroup'] == 'AB') {?>selected<?php } ?>>AB</option>
  </select>
</div>

<div class="inputarea" >
  <div style="width:141px">
    <h5>งานอดิเรก:</h5> 
  </div>
  <input type="text" name="hobby" value="<?php if($id!=''){echo $row['hobby'];} ?>" >
</div>

<div class="inputarea" >
  <div style="width:141px">
    <h5>รูป:</h5> 
  </div>
  <input type="file" name="file" value="<?php if($id!=''){echo  $row['img'];} ?>" >
</div>
<?php 
if(isset($_SESSION['name']) && $id!=''){ ?>
<div style="display:flex; align-item:middle;">
  <label style="margin-right:10px;margin-left:10px">
    <input type="radio" id="approve" name="approve"<?php if($row['approve']=='อนุมัติ'){ ?> checked <?php } ?> value="อนุมัติ">อนุมัติ
  </label><br>
  <label>
    <input type="radio" id="approve" name="approve"<?php if($row['approve']=='ยังไม่อนุมัติ' or $row['approve']==''){ ?> checked <?php } ?> value="ยังไม่อนุมัติ">
    ยังไม่อนุมัติ
  </label><br>
</div>
<?php }
?>
<div class="inputarea" style="margin-left:500px;" >
<a href="edit.php" style="margin-right:10px;">cancel</a>
<input type="submit" name="save" value="save">
</div>

<div class="column side">

  </div>

</form> 

<!-- <script type='text/javascript'>
function check_char(elm){
	if(!elm.value.match(/^[ก-ฮa-z0-9]$/i) && elm.value.length>0){
		alert('ไม่สามารถใช้ตัวอักษรพิเศษได้');
		elm.value='';
	}
}
</script> --> 
<!-- onkeyup="check_char(this)" -->
<script>
  function lettersOnlyEN(input) {
    var regex = /[^a-z -]/gi;
    input.value = input.value.replace(regex,"");
  }
  function lettersOnlyTH(input) {
    var regex = /[^ก-ฮ ๅ ฯ ฤ]/gi;
    input.value = input.value.replace(regex,"");
  }
</script>
      
</body>
</html>