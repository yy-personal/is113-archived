<?php
    $name = 'YY';
    $age = 51;
    //Comment
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Hello PHP</title>
</head>
<body>
    <h1>Hello PHP</h1>

    <?php
    echo '<h2>' . $name . '</h2>'
    ?>

    <h2>Self Intro</h2>
    <?php
    echo "My name is $name and I'm $age old";
    ?>

    <h2>Party Eligibility</h2>
    <?php
    if ($age < 26)
    {
        echo "go home lah study";
    }
    else if ($age > 50)
    {
        echo " Go to 50's party";
    }
    else
    {  
        echo "okay";
    }
    
    ?>

    <h2>Print Stars</h2>
    <?php
    $num = 5;
    for($count = 1; $count < $num+1; $count++)
    {
        echo str_repeat("*", $count) . "<br>";
        
    }
    // for ($i = 1; $i <= $num; $i++)
    // {
    //     for($j=1;$j<=$i; $i++)
    //     {
    //         echo "* ";
    //     }
    //     echo "<br";
    // }
    ?>


<h2> <br> Indexed Array (List) <br></h2>
<?php
$friends=['Rachel', 'Monica', 'Ross'];
echo "<ul>";
foreach ($friends as $name)
{
echo "<li>$name</li>";   
}
echo "</ul>";

?>

<h2>Associative Array</h2>
<?php

$puppies = [
    'filthy' => 7,
    'needy' => 12,
    'fatty' => 15
];
foreach ($puppies as $name=>$age){
    echo "$name is $age years young <br>";
}

?>
</body>
</html>
