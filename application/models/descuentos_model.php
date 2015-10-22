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
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);



		$query = $this->db->get();

//$vista = "SELECT d.id_descuento, p.nombre, d.concepto_detalle,d.precio_unitario, d.cantidad_hs, d.sub_total_descuento, d.fecha_detalle, e.descripcion FROM descuentos AS d, profesores AS p, estado AS e WHERE p.id_profesor = d.id_profesor AND e.id_estado = d.id_estado";

		// $query2 = $this->db->query($vista);

		return $query->result();
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


}
