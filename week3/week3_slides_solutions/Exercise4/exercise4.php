<?php

# Obtaining the password when submit button is clicked.
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $output = validate($password);
    if ($output) {
        $output = "True";
    }
    else {
        $output = "False";
    }
}
else {
    $output = "";
}

##### EXERCISE 4 SOLUTION ###################################################################
function validate($password) {

    $lowercase = 'qwertyuiopasdfghjklzxcvbnm';
    $uppercase = 'QWERTYUIOPASDFGHJKLZXCVBNM';
    $numbers = '1234567890';

    # check if password is between 6 characters to 20 characters. If not, return False
    if (strlen($password) < 6 || strlen($password) > 20) {
        return False;
    }

    # Check if password has at least one lowercase letter and one uppercase letter.
    $one_lower = False;
    $one_upper = False;

    for ($i = 0; $i < strlen($password); $i++) {
        for ($n = 0; $n < strlen($lowercase); $n++) {
            # Check if character is a lowercase letter.
            if ($password[$i] == $lowercase[$n]) {
                $one_lower = True;
            }

            # Check if character is a lowercase letter.
            if ($password[$i] == $uppercase[$n]) {
                $one_upper = True;
            }
        }
    }
    # If $one_lower or $one_upper is still False, it means there is either no lowercase or uppercase character; hence return False
    if (!$one_lower || !$one_upper) {
        return False;
    }

    # Check if password has at least one number
    $one_num = False;

    for ($i = 0; $i < strlen($password); $i++) {
        for ($n = 0; $n < strlen($numbers); $n++) {
            # Check if the character is a number.
            if ($password[$i] == $numbers[$n]) {
                $one_num = True;
            }
        }
    }

    # If $one_num is still False, it means there is no number present in password, hence return False.
    if (!$one_num) {
        return False;
    }

    # If all conditions are satisfied, function returns True.
    return True;

}

### To make this function shorter, you can explore the use of the following methods:
# is_numeric() https://www.w3schools.com/php/func_var_is_numeric.asp
# strpos() https://www.w3schools.com/php/func_string_strpos.asp

###### EXERCISE 4 SOLUTION ENDS #############################################33


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    Output of function: <?php echo $output; ?>
    <br>
    <form action='exercise4.php' method='post'>
        Enter password: <input type='text' name='password'>
        <br><br><br>
        <input type='submit'>
    </form>
</body>
</html>