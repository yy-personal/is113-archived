<?php
// Form Processing
var_dump($_GET);
// Case 2 (bad case)
// User leaves fullname empty
// Display error msg in red
// "Please key in your fullname"
//I want to know whether 1)I'm here for the first time 2) I'm here because of form submission
$errors = [];
$greet_msg = "";
if(isset($_GET['poop'])){
    echo "I'm here because of form submission<br>";

    //1)fullname
    $fullname = $_GET['fullname'];
    if($fullname==''){
        // echo "$error";
        // Add $error to $errors array
        $errors[] = "Fullname can't be empty";
    }
    else{
        echo "Fullname is $fullname";
    }

    //2)gender
    if(isset($_GET['gender'])){
        $gender = $_GET['gender'];
        echo "You selected $gender";
    }
    else{
        $errors[] = "You did not select any gender";
    }
    //Make a greeting message
    if (count($errors)==0){
        $prefix = "Mr. ";
        if($gender == 'girl'){
            $prefix = "Mrs. ";
        }

        $greet_msg = "Hello, $prefix $fullname!";
    }
}
else{
    echo "I'm here for the first time";
}

// var_dump($errors);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saturday Webpage</title>
</head>
<body>
    <h1>Saturday Class Sucks</h1>
    <h2>
        <?php
            echo "$greet_msg";
        ?>
    </h2>
    <?php
    echo"
    <ul>";
        foreach($errors as $error){
            echo "<li>$error</li>";
        }
    echo "</ul>";
    ?>
    <form action="sucks2.php" method="GET">
    Fullname:
    <input type='text' name='fullname'>
    <br>
    Gender:<br>
    Boy <input type="radio" name="gender" value="boy"><br>
    Girl <input type="radio" name="gender" value="girl">
    <!--
        1) If gender is 'boy'
            Hello, Mr. Gabriel
           If gender is 'girl'
            Hello, Ms. Xin Yi
        2) Both fullname AND gender must be filled in/selected
          If fullname missing, display
          "Please key in your fullname"
          If gender not selected, display
          "Please select gender"
          As an unordered list item(s)
          1:55 PM
    -->
    <br><br>
    <input type='submit' name="poop" value='Get Greeting'>
    </form>
</body>
</html>