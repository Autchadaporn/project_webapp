<?php
  include('connect.php');
  $query = "SELECT * FROM members ORDER BY id asc" or die("Error:" . mysqli_error()); 
  $result = mysqli_query($conn, $query); 
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

    <title>CGM 48 </title>
</head>
<style>
.header {
  background-color: #37b9b4;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}
  
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: center;
  width: 255px;
}

div.gallery:hover {
  border: 2px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto ;
  grid-gap: 10px;
  background-color: #d9f1f1 ;
  padding: 70px;
  
}

.grid-container > div {
  background-color: #ffffff;
  text-align: center;
  padding: 15px 0;
  font-size: 20px;
}
.footer {
  background-color: #37b9b4 ;
  padding: 10px;
  text-align: center;
}
</style>

<body> 
<form>
  <div class="header">
  <a href="/" class="text-center">
                <img class="header-logo" src="https://www.cgm48official.com/assets/images/logo-cgm48.svg">
  </a>
  </div>
</form>

<h3>MEMER</h3>

<div class="grid-container">

<?php
while($row = mysqli_fetch_array($result)) {
  echo "<div class='gallery'> 
  <a target='blank' href='showmemtest.php?ID=" . $row['id'] ."'>
  <img src='".$row['img']."' alt='Cinque Terre' width='600' height='400'>
  </a>
  <div class='desc'>". strtoupper($row["nickname"])."</div>
  </div>";
}

