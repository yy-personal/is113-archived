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

// generate the HTML for $num of <img>
function genStarsHTML($num) {
    $stars = '';
    for ( $i = 1; $i <= $num; $i++) {
        $stars .= '<img src="star.jpg" />';
    }
    return $stars;
}

// initialize
$selected_guilds = [];
$msg = '';

if ( isset($_POST['btnGet']) ) {
    // form submitted
    if ( isset($_POST['guilds']) ) {
        $selected_guilds = $_POST['guilds'];

    } else {
        $msg = 'No guild selected';
    }
}
?>

<html>
<body>
    <form method='post'>
        Guilds <?php
            // display the checkboxes for the guilds
            foreach ($guilds as $name => $members) {
                // prepare the display text: guild name (number of members)
                $display = "$name (" . count($members) . ")";
                
                // re-populate
                $checked = '';
                if ( in_array($name, $selected_guilds) ) {
                    $checked = 'checked';
                }

                echo "
                    <label>
                        <input type='checkbox' name='guilds[]' value='$name' $checked /> $display
                    </label>
                ";
            }
        ?>
        <input type='submit' name='btnGet' value='Get'/>
    </form>
    
    <p>
        <?=$msg?>
    </p>

    <?php
    if ( count($selected_guilds) > 0 ) {

        foreach ($selected_guilds as $guildName) {
            $guild_heroes = $guilds[$guildName];

            echo "
                $guildName
                <ol>
            ";
            foreach ($guild_heroes as $hero ) {
                $attributes = $heroes[$hero];

                echo "
                    <li> $hero : Strength {$attributes['Strength']} Magic  {$attributes['Magic']} </li>
                ";
            }
            echo "
                </ol>
            ";
        } // end foreach ($selected_guilds) 

    }
    ?>

</body>
</html>