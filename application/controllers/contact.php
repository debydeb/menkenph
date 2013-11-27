<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function Index() {
		/*----------------
			DATA ARRAY
		------------------*/
		$data['title'] = "Contact";
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

	//para chequear y mandar el mail
	public function send() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','Nombre', 'required|alpha|xxs_clean');
		$this->form_validation->set_rules('lstname','Apellido', 'required|alpha|xxs_clean');
		$this->form_validation->set_rules('phone','Telefono', 'required|xxs_clean');
		$this->form_validation->set_rules('email','E-mail', 'required|xxs_clean');
		$this->form_validation->set_rules('msj','Mensaje', 'required|xxs_clean');

		if($this->form_validation->run() == TRUE) {
			/*---send mail---*/
			$this->load->library('email');

			$this->email->from('desdelaweb@menkenpharma.com.ar', 'Menken Pharma Contact');
			$this->email->to('debora.ovando@gmail.com');
			$this->email->subject('Contacto desde Menken Pharma Site');

			$name = $this->input->post('name');
			$lstname = $this->input->post('lstname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$msj = $this->input->post('msj');

			$all = "Nombre: ".$name." Apellido: ".$lstname." Email: ".$email." Tel: ".$phone." Mensaje: ".$msj;

			$this->email->message($all);
			if ($this->email->send()) {
				//Redirect to index action
				echo 'Success!';

			}
			/*-----------------------------------------*/

		} else {
			//Error Handling

		}
	}


}