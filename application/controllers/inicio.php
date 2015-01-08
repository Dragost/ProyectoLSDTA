<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

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

			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);
			$home_slider = $this->db->get_where('gallerys', array('home_slider' => 1))->row();
			$datos['images_home_slider'] = $this->db->get_where('photos', array('gallerys_id' => $home_slider->id));

			$this->load->view('header');
			$this->load->view('home_view', $datos);
			$this->load->view('footer', $datos);

		}
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */