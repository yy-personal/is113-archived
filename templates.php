<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->

<?php
##$stmt->execute() after $stmt->bindParam(':store_name', $store_name, PDO::PARAM_STR);
//Below get password using user name, return one value $password in the end.
public function getPassword($username) {
    // Step 1 - Connect to Database
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->connect();
    // Step 2 - Prepare SQL
    $sql = "SELECT
                password
            FROM
                account_secure
            WHERE
                username = :username
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Step 3 - Execute SQL
    $password = null;
    if( $stmt->execute() ) {

        // Step 4 - Retrieve Query Results
        if( $row = $stmt->fetch() ) {
            $password = $row['password'];
        }
    }
    // Step 5 - Clear Resources
    $stmt = null;
    $pdo = null;

    // Step 6 - Return
    return $password; // String (encrypted password)
}

//Below return an array/list of itemobj
public function getStoreItems($store_name) {
    // Step 1 - Connect to Database
    $connMgr = new ConnectionManager();
    $pdo = $connMgr->connect();
    // Step 2 - Prepare SQL
    $sql = "
        SELECT
            id, description, price, quantity
        FROM
            item
        WHERE
            store_name = :store_name
    ";
    $stmt = $pdo->prepare($sql); // SQLStatement obj, FYI
    $stmt->bindParam(':store_name', $store_name, PDO::PARAM_STR);
    $stmt->setFetchMode(PDO::FETCH_ASSOC); // PDO::FETCH_NUM
    // Step 3 - Execute SQL
    $returnArray = []; // Indexed Array of Item object(s)
    if( $stmt->execute() ) {
        while( $row = $stmt->fetch() ) {
            // var_dump($row);
            $itemObj = new Item(
                $row['id'],
                $row['description'],
                $row['price'],
                $row['quantity'],
            );
            // var_dump($itemObj);
            $returnArray[] = $itemObj;
        }
    }
    // Step 5 - Clear Resources
    $stmt = null;
    $pdo = null;
    // Step 6 - Return an Indexed Array of Grade objects
    return $returnArray;
}

// This method retrieves the children given the empId 
// returns an associate array containing the childName and childAge, like 'ChildName => Age
public function getChildren($empId) {
    
    $sql = "SELECT * FROM child where empId = :empId";
  
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empId', $empId, PDO::PARAM_INT);
    
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
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
//OR BELOW THIS
public function updatePassword($empId, $new_password) {
    
    $sql = "UPDATE employee set password =:password where empId = :empId";
    # == Part D : ENTER CODE HERE == 
    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empId', $empId, PDO::PARAM_INT);
    $stmt->bindParam(':password', $new_password, PDO::PARAM_STR);
    $result = $stmt->execute();
    $stmt = null;
    $conn = null;    
    return $result;

// This method checks to see if an account with $username exists in the database 'account' table.
  // If it exists, it returns an Account object.
  // Else, it returns null.
public function retrieve($username) {
    // skeleton SQL
    $sql = "SELECT * FROM account where username = :username";

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    while($row = $stmt->fetch()) {
        return new Account( $row['id'], $row['fullname'], $row['username'], $row['password_hash'] );
    }

    $stmt = null;
    $conn = null;

    return null;
}

  // This method authenticates the account given username & password (from user form - in plain text).
  // Returns true if username & password_hash combination is correct.
  // Otherwise, returns false.
  // Please make use of retrieve() method above.
public function authenticate($username, $password) {
    $result = false;

    $account = $this->retrieve($username);
    // No account with $username was found in Database.
    // Return false.
    if(!$account) {
        return false;
    }

    // Account with $username is found.
    // Now, do authentication.
    if( password_verify($password, $account->getPassword_hash()) ) {
      // password is correct
        return true;
    }
}

  // Question 2 - Part B
  // [TODO] Code here to reset the user's password.
  // Input 1: Account ID (database table Account ID, integer)
  // Input 2: New Password (string)
public function reset_password($id, $new_password) {

    $sql = 'UPDATE Account SET password_hash = :new_password WHERE id = :id';

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':new_password', password_hash($new_password, PASSWORD_DEFAULT), PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $result = $stmt->execute();
    $stmt = null;
    $conn = null;

    return $result;
}





//Below here is a sample of index array of items, hwo to implement the class.
class Store {

    private $name;
    private $owner;
    private $items; // Indexed Array of Item objects

    public function __construct($pName, $pOwner) {
        $this->name = $pName;
        $this->owner = $pOwner;
        $this->items = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function addItem($itemObject) {
        $this->items[] = $itemObject;
    }

    public function getItems() {
        return $this->items;
    }


}
//Below shows how to create indexed array of class using the functions
$store1 = new Store('East', 'Kim Jong Un'); // Store object
$store1->addItem(new Item('A123', "Supreme Shampoo", 5.75, 12));
$store1->addItem(new Item('B456', "Supreme Toothbrush", 3.50, 5));

$store2 = new Store('West', 'Kim Yo Jong');
$store2->addItem(new Item('C789', "Supreme Pencil", 1.25, 7));
$store2->addItem(new Item('D987', "Supreme Coffee", 4.75, 30));
$store2->addItem(new Item('E654', "Supreme Beer", 3.75, 100));









?>

