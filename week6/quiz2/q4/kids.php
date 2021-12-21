<?php
$kids = [   'John' => [
                'age'    => 17,
                'sports'  => ['Football', 'Basketball', 'Swimming'],
                'school' => 'Nanyang' ],
            'Jane' => [
                'sports'  => ['Netball', 'Table Tennis'],
                'school' => 'Victoria',
                'age'    => 12]    
        ];
?>
<html>
<body>
<?php
    foreach($kids as $kid => $details) {

        echo "$kid  (" . $details['age'] . ") ";

        echo "from " . $details['school'] . " : ";
        

        $sportsArr = $details['sports'];


        if( count($sportsArr) > 0 ) {

            echo $sportsArr[0];


            // Print $kid’s subsequent sport(s) separated by comma
            for( $i = 1; $i < count($sportsArr); $i++ ) {

                echo ', ' .  $sportsArr[$i];
            } //end-for

            echo '<br>';

        } //end-if

    } //end-foreach
?>
</body>
</html>
