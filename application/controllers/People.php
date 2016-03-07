<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class People extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_people');
	}

	function index()
	{
		$data	= [
			'title'			=> 'Volunteer',
			'role'			=> 'normal',
			'getAll'		=> $this->m_people->getAll(),
		];

		$this->load->view('header', $data);
		$this->load->view('volunteer/index');
		$this->load->view('footer');
	}

	function detail($slug)
	{
		$data = [
			'getThis' => $this->m_people->getThis($slug),	
		];

		$this->load->view('volunteer/modal', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */