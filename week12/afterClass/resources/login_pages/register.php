<?php
require_once 'common.php';

// WRITE YOUR CODES HERE
$tmp_username = '';

if(isset($_SESSION['username'])){
    $tmp_username = $_SESSION['username'];
}
?>

<html>
<body>

    <h1>Register </h1>
    
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    
    <form method="post" action="process_register.php">
        <table>
        <tr>
            <th>
                Username
            </th>
            <td>
                <!-- <input name="username" value= ''/> -->
                <input name="username" value= '<?= $tmp_username?>' />
            </td>
        </tr>
        <tr>
            <th>
                Password
            </th>
            <td>
                <input type="password" name="password" value=""/>
            </td>
        </tr>
        <tr>
            <th>
                Confirm password
            </th>
            <td>
                <input type="password" name="confirmPassword" value=""/>
            </td>
        </tr>
        </table>
        <br>
        <input type="submit" name="submit" />
    </form>
    
    <?php printErrors(); ?>
    
</body>
</html>
