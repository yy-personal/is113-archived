<?php
    /// START - DO NOT MODIFY OR REMOVE THE CODES ///
    $modules_info = [
        "Business Process Analysis and Solutioning" => [
            ["Rafael J. BARROS", "KE Ping Fan", "Swapna GOTTIPATI", "A. M. Aditya"],
            ["LUM Eng Kit", "Fiona LEE", "CHUA Hong Ngoh", "CHUA Hong Ngoh"],
            1
        ],
        "Interaction Design & Prototyping" => [
            ["Benjamin GAN", "Kotaro HARA", "Gabriyel WONG", "OUH Eng Lieh"],
            ["Coen CHUA", "Joseph SUNG", "LEE Kok Khing", "Wendy TAN"],
            1
        ],
        "Web Application Design II" => [
            ["Kyong Jin SHIM", "SHAR Lwin Khin", "SUN Jun"],
            ["Yi Meng LAU", "THIANG Lay Foo", "THIANG Lay Foo"],
            2
        ],
        "Computational Thinking" => [
            ["Akshat KUMAR", "ARUNESH", "MOK Heng Ngee", "Vivien SOON"],
            ["MOK Heng Ngee", "MOK Heng Ngee", "MOK Heng Ngee", "Fiona LEE"],
            3
        ],
        "Introductory Statistics" => [
            ["WU Zhengxiao", "LIU Shew Fan", "Rosie CHING", "Raymond TEO", "GOH Jing Rong", "YEO Keng Leong"],
            [],
            0.5
        ],
        "Analytics Foundation" => [
            ["Seema CHOKSHI", "Kar Way TAN"],
            [],
            1
        ]
    ];
    /// END - DO NOT MODIFY OR REMOVE THE CODES ///

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
        <a href='bidding_partc.html'>Back to form</a>
        ";
        /// PART C
    } else {
        echo "
        <h1>Here are the Professors and Instructors for your selected modules.</h1>
        <table border='1'>
            <tr>
                <th>Modules Chosen</th>
                <th>Professor</th>
                <th>Instructor</th>
            </tr>
        ";

        $units_cleared = 0;
        foreach ($all_4_mods as $selected_mod) {
            // Obtain the module's full name to match the $modules_info key
            $full_mod_name = $modules_name[$selected_mod];

            // Get the information from $modules_info
            $module_info = $modules_info[$full_mod_name];
            $list_of_prof = $module_info[0];
            $list_of_instructor = $module_info[1];
            $units_cleared += $module_info[2];
            
            // Using the number of professors to know the rowspan value 
            $row_span = count($list_of_prof);

            // Iterate through each professor and display in table
            $module_html = "<td rowspan=$row_span>$full_mod_name</td>";
            for ($i = 0; $i < $row_span; $i++) {
                echo "
                <tr>
                    $module_html
                    <td>$list_of_prof[$i]</td>
                ";
                if (empty($list_of_instructor)) {
                    echo "<td></td>";
                } else {
                    echo "<td>$list_of_instructor[$i]</td>";
                }
                echo "</tr>";

                // Assigning this variable to be empty so it will only print once
                $module_html = "";
            }
        }
        echo "</table>";

        // Showing how many modules the user will be clearing
        echo "
        <h1>Number of units cleared</h1>
        <h3>$units_cleared</h3>
        ";
    }
    ///

?>