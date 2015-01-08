<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Galerias extends CI_Controller {

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
     $this->load->view('admin/gallerys_view', $data);

 }

 function show()
 {

  $this->datatables
    ->select('id, title, active, important, home_slider')
    ->from('gallerys');

  echo $this->datatables->generate();
  

 }

  function add()
 {

  if($_POST){

    $this->form_validation->set_rules('title', 'Title', 'required');

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

      if(@$_POST['important'] == "on"){
        $_POST['important'] = 1;
      } else {
        $_POST['important'] = 0;
      }

      if(@$_POST['home_slider'] == "on"){
        $_POST['home_slider'] = 1;
      } else {
        $_POST['home_slider'] = 0;
      }

      $_POST['slug'] = url_title(strtolower($_POST['title']));
      $this->admin->add_gallery($_POST);
      redirect('/admin/galerias' ,'refresh');
      exit;
    }
  }

  $this->load->view('admin/head_view');
  $this->load->view('admin/gallerys_form_view');
  

 }

  function edit( $gallery )
 {

  if($_POST){


    $this->form_validation->set_rules('title', 'Titulo', 'required');

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

      if(@$_POST['important'] == "on"){
        $_POST['important'] = 1;
      } else {
        $_POST['important'] = 0;
      }

      if(@$_POST['home_slider'] == "on"){
        $_POST['home_slider'] = 1;
      } else {
        $_POST['home_slider'] = 0;
      }


      $_POST['slug'] = url_title(strtolower($_POST['title']));
      $this->admin->update_gallery($_POST);
      redirect('/admin/galerias' ,'refresh');
      exit;
    }
  }

  $data['gallery_data'] = $this->db->get_where('gallerys', array('id' => $gallery))->row();
  $data['images_gallery'] = $this->db->get_where('photos', array('gallerys_id' => $gallery));

  $this->load->view('admin/head_view', $data);
  $this->load->view('admin/gallerys_form_view', $data);
  

 }

  function del( $gallery )
 {

    $this->db->delete('photos', array('gallerys_id' => $gallery)); 
    $this->db->delete('gallerys', array('id' => $gallery)); 
    redirect('/admin/galerias' ,'refresh');
    exit;

 }


 function add_img() 
 {

  if($_POST){

    $config['upload_path'] = "./images/uploads/galeria/";
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2000';
    $config['max_width'] = '6000';
    $config['max_height'] = '4000';

    $this->load->library('upload', $config);


    if ($this->upload->do_upload('img')) {

      $file_info = $this->upload->data();
      $_POST['url'] = $file_info['file_name'];

      $this->admin->add_gallery_img($_POST);

      redirect('/admin/galerias/edit/'.$_POST['gallerys_id'] ,'refresh');
      exit;


    } else {

      redirect('/admin/galerias' ,'refresh');
      exit;

    }

  } else {

    redirect('/admin/galerias' ,'refresh');
    exit;

  }



 }


}

?>