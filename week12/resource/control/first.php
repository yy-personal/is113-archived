
<html>
<body>

    <h1>first.php</h1>

    <!-- 1st way to pass into second page. -->
    <!-- <form action='second.php'>
    <input type="submit">
    </form> -->

    <!-- 2nd way  -->
    <!-- <a href="second.php">Second page.</a> -->

    <!-- 3rd way using header -->
    <?php
        $next_page = 'second.php';

        header("Location: $next_page");
    ?>

</body>
</html>