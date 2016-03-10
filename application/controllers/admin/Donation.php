<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller {

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
		$this->load->model('admin/m_donation');
		if($this->session->userdata('logged_in')) {
			redirect('admin/dashboard/');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'getAll'		=> $this->m_donation->getAll()
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/donation/index');
		$this->load->view('admin/footer');
	}

	function view($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'getThis'		=> $this->m_donation->getThis($parameter_code)
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/donation/view');
		$this->load->view('admin/footer');
	}

	function edit($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'getThis'		=> $this->m_donation->getThis($parameter_code),
			'getCategory'	=> $this->m_donation->getDonationCategory(),
			'getBank'		=> $this->m_donation->getBankAccount()
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/donation/edit');
		$this->load->view('admin/footer');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */