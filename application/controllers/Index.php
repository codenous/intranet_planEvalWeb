<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{
    
public function __construct()
{
 
    parent::__construct();

}
	public function Index()
	{
            $data = array (
                'titulo'            =>  'title',
                'tituloMantenedor'  =>  'nombre_mantenedor',
            );
        
        $this ->load -> view('Login/login_view');
	}
}
