<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->config->set_item('base_url', 'https://www.lossecretosdetualmohada.com/');
	if($this->session->userdata('logged_in'))
   {
		redirect('admin/home', 'refresh');
   }
   else
   {
		$this->load->helper(array('form'));
		$this->load->view('admin/login_view');

   }

 }

}

?>