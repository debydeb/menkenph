<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu_model extends CI_Model {

	function getMenu( $fstParent, $sndParent = null) {
		
		//Set the WHERE statement for the query.
		$where = "fstParent = '{$fstParent}'";
		$where .= isset( $sndParent ) ? "AND sndParent = '{$sndParent}'" : "";

		//Performs the query and stores it in $query.
		$this->db->from('mph_menulist')->where($where);
		$query = $this->db->get();

		//returns the query results.
		return $query->result();
	}
}
