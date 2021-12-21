<?php
// key: vegetable,  value: type
$vegTypeArr = [ 
    'asparagus' => 'stem',
    'cabbage'   => 'leafy', 
    'celery'    => 'stem',
    'lettuce'   => 'leafy', 
    'potato'    => 'root', 
    'spinach'   => 'leafy',
    'yam'       => 'root', 
];
?>

<html>
<body>
    <form action='process.php' method = 'GET'>
        Leafy Vegetable 
        <?php
        echo "<select id='vegetable' name='vegetable'>";
        
        foreach($vegTypeArr as $vegetable => $type)
        {
            if($type == 'leafy')
            {
                echo "<option value='$vegetable'>$vegetable</option>";
            }
            
        }
        echo '</select>';
        ?>
        <input type='submit' />
    </form>
</body>
</html>