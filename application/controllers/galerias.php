<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galerias extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('maintenance');
		$this->load->model('front');
	}

	public function index()
	{
		if($this->maintenance->show_maintenance($this->input->ip_address())) {
		
			$this->load->view('maintenance');

		} else {

			$datos['valor'] = "Galeria";
			$important = $this->db->get_where('gallerys', array('important' => 1))->row();
			$datos['images_important'] = $this->db->get_where('photos', array('gallerys_id' => $important->id));

			$datos['galerias'] = $this->front->get_gallery_list();
			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);

			$this->load->view('header');
			$this->load->view('gallery_view', $datos);
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
			$this->load->view('gallery_view_detail', $datos);
			$this->load->view('footer', $datos);
		}
		
	}

}