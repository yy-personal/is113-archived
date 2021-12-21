<?php
    /// PART A
    // Creating an associative array for easier module shortform to module name conversion
    $modules_name = [
        "bpas" => "Business Process Analysis and Solutioning",
        "idp" => "Interaction Design & Prototyping",
        "wad2" => "Web Application Design II",
        "ct" => "Computational Thinking",
        "stats" => "Introductory Statistics",
        "af" => "Analytics Foundation"
    ];

    // Each select input type will always have a value, so don't need to isset()
    $mod1 = $_POST["first_mod"];
    $mod2 = $_POST["second_mod"];
    $mod3 = $_POST["third_mod"];
    $mod4 = $_POST["fourth_mod"];

    // Putting all selected modules into an array and using array_unique to check if there are repeated modules
    $all_4_mods = [$mod1, $mod2, $mod3, $mod4];
    $result = array_unique($all_4_mods);
    if (count($all_4_mods) != count($result)) {
        echo "
        <h1>You have repeated modules! Please submit your form again.</h1>
        <a href='bidding.html'>Back to form</a>
        ";
    ///

    /// PART B
    } else {
        echo "
        <table border='2'>
            <th>Modules Chosen</th>
            <tr><td>$modules_name[$mod1]</td></tr>
            <tr><td>$modules_name[$mod2]</td></tr>
            <tr><td>$modules_name[$mod3]</td></tr>
            <tr><td>$modules_name[$mod4]</td></tr>
        </table>";
    }
    ///
?>