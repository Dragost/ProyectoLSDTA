<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Config extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('maintenance');
   $this->load->model('admin');
 }

 function index()
 {
  $this->config->set_item('base_url', 'https://www.lossecretosdetualmohada.com/');
   if($this->session->userdata('logged_in'))
   {

     if(isset($_POST['excludeips'])){

      if(@$_POST['maintenance'] == "on"){
        $maintenance = 1;
      } else {
        $maintenance = 0;
      }

      $this->maintenance->update_maintenance($maintenance, $_POST['excludeips']);
      $data['updated_a'] = "Mantenimiento Actualizado Correctamente";
     }


     if(isset($_POST['title'])){

      $this->admin->update_config($_POST);
      $data['updated_b'] = "Parámetros de la Web actualizados correctamente";;

     }

     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];

     $data['settings'] = $this->db->get('admin_settings')->row();
     $data['ip'] = $this->input->ip_address();

     $this->load->view('admin/head_view', $data);
     $this->load->view('admin/config_view', $data);


   }
   else
   {
     //If no session, redirect to login page
     redirect('admin/login', 'refresh');
   }
 }



}

?>