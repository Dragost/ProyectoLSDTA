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
			$this->load->view('home_view',$datos);

		}
	}

	function ver ($valor){

		if($this->maintenance->show_maintenance($this->input->ip_address())) { // Mantenimiento

			$this->load->view('maintenance');

		} else { // Página

			$datos['valor'] = $valor;
			$this->load->view('home_view',$datos);

		}

	}

}