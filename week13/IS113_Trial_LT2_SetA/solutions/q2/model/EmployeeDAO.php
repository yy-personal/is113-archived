<?php

/*
    Name:

    Email:
*/

require_once 'common.php';

class EmployeeDAO {

  // This method authenticates the account given username & password
  // returns the role of the user if it's valid combination, return null otherwise.
  public function authenticate($empId, $password) {
    $sql = "SELECT * FROM employee where empId = :empId and password=:password";
  
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empId', $empId, PDO::PARAM_INT);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $role = null;
    if($row = $stmt->fetch()) {
        $role = $row['role'];
    }

    $stmt = null;
    $conn = null;

    return $role;
  }
  
  // This method retrieves a specific employee given the empId
  // returns an Employee object
  public function getEmployee($empId) {
    $sql = "SELECT * FROM employee where empId = :empId";
  
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empId', $empId, PDO::PARAM_INT);
    
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($row = $stmt->fetch()) {
      $employee = new Employee( $row['empId'], $row['name'],$row['password']);
    }

    $stmt = null;
    $conn = null;

    return $employee;
  }

  // This method retrieves all the employees 
  // returns an array of Employee objects
  public function getAllEmployees() {
    // Code here
    $sql = "SELECT * FROM employee";
  
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empId', $empId, PDO::PARAM_INT);
    
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $employees = [];
    while($row = $stmt->fetch()) {
        $employees[] = new Employee( $row['empId'], $row['name'], $row['password']);
    }

    $stmt = null;
    $conn = null;

    return $employees;
  }

  // This method retrieves the spouse given the empId 
  // returns a Spouse object, return null otherwise.
  public function getSpouse($empId) {
    $sql = "SELECT * FROM spouse where empId = :empId";
  
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empId', $empId, PDO::PARAM_INT);
    
    $stmt->execute();

    $spouse = null;
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($row = $stmt->fetch()) {
        $spouse = new Spouse($empId, $row['spouseName']);
    }

    $stmt = null;
    $conn = null;

    return $spouse;
  }

  // This method retrieves the children given the empId 
  // returns an associate array containing the childName and childAge
  public function getChildren($empId) {
    // Code here
    $sql = "SELECT * FROM child where empId = :empId";
  
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empId', $empId, PDO::PARAM_INT);
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $children = array();
    while($row = $stmt->fetch()) {
        $children[$row['childName']] = $row['childAge'];  
    }

    return $children;
  }

  // This method updates the password for an empId
  // returns a boolean value
  public function updatePassword($empId, $new_password) {
    // Code here
    $result = true;

    // connect to database
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();
    
    // prepare update
    $sql = "UPDATE employee set password =:password where empId = :empId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":password", $new_password, PDO::PARAM_STR);
    $stmt->bindParam(":empId", $empId, PDO::PARAM_STR);

    $result = $stmt->execute();
    // close connections
    $stmt = null;
    $conn = null;        
    
    return $result;

  }


}

?>
