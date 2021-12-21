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
  if($month_num > 0 && $month_num<13){
     $to_return = $names[$month_num-1];
  }
   return $to_return;
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
   $list_luck = [];
   $last_luck = '';
   $list_to_return = [
      "NORMAL" => [],
      "BAD" => [],
      "GOOD" => []
   ];

   $luck_list = explode(",", $luck_str);
   // var_dump($luck_list);
   foreach($luck_list as $luck){
      $luck = trim($luck);
      // var_dump($luck);
      if(strpos($luck, "x")){
         $luck = explode("x", $luck);
         $exploded_luck = $luck[0];
         $exploded_luck_times = $luck[1];
         // var_dump($exploded_luck);
         // var_dump($exploded_luck_times);
      }
      elseif(strpos($luck, "x")==false){
         $exploded_luck = $luck;
         $exploded_luck_times = '1';
         // var_dump($exploded_luck);
         // var_dump($exploded_luck_times);
      }
      for($i=1; $i<=$exploded_luck_times; $i++){
         $list_luck[] = $exploded_luck;
         $last_luck = $exploded_luck;
      }
      // var_dump(count($list_luck));
   }

   while(count($list_luck)<12){
      $list_luck[] = $last_luck;
   }
   // var_dump($list_luck);
   // var_dump($names);

   $combined_list = array_combine($names, $list_luck);
   // var_dump($combined_list);
   foreach($combined_list as $month => $condition){
      $list_to_return[$condition][]=$month;
      // $list_to_return2[$condition]=$month;
   }
   // var_dump($list_to_return2);
   return $list_to_return;
   
   // 
   



   /* 
      If you don't know how to do this function, 
      use the following line of code so that you can continue with the subsequent parts.
      Otherwise, you can comment it out. 
   */
   // return [ 'GODD' => [ 'JAN'], 'NORMAL' => [ 'FEB'], 'BAD' => [ 'MAR'],  ];
}


?>