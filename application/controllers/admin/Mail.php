<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

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
		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'mail',
		];

// Send Mail
		$this->load->library('email');
		$configMail = Array(
			'protocol'  => 'smtp',
			'smtp_host' => 'mail.smtp2go.com',
			'smtp_port' => 2525,
			'smtp_user' => 'muhammad-ihsan@outlook.com',
			'smtp_pass' => '1JujCMNAHuz1',
			'crlf'      => "\r\n",
			'newline'   => "\r\n",
			'mailtype'  => 'html',
			'priority'  => 1
		);
		$this->email->initialize($configMail);

// Form Validation
	$config		= array(
			array(
				'field'	=> 'subject',
				'label'	=> 'Mail Subject',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'konten',
				'label'	=> 'Mail Content',
				'rules'	=> 'required'
			)
		);
		$this->form_validation->set_rules($config);

// Query Verification
		$sql	= "SELECT * FROM blast";
		$cuy	= $this->db->query($sql)->result();

// Tempalte Post Variable
		$data['konten']		= $this->input->post('konten'); 

		if($this->input->post()) {
			if($this->form_validation->run()) {

				foreach($cuy as $item) {
					$this->email->from('noreply@isbanban.org', 'Istana Belajar Anak Banten');
					$this->email->subject($this->input->post('subject'));

					$this->email->to($item->email); 
		    		$message=$this->load->view('mail_mail',$data,TRUE);
					$this->email->message($message);
					$this->email->send();
				}

				$this->session->set_flashdata('success', true);
				redirect('admin/mail');
			}
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/mail/index');
		$this->load->view('admin/footer');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */