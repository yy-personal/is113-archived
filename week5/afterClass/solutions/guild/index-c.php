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

        ?>
            <table border='1'>
            <tr>
                <th> Guild </th>
                <th> Hero </th>
                <th> Strength </th>
                <th> Magic </th>
            </tr>
        <?php

        foreach ($selected_guilds as $guildName) {
            $total = [
                'Strength' => 0,
                'Magic' => 0,
            ];

            $guild_heroes = $guilds[$guildName];
            $num_heroes = count($guild_heroes);

            $guild_name_cell = "<td rowspan='". ($num_heroes+1) . "'> $guildName </td>";
            foreach ($guild_heroes as $hero ) {
                $attributes = $heroes[$hero];

                $total['Strength'] += $attributes['Strength'];
                $total['Magic'] += $attributes['Magic'];

                $star_html = '<img src="star.jpg" />';
                $strength_stars = str_repeat($star_html, $attributes['Strength'] );
                $magic_stars = str_repeat($star_html, $attributes['Magic'] );
                echo "
                    <tr>
                        $guild_name_cell
                        <td> $hero </td>
                        <td> $strength_stars </td>
                        <td> $magic_stars </td>
                    </tr>
                ";

                $guild_name_cell = '';
            }
            echo "
                <tr>
                    <th> Total </th>
                    <th> {$total['Strength']} </th>
                    <th> {$total['Magic']} </th>
                </tr>
            ";
        } // end foreach ($selected_guilds) 
        echo "
            </table>
        ";

    }
    ?>

</body>
</html>