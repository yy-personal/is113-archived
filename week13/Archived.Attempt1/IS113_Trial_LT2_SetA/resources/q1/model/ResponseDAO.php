<?php
    # DO NOT MODIFY THIS FILE

    class ResponseDAO {

        # Retrieve an indexed array of Response objects 
        # by reading ALL records from table "response" 
        # in the database
        public function retrieveAll() {
            $connMgr = new ConnectionManager();
            $conn = $connMgr->getConnection();

            $sql = "SELECT * FROM response";
            $stmt = $conn->prepare($sql);
            
            $status = $stmt->execute();

            $responses = [];
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while( $row = $stmt->fetch() ) {
                $responses[] = new Response(
                    $row["name"], 
                    $row["classLength"],
                    $row["semLength"]
                );
            }

            $stmt = null;
            $conn = null;

            return $responses;
        }

        # Add details of a new response (i.e., $name, $class_length, and $sem_length) 
        # to the table "response" in the database
        public function addResponse($name, $class_length, $sem_length) {
            $connMgr = new ConnectionManager();
            $conn = $connMgr->getConnection();

            $sql = "INSERT INTO response
                    (name, classLength, semLength)
                    VALUES
                    (:name, :classLength, :semLength)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":classLength", $class_length, PDO::PARAM_INT);
            $stmt->bindParam(":semLength", $sem_length, PDO::PARAM_INT);
            
            $status = $stmt->execute();

            $stmt = null;
            $conn = null;

            return $status;
        }

    }
?>