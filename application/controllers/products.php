<?php

class Products extends CI_Controller {
	
	public function Index($start = 0, $par1 = null, $par2 = null, $par3 = null) {

		
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
		$config['per_page']       = 12;
		$config['num_links']      = 2;
		$config['uri_segment']    = 2;
		$config['suffix']         = "/$par1/$par2/$par3";
		$config['preffix']        = "/$par1/$par2/$par3";
		$config['first_url']      = $config['base_url'] . '/0/' . $config['suffix'];
		$config['constant_num_links'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = "</ul>";
		
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = "</li>";
		
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = "</li>";
		
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

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

		$this->load->view('products_view', $data);
		$this->load->view('footer_view', $data);
	}


}