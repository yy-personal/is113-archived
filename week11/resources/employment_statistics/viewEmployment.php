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
    
    // add code here to retrieve the employment statistics of a university given by the user
    
    
    // by default (when the page loads the first time or on reset), retrive all the statistics
    $employment_stats = $dao->retrieveAll();
    
?>

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

