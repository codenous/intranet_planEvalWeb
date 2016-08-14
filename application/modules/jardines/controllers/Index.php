<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller 
{
    
public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 }
 
    //REGISTRO DE LOS JARDINES INFANTILES
    public function registroJardin()
    {
        $data = array (
            'titulo'            =>  'registro Jardín',
            'tituloMantenedor'  =>  'Jardines',
            'tituloFormulario'  =>  'Registro de Jardín'
        );

        $this ->templateAdmin ('registroJardin_view', $data);
    }
    
    public function modificarJardin()
    {
        $data = array (
            'titulo'            =>  'modificar Jardín',
            'tituloMantenedor'  =>  'Jardines',
            'tituloFormulario'  =>  'Modificar de Jardín'
        );

        $this ->templateAdmin ('modificarJardin_view', $data);
    }
    
    public function listadoJardines()
    {
        $data = array (
            'titulo'            =>  'listado Jardines',
            'tituloMantenedor'  =>  'Jardines',
            'tituloFormulario'  =>  'Listado de Jardines'
        );
        
        $this ->templateAdmin ('listadoJardin_view', $data);
    }
    
    public function verJardin()
    {
        $data = array (
            'titulo'            =>  'ver Jardines',
            'tituloMantenedor'  =>  'Jardines',
            'tituloFormulario'  =>  'ver Jardines'
        );
        
        $this ->templateAdmin ('verJardin_view', $data);
    }
    
    //REGISTRO DE LOS PAGOS DE LOS JARDINES
    public function registroPago()
    {
        $data = array (
            'titulo'            =>  'registro Pago',
            'tituloMantenedor'  =>  'Pagos Jardines',
            'tituloFormulario'  =>  'Registro de Pago'
        );
        
        $this ->templateAdmin ('registroPagos_view', $data);
    }
    
    public function listadoPago()
    {
        $data = array (
            'titulo'            =>  'listado Pago',
            'tituloMantenedor'  =>  'Pagos Jardines',
            'tituloFormulario'  =>  'Listado de Pagos'
        );
        
        $this ->templateAdmin ('listadoPagos_view', $data);
    }
}
