<?php
/* 
 * INSTRUCTIONS
 * 
 * The form below submits back to this same file.
 * After user keys in a number (degrees in F or C), selects unit (F or C) in drop-down menu,
 * and clicks 'equals' button,
 * 1) perform temperature conversion;
 * 2) display converted temperature
 * 
 * Temperature Conversion:
 * 1) Celsius to Fahrenheit
 *    (C * 9/5) + 32 = F
 * 2) Fahrenheit to Celsius
 *    (F - 32) * 5/9 = C
 * 
 * Example:
 * 1.  User keys in 72 degrees and selects F (Fahrenheit) and clicks 'equals' button
 *     - Display:
 *                22.22222 degrees Celsius
 * 2.  User keys in 30 degrees and selects C (Celsius) and clicks 'equals' button
 *     - Display:
 *                86 degrees Fahrenheit
 * 
 * NOTE: Display the converted temperature to FIVE (5) decimal places.
 * 
 */

// YOUR CODE GOES HERE

// YOUR CODE MAY GO ANYWHERE IN THIS FILE, YOU DECIDE.

}

?>

<html>
<head>
    <title>Celsius <-> Fahrenheit Temperature Conversion</title>
<body>

<form action="temp.php" method='POST'>

    <input type="number" name="temp" value="<?= $temp ?>"> degrees

    <select name="conversion">
        <option value="f"> Fahrenheit </option> 
        <option value="c"> Celsius </option>
    </select> 

    <input type="submit" value="equals">

    <?php
        // YOUR CODE GOES HERE

        // YOUR CODE MAY GO ANYWHERE IN THIS FILE, YOU DECIDE.
        
    ?>

</form>

</body>
</html>