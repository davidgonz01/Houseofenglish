<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class descuentos extends CI_Controller {
   

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->model('descuentos_model','descuentos');
       
        
                
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

	public function descuentos()
	{
		try{
                $crud = new grocery_CRUD();
		 
//$crud->set_theme('datatables');
  //id_descuento concepto_detalle 	precio_unitario 	cantidad_hs 	sub_total_descuento 	fecha_detalle id_estado


            $crud->set_table('descuentos');
            $crud->columns('id_profesor','concepto_detalle','precio_unitario', 'cantidad_hs','sub_total_descuento','fecha_detalle','id_estado');
		
           
            $crud->display_as('id_profesor','profesor');
             $crud->display_as('id_estado','Estado');
              $crud->set_subject('descuentos');
            $crud->required_fields('telefono');
            $crud->set_relation('id_profesor','profesores','{nombre}');
            $crud->set_relation('id_estado','Estado','{descripcion}');
        
          
            $output = $crud->render();

			$this->_example_output($output);
	

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

    
 
	public function alumnos2()
	{
		try{
                $crud = new grocery_CRUD();
		 
//$crud->set_theme('datatables');
            $crud->set_table('alumnos');
            $crud->columns('nombre','apellido','nro_documento', 'telefono','localidad','fecha_nacimiento','id_tipo_documento','id_pais','id_tipo_alumno');
			$crud->unset_columns('telefono','fecha_nacimiento' );
            $crud->set_rules('nro_documento','Nro Documento','numeric');
           
            $crud->display_as('id_tipo_documento','Tipo Documento');
             $crud->display_as('id_pais','Pais');
             $crud->display_as('id_tipo_alumno','Tipo de Alumnos')
                ->display_as('nombre','Nombres')
				->display_as('apellido','Apellidos');
            $crud->set_subject('alumnos');
            $crud->required_fields('telefono');
            $crud->set_relation('id_tipo_documento','tipo_documentos','{descripcion_tipo_documentos}');
            $crud->set_relation('id_pais','paises','{descripcion_pais}');
        
            $crud->set_relation('id_tipo_alumno','tipo_alumnos','{descripcion}');
          
            $output = $crud->render();

			$this->_example_output($output);
	

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}



	public function index()
	{
		$this->load->helper('url');
		$this->load->view('v_cabecera');
		$this->load->view('v_descuentos');

  		  $this->load->view('v_final.php'); 
  		 // $this->descuentos();
	}

	public function ajax_list()
	{
		$list = $this->descuentos->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $descuentos) {
			$no++;
			$row = array();
	//id_descuento 	 	concepto_detalle 	precio_unitario 	cantidad_hs 	sub_total_descuento 	fecha_detalle //id_estado
			$row[] = $descuentos->id_profesor;
			$row[] = $descuentos->concepto_detalle;
			$row[] = $descuentos->precio_unitario;
			$row[] = $descuentos->cantidad_hs;
			$row[] = $descuentos->sub_total_descuento;
			$row[] = $descuentos->fecha_detalle;
			$row[] = $descuentos->id_estado;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_descuentos('."'".$descuentos->id_descuento."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_descuentos('."'".$descuentos->id_descuento."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->descuentos->count_all(),
						"recordsFiltered" => $this->descuentos->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->descuentos->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(

				'id_profesor' => $this->input->post('id_profesor1'),
				'concepto_detalle' => $this->input->post('concepto_detalle1'),
				'precio_unitario' => $this->input->post('precio_unitario1'),
				'cantidad_hs' => $this->input->post('cantidad_hs1'),
				'sub_total_descuento' => $this->input->post('sub_total_descuento1'),
				'fecha_detalle' => $this->input->post('fecha_detalle1'),
				'id_estado' => $this->input->post('id_estado1'),
			);
		$insert = $this->descuentos->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				
				'id_profesor' => $this->input->post('id_profesor1'),
				'concepto_detalle' => $this->input->post('concepto_detalle1'),
				'precio_unitario' => $this->input->post('precio_unitario1'),
				'cantidad_hs' => $this->input->post('cantidad_hs1'),
				'sub_total_descuento' => $this->input->post('sub_total_descuento1'),
				'fecha_detalle' => $this->input->post('fecha_detalle1'),
				'id_estado' => $this->input->post('id_estado1'),
			);
		$this->descuentos->update(array('id_descuento' => $this->input->post('id_descuento')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->descuentos->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

        
 
   
}



           
