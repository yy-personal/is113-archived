<?php
    require_once "common.php";
    $dao = new PersonDAO();
    $person_list = [];

    if(!empty($_POST)){
        # Page is visited with search criteria specified
        $gender = $_POST["gender"];
        $min_age = $_POST["min_age"];
        $max_age = $_POST["max_age"];
        $person_list = $dao->search($min_age,$max_age,$gender);    
    }
    else{
        # Page loads for the first time
        $person_list = $dao->retrieveAll();
    }
?>
<html>
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    
    <form method='POST'>
        <?php
            $m_checked = "";
            $f_checked = "";
            $a_checked = "checked";
            $min_age = "0";
            $max_age = "200";

            // If this page is visited with search criteria specified,
            // update values of $m_checked, $f_checked, $a_checked
            // $min_age and $max_age according to search criteria
            // entered by the user  

            if(!empty($_POST)){
                if($_POST['gender'] === 'm'){
                    $m_checked = "checked";
                    $f_checked = "";
                    $a_checked = "";
                }
                else if($_POST['gender'] === 'f'){
                    $m_checked = "";
                    $f_checked = "checked";
                    $a_checked = "";
                }
                $min_age = $_POST['min_age']; 
                $max_age = $_POST['max_age'];
            }

            echo "Gender: 
                    <input type='radio' name='gender' value='m' $m_checked/> Male
                    <input type='radio' name='gender' value='f' $f_checked/> Female
                    <input type='radio' name='gender' value='a' $a_checked/> Any
                    <br/>
                    Min Age: <input type='text' name='min_age' value='$min_age'/><br/>
                    Max Age: <input type='text' name='max_age' value='$max_age'/><br/>
                    <input type='submit' value='Filter'/>";
        ?>     
    </form>

    <table>
        <tr> 
            <th>Name</th> 
            <th>Gender</th> 
            <th>Age</th> 
        </tr>
        <?php   
            // Print out person details row-by-row
            
            foreach($person_list as $person){
                echo "<tr>";
                echo "<td>{$person->getName()}</td>";
                echo "<td>" . strtoupper($person->getGender()). "</td>";
                echo "<td>{$person->getAge()}</td>";
                echo "</tr>";
            }
        ?>
    </table>
    </body> 
</html>