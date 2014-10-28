<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fotos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('maintenance');
	}

	public function index()
	{
		if($this->maintenance->show_maintenance($this->input->ip_address())) {
		
			$this->load->view('maintenance');

		} else {

			$datos['valor'] = "Fotos";
			$this->load->view('home_view',$datos);

		}
	}

}