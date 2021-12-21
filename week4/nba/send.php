<?php

// Retrieve form submission data
// HINT: index.html uses which FORM METHOD?

// First, let's see what's passed to send.php
// var_dump($_GET);
// var_dump($_POST)

// to retrieve the legend name

//echo $_GET['legend'];
//echo $_GET['message'];
//or we can do as below
// FEEL FREE to create any new variables as deemed necessary
$legend = $_GET['legend'];
$message = $_GET['message'];
$number = $_GET['number'];
//check if user $_GET has key called 'color
$color = '';
if( isset($_GET['color'])){
    $color = $_GET['color'];
}

if (isset($_GET['gifts'])){
    $gifts = $_GET['gifts'];
}
else{
    $gifts = [];
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Message Has Been Sent</title>
</head>

<body>
 
    <h1>Your Message to <?= $legend ?>
    
    </h1>
    <h2>
        <?php

            // $message = [
                // 'Micheal Jordon' => 'I believe i can fly',
                // 'Kobe Bryant' => 'Rest in Peace',
                // "Shaquille O'Neal" => 'Are you THE Kazaam'
            // ];
            // echo $message[$legend];
            // $images = [
            //     'Micheal Jordon' => 'micheal',
            //     'Kobe Bryant' => 'kobe',
            //     "Shaquille O'Neal" => 'shaq'
            // ]
            //      echo "<img src='images/$images'> " ;

            
            if($legend == 'Micheal Jordon'){
                echo "<i><font color = '$color'>I believe I can fly</font></i><br>";
                echo "<img src='images/michael'> " ;   
            }
            elseif($legend == 'Kobe Bryant'){
                echo "<i><font color = '$color'>Rest In Peace</font></i><br>";
                echo "<img src='images/kobe'> " ;
            }
            else{
                echo "<i><font color = '$color'>Are you THE Kazaam</font></i><br>";
                echo "<img src='images/shaq'> " ;
            }
        ?>
        
    </h2>

    <!-- Your legend's GIF image file goes here (image files are in images/ folder) -->

    <ul>
    <?php
        for ($i = 0; $i < $number; $i++){
          
            echo "<li><font size = '4'>$message</font></li>";
           
        }
    ?>
    </ul>
    <ol>
        <?php
            foreach ($gifts as $gift){
                echo "<li>$gift</li>";
            }
        ?>
    </ol>

</body>

</html>