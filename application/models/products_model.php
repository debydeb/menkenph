<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model {

	/*
	 *
	 * @getRecordsCount: 
	 *	This function returns the number of records defined in the query string 
	 *	
	 *
	 */
	function getRecordsCount($par1, $par2, $par3) {
		$where = "lvlOne = '{$par1}'";
		$where .= isset( $par2 ) ? "AND lvlTwo = '{$par2}'" : "";
		$where .= isset( $par3 ) ? "AND lvlThree = '{$par3}'" : "";

		$this->db->from('mph_products')->where($where);
		$query = $this->db->get();

		return $query->num_rows();
	}


	/*
	 *
	 * @getAllRecords:
	 *	This function returns all the records of the database with a limit of 12.
	 *
	 */
	function getAllRecords() {
		$this->db->from('mph_products')->limit(12, 0);
		$query = $this->db->get();

		return $query->result();
	}

	/*
	 *
	 * @getAllRecords:
	 *	 This function returns all the records of the database with a limit of 12.
	 *
	 */
	function getRecords($perPage = 12, $start = 0, $param1, $param2, $param3) {

		//Concatenación y syntaxis ternary
		$where = "lvlOne = '{$param1}'";
		$where .= isset( $param2 ) ? "AND lvlTwo = '{$param2}'" : "";
		$where .= isset( $param3 ) ? "AND lvlThree = '{$param3}'" : "";

		$this->db->from('mph_products')->where($where)->limit($perPage, $start);
		$query = $this->db->get();

		return $query->result();
	}

	/*
	 * @doQuery:
	 *	Do the query with the query
	 *		
	 *	@param $queryString: Query string passed from another function
	 *
	 */
	function doQuery($queryString){
		/*
		 *Todo: Recator model
		 *
		 */
	}
	
}
