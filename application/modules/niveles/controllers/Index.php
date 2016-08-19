<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller 
{
    
public function __construct()
 {
 
 parent::__construct();
 //$this->load->model('index_model');
 }
    public function crearNivel()
    {
        $data = array (
            'titulo'            =>  'crear Niveles',
            'tituloMantenedor'  =>  'Niveles',
            'tituloFormulario'  =>  'Crear Niveles del Jardín'
        );

        $this -> template ('crearNivelesJardin_view',$data);
    }
    
    public function crearNivelAnual()
    {
        $data = array (
            'titulo'            =>  'crear Niveles Anual',
            'tituloMantenedor'  =>  'Niveles',
            'tituloFormulario'  =>  'Crear Niveles Anual del Jardín'
        );

        $this -> template ('crearNivelesAnuales_view',$data);
    }
    
    public function verNivelAnual()
    {
        $data = array (
            'titulo'            =>  'ver Nivel Anual',
            'tituloMantenedor'  =>  'Niveles',
            'tituloFormulario'  =>  'Ver Nivel Anual del Jardín'
        );
        
        $this -> template ('verNivelAnualJardin_view',$data);
    }
    
    public function armarNivelAnual()
    {
        $data = array (
            'titulo'            =>  'armar Nivel Anual',
            'tituloMantenedor'  =>  'Niveles',
            'tituloFormulario'  =>  'Armar Nivel Anual del Jardín'
        );
        
        $this -> template ('armarNivelAnualJardin_view',$data);
    }
}
