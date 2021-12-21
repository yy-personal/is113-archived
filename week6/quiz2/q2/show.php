<?php
$moneyArr = [ 
              'trump' => 10,
              'kim' => 20,
              'putin' => 30 
            ];
?>
<html>
<body>
<?php
    // Form Validation
    // see if the user selected 1 or more checkbox options
    if( isset( $_GET['people'] )  )
    {
        $people = $_GET['people'];

        if( count($people) )
        {
            echo '<ul>';

            foreach( $people as $person )
            {
                $money = $moneyArr[ $person ];
                echo "<li> $person : $money </li>";
            }

            echo '</ul>';
        }

    }
    else
    {
        echo 'Nobody Selected!!!';
    }
?>
</body>
</html>