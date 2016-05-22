<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('m_home');
	}

	function index()
	{
		$data	= [
			'title'			=> 'Home',
			'current'		=> 'home',
			'role'			=> 'normal',
			'meta_image'	=> '',
			'meta_url'		=> base_url(),
			'getBlogPost'	=> $this->m_home->getBlogPost('8', 'blog'),
			'countVillage'	=> $this->m_home->countData('desa'),
			'countRelawan'	=> $this->m_home->countData('relawan'),
			'countCashDonation' => $this->m_home->countCashData(),
			'countBookDonation' => $this->m_home->countBookData(),
			'getFeedback'	=> $this->m_home->getFeedback(),
			'getStrategicPartners'	=> $this->m_home->getStrategicPartners(),
			'getMediaPartners'	=> $this->m_home->getMediaPartners(),
		];

		$this->load->view('header', $data);
		$this->load->view('home/index');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */