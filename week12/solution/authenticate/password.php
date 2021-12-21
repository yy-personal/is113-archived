<?php

// User Registration

// Assume we received username/password from Form
$username = 'puppy';
$password = 'puppy123';

// Registration
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo "Password: $password <br>";
echo "Hashed password: $hashed_password <br>";
echo "<h2>We will save the following data in MySQL Database Table</h2>";
echo "<h3>Username: $username</h3>";
echo "<h3>Password: $hashed_password</h3>";

// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
// echo "Password: $password <br>";
// echo "Hashed password: $hashed_password <br>";


// Authentication
// Next time, user keys in username and password in PLAIN TEXT
// Assume we received username/password from Form
$username = 'puppy';
$password = 'puppy123';

// How do we authenticate the above against the database?
// Especially... the password is in PLAIN TEXT
// How to compare against HASHED password?
// Assume that we retrieved Hashed Password of this user
//    from database
// and it is stored in $hashed_password
$is_same_password = password_verify($password, $hashed_password);

if( $is_same_password ) {
    echo "Authentication Successful";
}
else {
    echo "Authentication Failed";
}

// Let's go and create a failure case
echo '<hr>';
$username = 'puppy';
$password = 'cat123';
$is_same_password = password_verify($password, $hashed_password);
if( $is_same_password ) {
    echo "Authentication Successful";
}
else {
    echo "Authentication Failed";
}
?>