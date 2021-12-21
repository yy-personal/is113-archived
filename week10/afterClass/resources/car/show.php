<?php
// ?
require_once "cars.php";
?>
<html>
<body>

    <ul>
    <?php
        // YOUR CODE GOES HERE
        // Display Car objects
        foreach($cars as $car){
            
            echo "
            <li>{$car->getCarYear()} {$car->getCarMake()} {$car->getCarModel()}</li>
                <ul>
                    <li>Rating: {$car->getCarrating()}</li>
                </ul>
            ";
        }
    ?>
    </ul>

</body>
</html>