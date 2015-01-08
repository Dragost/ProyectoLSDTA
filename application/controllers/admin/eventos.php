<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Eventos extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   if(!$this->session->userdata('logged_in')){ redirect('admin/login', 'refresh'); }
   $this->load->model('admin');
   $this->load->library('datatables');
   $this->config->set_item('base_url', 'https://www.lossecretosdetualmohada.com/');
 }

 function index()
 {
  
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];

     $data['ip'] = $this->input->ip_address();

     $this->load->view('admin/head_view', $data);
     $this->load->view('admin/events_view', $data);

 }

 function show()
 {

  $this->datatables
    ->select('id, name, city, text, date_start, date_end, link, active')
    ->from('concerts');

  echo $this->datatables->generate();
  

 }

  function add()
 {

  if($_POST){

    $this->form_validation->set_rules('name', 'Titulo', 'required');
    $this->form_validation->set_rules('city', 'Ciudad', 'required');
    $this->form_validation->set_rules('text', 'Texto', 'required');
    $this->form_validation->set_rules('date_start', 'Fecha Inicio', 'required');
    $this->form_validation->set_rules('date_end', 'Fecha Fin', 'required');

    if ($this->form_validation->run() == FALSE)
    {

    }
    else
    {

      if(@$_POST['active'] == "on"){
        $_POST['active'] = 1;
      } else {
        $_POST['active'] = 0;
      }

      $this->admin->add_event($_POST);
      redirect('/admin/eventos' ,'refresh');
      exit;
    }
  }

  $this->load->view('admin/head_view');
  $this->load->view('admin/events_form_view');
  

 }

  function edit( $event )
 {

  if($_POST){


    $this->form_validation->set_rules('name', 'Titulo', 'required');
    $this->form_validation->set_rules('city', 'Ciudad', 'required');
    $this->form_validation->set_rules('text', 'Texto', 'required');
    $this->form_validation->set_rules('date_start', 'Fecha Inicio', 'required');
    $this->form_validation->set_rules('date_end', 'Fecha Fin', 'required');

    if ($this->form_validation->run() == FALSE)
    {

    }
    else
    {
      if(@$_POST['active'] == "on"){
        $_POST['active'] = 1;
      } else {
        $_POST['active'] = 0;
      }

      $this->admin->update_event($_POST);
      redirect('/admin/eventos' ,'refresh');
      exit;
    }
  }

  $data['event_data'] = $this->db->get_where('concerts', array('id' => $event))->row();

  $this->load->view('admin/head_view', $data);
  $this->load->view('admin/events_form_view', $data);
  

 }

  function del( $event )
 {

    $this->db->delete('concerts', array('id' => $event)); 
    redirect('/admin/eventos' ,'refresh');
    exit;

 }


}

?>