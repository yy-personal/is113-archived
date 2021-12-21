
<!DOCTYPE html>
<html>

  <head>
        <title>View Employment Info</title>

        <style>
            body {
                background-color: #184a99;
                color: white;
            }

            table,th,td{
                border: 1px solid black;
            }   
        </style>

  </head>

  <body>
      <h1>Graduate Employment Survey Results - NTU, NUS, SIT, SMU & SUTD</h1>

      <form method="POST">
        <h3>Search employment statistics by University</h3>
        
        University: <input type="text" name="university" />
        <br/><br/>
          
        <input type="submit" name="action" value="Filter">
        <input type="submit" name="action" value="Reset">
      </form>

      <br/>

<?php
    /*
    Get the Graduate Employment Survey Results of NTU, NUS, SIT, SMU & SUTD

    More detail:
    https://data.gov.sg/dataset/graduate-employment-survey-ntu-nus-sit-smu-suss-sutd
    
    Data API: 
    https://data.gov.sg/api/action/datastore_search?resource_id=9326ca53-9153-4a9c-b93f-8ae032637b70

   


    */

    require_once "common.php";

    $dao = new EmploymentStatDAO();
    $employment_stats = [];

    // add code here to compute and display the average salary and employment rate of each university
    // when the page load the first time or when the user clicks Reset button

    // Also add code here to compute and display the average salary of each school
    // of a given university, entered by the user
    
    if(isset($_POST["action"])) {

        if($_POST["action"] == "Filter" && $_POST["university"]!='') {

            // need to eliminate white spaces
            $university = trim($_POST["university"]);
            $employment_stats = $dao->searchByUniversity($university);  

            if(empty($employment_stats)) {
                echo "No Record Found. Please reset! <br/>";
            } else {
                computeAverageofSchools($employment_stats); 
            }

        } elseif($_POST["action"] == "Reset") {
            $employment_stats = $dao->retrieveAll();
            computeAverageofUniversities($employment_stats);
        }
    } else {
        $employment_stats = $dao->retrieveAll();
        computeAverageofUniversities($employment_stats);
    }

     // add code to compute the average salaries and display in a table
    function computeAverageofUniversities($employment_stats) {
        $assoc_employment_stats = genAssocArrayofUniversities($employment_stats);
        echo "<h3>Summary Statistics</h3>";
        echo "
        <table>
            <tr>
                <th>University</th>
                <th>Avg Employment Rate of University</th>
                <th>Avg Salary (S$) of University</th>
            </tr>
        ";
        compute_display_average_results($assoc_employment_stats);        
        echo "</table>";  
    }

     // add code to compute the average salaries and display in a table
     function computeAverageofSchools($employment_stats) {
        $assoc_employment_stats = genAssocArrayofSchools($employment_stats);
        echo "<h3>Summary Statistics</h3>";
        echo "
        <table>
            <tr>
                <th>School</th>
                <th>Avg Employment Rate of School</th>
                <th>Avg Salary (S$) of School</th>
            </tr>
        ";
        compute_display_average_results($assoc_employment_stats);       
        echo "</table>";    
    }

    function compute_display_average_results($assoc_employment_stats) {
        foreach($assoc_employment_stats as $key=>$employment_stats) {
            $avg_emp_rate = 0;
            $avg_salary = 0;
            $counter = 0;
            foreach($employment_stats as $employmentstat) {
                if(is_numeric($employmentstat->getEmploymentRate()) && is_numeric($employmentstat->getAvgSalary())) {
                    $rate = (float) $employmentstat->getEmploymentRate();
                    $salary = (int) $employmentstat->getAvgSalary();
                    $avg_emp_rate += $rate;
                    $avg_salary += $salary;
                    $counter++;
                }
            }
            $avg_emp_rate = number_format($avg_emp_rate / $counter, 2);
            $avg_salary = number_format($avg_salary/$counter, 2);
            echo "<tr><td>$key</td><td>$avg_emp_rate</td><td>$avg_salary</td></tr>";
        }
    }

    function genAssocArrayofUniversities($employment_stats) {
        $result = [];
        foreach($employment_stats as $employmentstat) {
            $university = $employmentstat->getUniversity();
            $result[$university][] = $employmentstat; 
        }
        return $result;
    }

    function genAssocArrayofSchools($employment_stats) {
        $result = [];
        foreach($employment_stats as $employmentstat) {
            $school = $employmentstat->getSchool();
            $result[$school][] = $employmentstat; 
        }
        return $result;
    }

?>


      <!-- Add your HTML + PHP Code here to show the table of Graduate Employment Statistics
              see example table in https://data.gov.sg/dataset/graduate-employment-survey-ntu-nus-sit-smu-sutd?view_id=99958a50-6788-4155-bb45-dc0043023cd5&resource_id=9326ca53-9153-4a9c-b93f-8ae032637b70
       -->
       <br/>
    <h3>Detail Statistics</h3>
    <table>
        <tr>
            <th>Record ID</th>
            <th>Year</th>
            <th>University</th>
            <th>School</th>
            <th>Degree</th>
            <th>Employment Rate</th>
            <th>Average Salary (S$)</th>
        </tr>

        <?php 
            foreach($employment_stats as $employmentstat) {
                echo "<tr>
                        <td>{$employmentstat->getID()}</td>
                        <td>{$employmentstat->getYear()}</td>
                        <td>{$employmentstat->getUniversity()}</td>
                        <td>{$employmentstat->getSchool()}</td>
                        <td>{$employmentstat->getDegree()}</td>
                        <td>{$employmentstat->getEmploymentRate()}</td>
                        <td>{$employmentstat->getAvgSalary()}</td>
                    </tr>";
            }
        ?>
    </table>

  </body>
</html>

