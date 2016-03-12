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
		$this->load->library('pagination');
	}

	function index()
	{


		$this->load->library('pagination');
		$total_row 		= $this->m_people->countAll();

		$config 				= array();
		$config['display_pages']= FALSE;
		$config["base_url"] 	= base_url()."people/page/";
		$config["total_rows"] 	= $total_row;
		$config["per_page"]		= 12;
		$config["first_link"]	= FALSE;
		$config["last_link"]	= FALSE;
		$config["next_link"]	= "Loading more data...";
		$config["next_tag_open"]= '<div class="sparator">';
		$config["next_tag_close"]= '</div>';

		$this->pagination->initialize($config);

		if($this->uri->segment(2)) {
			$page = ($this->uri->segment(2));
		} else {
			$page = 0;
		}

		$data	= [
			'title'			=> 'Volunteer',
			'role'			=> 'normal',
			'getAll'		=> $this->m_people->getAll($page, $config["per_page"]),
		];

		$this->load->view('header', $data);
		$this->load->view('volunteer/index');
		$this->load->view('footer');
	}

	function page($number = FALSE) {
		$this->load->library('pagination');
		$total_row 		= $this->m_people->countAll();

		if($number == FALSE) {
			redirect('people');
		}

		$config 				= array();
		$config['display_pages']= FALSE;
		$config["base_url"] 	= base_url()."people/page/";
		$config["total_rows"] 	= $total_row;
		$config["per_page"]		= 12;
		$config["first_link"]	= FALSE;
		$config["last_link"]	= FALSE;
		$config["next_link"]	= "Loading more data...";
		$config["next_tag_open"]= '<div class="sparator">';
		$config["next_tag_close"]= '</div>';
		$this->pagination->initialize($config);

		if($this->uri->segment(3)) {
			$page = ($this->uri->segment(3));
		} else {
			$page = 0;
		}

		$data	= [
			'title'			=> 'Volunteer',
			'role'			=> 'normal',
			'getAll'		=> $this->m_people->getAll($page, $config["per_page"]),
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