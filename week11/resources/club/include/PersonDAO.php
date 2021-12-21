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
        // SQL to find person whose id=1
        // SELECT NAME FROM PERSON WHERE ID = 1
        
        // TODO
    }

    /**
	 * @param $search  String.  Search criteria
	 * @return 
	 * 		Indexed array of Person objects whose name contains $search (case insensitive).
	 * 		If there no such person, return empty array.
	 */
	public function search($search) {
        // SQL to find persons whose name contains 'sarah' ignoring case.
		// SELECT ID, NAME FROM PERSON WHERE UPPER(NAME) LIKE '%sarah%'

        // TODO
	}
}
