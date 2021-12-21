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
// $horoscope = "";
if(isset($_POST['submit'])){
   $opened_before = true;
   $horoscope = $_POST['horoscope'];
   $horoscope = trim(strtoupper($horoscope));
}

?>
<html>
<body>
<form action="index.php" method="POST">

Horoscope<input type="text"  name="horoscope" <?php if($opened_before){ echo "value = $horoscope"; } ?>>
<input type="submit" value="Submit" name="submit">

</form>
<?php
   if($opened_before){
      
      if(array_key_exists($horoscope, $horoscopeDict)){
         $valid_horoscope = "Yes";
         $result = luckStringToDict($horoscopeDict[$horoscope]);
         // var_dump($result["GOOD"]);
         // var_dump(implode(",", $result["GOOD"])); 
         $good = implode(",", $result["GOOD"]);
         if($good==[]){
            $good = 'NIL';
         }
         echo "<b>GOOD: </b>$good";
         echo "<br>";
         $bad = implode(",", $result["BAD"]);
         if($bad==[]){
            $bad = "NIL";
         }
         echo "<b>BAD: </b>$bad";
         echo "<br>";
         $normal = implode(",", $result["NORMAL"]);
         if($normal==[]){
            $normal = 'NIL';
         }
         echo "<b>NORMAL: </b>$normal";
        
      
      }
      else{
         $valid_horoscope = "No";
         echo "<ul>
         <li>Unknown horoscope</li>
         </ul>
         ";


      }
      // var_dump($horoscope);
      // var_dump($valid_horoscope);
   }


?>

</body>
</html>