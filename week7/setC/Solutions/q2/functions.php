<?php
// functions
/**
 * @param int $month_num  The required month.  An integer between 1 to 12 inclusive.
 * @return string 3-characters name of the month.  
 * $month_num 1 is 'JAN', and so on.
 */
function getMonthName($month_num) {
   $names = [ 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

   // YOUR CODE GOES HERE
   // Make use of $names to get the name of the required month.
   if( $month_num > 0 && $month_num < 13 ) {
      return $names[$month_num - 1];
   }

   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   return 'NAN';
}

// TEST
//echo getMonthName(3) . '<br>';


/**
 * @param string $luck_str 
 *    String depicting the monthly luck.  
 * 
 *    This string has the following format:
 *       '<luck>[optional:x<number of months>], ..., <luck>'
 *    <luck> can be GOOD, NORMAL or BAD
 *    If followed by x<number of months>, this <luck> will persist for the the specified number of months.
 *    Otherwise, this <luck> is for one month.
 *    The string always end with <luck> which means means this is the luck until end of year.
 *    
 *    E.g. 'GOODx2,BAD,GOODx3,NORMAL' means 
 *       GOOD for 2 months (Jan, Feb), BAD for 1 month (Mar), GOOD for 3 months (Apr, May, Jun) and NORMAL till end of year (Jul to Dec).
 */
function luckStringToDict( $luck_str ) {
   // YOUR CODE GOES HERE

   $arr = explode(",", $luck_str);

   //var_dump($arr);

   

   $month_number = 0;
   $luck = ''; // e.g. 'GOOD', 'BAD', 'NORMAL'

   foreach($arr as $token) { // $token, e.g. 'NORMALx2', 'BAD', 'GOODx3'

      $token = trim($token); // Remove whitespace(s) around

      $parts = explode("x", $token);

      //var_dump($parts);

      if( count($parts) == 1 ) { // $token, e.g. 'GOOD', 'BAD'... without x2, x3...
         $parts[1] = 1;
      }

      $luck = $parts[0];        // e.g. 'GOOD'
      $num_months = $parts[1];  // e.g. 3

      for($i = 0; $i < $num_months; $i++) {
         $month_number++;
         $month_name = getMonthName($month_number);

         if( array_key_exists($luck, $resultArr) ) {
            $luckArr = $resultArr[$luck];
            $luckArr[] = $month_name;
            $resultArr[$luck] = $luckArr;
         }
         else {
            $resultArr[$luck] = [$month_name];
         }
      }
   }

   // Check if all 12 months are covered
   // If not, add the remaining month(s).
   if( $month_number < 12 ) {

      $month_number++;

      for($i = $month_number; $i <= 12; $i++) {
         $month_name = getMonthName($month_number); // e.g. NOV, DEC

         // Update existing array for $luck inside $resultArr
         // by adding this $month_name
         $luckArr = $resultArr[$luck];
         $luckArr[] = $month_name;
         $resultArr[$luck] = $luckArr;

         $month_number++;
      }
   }
   
   return $resultArr;

   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   //return [ 'GODD' => [ 'JAN'], 'NORMAL' => [ 'FEB'], 'BAD' => [ 'MAR'],  ];
}

// TEST
// var_dump( luckStringToDict( 'NORMALx2, GOODx2, BADx2, NORMALx3, BAD' ) );
// var_dump( luckStringToDict( 'NORMALx2, GOOD' ) );
// var_dump( luckStringToDict( 'NORMAL' ) );


?>