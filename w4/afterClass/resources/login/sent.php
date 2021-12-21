<?php

// Pre-defined username/pass combinations
$logins = [
            'donald' => 'trump123',
            'hillary' => 'clinton123'
];

$username = $_POST['username'];
$pass = $_POST['pass'];
$pass_confirm = $_POST['pass_confirm'];

function username_exists($username) {
    global $logins;
    return array_key_exists($username, $logins);
}

function passwords_match($pass, $pass_confirm) {
    return ($pass == $pass_confirm);
}

function login_valid($username, $pass) {
    global $logins;
    return ($logins[$username] == $pass);
}

if( !isset($_POST['username']) || $_POST['username'] == '' ) {
    echo "Username non-existent or empty";
    exit;
}

if( !isset($_POST['pass']) || $_POST['pass'] == '' ) {
    echo "Password non-existent or empty";
    exit;
}

if( !isset($_POST['pass_confirm']) || $_POST['pass_confirm'] == '' ) {
    echo "Confirm Password non-existent or empty";
    exit;
}



if( !username_exists($username) ) {
    echo "Username doesn't exist";
    exit;
}

elseif( !passwords_match($pass, $pass_confirm) ) {
    echo "Passwords don't match";
    exit;
}

elseif( !login_valid($username, $pass) ) {
    echo "Username/Password invalid";
    exit;
}

echo "<h1>Wow! Login Successful!</h1>";


?>