<?php
Class Maintenance extends CI_Model
{

  function show_maintenance ( $ip ){

    $query = $this->db->query("SELECT maintenance, excludeips FROM settings WHERE id = 0");

    if($query -> num_rows() > 0) {

      $row = $query->row(); 

      if ($row->maintenance == 1 && !$this->excluded($ip, $row->excludeips)) {
      	return true;
      } else {
      	return false;
      }

    } else {
      return false;
    }

  }

  function excluded ( $ip, $excludeips ) {

  	$founded = false;

  	$ips = explode("-", $excludeips);

  	foreach ($ips as $val) {

  		if ($val == $ip) {
  			$founded = true;
  			break;
  		}

  	}

  	return $founded;

  }

  function is_mintenance () {

  	$query = $this->db->query("SELECT maintenance FROM settings WHERE id = 0");

    if($query -> num_rows() > 0) {

      $row = $query->row(); 

      if ($row->maintenance == 1) {
      	return true;
      } else {
      	return false;
      }

    }

  }


  function update_maintenance ( $val ) {
    // $val: 0 o 1

    if ($val === 0 || $val === 1) {
      $data = array('maintenance' => $val);
      $this->db->where('id', 0);
    $this->db->update('settings', $data); 
    }

  }


}

?>