<?php
Class Front extends CI_Model
{


	function get_gallery_list () {

		return $this->db->query('SELECT g.id, g.title, p.url FROM gallerys AS g INNER JOIN `photos` AS p ON g.id = p.gallerys_id GROUP BY g.id');

	}


}