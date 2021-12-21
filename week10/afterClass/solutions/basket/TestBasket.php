<?php
/* 
Do NOT change this file.
*/
require_once 'Basket.php';

?>

<html>
<body>
    <h1>Testing class Basket</h1>

    <ol>
        <li>
            Create a new Basket object with name 'Oppa'.<br>
            Result: 
            <?php
                $basket = new Basket('Oppa');
                echo $basket->getSummary();
            ?>
            <p>
        </li>

        <li>
            Number of 'apple':
            <?php
                echo $basket->get('apple');
            ?>
            <p>
        </li>

        <li>
            Add an 'apple'.<br>
            New quantity:
            <?php
                $basket->add('apple');
                echo $basket->get('apple');
            ?>
            <p>
        </li>

        <li>
            Add another 'apple'.<br>
            New quantity:
            <?php
                $basket->add('apple');
                echo $basket->get('apple');
            ?>
            <p>
        </li>

        <li>
            Add an 'orange'.<br>
            <?php
                $basket->add('orange');
                echo $basket->getSummary();
            ?>
            <p>
        </li>

        <li>
            Remove an 'orange'.<br>
            <?php
                if ( $basket->remove('orange') ) {
                    echo $basket->getSummary();
                } else {
                    echo 'Basket has no orange.';
                }
            ?>
            <p>
        </li>

        <li>
            Remove an 'orange'.<br>
            <?php
                if ( $basket->remove('orange') ) {
                    echo $basket->getSummary();
                } else {
                    echo 'Basket has no orange.';
                }
            ?>
            <p>
        </li>

    </ol>

</body>
</html>