<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ciudades_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function provincias()
	{
		$this->db->order_by('provincia','asc');
		$provincia = $this->db->get('provincia');
		if($provincia->num_rows()>0)
		{
			return $provincia->result();
		}
	}
	
	
}