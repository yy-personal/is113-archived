<?php

require_once 'common.php';

?>
<html>
<body>

<!--

   Database table 'user' contains 2 test accounts:

   username: 'donald'
   password (plain text): 'donald123' (hashed version of this is stored in user table)
   employeeType: 'management'

   username: 'hillary'
   password (plain text): 'hillary456' (hashed version of this is stored in user table)
   employeeType: 'normal'

-->

<form action="login.php">

        Username <input type="text" name="username" /><br/>

        Password <input type="mask" name="password" /><br/>

        <input type="submit" value="Login" />

    </form>

    <?php 

        printErrors();

    ?>


</body>
</html>