?>
<!-- <div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/86349117_199715568086190_2259954285838073856_n.jpg?_nc_cat=109&_nc_sid=85a577&_nc_ohc=5XPx80aewasAX-IyGpN&_nc_ht=scontent.fbkk5-1.fna&oh=1c1b081fb520757a6416623fde1afcee&oe=5E93463D" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">ANGEL</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/84357581_856314684807680_4491538569653881027_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&_nc_cat=108&_nc_ohc=bLTRIiWCBXcAX96XtRt&oh=2c4efbe5dc0f2e8d2163fa9c22817b75&oe=5EBF3249" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">AOM</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/85122859_201073847946410_8857060014255243264_n.jpg?_nc_cat=103&_nc_sid=85a577&_nc_ohc=0a14Xtat3aEAX9uaVmo&_nc_ht=scontent.fbkk5-4.fna&oh=767f4166a7134cf9cd00e149c2179267&oe=5E918B8F" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">CHAMPOO</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/p960x960/86176363_207780250616779_2229110570907336704_o.jpg?_nc_cat=103&_nc_sid=85a577&_nc_ohc=GRAq3SBgERYAX84sbdi&_nc_ht=scontent.fbkk5-4.fna&_nc_tp=6&oh=174864d0d6f974a04162179a2e926c50&oe=5E932DB5" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">FAHSAI</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/86185294_203223531067030_8463188148589953024_n.jpg?_nc_cat=111&_nc_sid=85a577&_nc_ohc=aULuyvud478AX9gCIxl&_nc_ht=scontent.fbkk5-3.fna&oh=ee19c0cd66debb60ef1193def0741d89&oe=5E92CE4B" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">FORTUNE</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/86172531_766372167217935_192344440994529280_n.jpg?_nc_cat=106&_nc_sid=85a577&_nc_ohc=KOH1cTV35DwAX8HZfPk&_nc_ht=scontent.fbkk5-8.fna&oh=e298f6f05f3fc5059d6295c42a5bd67e&oe=5E93824E" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">IZURINA</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/86253268_192119785509372_575175208462188544_n.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=yAykret_qkYAX9LglQO&_nc_ht=scontent.fbkk5-7.fna&oh=04cba1a4bd38a3140ab915258cf27294&oe=5E92DD42" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">JAYDA</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/p960x960/86272554_204303197631879_3486471193228214272_o.jpg?_nc_cat=100&_nc_sid=85a577&_nc_ohc=_MwVDIWCZ58AX9eJ04b&_nc_ht=scontent.fbkk5-5.fna&_nc_tp=6&oh=da7416bf12104ec404d60d3adf905df9&oe=5E93ED30" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">JJAE</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/85115453_202934531101642_3196416783120596992_n.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=01GOA5_-V2QAX86vIBv&_nc_ht=scontent.fbkk5-7.fna&oh=bf897254f3790f76215ee71a8db85cdb&oe=5E923AE8" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">KAIWAN</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/p960x960/85226961_201207434603084_6481163850765828096_o.jpg?_nc_cat=108&_nc_sid=85a577&_nc_ohc=fcJ7NCmlk7cAX80UnbU&_nc_ht=scontent.fbkk5-7.fna&_nc_tp=6&oh=98db002219adc4eb7505625f4cc28702&oe=5E943624" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">KANING</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/p960x960/86180046_201408277918672_8596201709494075392_o.jpg?_nc_cat=106&_nc_sid=85a577&_nc_ohc=HS0L2iivOPwAX-ntAqj&_nc_ht=scontent.fbkk5-8.fna&_nc_tp=6&oh=7df26c128583f937680f84eea6c6329a&oe=5E919C24" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">KYLA</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/p960x960/86294632_198662514854989_8090845111438540800_o.jpg?_nc_cat=110&_nc_sid=85a577&_nc_ohc=3LsCYRp7mDMAX-293kX&_nc_ht=scontent.fbkk5-4.fna&_nc_tp=6&oh=c9fd877ce232b6b7c54afbc35c450831&oe=5E915EAE" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">LATIN</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/86193966_203358981062355_5459485289615458304_n.jpg?_nc_cat=109&_nc_sid=85a577&_nc_ohc=v4zkHX95OVYAX_vMD-J&_nc_ht=scontent.fbkk5-1.fna&oh=6b351f90ce65e94396a52f83f1a9c0d3&oe=5E940D75" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">MARMINK</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/86193166_197571871634738_3290176056631230464_n.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=BNkey_yBufEAX-RRvN5&_nc_ht=scontent.fbkk5-3.fna&oh=8af79c2a46d59a548da5f374114adca6&oe=5E93FD32" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">MEEN</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/p960x960/86247026_200466624679109_8590583552968491008_o.jpg?_nc_cat=110&_nc_sid=85a577&_nc_ohc=1cDa17WFkU8AX9oSLua&_nc_ht=scontent.fbkk5-4.fna&_nc_tp=6&oh=a1729962b3dd34d07bf3e140b91db9d4&oe=5E9290AE" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">MEI</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/86177140_204906417574313_4329040804862492672_n.jpg?_nc_cat=101&_nc_sid=85a577&_nc_ohc=RZNkuz9jJKcAX-gG6-P&_nc_ht=scontent.fbkk5-6.fna&oh=c1c7a21771f71a51ec6ee8dd5a37a5d8&oe=5E9398A2" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">MILK</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/85136081_195799271806617_2195932494006583296_n.jpg?_nc_cat=109&_nc_sid=85a577&_nc_ohc=j-ri0qGxYXYAX8qceXK&_nc_ht=scontent.fbkk5-1.fna&oh=a2121de5db586e4522c82c0f4636d415&oe=5E9261EB" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">NENA</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/86186128_197673924955396_2051989349435703296_n.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=IVZduUvWkS0AX8U2g3s&_nc_ht=scontent.fbkk5-7.fna&oh=b62b25f3a72b6c7dbe2c69e8cd9589af&oe=5E926A9B" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">NENIE</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/p960x960/86192229_198113961576312_5914166440423849984_o.jpg?_nc_cat=101&_nc_sid=85a577&_nc_ohc=_qftqxVeZwcAX8mNupz&_nc_ht=scontent.fbkk5-6.fna&_nc_tp=6&oh=2359b615bb9f4bc39a2bdbda06e7a290&oe=5E923D78" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">NICHA</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/86188640_202620067797365_7527812716119982080_n.jpg?_nc_cat=106&_nc_sid=85a577&_nc_ohc=72yatI7qDbUAX-aoDqB&_nc_ht=scontent.fbkk5-8.fna&oh=0ae203238338355dfb786caddf907db6&oe=5E933D93" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">PARIMA</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/85257050_191186342264631_1877022543689285632_n.jpg?_nc_cat=100&_nc_sid=85a577&_nc_ohc=XdyNMAe2z3QAX-T2D-R&_nc_ht=scontent.fbkk5-5.fna&oh=e3d3456c1bb7d269cffa342b230a41bb&oe=5E93D52D" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">PEPO</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/p960x960/86173771_194707825247614_6458803731331809280_o.jpg?_nc_cat=106&_nc_sid=85a577&_nc_ohc=n_40qGTUWJQAX_JN0MR&_nc_ht=scontent.fbkk5-8.fna&_nc_tp=6&oh=dd6a820f451f5b1566e4bb1bfc93d0f3&oe=5E945E66" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">PIM</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/p960x960/84953290_190773858972758_1327921488975626240_o.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=nkH9pm437BYAX8ByAO3&_nc_ht=scontent.fbkk5-7.fna&_nc_tp=6&oh=b832766eab9b406cde668ff2caf202a4&oe=5E9461A5" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">PING</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/85229827_201270431268100_4524074702838169600_n.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=gzmsUX6mw_8AX_yw5dd&_nc_ht=scontent.fbkk5-3.fna&oh=e0e39ee1740f82b223df1ab0af6163a3&oe=5E92A673" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">PUNCH</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/85155432_204175654310186_3744235506628558848_n.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=ug_UCJFbUa0AX_hdRQI&_nc_ht=scontent.fbkk5-7.fna&oh=e91814b9cc61c6f8379eb6489dca2433&oe=5E9215B3" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">SITA</div>
</div> -->

</div>

<div class="footer">
  <p>60023179</p>
</div>
      
</body>
</html>

