<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Discografia extends CI_Controller {

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
     $this->load->view('admin/disco_view', $data);

 }

 function show()
 {

  $this->datatables
    ->select('id, title, text, img, slug, active')
    ->from('discografia');

  echo $this->datatables->generate();
  

 }

  function add()
 {

  if($_POST){

    $this->form_validation->set_rules('title', 'Titulo', 'required');
    $this->form_validation->set_rules('text', 'Texto', 'required');

    if ($this->form_validation->run() == TRUE)
    {

      if(@$_POST['active'] == "on"){
        $_POST['active'] = 1;
      } else {
        $_POST['active'] = 0;
      }

      $config['upload_path'] = "./images/uploads/discografia/";
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '2000';
      $config['max_width'] = '2024';
      $config['max_height'] = '2008';

      $this->load->library('upload', $config);


      if ($this->upload->do_upload('img')) {

        $file_info = $this->upload->data();
        $_POST['img'] = $file_info['file_name'];


        $_POST['slug'] = url_title(strtolower($_POST['title']));
        $this->admin->add_disco($_POST);
        redirect('/admin/discografia' ,'refresh');
        exit;

      }
    }
  }

  $this->load->view('admin/head_view');
  $this->load->view('admin/disco_form_view');
  

 }

  function edit( $disco )
 {

  if($_POST){

    $this->form_validation->set_rules('title', 'Titulo', 'required');
    $this->form_validation->set_rules('text', 'Texto', 'required');

    if ($this->form_validation->run() == TRUE)
    {

      if(@$_POST['active'] == "on"){
        $_POST['active'] = 1;
      } else {
        $_POST['active'] = 0;
      }

      $config['upload_path'] = "./images/uploads/discografia/";
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '2000';
      $config['max_width'] = '2024';
      $config['max_height'] = '2008';

      $this->load->library('upload', $config);


      if ($this->upload->do_upload('img')) {

        $file_info = $this->upload->data();
        $_POST['img'] = $file_info['file_name'];


        $_POST['slug'] = url_title(strtolower($_POST['title']));
        $this->admin->update_disco($_POST);
        redirect('/admin/discografia' ,'refresh');
        exit;

      }


    }
  }

  $data['disco_data'] = $this->db->get_where('discografia', array('id' => $disco))->row();

  $this->load->view('admin/head_view', $data);
  $this->load->view('admin/disco_form_view', $data);
  

 }

  function del( $disco )
 {

    $this->db->delete('discografia', array('id' => $disco)); 
    redirect('/admin/discografia' ,'refresh');
    exit;

 }



}

?>