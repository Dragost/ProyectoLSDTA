<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conciertos extends CI_Controller {

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

			$datos['valor'] = "Listado de Conciertos";
			$this->db->order_by("date_start", "asc");
			$datos['conciertos'] = $this->db->get('concerts');
			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);
			
			$this->load->view('header');
			$this->load->view('concerts_view', $datos);
			$this->load->view('footer', $datos);

		}
	}

	function ver ($valor){

		if($this->maintenance->show_maintenance($this->input->ip_address())) {
		
			$this->load->view('maintenance');

		} else {
			$datos['valor'] = $valor;
			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);

			$this->load->view('header');
			$this->load->view('concerts_view', $datos);
			$this->load->view('footer', $datos);
		}
		
	}

}