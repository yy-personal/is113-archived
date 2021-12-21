<?php
require_once 'common.php';

class ClubDAO {
	/**
	 * @return 
	 * 		If the id exists, return the Person object for id specified.
	 * 		If the id does not exist, return false.
	 */
	public function getAll() {
        // SELECT ID, NAME, ACTIVE FROM CLUB
        
        // TODO
    }

	/**
	 * @param $id  Integer.
	 * @return 
	 * 		If the id exists, return the Person object for id specified.
	 * 		If the id does not exist, return false.
	 */
	public function get($id) {
        // SQL to find club with id = 1
        // SELECT NAME, ACTIVE FROM CLUB WHERE ID = 1;

        // TODO
    }


	/**
	 * @param $club  Club object.
	 */
	public function update($club) {
		// SQL to update club with id = 1
        // UPDATE club SET NAME= 'Coffee Club', ACTIVE= 'N' WHERE ID= 1
        
        // TODO
    }

	/**
	 * @param $clubID  Integer.  Club's ID
	 * @return 
	 * 		Indexed array of Person objects who are members of the specified club 
	 * 		If there no such person, return empty array.
	 */
	public function getMembers($clubID) {
		// SQL to get members of club with id = 1        
		// SELECT P.ID, P.NAME FROM PERSON P
		// INNER JOIN CLUB_PERSON CP ON P.ID = CP.PERSON_ID
		// WHERE CP.CLUB_ID = 1

		// TODO
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
		// SQL to add member(id=2) to club(id=1)
		// INSERT INTO CLUB_PERSON (CLUB_ID, PERSON_ID)
		// VALUES (1, 2)

		// TODO
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
		// SQL to remove member(id=2) from club(id=1)
		// DELETE FROM CLUB_PERSON
		// WHERE CLUB_ID = 1 AND PERSON_ID = 2
    }    
}
