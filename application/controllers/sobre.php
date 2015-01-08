<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends CI_Controller {

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

			$datos['valor'] = "Sobre";
			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);

			$this->load->view('header');
			$this->load->view('about_view', $datos);
			$this->load->view('footer', $datos);

		}

	}
	
}