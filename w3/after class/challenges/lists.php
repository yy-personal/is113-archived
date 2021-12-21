<!DOCTYPE html>
<html>
<head>
    <title>Lists using PHP</title>
</head>

<body>

    <!-- DO NOT MODIFY THIS -->
    <hr>
    <h1>Static Ordered List</h1>
    
    <ol>
        <li>apple</li>
        <li>orange</li>
        <li>pear</li>
    </ol>



    <hr>
    <h1>Dynamic Ordered List</h1>

    <?php

        // Given this Indexed Array
        $fruits = [ 'apple', 'orange', 'pear' ];

        // YOUR CODE GOES HERE
        echo "<ol>";
        foreach($fruits as $item)
        {
            echo "<li>$item </li>";
        }
        echo "</ol>";
    ?>



    <!-- DO NOT MODIFY THIS -->
    <hr>
    <h1>Static Un-Ordered List</h1>

    <ul>
        <li>I love Justin on Monday</li>
        <li>I love Zac on Tuesday</li>
        <li>I love Liam on Wednesday</li>
    </ul>


    <hr>
    <h1>Dynamic Un-Ordered List</h1>

    <?php

        // Given this Indexed Array
        $babes = [
                    "Justin" => 'Monday',
                    "Zac"    => 'Tuesday',
                    "Liam"   => 'Wednesday'
                ];

        // YOUR CODE GOES HERE
        echo "<ul>";
        foreach($babes as $person=>$day)
        {
            echo "<li>I love $person on $day </li>";
        }
        echo "</ul>";
    ?>

</body>
</html>