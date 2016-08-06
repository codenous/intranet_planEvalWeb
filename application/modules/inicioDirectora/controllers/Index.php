<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller 
{
    
public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 }
	public function inicio()
	{
		$data = array (
                    'titulo'            =>  'inicio Directora',
                    'tituloMantenedor'  =>  'Información Relevante Directora',
                );
        
        $this -> template ('inicio_view',$data);
	}
}
