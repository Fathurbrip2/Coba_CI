<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_model extends CI_Model {

	var $table = "produk";

	function add($data){
		$this->db->insert($this->table,$data);
	}
}
