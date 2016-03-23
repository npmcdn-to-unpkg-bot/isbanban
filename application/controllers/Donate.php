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
		date_default_timezone_set('Asia/Jakarta');
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


		$config		= array(
			array(
				'field'	=> 'donatur_name',
				'label'	=> 'Full Name',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donatur_number',
				'label'	=> 'Phone Number',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donatur_email',
				'label'	=> 'Email',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donation_cash',
				'label'	=> 'Donation',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donation_method',
				'label'	=> 'Transfer Method',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);


// Create Unique Confirm Code
		$seed = str_split('abcdefghjkmnpqrstuvwxyz'.'ABCDEFGHJKMNPQRSTUVWXYZ');
	    shuffle($seed);
	    $rand = '';
	    foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
// Confirm Code Random + Time
	    $confirm_code	= $rand.date('hi');

		if($this->input->post()) {
			if($this->form_validation->run()) {
				$datadb	= array(
					'nama'				=> $this->input->post('donatur_name'),
					'donasi_banyak'		=> $this->input->post('donation_cash'),
					'donasi_transfer'	=> $this->input->post('donation_method'),
					'pesan'				=> $this->input->post('donatur_message'),
					'telefon'			=> $this->input->post('donatur_number'),
					'email'				=> $this->input->post('donatur_email'),
					'status'			=> '0',
					'created_at'		=> date('Y-m-d'),
					'id_jenis'			=> '3',
					'confirm_code'		=> $confirm_code,
					'parameter_code'	=> strtolower(md5($this->input->post('donatur_name').$confirm_code)),
				);

// Insert to DB
				$this->m_donation->insert($datadb);

// Alert for Donatur
				$data['confirm_code']	= $confirm_code;
				$this->session->set_flashdata('success', true);
			} else {
				echo validation_errors();
			}
		}

		$this->load->view('header', $data);
		$this->load->view('donation/index');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */