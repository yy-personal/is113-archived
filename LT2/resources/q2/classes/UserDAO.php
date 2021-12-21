<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->
<?php

class UserDAO {
       
    // Given $username 
    // Returns null if the $username is not found in accounts database table.
    // Returns an User object if $username is found in accounts database table.

    public function get( $username ) {

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "SELECT username, password,fullname, role
        FROM accounts
        WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);

        $user = null;
        if ( $stmt->execute() ) {

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ( $row = $stmt->fetch() ) {
                $user = new User(
                                $row["username"], 
                                $row["password"], 
                                $row["fullname"], 
                                $row["role"]
                        );
            }

        }

        $stmt = null;
        $conn = null;        

        return $user;
    }
}
?>