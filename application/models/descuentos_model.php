<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class descuentos_model extends CI_Model {

	var $table = 'descuentos';

	

	//var $vista = "SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado";

	var $table1 =  'SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado';

		//id_descuento 	 	concepto_detalle 	precio_unitario 	cantidad_hs 	sub_total_descuento 	fecha_detalle //id_estado
	
	var $column = array('id_profesor','concepto_detalle ','precio_unitario','cantidad_hs','sub_total_descuento','fecha_detalle','id_estado');
	//var $column = array('nombre','concepto_detalle ','precio_unitario','cantidad_hs','sub_total_descuento','fecha_detalle','descripcion');
	



	var $order = array('id_descuento' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		//$vista = "SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado";

		 //$this->db->query($this->table1);
		
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column as $item) 
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$query->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		
		if(isset($_GET['idtest'])){
            $office = $_GET['idtest'];
        }else{
            $office= 70;
        }

		

			
			
		


		$id2 = $office; 
           try{


		
		$id_descuento = $id2;

		//$query =  $this->db->query('SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado');
		$query =  $this->db->query("SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado and d.id_profesor = '$id_descuento' ");
		
		return $query->result();


		 }catch ( Exception $e )
            {
            $this->load->view('welcome_message');
              // show_error($e);
            }
	}



	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_descuento',$id);
		$query = $this->db->get();
		

		return $query->row();
	}




	

	public function get_datatables2($data2)
	{
		
	
           try{


		
		

		//$query =  $this->db->query('SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado');
		$query =  $this->db->query("SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado and d.id_profesor = '$data2' ");
		
		return $query->result();


		 }catch ( Exception $e )
            {
            $this->load->view('welcome_message');
              // show_error($e);
            }
	}




	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_descuento', $id);
		$this->db->delete($this->table);
	}

	 public function get() {

  	  $office = $this->input->post('search');
	  $this->db->select('Name, id_city');
	  $this->db->from('city');
	  $this->db->like('Name', $office);
	  $query = $this->db->get();

	  $office_array = array();
	  foreach ($query->result() as $row) {
	   $office_array[] = $row->Name;
	  }
	  $data = $query->result_array();

	  return $data;
	  
    
  }

   public function get_profesor() {

  	  $office = $this->input->post('search');
	  $this->db->select('nombre, id_profesor');
	  $this->db->from('profesores');
	  $this->db->like('nombre', $office);
	  $query = $this->db->get();

	  $office_array = array();
	  foreach ($query->result() as $row) {
	   $office_array[] = $row->nombre;
	  }
	  $data = $query->result_array();

	  return $data;
	  
    
  }


}
