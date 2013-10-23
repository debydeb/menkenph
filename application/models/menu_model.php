<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu_model extends CI_Model {

	function getMenu( $fstParent, $sndParent = null) {
		
		//Set the WHERE statement for the query.
		$where = "fstParent = '{$fstParent}'";
		$where .= isset( $sndParent ) ? "AND sndParent = '{$sndParent}'" : "";

		//Performs the query and stores it in $query.
		$query = $this->queryMenu( $where );

		//Si no hay resultados
		if ( $query->num_rows() < 1 ) {
			$where = "fstParent = '{$fstParent}'";

			$query = $this->queryMenu( $where );
		}

		//returns the query results.
		return $query->result();
	}

	function queryMenu ( $where ) {
		$this->db->from('mph_menulist')->where($where);
		$query = $this->db->get();

		return $query;
	}
}
