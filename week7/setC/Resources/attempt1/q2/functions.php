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
   
   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   return $names[$month_num-1];
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
   $luck_individuals = explode(",", $luck_str);
   var_dump($luck_individuals);
   
   $month_number=0;
   $arr_to_return1 = [];
   $luck = '';
   

   }
   foreach($luck_individuals as $luck_individual){
      $luck_individual = trim($luck_individual);
      if(strpos($luck_individual, "x")){
         $luck_individual = explode("x", $luck_individual);
         $luck = $luck_individual[0];
         $times = $luck_individual[1];
         var_dump($luck);
         var_dump($times);
         
      }
      else{
         $luck = $luck_individual;
         $times = '1';
         var_dump($luck);
         var_dump($times);
      }
      
   }
   var_dump($arr_to_return1);
   
   
   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   // return [ 'GODD' => [ 'JAN'], 'NORMAL' => [ 'FEB'], 'BAD' => [ 'MAR'],  ];
}


?>