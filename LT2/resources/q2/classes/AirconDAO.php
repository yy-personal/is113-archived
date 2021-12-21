<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->

<?php

class AirconDAO {
       
    // Get all the records from aircons database table
    public function getAll() {
        
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "SELECT *  FROM aircons ";
        $stmt = $conn->prepare($sql);

        $listAC = [];

        if ( $stmt->execute() ) {

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ( $row = $stmt->fetch() ) {
                $listAC[] = new Aircon(
                                        $row["aircon_id"], 
                                        $row["username"], 
                                        $row["name"], 
                                        $row["location"],
                                        $row["last_request_date"], 
                                        $row["last_request_status"]
                            );
            }

        }
        else {
            $connMgr->handleError( $stmt, $sql );
        }

        $stmt = null;
        $conn = null;        

        return $listAC;
    }


    // Given aircon_id
    // Return the corresponding aircon object
    public function getAircon($aircon_id) {

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "SELECT * FROM aircons
                WHERE aircon_id = :aircon_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":aircon_id", $aircon_id, PDO::PARAM_STR);

        $aircon = null;
        if ( $stmt->execute() ) {

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ( $row = $stmt->fetch() ) {
                $aircon = new Aircon(
                                        $row["aircon_id"], 
                                        $row["username"], 
                                        $row["name"], 
                                        $row["location"],
                                        $row["last_request_date"], 
                                        $row["last_request_status"]
                            );
            }

        }

        $stmt = null;
        $conn = null;        

        return $aircon;
    }

    // Given aircon_id and status ('accepted')
    // Update the corresponding row in aircons database table
    public function updateLastRequestStatus($aircon_id, $status) {

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "UPDATE
                    aircons
                SET
                    last_request_status = :status
                WHERE 
                    aircon_id = :aircon_id";
        
        $stmt = $conn->prepare($sql);

        // Your code goes here
                
        $status = $stmt->execute(); // DO NOT MODIFY THIS LINE

        // Your code goes here
        
        return $status;
    }

}

?>  