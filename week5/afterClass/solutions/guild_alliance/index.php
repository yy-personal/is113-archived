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

/**
 *  Constant: number of guild's statistics to display 
 */
const NUM_GUILD_STATS = 2;

/**
 * Calculate the number of rows that an alliance will span across
 * @param $guilds 
 *  Dictionary of all guilds; key: name of guild.  value: list of members aka heroes' name
 * @param $member_guilds
 *  List of names of guilds that are member of the alliance.
 * @return 
 *  Number of rows that the alliance table cell should span across.
 */
function getAllianceRowspan($guilds, $member_guilds) {
    $num_heroes = 0;
    foreach ($member_guilds as $guild_name) {
        $guild_heroes = $guilds[$guild_name];
        $num_heroes += count($guild_heroes);
    }

    $num_stats_rows = count($member_guilds) * NUM_GUILD_STATS;
    return $num_heroes + $num_stats_rows;
}


/**
 * Calculate the heroes' min and max attributes for a guild.
 * @param $heroes
 *  Dictionary of all heroes; 
 *      key: member's name.  
 *      value: dictionary of member's attributes; E.g. [ 'Strength' => 3, 'Magic' => 3 ],
 * @param $guild_heroes
 *  List of names of heroes that are members of guild.
 * @return
 *  Nested array representing the statistics .  Structure is as follows:
 *  [
 *      'Min' => [
 *          'Strength' => int,
 *          'Magic' => int,
 *      ],
 *      'Max' => [
 *          'Strength' => int,
 *          'Magic' => int
 *      ]
 * ]
 */
function genGuildStats($heroes, $guild_heroes) {
    $stats = [
        'Min' => [],
        'Max' => [],
    ];

    $attribute_names = [ 'Strength', 'Magic'];

    $first_hero = $heroes[ $guild_heroes[0] ];
    foreach ($attribute_names as $attribute) {
        $stats['Min'][$attribute] = $first_hero[$attribute];
        $stats['Max'][$attribute] = $first_hero[$attribute];
    }

    $num_heroes = count($guild_heroes);
    for ($i = 1; $i < $num_heroes; $i++) {
        $a_hero = $heroes[ $guild_heroes[$i] ];
        foreach ($attribute_names as $attribute) {
            if ( $stats['Min'][$attribute] > $a_hero[$attribute] ) {
                $stats['Min'][$attribute] = $a_hero[$attribute];
            }
            if ( $stats['Max'][$attribute] < $a_hero[$attribute] ) {
                $stats['Max'][$attribute] = $a_hero[$attribute];
            }
        }
    }

    return $stats;
}

// initialize
$selected_alliances = [];
$msg = '';

if ( isset($_POST['btnGet']) ) {
    // form submitted
    if ( isset($_POST['alliances']) ) {
        $selected_alliances = $_POST['alliances'];

    } else {
        $msg = 'No alliance selected';
    }
}
?>

<html>
<body>
    <form method='post'>
        Alliances <?php
            // display the checkboxes for the alliances
            foreach ($alliances as $name => $member_guilds) {                
                // re-populate
                $checked = '';
                if ( in_array($name, $selected_alliances) ) {
                    $checked = 'checked';
                }

                echo "
                    <label>
                        <input type='checkbox' name='alliances[]' value='$name' $checked /> $name
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
    if ( count($selected_alliances) > 0 ) {

        ?>
            <table border='1'>
            <tr>
                <th> Alliance </th>
                <th> Guild </th>
                <th> Hero </th>
                <th> Strength </th>
                <th> Magic </th>
            </tr>
        <?php

        // for each user's selected alliance
        foreach ($selected_alliances as $alliance_name) {
            $member_guilds = $alliances[$alliance_name];

            // calculate the number of rows that the alliance's table cell will span across.
            $rowpsan = getAllianceRowspan($guilds, $member_guilds);
            $alliance_name_cell = "<th rowspan='$rowpsan'> $alliance_name </th>";

            // for each member guild of the alliance
            foreach ($member_guilds as $guild_name) {
                $guild_heroes = $guilds[$guild_name];

                // calculate the number of rows that the guild's table cell will span across.
                $rowspan = count($guild_heroes) + NUM_GUILD_STATS;
                $guild_name_cell = "<td rowspan='$rowspan'> $guild_name </th>";

                // for each member hero of the guild
                foreach ($guild_heroes as $hero ) {
                    // display the hero's details
                    $attributes = $heroes[$hero];

                    $star_html = '<img src="star.jpg" />';
                    $strength_stars = str_repeat( $star_html, $attributes['Strength'] );
                    $magic_stars = str_repeat( $star_html, $attributes['Magic'] );
                    echo "
                        <tr>
                            $alliance_name_cell
                            $guild_name_cell
                            <td> $hero </td>
                            <td> $strength_stars </td>
                            <td> $magic_stars </td>
                        </tr>
                    ";

                    $alliance_name_cell = '';
                    $guild_name_cell = '';
                }

                // displays the heroes' statistics for this guild
                $stats = genGuildStats($heroes, $guild_heroes);
                foreach ($stats as $statName => $attributesStats) {
                    echo "
                        <tr>
                            <th> $statName </th>
                    ";
                    foreach ($attributesStats as $attributes => $attributeValue) {
                        echo "
                            <th> $attributeValue </th>
                        ";
                    }
                    echo "
                        </tr>
                    ";
                }
            } // end foreach ($member_guilds) 

        } // end foreach ($selected_alliances )
        echo "
            </table>
        ";

    }
    ?>

</body>
</html>