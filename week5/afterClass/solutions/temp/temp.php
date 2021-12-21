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
$temp = '';
$msg = '';
$conversion = '';
if( isset($_POST["temp"]) ) {
    // YOUR CODE GOES HERE

    $temp = $_POST['temp'];
    $conversion = $_POST["conversion"];

    if( is_numeric($temp) ) {

        if($conversion == "c") {
            $new_temp = number_format( (9/5 * $temp) + 32, 5 );
            $msg = $new_temp . " degrees Fahrenheit.";
        }
        elseif($conversion == "f") {
            $new_temp = number_format( (5 * ($temp - 32)) / 9, 5 );
            $msg = $new_temp . " degrees Celsius."; 
        }
    }
}
?>
<html>
<head>
    <title>Celsius <-> Fahrenheit Temperature Conversion</title>
<body>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method='POST'>

    <input type="number" name="temp" value="<?= $temp ?>"> degrees

    <select name="conversion">
        <option value="f" <?php if($conversion == 'f') echo 'selected'; ?>> Fahrenheit </option> 
        <option value="c" <?php if($conversion == 'c') echo 'selected'; ?>> Celsius </option>
    </select> 

    <input type="submit" value="equals">

    <?php
        echo $msg;
    ?>

</form>

</body>
</html>