<?php

$errors = [];

// YOUR CODE GOES HERE
// YOU MAY WRITE YOUR CODE ELSEWHERE IN THIS FILE AS DEEMED NECESSARY


// When executed, the below code will forward the user to thankyou.php page!
// header('Location: thankyou.php');

?>

<html>
<body>
    <h1>Krazy Gym</h1>
    <form action='signup.php' method='POST'>

        <?php
            // YOUR CODE GOES HERE
            // YOU MAY WRITE YOUR CODE ELSEWHERE IN THIS FILE AS DEEMED NECESSARY
        ?>

        Reason for joining (must select at least ONE):<br>
        <input type='checkbox' name='reasons[]' value="Lose Weight"> Lose Weight<br>
        <input type='checkbox' name='reasons[]' value="Find Love"> Find Love<br>
        <input type='checkbox' name='reasons[]' value="Build Muscles"> Build Muscles<br><br>

        Gym type (must select at least ONE):<br>
        <input type='radio' name='type' value='men'> Men only<br>
        <input type='radio' name='type' value='women'> Women only<br>
        <input type='radio' name='type' value='anything'> Anything<br><br>

        <input type='submit' name='signup'>

    </form>
</body>
</html>