<?php

session_start();

if( isset($_SESSION['error']) ) {
    $error = $_SESSION['error'];
    
    // once retrieve, remove it
    unset($_SESSION['error']);
}

?>
<!DOCTYPE html>
<head>
    <title>Lab Test 1 Grade Lookup</title>
</head>
<body>

    <h1>Find Lab Test 1 Results</h1>

    <form action='verify.php' method='POST'>

        <input type="text" name='email' placeholder='e.g. gigi.teo@smu.edu.sg'>
        <input type='submit' value='Search My Lab Test 1 Grade'>

    </form>

    <?php
        if( isset($error) ) {
            echo "
                <font color='red'>
                    <h2>
                        $error
                    </h2>
                </font>
            ";
        }
    ?>

</body>
</html>