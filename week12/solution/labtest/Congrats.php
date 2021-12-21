<?php

require_once 'include/GradeDAO.php';
require_once 'include/Grade.php';

session_start();

if( isset($_SESSION['PASS']) ) {
    $email = $_SESSION['PASS'];
    
    // Once retrieve, remove it
    unset($_SESSION['PASS']);

    $dao = new GradeDAO();
    $components = $dao->retrieveComponents($email);
}
else {
    header('Location: search.php');
    return;
}
?>
<html>
<body>

    <h1>Congratulations! You passed Lab Test 1!</h1>
    <h2>Grade for <?= $email ?></h2>
    
    <table border='1'>
        <tr>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Total</th>
        </tr>

        <tr>
            <?php
                $total = 0;
                foreach($components as $item) {
                    $total += $item;
                    echo "
                        <td>$item</td>
                    ";
                }
                echo "
                        <td>$total</td>
                ";
            ?>
        </tr>

    </table>

    <hr>
    Back to <a href='search.php'>Search</a>

</body>
</html>