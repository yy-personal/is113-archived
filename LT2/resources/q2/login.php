<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php
    require_once 'common.php';
 
    // Add code here or elsewhere in this fil
    
    $dao = new UserDAO();
    session_start();
    if(array_key_exists('logout', $_POST)){
        unset($_SESSION['username']);
        unset($_SESSION['role']);
    }
    // var_dump($_SESSION);
    
    // require_once 'User.php';
?>

<html>
<body>
    <center>
    <img src="./images/lunar.jpg" width="200">
    <form action="login.php" method="post">
        <table border ="1">
        <tr>
            <th>Username</th>
            <td> <input name="username" value = '' /> </td>
        </tr>
        <tr>
            <th>Password</th>
            <td> <input type="password" name="password" /> </td>
        </tr>
        </table>
        <br/>
        <input type="submit" value="Login" name = "login"/>
        <br/>
    </form>
    
    <?php 
    // Add code here or elsewhere in this file
    var_dump($_POST);
    $user_existance_password = '';
    $password = '';
    $user_existance_info ='';
    $role = '';
    
    
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $user_existance_info = $dao->get($username);
        $role = $user_existance_info->getRole();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        if(!$user_existance_info){
            echo "Username does not exist!";
            return;
        }
        $user_existance_password = $user_existance_info->getPassword();
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
    
    if($user_existance_password!==$password){
        echo "Password is not valid";
        return;
    }
    
    if($role == 'manager'){
        header('Location: manager_view.php');
    }
    elseif($role == 'client'){
        header('Location: client_view.php');
    }
    
    

    ?>
    </center>
</body>
</html>