<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ciudades extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ciudades_model');
	}
	
	public function index()
	{
		$data['provincias'] = $this->ciudades_model->provincias();


			$this->load->helper('url');
		$this->load->view('v_cabecera');
		$this->load->view('Profesores/v_descuentos_por_profesor',$data);
 
  		  $this->load->view('v_final');
		
	}
	
	
}