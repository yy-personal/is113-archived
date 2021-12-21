<?php

// *** Do NOT change: start ***
// key: name of alliance.  value: list of member guilds' name
$alliances = [
    'All Stars' => ['Black Star'],
    'Iconic' => ['Voice', 'Rapper', 'Serious'],
    'Duel' => ['Ak Family', 'Ukulele'],
];

// key: name of guild.  value: list of members aka heroes' name
$guilds = [ 
    'Serious'       => ['Yun', '15 cm'],
    'Ukulele'       => ['Terry', 'Lee Chi'],
    'Rapper'        => ['Rain', 'Bob'],
    'Ak Family'     => ['Ak Hyuk', 'Ak Hyun', 'Ak Pa', 'Ak Ma'],
    'Voice'         => ['June', 'Chan', 'Dong'],
    'Black Star'    => ['Jam', 'Ni Sa', 'Rose', 'Soo Ya'],
];


// key: member's name.  value: dictionary of member's attributes
$heroes = [
    'Chan'      => [ 'Strength' => 2, 'Magic' => 4 ],
    'June'      => [ 'Strength' => 5, 'Magic' => 0 ],
    'Ak Hyun'   => [ 'Strength' => 1, 'Magic' => 5 ],
    'Terry'     => [ 'Strength' => 3, 'Magic' => 5 ],
    'Rain'      => [ 'Strength' => 2, 'Magic' => 4 ],
    'Ak Pa'     => [ 'Strength' => 3, 'Magic' => 5 ],
    'Bob'       => [ 'Strength' => 5, 'Magic' => 2 ],
    '15 cm'     => [ 'Strength' => 2, 'Magic' => 3 ],
    'Lee Chi'   => [ 'Strength' => 4, 'Magic' => 4 ],
    'Jam'       => [ 'Strength' => 4, 'Magic' => 1 ],
    'Ak Ma'     => [ 'Strength' => 5, 'Magic' => 5 ],
    'Ni Sa'     => [ 'Strength' => 3, 'Magic' => 3 ],
    'Rose'      => [ 'Strength' => 4, 'Magic' => 2 ],
    'Soo Ya'    => [ 'Strength' => 1, 'Magic' => 5 ],
    'Dong'      => [ 'Strength' => 3, 'Magic' => 1 ],
    'Ak Hyuk'   => [ 'Strength' => 2, 'Magic' => 4 ],
    'Yun'       => [ 'Strength' => 3, 'Magic' => 3 ],
];
// *** Do NOT change: end ***

?>

<html>
<body>
    <form method='post'>
        Alliances 
        <input type='submit' name='btnGet' value='Get'/>
    </form>
    
    <p>
        No alliance selected
    </p>

    
    <table border='1'>
    <tr>
        <th> Alliance </th>
        <th> Guild </th>
        <th> Hero </th>
        <th> Strength </th>
        <th> Magic </th>
    </tr>        
    </table>
        

</body>
</html>