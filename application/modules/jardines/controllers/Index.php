<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller 
{
    
public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 }
    public function registroJardin()
    {
            $data = array (
                'titulo'            =>  'registro Jardín',
                'tituloMantenedor'  =>  'Jardines',
                'tituloFormulario'  =>  'Registro de Jardín'
            );

    $this ->templateAdmin ('registroJardin_view', $data);
    }
}
