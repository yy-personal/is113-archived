<?php

    require_once "ConnectionManager.php";

    createDBTable();

    // get actual statistics from data.gov.sg
    $url = "https://data.gov.sg/api/action/datastore_search?resource_id=9326ca53-9153-4a9c-b93f-8ae032637b70";

    $content = file_get_contents($url);
    $data = json_decode($content);
    
    $array_records = $data->result->records;
    
    /* sample $array_records

    Array ( 
        [0] => stdClass Object ( [school] => Faculty of Science 
        [degree] => Bachelor of Science (Pharmacy) ## 
        [university] => National University of Singapore 
        [gross_monthly_median] => 3600 
        [gross_mthly_25_percentile] => 3500 
        [basic_monthly_median] => 3500 
        [employment_rate_ft_perm] => 94.5 
        [gross_mthly_75_percentile] => 3800 
        [gross_monthly_mean] => 3616 
        [basic_monthly_mean] => 3473 
        [year] => 2017 
        [_id] => 1 
        [employment_rate_overall] => 99.1 ) 
        
        [1] => stdClass Object ( [school] => NUS Business School 
        [degree] => Bachelor of Business Administration 
        [university] => National University of Singapore 
        [gross_monthly_median] => 3500 [gross_mthly_25_percentile] => 3000 
        [basic_monthly_median] => 3400 [employment_rate_ft_perm] => 87.3 
        [gross_mthly_75_percentile] => 4333 [gross_monthly_mean] => 4031 
        [basic_monthly_mean] => 3770 [year] => 2017 [_id] => 2 
        [employment_rate_overall] => 94.9 )

        ... )
    */

    // prepare query statement first
    $conn = new ConnectionManager();
    $pdo = $conn->getConnection();
    $sql = "insert into employmentstat (year, university, school, degree, 
            employment_rate, salary) values (:year, :university, :school, :degree, :rate, :salary)";
    $stmt = $pdo->prepare($sql);
    // insert each record into "employmentstat" table in database 
    foreach($array_records as $employmentstat) {
        
        // error handling
        if(!isValid($employmentstat)) {
           echo $employmentstat->_id . "has incomplete data";
           continue;
        }

        // add into database
        $add_ok = add($stmt, $employmentstat);
        if(!$add_ok) {
            echo "Error: database update error!";
            break;
        }
    }
    $stmt = null;
    $pdo = null;

    echo "Database Population Success. Please check the database!";
    ####### DONE Populating Database ###########
      
    function createDBTable() {
        $conn = new ConnectionManager();
        $pdo = $conn->getConnection();

        $sql = "
                CREATE TABLE IF NOT EXISTS employmentstat (
                    id          INT NOT NULL AUTO_INCREMENT,
                    year        INT(4) NOT NULL,
                    university  VARCHAR(128)  NOT NULL,
                    school  	VARCHAR(128)  NOT NULL,
                    degree   	VARCHAR(128)  NOT NULL,
                    employment_rate  	    VARCHAR(128)  NOT NULL,
                    salary      VARCHAR(128)  NOT NULL,

                    PRIMARY KEY(id)
                ); 
                ";

        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $isOk = $stmt->execute();

        if(!$isOk) {
            echo "Error: employmentstat table cannot be created!";
        }

        $stmt = null;
        $pdo = null;
    }

    function add($stmt, $employmentstat) {

        $year = format($employmentstat->year);
        $university = format($employmentstat->university);
        $school = format($employmentstat->school);
        $degree = format($employmentstat->degree);
        $rate = format($employmentstat->employment_rate_overall);
        $salary = format($employmentstat->basic_monthly_mean);
       
        $stmt->bindParam(":year",$year,PDO::PARAM_INT);
        $stmt->bindParam(":university",$university,PDO::PARAM_STR);
        $stmt->bindParam(":school",$school,PDO::PARAM_STR);
        $stmt->bindParam(":degree",$degree,PDO::PARAM_STR);
        $stmt->bindParam(":rate",$rate,PDO::PARAM_STR);
        $stmt->bindParam(":salary",$salary,PDO::PARAM_STR);
        $isOk = $stmt->execute();
       
        return $isOk;
    }

    function format($data) {
        return trim($data);
    }

    function isValid($employmentstat) {
        if(!isset($employmentstat->year)) {
            return FALSE;
        }
        
        if(!isset($employmentstat->university)) {
            return FALSE;
        }

        if(!isset($employmentstat->school)) {
            return FALSE;
        }
        if(!isset($employmentstat->degree)) {
            return FALSE;
        }
        if(!isset($employmentstat->employment_rate_overall)) {
            return FALSE;
        }
        if(!isset($employmentstat->basic_monthly_mean)) {
            return FALSE;
        }

        return TRUE;
    }
    



?>