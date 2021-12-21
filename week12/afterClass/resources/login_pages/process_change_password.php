<?php
require_once "common.php";
$dao = new UserDAO;

$changePW_username = $_POST['username'];
$changePW_originalpassword = $_POST['originalpassword'];
$changePW_newPassword = $_POST['newPassword'];
$changePW_newconfirmPassword = $_POST['newconfirmPassword'];

$errors = [];

$user_verification = $dao->get($changePW_username);

if ($user_verification){
    if($changePW_originalpassword==''){
        $errors[] = 'Original password cant be empty';
    }
    
    if($changePW_newPassword==''){
        $errors[] = 'New password cant be empty';
    }
    if($changePW_newconfirmPassword==''){
        $errors[] = 'Confirm New password cant be empty';
    }
    $user_password_hashed = $user_verification->getPasswordHash();
    $user_password_verification = password_verify($changePW_originalpassword, $user_password_hashed);

    if(!$user_password_verification){
        $errors[] = 'Existing PW invalid';
        $_SESSION['errors'] = $errors;
        header('Location: change_password.php');
    }
    if($changePW_newPassword!=$changePW_newconfirmPassword){
        $errors[] = 'The new passwords are different';
        $_SESSION['errors'] = $errors;
        header('Location: change_password.php');
    }
}
else{
    $errors[] = 'Invalid User.';
}
if(count($errors)>0){
    $_SESSION['errors'] = $errors;
    header('Location: change_password.php');
    return;
}

$passwordHash = password_hash($changePW_newconfirmPassword, PASSWORD_DEFAULT);
$user_verification->setPasswordHash($passwordHash);

$status = $dao->update($user_verification);




    if ( $status ) {
    // success; redirect
    $_SESSION["login_page"] = $username;
    header("Location: login.php");
    exit();
    }
    else {
        $_SESSION["pwd_change_fail"]= $username;
     $errors[] = "Error in update user user.";
    
    }

?>