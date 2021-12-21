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
        $aircon_request_dao = new RequestDAO();
        // Add code here or elsewhere in this file
        session_start();
        // var_dump($_SESSION);
        if(($_SESSION['role'])=='client'){
            header('Location: client_view.php');
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
        $aircon_requests = $aircon_request_dao->getAll();
        
    ?>

    <center>

    <table>
        <tr>
            <td>
            <img src="./images/<?=$input_username?>.png" width="200">
            </td>
            <td>
                <h1>    Welcome,<?=$userFullName?> ... </h1>
            </td>
        </tr>
        <tr>
            <td align = "center">
                <form action="login.php" method="POST">
                    <input type="submit" value="Logout" name="logout"/>
                </form>
            </td>
        </tr>      
    </table>

    <h1> Service requests </h1>

    <?php

        // Add code here or elsewhere in this file

        echo "
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Aircon ID</th>
                <th>Location</th>
                <th>Request Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";
        //     // var_dump($all_aircon_info);
        //     foreach($all_aircon_info as $aircon){
        //     $aircon_status = $aircon->getLastRqStatus();
        //     if($aircon_status=='pending' or $aircon_status=='accepted'){
        //         $your_aircons[] = $aircon;
        //     }
        // }
        // var_dump($your_aircons);
        // var_dump($aircon_requests);
        foreach($aircon_requests as $request){
            echo "
            <tr>
                <td>{$request->getId()}</td> 
                <td>{$request->getAirconId()}</td> 
                <td>29 International Business Park Rd</td> 
                <td>{$request->getRequestDate()}</td> 
                <td>{$request->getStatus()}</td> 
                ";
            if($request->getStatus()=='pending'){
                echo"
                <td><a href='update_request_status.php?id={$request->getId()}'>Accept this request</a></td>";
            }
            else{
                echo"
                <td></td>";
            }
            echo"
            </tr>
            ";
        }   

        echo "
        </table>";
      
        
        // Add code here or elsewhere in this file
        
        
    ?>

    </center>
</body>
</html>