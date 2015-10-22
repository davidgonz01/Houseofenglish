<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class person extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model('person_model','person');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('v_cabecera');
		$this->load->view('v_medio');
 
  		  $this->load->view('v_final');
  		//$this->load->view('funciona.php');

	}



	public function autocomplete()
	{
		$this->load->helper('url');
	
 			$this->load->view('v_cabecera');
  		  $this->load->view('autocomplete');
  		   $this->load->view('v_final');
  		//$this->load->view('funciona.php');

	}

	public function validaciones()
	{
		$this->load->helper('url');
		
 
  		  $this->load->view('validate2');
  		//$this->load->view('funciona.php');

	}

	public function prueba_funcional()
	{
		$this->load->helper('url');
		$this->load->view('v_cabecera');
		$this->load->view('v_medio');
 
  		  $this->load->view('v_final');
  		//$this->load->view('funciona.php');

	}

	public function tablas()
	{
		$this->load->helper('url');
		$this->load->view('v_cabecera');
		$this->load->view('v_medio');
 
  		  $this->load->view('v_final');
  		//$this->load->view('funciona.php');

	}

	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->firstName;
			$row[] = $person->lastName;
			$row[] = $person->gender;
			$row[] = $person->address;
			$row[] = $person->dob;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'firstName' => $this->input->post('firstName1'),
				'lastName' => $this->input->post('lastName1'),
				'gender' => $this->input->post('gender1'),
				'address' => $this->input->post('address1'),
				'dob' => $this->input->post('dob1'),
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'firstName' => $this->input->post('firstName1'),
				'lastName' => $this->input->post('lastName1'),
				'gender' => $this->input->post('gender1'),
				'address' => $this->input->post('address1'),
				'dob' => $this->input->post('dob1'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
