<?php
require_once 'common.php';

class PersonDAO {
	/**
	 * @param $id  Integer.
	 * @return 
	 * 		If the id exists, return the Person object for id specified.
	 * 		If the id does not exist, return false.
	 */
	public function get($id) {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        
        $sql = "SELECT NAME FROM PERSON WHERE ID = :ID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ID', $id, PDO::PARAM_INT);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

		$person = false;
        while ($row = $stmt->fetch() ) {
            $person = new Person($id, $row['NAME']);
        }

        $stmt = null;
        $conn = null;
        
        return $person;
    }

    /**
	 * @param $search  String.  Search criteria
	 * @return 
	 * 		Indexed array of Person objects whose name contains $search (case insensitive).
	 * 		If there no such person, return empty array.
	 */
	public function search($search) {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        
        $sql = "SELECT ID, NAME FROM PERSON WHERE UPPER(NAME) LIKE :search";
        $stmt = $conn->prepare($sql);
        
        $search = strtoupper("%$search%");
        $stmt->bindParam(':search', $search, PDO::PARAM_STR);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

		$results = [];
        while ($row = $stmt->fetch() ) {
            $results[] = new Person($row['ID'], $row['NAME']);
        }

        $stmt = null;
        $conn = null;
        
        return $results;
	}
}
