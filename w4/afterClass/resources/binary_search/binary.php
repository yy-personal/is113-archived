<?php
   if
 (isset($_GET["submit"]) && $_GET["submit"]=="BinarySearch!") {
       // predefine the search range [1, 100]
       $hi = 100;
       $lo = 1;

       /* add your code that performs binary search to find the length of       
       password string here. [Hint: You have to invoke the provided 
       isEqual() and/or isLess() in a loop.]
       */
        





       /* end of code */
       echo "<p> Length of the password is: " . $lo . "</p>";
   }

   //------ Do not modify the following two functions ---------------
   function isEqual($length) {
       $password = "This is a secret password!";
       if(strlen($password) == $length) {
           return true;
       } else {
           return false;
       }
   }

   function isLess($length) {
       $password = "This is a secret password!";
       if($length < strlen($password)) {
           return true;
       } else {
           return false;
       }
   } 
?>
<form>
   <input type="submit" name="submit" value="BinarySearch!">
</form>
