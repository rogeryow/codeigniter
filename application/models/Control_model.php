<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_model extends CI_Model {
	var $table = "apple";

	public function get_table_result(){
		$query = $this->db->from($this->table)->get();
		return $query->result();
	}

	public function insert_to_table($data) {
		$this->db->insert($this->table, $data);
	}

	public function delete_from_table($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

}
?>