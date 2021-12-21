<?php
    require_once 'common.php';
    $dao = new UserDAO();

    $errors = [];

    // Get the data login.php
    var_dump($_POST);
    $login_username = $_POST['username'];
    $login_password = $_POST['password'];
    // Create the DAO object to facilitate connection to the database.
    $user_verification = $dao->get($login_username);
    // Check if the username exists
    if ($user_verification)
    {
        // If username exists
        // get the hashed password from the database
        // Match the hashed password with the one which user entered
        // if it does not match. -> error
        $user_password_hashed = $user_verification->getPasswordHash();
        $user_password_verification = password_verify($login_password, $user_password_hashed);
        // check if the plain text password is valid
        
        if ($user_password_verification)
        {   
            $_SESSION["username"] = $login_username;
            
            header('Location: welcome.php');
        }
        else
        {
            // password not valid
            // return to login page and show error
            $errors[] = "Invalid password.";
            header('Location: login.php');
        }

    } 
    else
    {
    $errors[] = "Usermame does not exist in the databse.";
    header('Location: login.php');
    }
    $_SESSION['errors'] = $errors;

?>

