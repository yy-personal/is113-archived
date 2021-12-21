<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<html>
<body>

    <?php
        require_once 'common.php';
        $dao = new UserDAO();
        $aircon_dao = new AirconDAO();
        // Add code here or elsewhere in this file
        session_start();
        // var_dump($_SESSION);
        if(($_SESSION['role'])=='manager'){
            header('Location: manager_view.php');
        }
        elseif(!isset($_SESSION['role']))
        {
            header('Location: login.php');
        }
        $input_username = $_SESSION['username'];
        $user = $dao->get($input_username);
        // {$input_username}
        $userFullName = $user->getFullname();
        $all_aircon_info = $aircon_dao->getAll();
        // var_dump($all_aircon_info);
    ?>

    <center>

    <table>
        <tr>
            <td>
                <img src="./images/<?=$input_username?>.png" width="200">
            </td>
            <td>
                <h1>    Welcome, <?= $userFullName ?>... </h1>
            </td>
        </tr>
        <tr>
            <td align ="center">
                <form action="login.php" method="POST">
                    <input type="submit" value="Logout" name="logout"/>
                    
                </form>
            </td>
        </tr>  
    </table>

    <h1> Your aircons</h1>

    <?php

        // Add code here or elsewhere in this file
        $your_aircons = [];
        echo "
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Date of Last Request</th>
                <th>Status of Last Request</th>
            </tr>";

        foreach($all_aircon_info as $aircon){
            $aircon_username = $aircon->getUsername();
            if($input_username==$aircon_username){
                $your_aircons[] = $aircon;
            }
        }
        
        foreach($your_aircons as $u_aircon){
            echo "
            <tr>
                <td>{$u_aircon->getId()}</td> 
                <td>{$u_aircon->getName()}</td> 
                <td>{$u_aircon->getLocation()}</td> 
                <td>{$u_aircon->getLastRqDate()}</td> 
                <td>{$u_aircon->getLastRqStatus()}</td> 
            </tr>
            ";
        }   

        echo "
        </table>";

        // Add code here or elsewhere in this file
        // var_dump($your_aircons);
    ?>

    </center>
    
</body>
</html>