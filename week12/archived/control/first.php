<html>
<body>

    <h1>first.php</h1>

    <!-- <form action ='second.php'>

        <input type='submit'>

        <a href='second.php'> Go to second.php </a> 
        
        //Both of these require user intervention. -->
    <!-- </form> -->

    <?php
        $next_page = 'second.php';

        header("Location: $next_page");
        
    ?>

</body>
</html>