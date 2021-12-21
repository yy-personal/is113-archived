<?php

// *** Do NOT change: start ***
// key: name of guild.  value: list of members aka heroes' name
$guilds = [ 
    'Black Star' => ['Jam', 'Nisa', 'Rose'],
    'Iconic' => ['Soo', 'Nisa'],
    'Crazy World' => ['Jam', 'Soo', 'Nisa'],
];


// key: member's name.  value: dictionary of member's attributes
$heroes = [
    'Jam'  => [ 'Strength' => 4, 'Magic' => 1 ],
    'Nisa' => [ 'Strength' => 3, 'Magic' => 3 ],
    'Rose' => [ 'Strength' => 4, 'Magic' => 2 ],
    'Soo'  => [ 'Strength' => 1, 'Magic' => 5 ],
];
// *** Do NOT change: end ***

?>

<html>
<body>
    <form method='post'>
        Guilds 
        <input type='submit' value='Get'/>
    </form>
    
    <p>
        No guild selected
    </p>



</body>
</html>