<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller 
{
    public function template ($view, $data = array())
    {
        $this -> load -> view ('template/header',$data);
        $this -> load -> view ('template/topbar');
        $this -> load -> view ('template/sidebar');
        $this -> load -> view ($view, $data);
        $this -> load -> view ('template/footer');
    }
    public function templateAdmin ($view, $data = array())
    {
        $this -> load -> view ('templateAdmin/header',$data);
        $this -> load -> view ('templateAdmin/topbar');
        $this -> load -> view ('templateAdmin/sidebar');
        $this -> load -> view ($view, $data);
        $this -> load -> view ('templateAdmin/footer');
    }
    public function templateEduca ($view, $data = array())
    {
        $this -> load -> view ('templateEduca/header',$data);
        $this -> load -> view ('templateEduca/topbar');
        $this -> load -> view ('templateEduca/sidebar');
        $this -> load -> view ($view, $data);
        $this -> load -> view ('templateEduca/footer');
    }
}

