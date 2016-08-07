<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Village extends CI_Controller {

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
		$this->load->model('m_village');
	}

	function index()
	{
		$data	= [
			'title'			=> 'Village',
			'current'		=> 'village',
			'role'			=> 'normal',
			'page'			=> 'pages/village/index',
			'meta_image'	=> '',
			'meta_url'		=> base_url().'village',
			'getAll'		=> $this->m_village->getAll(),
		];

		$this->load->view('layout/default', $data);
	}

	function detail($slug)
	{
		$data	= [
			'title'			=> 'Village',
			'current'		=> 'village',
			'role'			=> 'normal',
			'page'			=> 'pages/village/detail',
			'getThis'		=> $this->m_village->getThis($slug)
		];

		if($this->m_village->checkThis($slug) == 0) {
			redirect('404');
		}

		$feed = $this->m_village->getThis($slug);

		foreach($feed as $row) {
			$data['title']			= ucfirst($row->nama);
			$data['meta_image']		= base_url().$row->picture_path;
			$data['meta_url']		= base_url().'village/detail/'.$row->slug;
		}

		$this->load->view('layout/default', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */