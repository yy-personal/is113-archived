<?php
    require_once "common.php";

    $dao = new EmploymentStatDAO();
  
    if(isset($_POST["action"])) {

        $isOk = TRUE;

        if($_POST["action"] == "Create New Record") {

            if($_POST["year"]=='' || $_POST["university"]=='' || $_POST["school"]=='' ||
                $_POST["degree"]=='' || $_POST["employment_rate"]=='' || $_POST["salary"] == '') {

                echo "All six fields are necessary!";
                return;

            } else {
                $id = rand(101,200); // generate a random id
                $year = $_POST["year"];
                $university = $_POST["university"];
                $school = $_POST["school"];
                $degree = $_POST["degree"];
                $rate = $_POST["employment_rate"];
                $salary = $_POST["salary"];

                $employment = new EmploymentStat($id,$year,$university,$school,$degree,$rate,$salary);

                $isOk = $dao->add($employment); 
            }  

        } elseif($_POST["action"] == "Update Record") {

            if($_POST["id"]=='' || $_POST["employment_rate"]=='' || $_POST["salary"] == '') {

                echo "All three fields are necessary!";
                return;
                
            } else {
                $id = $_POST["id"];
                $rate = $_POST["employment_rate"];
                $salary = $_POST["salary"];

                $isOk = $dao->update($id, $rate, $salary);
            }

        } elseif($_POST["action"] == "Delete Record") {
            if($_POST["id"]=='') {
                echo "ID field is necessary!";
                return;
                
            } else {
                $id = $_POST["id"];
                $isOk = $dao->delete($id);
            }
        }

        if($isOk)
            echo "Database update successful!";
        else 
            echo "Error: database update error!";
    }
   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Employment Info</title>
        <style>
          
            body {
                background-color: #184a99;
            }
            table,th,td{
                border: 1px solid black;
            }

            #form1 {
                width: 310px;
                height: 200px;
                color: white;
                background-color: #103c82;
                margin: 30px;
                padding: 10px;
            }

            #form2 {
                width: 310px;
                height: 120px;
                color: white;
                background-color: #103c82;
                margin: 30px;
                padding: 10px;
            }

            #form3 {
                width: 310px;
                height: 80px;
                color: white;
                background-color: #103c82;
                margin: 30px;
                padding: 10px;
            }
        </style>
    </head>
    <body>
    
    <div id="form1">
        <form method='POST'>
            Year: <input type="number" name="year" placeholder="2017" /><br/>
            University: <select name="university"> 
                            <option value="Nanyang Technological University">NTU</option>
                            <option value="National University of Singapore">NUS</option>
                            <option value="Singapore Institute of Technology">SIT</option>
                            <option value="Singapore Management University" selected>SMU</option>
                            <option value="Singapore University of Technology and Design">SUTD</option>
                        </select><br/>
            School: <input type="text" name="school" placeholder="School of Information Systems (4-years programme) *" /><br/>
            Degree: <input type="text" name="degree" placeholder="Information Systems Management" /><br/>

            Employment Rate: <input type="text" name="employment_rate" placeholder="99.9" /><br/>
            Average Salary: <input type="number" name="salary" placeholder="1234" /><br/><br/>

            <input type="submit" name="action" value="Create New Record" />
        </form>
    </div>

    <div id="form2">
        <form method='POST'>
            ID: <input type='number' name='id' /><br/>

            New Employment Rate: <input type="text" name="employment_rate" placeholder="99.9" /><br/>
            New Average Salary: <input type="number" name="salary"  placeholder="1234"/><br/><br/>
            <input type="submit" name="action" value="Update Record" />
        </form>
    </div>

    
    <div id="form3">
        <form method='POST'>
        ID: <input type='number' name='id' /><br/><br/>
 
            <input type="submit" name="action" value="Delete Record" />
        </form>
    </div>
   

    </body> 
</html>

