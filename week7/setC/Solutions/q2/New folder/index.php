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

$horoscope = '';
if( isset($_GET['horoscope']) ) {
   $horoscope = strtoupper(trim($_GET['horoscope']));

   if( !array_key_exists($horoscope, $horoscopeDict) ) {
      $error = 'Unknown horoscope';
   }
}

?>
<html>
<body>

   <form action='index.php' method='GET'>

   Horoscope <input type='text' name='horoscope' size='20' value='<?= $horoscope ?>'>
   <input type='submit'>

   <?php
      if( isset($error) ) {
         echo "
            <ul>
               <li>$error</li>
            </ul>
         ";
      }
      else if( $horoscope != '') {
         // Valid horoscope
         $luckArr = luckStringToDict($horoscopeDict[$horoscope]);
         //var_dump($luckArr);
         $lucks = ['GOOD', 'BAD', 'NORMAL'];

         foreach($lucks as $luck) {
            if( array_key_exists($luck, $luckArr) ) {
               $monthArr = $luckArr[$luck];
               //var_dump($monthArr);
               $printString = implode(", ", $monthArr);
            }
            else {
               $printString = 'NIL';
            }

            //var_dump($printString);

            // Print
            echo "
               <br><b>$luck</b>: $printString 
            ";
         }
      }
   ?>
   
   </form>

</body>
</html>