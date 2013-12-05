<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_model extends CI_Model {

	/*
	 * @getAllRecords:
	 *	This function returns all the records of the database with a limit of 12.
	 */
		//para guardar el mail y nombre
	public function mailing() {
    $this->load->library('form_validation');
	        $firstname = $this->input->post('name');
			$lstname = $this->input->post('lstname');
			$name = $firstname." ".$lstname;
			$email = $this->input->post('email');
			
	mysql_query("INSERT INTO dbmails (id,nombre,mail)  VALUE ('0', '$name','$email')");
		

}
}