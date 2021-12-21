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
if (isset($_POST['major'])){
        $initial_selected = $_POST['major'];
}
$module = $modules[$initial_selected];

?>
<!DOCTYPE html>
<html lang="en">
<body>
        <strong>Here are the list of modules needed</strong>
        <table border='1'>
        <?php
                foreach($module as $key=>$value){
                        echo"
                        <tr>
                                <td>$key</td>
                                <td>";
                        
                        
                        foreach($value as $course){
                                echo "
                                <tr>
                                        <td>$course</td>
                                </tr>
                                ";
                        }

                        echo "
                        </td>
                        </tr>
                        ";
                }
        ?>
        
        </table>

        <strong>Here are the test list of modules needed</strong>
        <table border='1'>
        <!-- <tr>
                <td rowspan="3">key1</td>
                <td>
                        <tr>
                                <td>value1</td>
                        </tr>
                        <tr>
                                <td>value2</td>
                        </tr>
                </td>
                
        </tr> -->
        <tr>
                <td>key1</td>
                
                <td><tr>value1</tr></td>
                
        </tr>
        
        </table>
        
</body>
</html>

<!-- <table border="1">
                <tr>
                        <td>Compulsary track Course</td>
                        <td>
                        
                        <?php
                                        foreach($modules as $module=>$track_type){
                                                if($module == $initial_selected){
                                                        $compulsary = $track_type["Compulsory Track Course"];
                                                        echo "<table border = '1'>";
                                                        
                                                        foreach($compulsary as $course){
                                                        echo"
                                                        <tr>
                                                                <td>$course</td>
                                                        </tr>
                                                        ";
                                                        }
                                                        echo '</table>';
                                                }
                                        }
                                ?>
                                
                                
                        
                        </td>
                        
                </tr>
                <tr>
                        <td>Track elective</td>
                        <td>
                        <?php
                                        foreach($modules as $module=>$track_type){
                                                if($module == $initial_selected){
                                                        $compulsary = $track_type["Track Elective"];
                                                        echo "<table border = '1'>";
                                                        
                                                        foreach($compulsary as $course){
                                                        echo"
                                                        <tr>
                                                                <td>$course</td>
                                                        </tr>
                                                        ";
                                                        }
                                                        echo '</table>';
                                                }
                                        }
                                ?>
                                
                        </td>
                </tr>
        </table> -->



