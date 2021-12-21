<!--
    Name: Lim Yin Yao
    Email: yinyao.lim.2020
-->

<?php

class RequestDAO {
       
    // Get all the records from requests database table
    public function getAll() {
        
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        $sql = "SELECT *  FROM requests";
        $stmt = $conn->prepare($sql);
        
        $listRQ = [];
        if ( $stmt->execute() ) {

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ( $row = $stmt->fetch() ) {
                $listRQ[] = new Request(
                                $row["id"], 
                                $row["aircon_id"], 
                                $row["request_date"], 
                                $row["status"]
                            );
            }
            
        }

        $stmt = null;
        $conn = null;        
        
        return $listRQ;
    }


    // Given a request_id 
    // Return the corresponding request object
    public function getRequest($request_id) {
        
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        
        $sql = "SELECT id,aircon_id,request_date,status  
                FROM requests 
                WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $request_id, PDO::PARAM_INT);
        
        if ( $stmt->execute() ) {

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ( $row = $stmt->fetch() ) {
                $rq = new Request(
                                $row["id"], 
                                $row["aircon_id"], 
                                $row["request_date"], 
                                $row["status"]
                            );
                break;
            }
            
        }

        $stmt = null;
        $conn = null;        
        
        return $rq;
    }


    // Given id and status ('accepted')
    // Update the corresponding row in requests database table
    public function updateStatus($id, $status) {

        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "UPDATE
                    requests
                SET
                    status = :status
                WHERE 
                    id = :id";

        $stmt = $conn->prepare($sql);

        // Your code goes here
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $status = $stmt->execute(); // DO NOT MODIFY THIS LINE

        // Your code goes here
        $stmt = null;
        $conn = null; 
        return $status;
    }
}
?>  