<!DOCTYPE html>
<html>
<head>
    <title>Check Prime</title>
</head>
<body>
    <p>Please enter a whole number.</p>
    <form> <!-- If action is unspecified, form submits to itself -->
       <input name="number" type="text">
       <input type="submit" value="Go!"> 
    </form>

<?php
   if (isset($_GET['number'])){ // Loaded for first time?
        if(isValid($_GET['number'])){    
            $isPrime = true;

            // Please enter code here
             



            // End of code

            if ($isPrime) {      
                echo "<p>".$i." is a prime number!</p>";        
            } else {
                echo "<p>".$i." is not prime.</p>";
            } 
            
        } else{
            // User submitted something which is not a positive whole number 
            echo "<p>Please enter a positive whole number.</p>";    
        }
   }
   
   // check if the given number is a valid numeric value
   // round() rounds a floating point value
   function isValid($number) {
       if(is_numeric($number) && $number > 0
               && $number == round($number, 0)) {
           return true;
       } else {
           return false;
       }
   }
?>

</body>
</html>