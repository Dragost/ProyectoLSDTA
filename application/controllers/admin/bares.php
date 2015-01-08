<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Bares extends CI_Controller {

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
     $this->load->view('admin/local_view', $data);

 }

 function show()
 {

  $this->datatables
    ->select('id, name, city, web')
    ->from('local');

  echo $this->datatables->generate();
  

 }

 function show_reg( $local )
 {

  $this->datatables
    ->select('id, desc, init_date, end_date, price, quality')
    ->from('reg')
    ->where('local_id', $local);

  echo $this->datatables->generate();
  

 }

  function add()
 {

  if($_POST){

    $this->form_validation->set_rules('name', 'Nombre', 'required');
    $this->form_validation->set_rules('city', 'Ciudad', 'required');
    $this->form_validation->set_rules('dir', 'Direccion', 'required');

    if ($this->form_validation->run() == TRUE)
    {


      $this->admin->add_local($_POST);
      redirect('/admin/bares' ,'refresh');
      exit;


    }
  }

  $this->load->view('admin/head_view');
  $this->load->view('admin/local_form_view');
  

 }

  function reg( )
 {


  if($_POST){

    $this->form_validation->set_rules('desc', 'Descripcion', 'required');

    if ($this->form_validation->run() == TRUE)
    {

        $this->admin->add_reg($_POST);
        redirect('/admin/bares/edit/'.$_POST['id'] ,'refresh');
        exit;


    }

  } else {

    redirect('/admin/bares/' ,'refresh');
    exit;
  } 

 }

  function edit( $local )
 {

  if($_POST){

    $this->form_validation->set_rules('name', 'Nombre', 'required');
    $this->form_validation->set_rules('city', 'Ciudad', 'required');
    $this->form_validation->set_rules('dir', 'Direccion', 'required');

    if ($this->form_validation->run() == TRUE)
    {


        $this->admin->update_local($_POST);
        redirect('/admin/bares' ,'refresh');
        exit;


    }
  }

  $data['local_data'] = $this->db->get_where('local', array('id' => $local))->row();

  $this->load->view('admin/head_view', $data);
  $this->load->view('admin/local_form_view', $data);
  

 }

  function del( $local )
 {

    $this->db->delete('local', array('id' => $local)); 
    redirect('/admin/bares' ,'refresh');
    exit;

 }



}

?>