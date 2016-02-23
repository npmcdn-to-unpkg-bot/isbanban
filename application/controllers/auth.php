<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends CI_Controller {

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

		if($this->session->userdata('logged_in')) {
			redirect('admin/volunteer');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
		];

		$this->load->view('login');
	}


	function cek()
	{
		$today = date ('dmy');

		if(strtolower($this->input->post('username')) == 'admin' && strtolower($this->input->post('password')) == 'official'.$today) {

			$this->session->set_userdata('logged_in', true);
			redirect('admin/volunteer');

		} else {

			$this->session->set_flashdata('EL', true);
			redirect('/auth');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */