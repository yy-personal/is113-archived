<?php
$modules = [
    "SD" => ["Compulsory Track Course" => ["IT Solution Architecture","Object Oriented Programming"], 
            "Track Elective" => ["Alogrithmic Thinking", "Cloud Computing and SaaS Solutions", "Foundataion of Cybersecurity", "Mobile Applications"]],
    "DBS" => ["Track Elective" => ["Digital Transformation Strategy", "Enterprise Business Solutions", "Internet of Things", "System for Intelligent Cities"]], 
    "BA" => ["Compulsory Track Course" => ["Analytics Foundataion"], 
            "Track Elective" => ["Data Mining", "Geospatial Analytics & Applications", "Social Analytics", "Visual Analytics"]],
    "AI" => ["Compulsory Track Course" => ["Introduction to Artificial Intelligence"],
            "Track Elective" => ["Image Perception", "Introduction to Machine Learning", "National Language Communication", "Heurisitc Search and Optimization"]],
    "CS" => ["Compulsory Track Course" => ["Foundation of Cybersecurity"],
            "Track Elective" => ["Data Security & Privacy", "Network Security", "Software & Systems Security", "Strategic Cybersecurity"]],
    "FT" => ["Compulsory Track Course" => ["Digital Banking Enterprise Architecture"],
            "Track Elective" => ["Digital Payment & Innovation", "Fiancial Markets Processes & Technology", "Retail Banking", "Corporate Banking Technology"]]
];

# Write your code here
# Do not hardcore

$selected_majors = $_POST['majors'];

echo "<h1>Here are the list of pre-requistie modules<h1>";

foreach ($modules as $major=>$value){
    if ($major == $selected_majors){
        echo "<table border = '1px'>";
        if (array_key_exists("Compulsory Track Course", $value)){
            $com_mod = $value["Compulsory Track Course"];
            $numberofcom = count($com_mod);
            echo "<tr>
                <td rowspan = '$numberofcom'>Compulsory Track Course</td>
                <td>$com_mod[0]</td>
            </tr>";
            if ($numberofcom > 1){
                for ($i = 1; $i < $numberofcom; $i++){
                echo "<tr>
                   <td>$com_mod[$i]</td>
                </tr>";
                }
            }
        }

        $track_mod = $value["Track Elective"];
        $numberoftrack = count($track_mod);
        echo "<tr>
                <td rowspan = '$numberoftrack'>Track Elective</td>
                <td>$track_mod[0]</td>
            </tr>";
            if ($numberoftrack > 1){
                for ($i = 1; $i < $numberoftrack; $i++){
                echo "<tr>
                   <td>$track_mod[$i]</td>
                </tr>";
                }
            }
        echo "</tr>";
        echo "</table>";
    }
}

?>



