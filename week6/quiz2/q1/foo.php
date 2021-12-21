<html>
<body>
    <?php
        $foo = 0;
        for ( $i = 2; $i <= 6; $i++ ) {

            $foo += $i;

            if ( $foo < 6 ) {
                echo "A";
            }
            elseif ( $foo >= 15 ) {
                echo '$foo'; // Echo need to be enclosed with double quote.
            }
            else {
                echo "$foo";
            }
            //echo "<br>"; //if want to break in each line.
        }
    ?>
</body>
</html>