<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Control_model','control');
	}

	public function index() {
		$this->load->view('welcome_message');
	}

	public function template() {
		$data['title'] = 'Codeigniter CRUD';
		$data['fruits'] = $this->control->get_table_result();

		$this->load->view('template', $data);
	}

	public function insert_to_table() {
		// make array first, first coloumn from database, 2nd is input
		$data = array(
			'name'  => $this->input->post('name'),
			'color' => $this->input->post('color'),
		);

		// call control and insert to db
		$this->control->insert_to_table($data);

		// redirect to tempalte 
		redirect('control/template'); 
	}

	public function delete_from_table($id) {
		$this->control->delete_from_table($id);

		// redirect to tempalte 
		redirect('control/template'); 
	}
}
