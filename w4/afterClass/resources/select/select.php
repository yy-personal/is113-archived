<?php
/* 
 * INSTRUCTIONS
 * 
 * The form below submits back to this same file.
 * After user chooses a school in drop-down menu and clicks Submit button,
 * 1) drop-down menu must display the user selection and correctly display it;
 * 2) display corresponding message from $messages associative array.
 * 
 * Example:
 * 1.  User selects 'SIS' then clicks 'Submit' button.  
 *     - Drop-down menu will display 'SIS'
 *     - '1s and 0s' message is displays above the submit button
 */

$schools = [
    'LKCSB' => 'Business',
    'SOE' => 'Economics',
    'SIS' => 'Information systems',
    'SOL' => 'Law',
    'SOA' => 'Accountancy',
    'SOSS' => 'Social Sciences'
];

$messages = [
    'LKCSB' => 'Money Money Money',
    'SOE' => 'Inflation Time',
    'SIS' => '1s and 0s',
    'SOL' => 'See you in court',
    'SOA' => 'Spreadsheet',
    'SOSS' => 'We Love People'
];

// YOUR CODE GOES HERE

// YOUR CODE MAY GO ANYWHERE IN THIS FILE, YOU DECIDE.

?>
<html>
<body>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method='POST'>
    School:
    <select name='school'>
        <?php
            // YOUR CODE GOES HERE
            // LIST ALL SCHOOLS using $schools Associative Array
        ?>
    </select>


    <?php
        // YOUR CODE GOES HERE
        // DISPLAY SCHOOL-SPECIFIC MESSAGE using $messages Associative Array
    ?>

    <input type='submit'>
</form>
</body>
</html>