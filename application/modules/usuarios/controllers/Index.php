<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller 
{
    
public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 }
	public function nombre_funcion()
	{
		$data = array (
                    'titulo'            =>  'title',
                    'tituloMantenedor'  =>  'nombre_mantenedor',
                );
        
        $this ->template ('nombre_vista',$data);
	}
}
