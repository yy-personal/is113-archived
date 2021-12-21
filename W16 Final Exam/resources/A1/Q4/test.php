<?php

function spank($weirdos) {
   $weirdos['Eugene'] = 'More like Desmond Tan';

   // ADD CODE START
   $weirdos['Eugene'] = str_replace('like', 'Like', $weirdos['Eugene']);
   return $weirdos;




   // ADD CODE END
}


$weirdos = [ 'Victor' => 'Handsome',
           'Darryl' => 'Not bad',
           'Eugene' => 'Daniel Henney Look',
           'Hong Yang' => 'OMG' ];

$weirdos = spank($weirdos);

echo "{$weirdos['Eugene']}"; // This must echo 'More Like Desmond Tan'

?>
