<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->model('admin/m_dashboard');
		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	public function index()
	{
		$now		= date('Y');
		$jk			= array('laki-laki', 'perempuan');

		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'dashboard',
			'page'			=> 'pages/admin/dashboard/index',
			'icon'			=> 'fa-home',
			'pagetitle'		=> 'Dashboard',
			'countRelawan'	=> $this->m_dashboard->count('relawan'),
			'countEvents'	=> $this->m_dashboard->count('event'),
			'countBlog'		=> $this->m_dashboard->count('blog'),
			'countVillage'	=> $this->m_dashboard->count('desa'),

			// Donation
			'getPendingDonation'	=> $this->m_dashboard->getPendingDonation(),

			// Data For Chart Men
			'countRLPast2'	=> $this->m_dashboard->countRelawan($jk[0], $now-2),
			'countRLPast1'	=> $this->m_dashboard->countRelawan($jk[0], $now-1),
			'countRLNow'	=> $this->m_dashboard->countRelawan($jk[0], $now),
			'countRLTotal'	=> $this->m_dashboard->countRelawanByGender($jk[0]),

			// Data For Chart Women
			'countRPPast2'	=> $this->m_dashboard->countRelawan($jk[1], $now-2),
			'countRPPast1'	=> $this->m_dashboard->countRelawan($jk[1], $now-1),
			'countRPNow'	=> $this->m_dashboard->countRelawan($jk[1], $now),
			'countRPTotal'	=> $this->m_dashboard->countRelawanByGender($jk[1]),

			// Data For Chart Chapter
			'countChapterKotSerang'    => $this->m_dashboard->countRelawanByChapter('KTS'),
			'countChapterKabSerang'    => $this->m_dashboard->countRelawanByChapter('KBS'),
			'countChapterCilegon'      => $this->m_dashboard->countRelawanByChapter('CLG'),
			'countChapterLebak'        => $this->m_dashboard->countRelawanByChapter('LBK'),
			'countChapterPandeglang'   => $this->m_dashboard->countRelawanByChapter('PDG'),
			'countChapterKabTangerang' => $this->m_dashboard->countRelawanByChapter('KBT'),
			'countChapterTangsel'      => $this->m_dashboard->countRelawanByChapter('TGS'),


			// Data For Chart Departemen
			'countDepartemenIT' => $this->m_dashboard->countRelawanByDepartemen('IT'),
			'countDepartemenFN' => $this->m_dashboard->countRelawanByDepartemen('FN'),
			'countDepartemenVD' => $this->m_dashboard->countRelawanByDepartemen('VD'),
			'countDepartemenCD' => $this->m_dashboard->countRelawanByDepartemen('CD'),
			'countDepartemenIC' => $this->m_dashboard->countRelawanByDepartemen('IC'),
			'countDepartemenPR' => $this->m_dashboard->countRelawanByDepartemen('PR'),
			'countDepartemenIO' => $this->m_dashboard->countRelawanByDepartemen('IO'),
		];

		$this->load->view('layout/backend', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */