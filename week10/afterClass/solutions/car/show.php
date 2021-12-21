<?php

require_once 'cars.php';

?>
<html>
<body>

    <ul>
    <?php
        foreach($cars as $car_object) {
            echo "
                    <li> {$car_object->getYear()} {$car_object->getMake()} {$car_object->getModel()}</li>
                ";
            echo "
                    <ul>
                        <li>Rating: {$car_object->getRating()}</li>
                    </ul>
            ";
        }
    ?>
    </ul>

</body>
</html>