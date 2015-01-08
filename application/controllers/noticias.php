<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('maintenance');
	}

	public function index()
	{

		if($this->maintenance->show_maintenance($this->input->ip_address())) { // Mantenimiento

			$this->load->view('maintenance');

		} else { // Página

			$datos['valor'] = "Listado de Noticias";
			$this->db->order_by("date", "desc"); 
			$datos['noticias'] = $this->db->get_where('news', array('active' => 1));
			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);


			$this->load->view('header');
			$this->load->view('news_view', $datos);
			$this->load->view('footer', $datos);

		}
	}

	function ver ($valor){

		if($this->maintenance->show_maintenance($this->input->ip_address())) { // Mantenimiento

			$this->load->view('maintenance');

		} else { // Página

			$datos['valor'] = $valor;
			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);

			$this->load->view('header');
			$this->load->view('news_view', $datos);
			$this->load->view('footer', $datos);

		}

	}


}