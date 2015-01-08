<?php
Class Admin extends CI_Model
{

  function update_config ( $post ) {

	$data = array('title' => $post['title'],
	            'home_text' => $post['home_text'],
	            'about' => $post['about'],
	            'mail' => $post['mail'],
	            'facebook' => $post['facebook'],
	            'twitter' => $post['twitter'],
	            'instagram' => $post['instagram'],
	            'gplus' => $post['gplus'],
	            'youtube' => $post['youtube'],
	            'spotify' => $post['spotify']);
	$this->db->where('id', 0);
	$this->db->update('admin_settings', $data); 


  }


  function add_event ( $post ) {

	$data = array('name' => $post['name'],
	            'city' => $post['city'],
	            'text' => $post['text'],
	            'date_start' => $post['date_start'],
	            'date_end' => $post['date_end'],
	            'link' => $post['link'],
	            'active' => $post['active']);
	$this->db->insert('concerts', $data); 


  }


  function update_event ( $post ) {

	$data = array('name' => $post['name'],
	            'city' => $post['city'],
	            'text' => $post['text'],
	            'date_start' => $post['date_start'],
	            'date_end' => $post['date_end'],
	            'link' => $post['link'],
	            'active' => $post['active']);
	$this->db->where('id', $post['id']);
	$this->db->update('concerts', $data); 


  }

  function add_news ( $post ) {

	$data = array('title' => $post['title'],
	            'text' => $post['text'],
	            'date' => $post['date'],
	            'slug' => $post['slug'],
	            'active' => $post['active']);
	$this->db->insert('news', $data); 


  }


  function update_news ( $post ) {

	$data = array('title' => $post['title'],
	            'text' => $post['text'],
	            'date' => $post['date'],
	            'slug' => $post['slug'],
	            'active' => $post['active']);
	$this->db->where('id', $post['id']);
	$this->db->update('news', $data); 


  }


  function add_disco ( $post ) {

	$data = array('title' => $post['title'],
	            'text' => $post['text'],
	            'img' => $post['img'],
	            'slug' => $post['slug'],
	            'active' => $post['active']);
	$this->db->insert('discografia', $data); 


  }


  function update_disco ( $post ) {

	$data = array('title' => $post['title'],
	            'text' => $post['text'],
	            'img' => $post['img'],
	            'slug' => $post['slug'],
	            'active' => $post['active']);
	$this->db->where('id', $post['id']);
	$this->db->update('discografia', $data); 


  }



  function add_gallery ( $post ) {

	$data = array('title' => $post['title'],
	            'active' => $post['active'],
	            'important' => $post['important'],
	            'home_slider' => $post['home_slider'],
	            'slug' => $post['slug']);
	$this->db->insert('gallerys', $data); 


  }


  function update_gallery ( $post ) {

	$data = array('title' => $post['title'],
	            'active' => $post['active'],
	            'important' => $post['important'],
	            'home_slider' => $post['home_slider'],
	            'slug' => $post['slug']);
	$this->db->where('id', $post['id']);
	$this->db->update('gallerys', $data); 


  }

  function add_gallery_img ( $post ) {

	$data = array('gallerys_id' => $post['gallerys_id'],
	            'url' => $post['url']);
	$this->db->insert('photos', $data); 


  }

  function add_local ( $post ) {

	$data = array('name' => $post['name'],
	            'city' => $post['city'],
	            'dir' => $post['dir'],
	            'tel' => $post['tel'],
	            'web' => $post['web'],
	            'twitter' => $post['twitter'],
	            'face' => $post['face'],
	            'other' => $post['other']);
	$this->db->insert('local', $data); 


  }


  function update_local ( $post ) {

	$data = array('name' => $post['name'],
	            'city' => $post['city'],
	            'dir' => $post['dir'],
	            'tel' => $post['tel'],
	            'web' => $post['web'],
	            'twitter' => $post['twitter'],
	            'face' => $post['face'],
	            'other' => $post['other']);
	$this->db->where('id', $post['id']);
	$this->db->update('local', $data); 


  }

  function add_reg ( $post ) {

	$data = array('desc' => $post['desc'],
	            'init_date' => $post['init_date'],
	            'end_date' => $post['end_date'],
	            'price' => (int)$post['price'],
	            'quality' => (int)$post['quality'],
	            'local_id' => (int)$post['id']);
	$this->db->insert('reg', $data);


  }


}

?>