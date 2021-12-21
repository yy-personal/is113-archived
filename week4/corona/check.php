<?php

// Please var_dump() to see what was passed to PHP from client side
// var_dump($_POST);
// Feel free to declare new variables as deemed necessary
$gender = $_POST['gender'];
$symptomps = $_POST['symptoms'];

if(isset($_POST['countries'])){
    $countries = $_POST['countries'];
}
else{
    $countries=[];
}


// Feel free to use this associative array
$country_assoc_array = [
    'china' => 'China',
    'korea' => 'Korea',
    'taiwan' => 'Taiwan'
]

?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Health Status</title>
</head>

<body>

    Hey <?= $gender ?> !!!

    <hr>
  
    <ul>
    <?php
        // Does this user need to be quarantined?
        // If he/she travelled to at least one of the 3 countries,
        // he/she needs to be quarantined

        if ($countries==[]){
            echo 'You did not travel overseas.';
        }
        else{
            echo "You will be quarantined because You travelled to/from:";
            echo "<ul>";
            foreach($countries as $country){
                echo "<li>$country</li>";
            }
            echo "</ul>";
        }
    ?>
    </ul>


    <hr>
    <?php
        // Will this user die?
        // If he/she has ALL 3 symptoms:
        //    fever, cough, shortness of breath
        // he/she will die and you must display corona.jpg
        if (count($symptomps) == 3){
            echo "<img src='./images/corona.jpg'>";
        }
        elseif(count($symptomps) < 3){
            echo "Have Symptoms - Not Gonna Die Yet";
        }
        else{
            echo "No Symptoms - You are Okay";
        }
    ?>

</body>

</html>