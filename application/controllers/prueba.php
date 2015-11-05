<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class prueba extends CI_Controller {
   

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->model('prueba_model','prueba');
                
	}

	public function _example_output($output = null)
	{
	$this->load->view('v_cabecera');
	$this->load->view('v_medio');
    $this->load->view('v_derecha',$output);
    $this->load->view('v_final.php'); 

	}
 
	/*public function index()
	{
		 $this->alumnos2();

	}*/

	public function index()
	{
		/**$this->load->helper('url');
		$this->load->view('v_cabecera');
		$this->load->view('autocomplete');
		$this->load->view('v_prueba3');
  		$this->load->view('v_final.php'); **/
  			//$this->load->view('validate');
  			$this->load->view('validate2');
  		 
	}

		public function autocompletemenu()
	{
		$this->load->helper('url');
	
 			$this->load->view('v_cabecera');
  		  $this->load->view('autocomplete');
  		   $this->load->view('v_final');
  		//$this->load->view('funciona.php');

	}


	function autocomplete()
	{
	    $this->load->model('prueba_model','prueba');
	    $query= $this->get_data->get_autocomplete();

	    foreach($query->result() as $row):
	        echo "<li id='$row->id'>".$row->ciudad."</li>";
	    endforeach;    
	} 

	public function ajax_list()
	{
		$list = $this->prueba->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $prueba) {
			$no++;
			$row = array();
			$row[] = $prueba->nombre;
			$row[] = $prueba->saldo_cuenta;
		

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_prueba('."'".$prueba->id_prueba."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_prueba('."'".$prueba->id_prueba."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}





	public function ajax_edit($id)
	{
		$data = $this->prueba->get_by_id($id);
		echo json_encode($data);
	}

	 public function GetCountryName(){
        $keyword=$this->input->post('keyword');
        $data=$this->prueba->GetRow($keyword);        
        echo json_encode($data);
    }

    

	public function ajax_add()
	{
		$data = array(

				'id_alumno' => $this->input->post('saldo_cuenta1'),
				'saldo_cuenta' => $this->input->post('saldo_cuenta1'),
			);
		$insert = $this->prueba->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				
				'id_alumno' => $this->input->post('id_alumno1'),
				'saldo_cuenta' => $this->input->post('saldo_cuenta1'),
			);
		$this->prueba->update(array('id_prueba' => $this->input->post('id_prueba')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->prueba->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	

	 function getCliente()
    {
        if($buscar = $this->input->get('term'))
        {
            $consulta = "SELECT cl.id_alumno, cl.apellido, cl.nro_documento, 
                cl.nombre  FROM  alumnos  as cl
                where nombre like '%$buscar%'";
            $this->db->query($consulta);
            $this->db->like('cl.nombre', $buscar); 
            $query = $this->db->query( $consulta );
            if($query->num_rows() > 0)
            {
                foreach ($query->result_array() as $row)
		{
                    $result[]= $row;
                }
            }
            echo json_encode($result);
        }
    }


  	 public function get_office(){
		      $data=$this->prueba->get();        
       			 echo json_encode($data);

	}
        
 
   
}



           
