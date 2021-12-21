<?php
require_once "common.php";
$dao = new UserDAO();

    $errors = [];

    // Get the data from form processing
    var_dump($_POST);
    if($_POST['username']==''){
        $errors[] = 'Name cannot be empty nor blank.';
    }
    else{
        $if_username_in_DB = $dao->get($_POST['username']);
        if($if_username_in_DB){
            $errors[] = 'Name is already taken.';
        }    
    }
    if($_POST['password']==''){
        $errors[] = 'password cannot be empty nor blank.';
    }
    if($_POST['confirmPassword']==''){
        $errors[] = 'Confirm Password cannot be empty nor blank.';
    }
    

    $input_username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmPassword'];
    $status=False;

    if($password==$confirmpassword){
        $status=True;
        $passwordHash = password_hash($confirmpassword,PASSWORD_DEFAULT);
        $user = new User($input_username, $passwordHash);
        $insert_nUser=$dao->create($user);
    }
    else{
        $errors[] = 'Wrong pw and confirm';
    }

    if(count($errors)>0){
        $_SESSION['errors']=$errors;
        header('Location: register.php');
        return;
    }



if ( $status ) {
    // success; redirect page
    $_SESSION["login_page"] = $input_username;
    // $_SESSION["login_page_password"] = $confirmpassword;
    header("Location: login.php");
    exit();
}
    
?>

