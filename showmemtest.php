<?php
  // 1. CONNECT
  require("connect.php");

  $id=isset($_GET['ID']) ? $_GET['ID']:'';
  if ($id != '') {
    $query = "SELECT * FROM members where ID='". $id ."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
  }
  // echo $_GET['ID'];

//   echo  $row["nickname"]. "<br>";
//   echo  $row["fnameTH"]. "<br>";
//   echo  $row["lnameTH"]. "<br>";
//   echo  $row["fnameEN"]. "<br>";
//   echo  $row["lnameEN"]. "<br>";
//   echo  $row["team"]. "<br>";
//   echo  $row["birth"]. "<br>";
//   echo  $row["height"]. "<br>";
//   echo  $row["province"]. "<br>";
//   echo  $row["favor"]. "<br>";
//   echo  $row["bloodgroup"]. "<br>";
//   echo  $row["hobby"]. "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href ="css/show.css">
    <link rel="stylesheet" href="/lib/w3.css">

   <!--bootstrap เริ่ม -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--bootstrap จบ -->

    <style>
  body {
    background-image: url("wall.jpg");
    }
</style>
 <title>Member</title>
</head>
<body class="body"> 
<div class="header">
  <h1><?php echo strtoupper( $row["nickname"]). "<br>";?></h1>
</div>

<div class="row">
  <div class="column side">
  </div>

<div class="column middle">
        <img src="<?php echo $row['img'] ?>" alt="Cinque Terre" width="200" height="200"> <br>
        
        <div class="inputarea">
        
          <?php echo strtoupper ( $row["nickname"]). "<br>";?>
        </div>
        <div class="inputarea">
          <div style="width:141px">
          <?php echo  $row["fnameTH"]. "<br>"; ?>
          </div>
          <div style="width:141px">
          <?php echo  $row["lnameTH"]. "<br>";?> 
          </div>
        </div>
        <div class="inputarea">
          <div style="width:141px">
          <?php echo strtoupper( $row["fnameEN"]). "<br>";?>
          </div>
          <div style="width:141px">
          <?php echo strtoupper ($row["lnameEN"]). "<br>";?>
          </div>
        </div>
    <div class="inputarea">
      <div style="width:141px">
      CGM TEAM 
      </div>       
    <?php echo  $row["team"]."<br>";?> 
    </div>

    <div class="inputarea">
      <div style="width:141px">
      Date of birth: 
      </div>  
    <?php echo  $row["birth"]."<br>";?> 
    </div>

    <div class="inputarea">
      <div style="width:141px">
      Height : 
      </div>     
    <?php echo  $row["height"]."<br>";?>
    </div>

     
    <div class="inputarea">
      <div style="width:141px">
      Province : 
      </div>  
    <?php echo  $row["province"]."<br>";?>
    </div>

    <div class="inputarea"> 
      <div style="width:141px">
      Like : 
      </div>     
    <?php echo  $row["favor"]."<br>";?>
    </div>
    
     <div class="inputarea">
     Blood Group  :    <?php echo  $row["bloodgroup"]."<br>";?> 
     </div>
     <div class="inputarea">
     Hobby :           <?php  echo  $row["hobby"]."<br>"; ?> 
     </div>
    
</div>
<div class="column middle">
</div>

</body>
</html>