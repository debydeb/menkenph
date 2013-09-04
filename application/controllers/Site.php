<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function index() {
		if ($this->agent->is_mobile()) {
			$this->product(0, 'impdent');
		} else {
			$this->home();
		}
	}

	public function home() {
		
		/*----------------
			DATA ARRAY
		------------------*/
		$data['title'] = "Home";


		/*----------------
			LOAD VIEWS
		------------------*/
		$this->load->view('head_view', $data);

		//Mobile detection
		if ($this->agent->is_mobile()) :
			$this->load->view('header_view', $data);
		else :
			$this->load->view('header_desktop_view', $data);
		endif;

		$this->load->view('home_view', $data);
	}

	public function product($start = 0, $par1 = null, $par2 = null, $par3 = null) {

		//Check if parameters are set.
		if ($par1 == null && $par2 == null) {
			echo "Parameters error.";
		}


		/*-----------------------
			PAGINATION LIBRARY
		-------------------------*/
		//Load pagination library
		$this->load->library('pagination');

		//All pagination config
		$config['base_url']       = base_url() . 'product/';
		$config['total_rows']     = $this->products_model->getRecordsCount($par1, $par2, $par3);
		$config['per_page']       = 6;
		$config['num_links']      = 2;
		$config['uri_segment']    = 2;
		$config['suffix']         = "/$par1/$par2/$par3";
		$config['preffix']        = "/$par1/$par2/$par3";
		$config['first_url']      = $config['base_url'] . '/0/' . $config['suffix'];
		$config['constant_num_links'] = TRUE;

		//Init pagiantion library
		$this->pagination->initialize($config);
		

		/*----------------
			DATA ARRAY
		------------------*/
		//Set the page title
		$data['title'] = "Products";
		//Product results
		$data['results'] = $this->products_model->getRecords($config['per_page'], $start, $par1, $par2, $par3);
		//Get the submenu
		$data['menu'] = $this->menu_model->getMenu($this->uri->segment(3), $this->uri->segment(4));

		
		/*----------------
			LOAD VIEWS
		------------------*/
		$this->load->view('head_view');
		$this->load->view('header_view', $data);
		$this->load->view('products_view', $data);
	}

	public function about() {
		//About Page
	}


}