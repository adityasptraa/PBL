<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_homepage extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'head'=> 'V_homepage/head',
            'header'=> 'V_homepage/header',
            'footer'=> 'V_homepage/footer',
            'main'=> 'V_homepage/main',
            'script'=> 'V_homepage/script',
            'topbar'=> 'V_homepage/topbar',
        ];
        $this->load->view('homepage', $data);
    }
    public function home(){
        $this->load->view('homepage');
    }
}

/* End of file C_homepage.php */

?>