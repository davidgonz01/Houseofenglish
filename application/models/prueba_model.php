<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prueba_model extends CI_Model {

	var $table = 'prueba';

	//var $vista = "SELECT d.id_prueba, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM prueba AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado";

	var $table1 =  'SELECT * FROM prueba';
	
	var $column = array('id_prueba','nombre','saldo_cuenta');
	//var $column = array('nombre','concepto_detalle ','precio_unitario','cantidad_hs','sub_total_descuento','fecha_detalle','descripcion');
	



	var $order = array('id_prueba' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}



	function get_datatables()
	{
		


		$query =  $this->db->query('SELECT p.id_prueba, a.nombre, p.saldo_cuenta FROM alumnos as a, prueba as p WHERE a.id_alumno = p.id_alumno');

		return $query->result();
	}


	public function get_by_id($id)
	{
		// $query = $this->db->where( 'id_prueba', $id )->limit( 1 )->get($this->table);

		 $consulta = 'SELECT p.id_prueba, a.id_alumno, a.nombre, p.saldo_cuenta FROM alumnos as a, prueba as p WHERE a.id_alumno = p.id_alumno AND  p.id_prueba='.$id.' LIMIT 1';
        
         $query = $this->db->query($consulta);

        if( $query->num_rows() > 0 ) {
            return $query->row();
        } else {
            return array();
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
		$this->db->where('id_prueba', $id);
		$this->db->delete($this->table);
	}

	  public function GetRow($keyword) {        
        $this->db->order_by('id_alumno', 'DESC');
        $this->db->like("nombre", $keyword);
        return $this->db->get('alumnos')->result_array();
    }


    function getautocomplete()
{
		$this->db->select('field');
		$this->db->where('fiedl3',1);
		$this->db->like('field',$this->input->post('queryString'));
		return $this->db->get('table', 10);   
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


   
	

}
