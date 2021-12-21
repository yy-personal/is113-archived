<?php

require_once 'ConnectionManager.php';
require_once 'grade.php';

class AccountDAO {

    /*
    This method authenticates given username/password
    against the 'account' database table.

    INPUT
        $username (String)
        $password (String)

    OUTPUT
        Return:
            Boolean True (if username/password combo is found in account)
            Boolean False (otherwise)
    */
    public function authenticate($username, $password) {

        // YOUR CODE GOES HERE
        // YOUR CODE GOES HERE
        //STEP 1 Connect to mysql schema animals
        $connectionmanager = new ConnectionManager();
        $pdo = $connectionmanager->connect(); //PDO Object

        //STEP 2 formulate sql statement
        $sql ="SELECT username, password FROM account where username = :username and password = :password"; //Current just string, need to register this stirng to PDO.
        $stmt = $pdo->prepare($sql); //PDOStatement object
        $stmt ->bindParam(':username', $username, PDO:: PARAM_STR);
        $stmt ->bindParam(':password', $password, PDO:: PARAM_STR);

        //STEP 3  execute the SQL statement
        $stmt -> execute();//Run SQL Statement  
        $stmt -> setFetchMode(PDO:: FETCH_ASSOC); //Convert the statement into associative array?
        // $stmt -> setFetchMode(PDO:: FETCH_NUM); //Each row retrieved as Indexed array.

        //STEP 4 Retrive Data
        $num_rows = $stmt->rowCount();
        // var_dump($num_rows);
        $isValid = false;
        if($num_rows==1){
            $isValid = True;
        }

       
        //Optional STEP 5 on clearing resources
        $stmt = null;// clear resources
        $pdo = null;

        //STEP 6 Return an Indexed array of cat object
        return $isValid; //Boolean True/False
    }
    
}

?>