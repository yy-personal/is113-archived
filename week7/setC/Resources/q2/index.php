<?php

// Do NOT edit: start
$horoscopeDict = [
   'ARIES' => 'NORMALx2, GOODx2, BADx2, NORMALx3, BAD',
   'TAURUS' => 'GOODx3, NORMALx3, BADx3, NORMAL',
   'GEMINI' => 'NORMALx4, GOOD, BAD, NORMAL, NORMALx2, GOOD',
   'CANCER' => 'BADx2, NORMAL, GOOD, BAD, NORMALx3, BADx2, GOOD',
   'LEO' => 'NORMALx4, GOOD, NORMALx3, GOOD',
   'VIRGO' => 'GOOD, BADx3, NORMAL, BAD, GOOD, BADx4, NORMAL',
   'LIBRA' => 'NORMALx2, GOOD',
   'SCORPIO' => 'NORMALx5, BADx4, NORMAL',
   'SAGITTARIUS' => 'GOODx3, BADx2, NORMAL, GOOD, NORMAL, BAD',
   'CAPRICON' => 'BAD, GOOD, NORMAL',
   'AQUARIUS' => 'NORMAL',
   'PISCES' => 'GOODx6, NORMAL',
];

// The following line "import" the functions declared in the file functions.php
require_once 'functions.php';

// Do NOT edit: end

// process form
// YOUR CODE GOES HERE
$opened_before = false;
$previous_value = "";
if(isset($_POST['submit'])){
   $opened_before = true;
   $horoscope = $_POST['horoscope'];
   var_dump($horoscope);
   $horoscope = trim(strtoupper($horoscope));
   var_dump($horoscope);
   if(array_key_exists($horoscope,$horoscopeDict)){
      $valid_horoscope = "Yes";
      $previous_value = $horoscope;
      $horoscope_info = luckStringToDict($horoscopeDict[$horoscope]);
      var_dump($horoscope_info);
      

      
      $good = implode(", ", $horoscope_info['GOOD']);
      $bad = implode(", ", $horoscope_info['BAD']);
      $normal = implode(", ", $horoscope_info['NORMAL']);

   }
   else{
      $valid_horoscope = "No";
   }

   var_dump($valid_horoscope);
}


?>
<html>
<body>
<form action="index.php" method="POST">

   Horoscope <input type="text" name="horoscope" value = <?php echo "$previous_value" ?>>
   <input type="submit" value="Submit" name="submit">
   <br>

   <?php
   if(isset($_POST['submit']) && array_key_exists($horoscope,$horoscopeDict)){
      if($bad == ""){
         $bad = "NIL";
      }
      if($good == ""){
         $good = "NIL";
      }
      if($normal == ""){
         $normal = "NIL";
      }
      echo "<b>GOOD: </b>$good <br>";
      echo "<b>BAD: </b>$bad <br>";
      echo "<b>NORMAL: </b>$normal <br>";
   }
   
   
   ?>
</form>
   


</body>
</html>