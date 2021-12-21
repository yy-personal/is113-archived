<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->

<?php

require_once 'common.php';   // DO NOT MODIFY THIS LINE

if( isset($_GET['id']) ) {   // DO NOT MODIFY THIS LINE
    $id = $_GET['id'];       // DO NOT MODIFY THIS LINE
    

    // Update the corresponding request in requests database table
    // Your code goes here
    // var_dump($_GET['id']);
    $dao = new RequestDAO();
    $update_status = $dao->updateStatus($id, 'accepted');



    // Update the corresponding aircon in aircons database table
    // Your code goes here
    




    // Forward the user back to manager_view.php
    // Your code goes here
    header('Location: manager_view.php');
    
}

?>