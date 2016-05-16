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
			'current'		=> 'donate',
			'role'			=> 'normal',
			'meta_image'	=> '',
			'meta_url'		=> 'donate',
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
					'is_anonim'			=> $this->input->post('is_anonim'),
					'confirm_code'		=> $confirm_code,
					'parameter_code'	=> strtolower(md5($this->input->post('donatur_name').$confirm_code)),
				);

// Insert to DB
				$this->m_donation->insert($datadb);

// Setting for mail information
				$data['confirm_code']		 	 = $confirm_code;
				$data['donatur_nama']		 	 = $this->input->post('donatur_name');
				$data['donasi_cash']		 	 = $this->input->post('donation_cash');
				$data['donatur_number']			 = $this->input->post('donatur_number');
				$data['donatur_email']			 = $this->input->post('donatur_email');
				$data['donatur_message']		 = $this->input->post('donatur_message');

// Config Mail
				$this->load->library('email');
				$configMail = Array(
					'protocol'  => 'smtp',
					'smtp_host' => 'mail.smtp2go.com',
					'smtp_port' => 587,
					'smtp_user' => 'ihsan@isbanban.org',
					'smtp_pass' => 'TWGAqI4wPReo',
					'crlf'      => "\r\n",
					'newline'   => "\r\n",
					'mailtype'  => 'html',
				);

				// $configMail = Array(
				//   'protocol' 	=> 'smtp',
				//   'smtp_host' 	=> 'mailtrap.io',
				//   'smtp_port' 	=> 2525,
				//   'smtp_user' 	=> '573617400c51f2f73',
				//   'smtp_pass' 	=> '4ee968dc28496c',
				//   'crlf' 		=> "\r\n",
				//   'newline' 	=> "\r\n",
				//   'mailtype'	=> 'html'
				// );
				$this->email->initialize($configMail);

				// Attach PDF
				$data['path_pdf'] 	= base_url().'uploads/pdf/donation-request-'.$data['confirm_code'].".pdf";

// Send email
				$this->do_pdf($data);

				$this->email->from('admin@isbanban.org', 'Istana Belajar Anak Banten');
				$this->email->to($this->input->post('donatur_email')); 
				$this->email->subject('Pemberitahuan Donasi');
        		$message 	=$this->load->view('mail',$data,TRUE);
				$this->email->message($message);
				$this->email->attach($data['path_pdf']);
				$this->email->send();


// Alert for Donatur
				$this->session->set_flashdata('success', true);
			}
		}

		$this->load->view('header', $data);
		$this->load->view('donation/index');
		$this->load->view('footer');
	}


	function do_pdf($data) {
		//load the view and saved it into $html variable
		$html=$this->load->view('pdf_template', $data, true);

		// $pdfFilePath = "donation-request-"+$data['confirm_code']+".pdf";
		$path 		= 'uploads/pdf/';
		if(!is_dir($path))
	    {
	      mkdir($path,0755,TRUE);
	    } 
		$pdfFilePath = $path."donation-request-".$data['confirm_code'].".pdf";

        //load mPDF library
		$this->load->library('m_pdf');

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		// $this->m_pdf->pdf->Output($pdfFilePath, "D");
		$this->m_pdf->pdf->Output($pdfFilePath, "F");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */