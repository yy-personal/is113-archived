<!DOCTYPE html>
<?php

    require_once 'common.php';

    function create_study_groups($students, $min_size, $max_size, $min_gpa){
        $study_groups = [];

        # Add code here
        # You are free to create helper functions

        return $study_groups;
    }

    ### START OF DO NOT MODIFY ###

    if (count($_GET) != 0){
        $min_size = $_GET['min_size'];
        $max_size = $_GET['max_size'];
        $min_gpa = $_GET['min_gpa'];
        $studentDAO = new StudentDAO();
        $students = $studentDAO->getStudents();
        $groups = create_study_groups($students, $min_size, $max_size, $min_gpa);
        display($groups);
    }

    function display($groups){
        echo 
        "
        <!DOCTYPE html>    
        <html>
            <body>
        ";
        display_groups($groups);
        echo 
        "
            </body>
        </html>
        ";
    }

    function display_groups($groups){
        if ($groups === null){
            echo "<h3>No assignment is possible</h3>";
        }
        else{
            echo "<table border='1'>";
            $row_count = 0;
            $opened = true;

            $row1 = "";
            $row2 = "";

            foreach($groups as $group){
                $row1 .= "<th>";
                $sids = "";
                foreach($group->getMembers() as $member){
                    $sids .= "sids[]={$member->getId()}&";
                }
                $sids = substr($sids,0,strlen($sids)-1);

                $row1 .= "<a href='show_availability?$sids'>{$group->getId()}</a>";
                $row1 .= "</th>";

                $members = $group->getMembers();
                $row2 .= "<td>";
                for($i=0;$i<count($members);$i++){
                    $row2 .= "{$members[$i]->getName()}";
                    if ($i != count($members)-1) $row2 .= "<br/>";
                }
                $row2 .= "</td>";
                
                if ($row_count%5 == 4) {
                    echo "<tr>$row1</tr>";
                    echo "<tr>$row2</tr>";
                    $row1 = "";
                    $row2 = "";
                }
                $row_count++;
            }
            
            if ($row1 != "") {
                echo "<tr>$row1</tr>";
                echo "<tr>$row2</tr>";
                $row1 = "";
                $row2 = "";
            }
            echo "</table>";
        }
    }

    ### END OF DO NOT MODIFY ###
?>

