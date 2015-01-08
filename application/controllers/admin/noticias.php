<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Noticias extends CI_Controller {

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
     $this->load->view('admin/news_view', $data);

 }

 function show()
 {

  $this->datatables
    ->select('id, title, text, date, slug, active')
    ->from('news');

  echo $this->datatables->generate();
  

 }

  function add()
 {

  if($_POST){

    $this->form_validation->set_rules('title', 'Titulo', 'required');
    $this->form_validation->set_rules('text', 'Texto', 'required');
    $this->form_validation->set_rules('date', 'Fecha', 'required');

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

      $_POST['slug'] = url_title(strtolower($_POST['title']));
      $this->admin->add_news($_POST);
      redirect('/admin/noticias' ,'refresh');
      exit;

    }
  }

  $this->load->view('admin/head_view');
  $this->load->view('admin/news_form_view');
  

 }

  function edit( $news )
 {

  if($_POST){

    $this->form_validation->set_rules('title', 'Titulo', 'required');
    $this->form_validation->set_rules('text', 'Texto', 'required');
    $this->form_validation->set_rules('date', 'Fecha', 'required');

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

      $_POST['slug'] = url_title(strtolower($_POST['title']));
      $this->admin->update_news($_POST);
      redirect('/admin/noticias' ,'refresh');
      exit;

    }
  }

  $data['news_data'] = $this->db->get_where('news', array('id' => $news))->row();

  $this->load->view('admin/head_view', $data);
  $this->load->view('admin/news_form_view', $data);
  

 }

  function del( $news )
 {

    $this->db->delete('news', array('id' => $news)); 
    redirect('/admin/noticias' ,'refresh');
    exit;

 }


}

?>