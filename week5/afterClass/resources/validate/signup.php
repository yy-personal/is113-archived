<?php

$errors = [];

// YOUR CODE GOES HERE
// YOU MAY WRITE YOUR CODE ELSEWHERE IN THIS FILE AS DEEMED NECESSARY


// When executed, the below code will forward the user to thankyou.php page!
// header('Location: thankyou.php');
$opened_before = false;

$check_lose = '';
$check_find = '';
$check_build = '';

$option_men = '';
$option_women = '';
$option_anything = '';

var_dump($_POST);
if (isset($_POST['signup'])){
    $opened_before = true;
    if (isset($_POST['reasons'])){
        $reasons = $_POST['reasons'];
        

        foreach($reasons as $reason){
            if ($reason == "Lose Weight"){
                $check_lose = 'checked';
            }
            elseif ($reason == "Find Love"){
                $check_find = 'checked';
            }
            elseif ($reason == "Build Muscles"){
                $check_build = 'checked';
            }
        }
    }
    else{
        $errors[] = 'Must select reason(s).';
    }

    if(isset($_POST['type'])){
        $type  = $_POST['type'];
        if($type == "men"){
            $option_men = 'checked';
        }
        elseif($type == "women"){
            $option_women = 'checked';
        }
        elseif($type == "anything"){
            $option_anything = 'checked';
        }
    }
    else{
        $errors[] = 'Must select type.';
    }
}

?>

<html>
<body>
    <h1>Krazy Gym</h1>
    <form action='signup.php' method='POST'>

        <?php
            // YOUR CODE GOES HERE
            if(count($errors) != 0){
                echo "<ul>";
                
                foreach($errors as $error){
                    echo "<li>$error</li>";
                }
                
                echo "</ul>";
            }
            elseif(count($errors) == 0 && isset($_POST['signup'])){
                header("location: thankyou.php");
            }
            // YOU MAY WRITE YOUR CODE ELSEWHERE IN THIS FILE AS DEEMED NECESSARY
        ?>

        Reason for joining (must select at least ONE):<br>
        <input type='checkbox' name='reasons[]' value="Lose Weight"<?php if(($check_lose == 'checked')){echo "checked";} ?>> Lose Weight<br>
        <input type='checkbox' name='reasons[]' value="Find Love"<?php if(($check_find == 'checked')){echo "checked";} ?>> Find Love<br>
        <input type='checkbox' name='reasons[]' value="Build Muscles"<?php if(($check_build == 'checked')){echo "checked";} ?>> Build Muscles<br><br>

        Gym type (must select at least ONE):<br>
        <input type='radio' name='type' value='men' <?php if(($option_men == 'checked')){echo "checked";} ?>> Men only<br>
        <input type='radio' name='type' value='women' <?php if(($option_women == 'checked')){echo "checked";} ?>> Women only<br>
        <input type='radio' name='type' value='anything' <?php if(($option_anything == 'checked')){echo "checked";} ?>> Anything<br><br>

        <input type='submit' name='signup'>

    </form>
</body>
</html>