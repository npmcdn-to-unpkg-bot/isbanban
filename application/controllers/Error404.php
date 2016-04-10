<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
		$this->load->view('errors/404');
    } 
} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */