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
// var_dump($_POST);
$initial_received = $_POST['major'];
// var_dump($_POST['major']);

?>
<!DOCTYPE html>
<html lang="en">
<body>
        <h1>There are the list of prerequisite mods</h1>
        <table border="1">
        <?php
        foreach($modules as $initial =>$tracks){
                if($initial_received==$initial){
                        // var_dump($initial);
                        // var_dump($tracks);
                        foreach($tracks as $each_track=>$module_list){
                                // var_dump($module_list);
                                $first_time = True;
                                foreach($module_list as $module){
                                echo "
                                <tr>";
                                echo"
                                        <td>$each_track</td>
                                ";
                                echo "
                                        <td>$module</td>
                                </tr>
                                ";
                                }
                                
                        }        
                }
                
        }
        ?>
        </table>

        <h1>Test Table</h1>
        <table border="1">
        <?php
        foreach($modules as $initial =>$tracks){
                if($initial_received==$initial){
                        // var_dump($initial);
                        // var_dump($tracks);
                        foreach($tracks as $each_track=>$module_list){
                                // var_dump($module_list);
                                $first_time = True;
                                $rowspan = count($module_list);
                                // var_dump($rowspan);
                                foreach($module_list as $module){
                                echo "
                                <tr>";
                                if($first_time){
                                echo"
                                        <td rowspan = '$rowspan'>$each_track</td>
                                ";
                                $first_time = False;
                                }
                                
                                echo "
                                        <td>$module</td>
                                </tr>
                                ";
                                }
                                
                        }        
                }
                
        }
        ?>
        </table>
</body>
</html>



