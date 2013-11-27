<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model {

	/*
	 * @getAllRecords:
	 *	This function returns all the records of the database with a limit of 12.
	 */
	function getAllRecords() {
		$this->db->from('mph_products')->limit(12, 0);
		$query = $this->db->get();

		return $query->result();
	}



	/*
	 * @getRecordsCount:
	 *	This function returns the number of records defined in the query string
	 */
	function getRecordsCount($par1, $par2, $par3) {
		$query = $this->_buildQuery($par1, $par2, $par3);
		$result = $this->_doQuery($query, 0);

		return $result->num_rows();

	}


	/*
	 * @getAllRecords:
	 *	 This function returns all the records of the database with a limit of 12.
	 */
	function getRecords($perPage = 12, $start = 0, $par1, $par2, $par3) {

		$query = $this->_buildQuery($par1, $par2, $par3);
		$result = $this->_doQuery($query, $start);

		return $result->result();
	}


	/**
	 *	@buildQuery
	 *		Builds the query
	 */
	function _buildQuery($p1, $p2, $p3) {
		$CI =& get_instance();

		$where = "lvlOne = '{$p1}'";
		$where .= isset( $param2 ) ? "AND lvlTwo = '{$p2}'" : "";
		$where .= isset( $param3 ) ? "AND lvlThree = '{$p3}'" : "";
		//Get all records but ML Implant System
		if ($CI->geoip->InfoIP()) {
			if ( $CI->geoip->result_country_name() === "Argentina" ){
				$where .= "AND brand != 'ML Implant System'";
			}
		}

		return $where;
	}


	/*
	 * @doQuery:
	 *	Query the database
	 *
	 * @param $queryString: Query string
	 */
	function _doQuery($queryString, $queryStart = 0){
		$this->db->from('mph_products')->where($queryString)->limit(12, $queryStart);
		$query = $this->db->get();

		return $query;

	}

}
