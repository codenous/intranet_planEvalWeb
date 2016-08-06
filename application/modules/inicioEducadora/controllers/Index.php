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
                    'titulo'            =>  'inicio Educadora',
                    'tituloMantenedor'  =>  'información Relevante Educadora',
                );
        
        $this ->templateEduca ('inicio_view',$data);
	}
}
