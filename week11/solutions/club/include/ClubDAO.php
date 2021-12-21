<?php
require_once 'common.php';

class ClubDAO {
	/**
	 * @return 
	 * 		Return all Club objects 
	 */
	public function getAll() {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        
        $sql = "SELECT ID, NAME, ACTIVE FROM CLUB";
        $stmt = $conn->prepare($sql);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

		$clubs = [];
        while ($row = $stmt->fetch() ) {
            $clubs[] = new Club($row['ID'], $row['NAME'], $row['ACTIVE'] == 'Y');
        }

        $stmt = null;
        $conn = null;
        
        return $clubs;
    }

	/**
	 * @param $id  Integer.
	 * @return 
	 * 		If the id exists, return the Club object for id specified.
	 * 		If the id does not exist, return false.
	 */
	public function get($id) {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        
        $sql = "SELECT NAME, ACTIVE FROM CLUB WHERE ID = :ID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ID', $id, PDO::PARAM_INT);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

		$club = false;
        while ($row = $stmt->fetch() ) {
            $club = new Club($id, $row['NAME'], $row['ACTIVE'] == 'Y');
        }

        $stmt = null;
        $conn = null;
        
        return $club;
    }


	/**
	 * @param $club  Club object.
	 */
	public function update($club) {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "
            UPDATE club
            SET NAME=:NAME,
                ACTIVE=:ACTIVE
            WHERE ID= :ID
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':ID', $club->getID(), PDO::PARAM_INT);
        $stmt->bindValue(':NAME', $club->getName(), PDO::PARAM_STR);
        $stmt->bindValue(':ACTIVE', $club->isActive() ? 'Y': 'N', PDO::PARAM_STR);

        $stmt->execute();

        $stmt = null;
        $conn = null;
    }

	/**
	 * @param $clubID  Integer.  Club's ID
	 * @return 
	 * 		Indexed array of Person objects who are members of the specified club 
	 * 		If there no such person, return empty array.
	 */
	public function getMembers($clubID) {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        
        $sql = "
			SELECT P.ID, P.NAME 
			FROM PERSON P
			INNER JOIN CLUB_PERSON CP
				ON P.ID = CP.PERSON_ID
			WHERE CP.CLUB_ID = :CLUB_ID
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':CLUB_ID', $clubID, PDO::PARAM_INT);

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
    
	/**
	 * Add a member to a club.
	 * 
	 * @param $clubID  
	 * 		Integer.  Club's ID
	 * @param $personID
	 * 		Integer.  Person's IDs.
	 */
	public function addMember($clubID, $personID) {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        
        $sql = "
			INSERT INTO CLUB_PERSON (CLUB_ID, PERSON_ID)
			VALUES (:CLUB_ID, :PERSON_ID)
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':CLUB_ID', $clubID, PDO::PARAM_INT);
        $stmt->bindParam(':PERSON_ID', $personID, PDO::PARAM_INT);

        $stmt->execute();

        $stmt = null;
        $conn = null;
    }    
    
	/**
	 * Remove a member from a club.
	 * 
	 * @param $clubID  
	 * 		Integer.  Club's ID
	 * @param $personID
	 * 		Integer.  Person's IDs.
	 */
	public function removeMember($clubID, $personID) {
		$connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        
        $sql = "
			DELETE FROM CLUB_PERSON
			WHERE CLUB_ID = :CLUB_ID
				AND PERSON_ID = :PERSON_ID
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':CLUB_ID', $clubID, PDO::PARAM_INT);
        $stmt->bindParam(':PERSON_ID', $personID, PDO::PARAM_INT);

        $stmt->execute();

        $stmt = null;
        $conn = null;
    }    
}
