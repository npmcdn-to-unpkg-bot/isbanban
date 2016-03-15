<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donate extends CI_Controller {

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
		$this->load->model('m_donation');
	}

	function index()
	{
		$data	= [
			'title'			=> 'Donation',
			'role'			=> 'normal',
			'totalBook'		=> $this->m_donation->countDonate('1'),
			'totalMoney'	=> $this->m_donation->countDonate('3'),
			'getBankAccount'=> $this->m_donation->getBankAccount(),
		];

		$this->load->view('header', $data);
		$this->load->view('donation/index');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */