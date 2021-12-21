<?php
    // var_dump($_POST);
    if (isset($_POST['stars'])){
        $stars = $_POST['stars'];
    }
    else{
        $stars = [];
    }
?>
<!DOCTYPE html>
<html >

<body>
<?php
    if($stars==[])
    {
        echo "OMG nobody selected";
    }

    else
    {
        foreach($stars as $star)
            echo "<img src='./images/$star.jpg'>";
    }
?>
</body>
</html>


