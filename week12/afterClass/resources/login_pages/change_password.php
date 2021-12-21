<?php
require_once 'common.php';

// WRITE YOUR CODES HERE
    var_dump($_SESSION);
    $username = '';
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];session_unset();
    }
    
?>

<html>
<body>
    
    <h1>Change Password </h1>
    
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>

    <form method="post" action="process_change_password.php">
        <table>
        <tr>
            <th>
                Username
            </th>
            <td>
                <input name="username" value='<?= $username?>' />
            </td>
        </tr>
        <tr>
            <th>
                Original Password
            </th>
            <td>
                <input type="password" name="originalpassword" value=""/>
            </td>
        </tr>
        <tr>
            <th>
                New Password
            </th>
            <td>
                <input type="password" name="newPassword" value=""/>
            </td>
        </tr>
        <tr>
            <th>
                Confirm New Password
            </th>
            <td>
                <input type="password" name="newconfirmPassword" value=""/>
            </td>
        </tr>
        </table>
        <br/>
        <input type="submit" name="submit" />
    </form>
    
    <?php printErrors(); ?>
    
</body>
</html>