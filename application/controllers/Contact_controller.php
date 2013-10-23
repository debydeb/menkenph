<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function Index() {
		/*----------------
			DATA ARRAY
		------------------*/
		$data['title'] = "About";
		//subMenu array
		$subMenu = array( 	'imp'    => $this->menu_model->getMenu('impdent'), 
							'prote'  => $this->menu_model->getMenu('prote', ''),
							'biomat' => $this->menu_model->getMenu('biomat', ''),
							'cirug'  => $this->menu_model->getMenu('cirug', ''),
							'mate'   => $this->menu_model->getMenu('mate'),
							'equip'  => $this->menu_model->getMenu('equip')
						);


		/*----------------
			LOAD VIEWS
		------------------*/
		$this->load->view('head_view', $data);

		//Mobile detection
		if ($this->agent->is_mobile()) :
			$this->load->view('header_view', $data);
		else :
			$this->load->view('header_desktop_view', $subMenu);
		endif;

		$this->load->view('contact_view');
		$this->load->view('footer_view', $data);
	}


}