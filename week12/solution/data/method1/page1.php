<html>
<body>

<h1>page1.php</h1>

<form action='page2.php' method='POST'>

    Name: <input type='text' name='name'>

    <?php
        $age = 25;
        
        echo "
            <input type='hidden' name='age' value='$age'>
        ";
    ?>

    <input type='submit' value='Next'>

</form>

</body>
</html>