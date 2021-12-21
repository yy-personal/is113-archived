<?php
    $peeps = [
        'Rachel' => [ 'Money', 'Mask', 'Gloves' ],
        'Ross'   => [ 'Money', 'Mask' ],
        'Monica' => [ 'Goggles', 'Wet Wipes' ]      
    ];
?>
<html>
<body>
<?php
    foreach($peeps as $peep=>$items)
    {
        echo "$peep's bag contains";

        echo '<ol>'; // HTML tag

        foreach($items as $item) {

            echo "<li> $item </li>";
        }

        echo '</ol>'; // HTML tag
    }
?>
</body>
</html>

