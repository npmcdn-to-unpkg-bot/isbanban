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
			'page'			=> 'pages/donation/index',
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
	    foreach (array_rand($seed, 2) as $k) $rand .= $seed[$k];
	    $confirm_code	= "ISB".$rand.date('hi');

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
				if($this->m_donation->insert($datadb)) {
					// Setting for mail information
					$data['confirm_code']		 	 = $confirm_code;
					$data['donasi_date']		 	 = date('Y-m-d');
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
					$this->email->cc('funding@isbanban.org'); 
					$this->email->subject('Halo '.$data['donatur_nama'].', anda baru saja melakukan permohonan donasi');
					$data['page']	= 'pages/mail/donation-request';
			 		$message 		= $this->load->view('layout/mail', $data,TRUE);
					$this->email->message($message);
					$this->email->attach($data['path_pdf']);
					$this->email->send();

					// Alert for Donatur
					$this->session->set_flashdata('success', true);
					redirect(base_url().'donate');
				}
			}
		}

		$this->load->view('layout/default', $data);
	}


	public function data() {

		$data	= [
			'title'			=> 'Donator List',
			'current'		=> 'donate',
			'role'			=> 'normal',
			'meta_image'	=> '',
			'page'			=> 'pages/donation/view',
			'meta_url'		=> 'donate',
		];

		$this->load->view('layout/pdf2', $data);
	}

	public function get($paramter) {

		switch($paramter) {
			case "confirmed":
				$data = $this->db->select('nama, created_at, donasi_banyak, is_anonim, confirmed_at')
				->where(array('status' => '1', 'id_jenis' => '3'))
				->order_by('confirmed_at', 'desc')
				->get('donasi')->result();
				foreach($data as $key) {
					if($key->is_anonim == 1) {
						$key->nama 			= "Hamba Allah";
					}
				}
				echo json_encode($data);
				break;
		}
	}


	function do_pdf($data) {
		//load the view and saved it into $html variable
		$data['page']	= 'pages/pdf/donation-request';
		$html 			= $this->load->view('layout/pdf2', $data, true);

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