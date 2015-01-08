<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discografia extends CI_Controller {

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

			$datos['discos'] = $this->db->get('discografia');
			$this->db->order_by("date", "desc");
			$datos['ultimas'] = $this->db->get_where('news', array('active' => 1), 3);

			$this->load->view('header');
			$this->load->view('disco_view', $datos);
			$this->load->view('footer', $datos);

		}
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */