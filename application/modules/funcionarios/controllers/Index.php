<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function registroFuncionarios()
    {
        $data = array (
            'titulo'            =>  'Registro Funcionarios',
            'tituloMantenedor'  =>  'Funcionarios',
            'tituloFormulario'  =>  'Registro de Funcionarios'
        );
        
        $this -> template ('RegistroFuncionario_view',$data);
    }
    
    public function listadoFuncionarios()
    {
        $data = array (
            'titulo'            =>  'Lista Funcionarios',
            'tituloMantenedor'  =>  'Funcionarios',
            'tituloFormulario'  =>  'Listado de Funcionarios'
        );
        
        $this -> template ('FuncionariosLista_view',$data);
    }
    
}
