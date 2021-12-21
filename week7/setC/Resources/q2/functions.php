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

   if($month_num>0 && $month_num<13){
      return $names[$month_num-1];
   }
   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   // return 'NAN';
}

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
function luckStringToDict( $luck_str) {
   // YOUR CODE GOES HERE
   $names = [ 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
   $result_arr = ['GOOD' => [], 'BAD' => [], 'NORMAL' => []];
   $luck_str = explode(",",($luck_str));
   // var_dump($luck_str);
   $lucks_array = [];
   $last_luck = "";
   foreach($luck_str as $individual_str){
      $individual_str = trim($individual_str);
      // var_dump($individual_str);
      if(strpos($individual_str,"x")){
         $individual_str = explode("x", $individual_str);
         $luck = $individual_str[0];
         $luck_times = $individual_str[1];
         }
      else{
         $luck = $individual_str;
         $luck_times = "1";
         }
      // var_dump($luck);
      for($i=0; $i<$luck_times;$i++){
         $lucks_array[]=$luck;
         $last_luck = $luck;
      }
      
   }
   
   while(count($lucks_array)<12){
      $lucks_array[]=$last_luck;
   }
   // var_dump( $lucks_array);
   $month_luck_arr = array_combine($names, $lucks_array);
   // var_dump($month_luck_arr);
   foreach($month_luck_arr as $m=>$l){
      $result_arr[$l][] = $m; 
   }
   return $result_arr;
   /*    
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   // return [ 'GODD' => [ 'JAN'], 'NORMAL' => [ 'FEB'], 'BAD' => [ 'MAR'],  ];
}


?>