<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insight extends CI_Controller {

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
		$this->load->model('m_insight');
	}

	function index()
	{
		$now		= date('Y');
		$nowFull	= date('Y-m-d');
		$jk			= array('laki-laki', 'perempuan');

		$data	= [
			'countRelawan'	=> $this->m_insight->count('relawan'),
			'countEvent'	=> $this->m_insight->count('event'),
			'countBlog'		=> $this->m_insight->count('blog'),
			'countVillage'	=> $this->m_insight->count('desa'),



			// Donation
			'countDonationTotal'		=> $this->m_insight->countDonationTotal(),
			'countDonationTotalToday'	=> $this->m_insight->countDonationTotalToday($nowFull),



			// Map Location
			'getLocationMap'		=> $this->m_insight->getLocation(),



			// Relawan Detail L/P
			'getRelawanKotSerangL'  => $this->m_insight->getDetailRelawan('KTS', 'laki-laki'),
			'getRelawanKotSerangP'  => $this->m_insight->getDetailRelawan('KTS', 'perempuan'),
			'getRelawanKotSerangT'  => $this->m_insight->getDetailRelawanTotal('KTS'),
			'getRelawanKabSerangL'  => $this->m_insight->getDetailRelawan('KBS', 'laki-laki'),
			'getRelawanKabSerangP'  => $this->m_insight->getDetailRelawan('KBS', 'perempuan'),
			'getRelawanKabSerangT'  => $this->m_insight->getDetailRelawanTotal('KBS'),
			'getRelawanCilegonL'    => $this->m_insight->getDetailRelawan('CLG', 'laki-laki'),
			'getRelawanCilegonP'    => $this->m_insight->getDetailRelawan('CLG', 'perempuan'),
			'getRelawanCilegonT'    => $this->m_insight->getDetailRelawanTotal('CLG'),
			'getRelawanPandeglangL' => $this->m_insight->getDetailRelawan('PDG', 'laki-laki'),
			'getRelawanPandeglangP' => $this->m_insight->getDetailRelawan('PDG', 'perempuan'),
			'getRelawanPandeglangT' => $this->m_insight->getDetailRelawanTotal('PDG'),
			'getRelawanLebakL'      => $this->m_insight->getDetailRelawan('LBK', 'laki-laki'),
			'getRelawanLebakP'      => $this->m_insight->getDetailRelawan('LBK', 'perempuan'),
			'getRelawanLebakT'      => $this->m_insight->getDetailRelawanTotal('LBK'),
			'getRelawanKabTangL'    => $this->m_insight->getDetailRelawan('KBT', 'laki-laki'),
			'getRelawanKabTangP'    => $this->m_insight->getDetailRelawan('KBT', 'perempuan'),
			'getRelawanKabTangT'    => $this->m_insight->getDetailRelawanTotal('KBT'),
			'getRelawanTangselL'    => $this->m_insight->getDetailRelawan('TGS', 'laki-laki'),
			'getRelawanTangselP'    => $this->m_insight->getDetailRelawan('TGS', 'perempuan'),
			'getRelawanTangselT'    => $this->m_insight->getDetailRelawanTotal('TGS'),



			// Data For Chart Departemen
			// Kota Serang
			'countITKotSer'		=> $this->m_insight->countRelawanByDepartemen('KTS', 'IT'),
			'countFNKotSer'		=> $this->m_insight->countRelawanByDepartemen('KTS', 'FN'),
			'countVDKotSer'		=> $this->m_insight->countRelawanByDepartemen('KTS', 'VD'),
			'countCDKotSer'		=> $this->m_insight->countRelawanByDepartemen('KTS', 'CD'),
			'countICKotSer'		=> $this->m_insight->countRelawanByDepartemen('KTS', 'IC'),
			'countPRKotSer'		=> $this->m_insight->countRelawanByDepartemen('KTS', 'PR'),
			'countIOKotSer'		=> $this->m_insight->countRelawanByDepartemen('KTS', 'IO'),

			// Kab Serang
			'countITKabSer'		=> $this->m_insight->countRelawanByDepartemen('KBS', 'IT'),
			'countFNKabSer'		=> $this->m_insight->countRelawanByDepartemen('KBS', 'FN'),
			'countVDKabSer'		=> $this->m_insight->countRelawanByDepartemen('KBS', 'VD'),
			'countCDKabSer'		=> $this->m_insight->countRelawanByDepartemen('KBS', 'CD'),
			'countICKabSer'		=> $this->m_insight->countRelawanByDepartemen('KBS', 'IC'),
			'countPRKabSer'		=> $this->m_insight->countRelawanByDepartemen('KBS', 'PR'),
			'countIOKabSer'		=> $this->m_insight->countRelawanByDepartemen('KBS', 'IO'),

			// Lebak
			'countITLebak'		=> $this->m_insight->countRelawanByDepartemen('LBK', 'IT'),
			'countFNLebak'		=> $this->m_insight->countRelawanByDepartemen('LBK', 'FN'),
			'countVDLebak'		=> $this->m_insight->countRelawanByDepartemen('LBK', 'VD'),
			'countCDLebak'		=> $this->m_insight->countRelawanByDepartemen('LBK', 'CD'),
			'countICLebak'		=> $this->m_insight->countRelawanByDepartemen('LBK', 'IC'),
			'countPRLebak'		=> $this->m_insight->countRelawanByDepartemen('LBK', 'PR'),
			'countIOLebak'		=> $this->m_insight->countRelawanByDepartemen('LBK', 'IO'),

			// Pandeglang
			'countITPandeglang'		=> $this->m_insight->countRelawanByDepartemen('PDG', 'IT'),
			'countFNPandeglang'		=> $this->m_insight->countRelawanByDepartemen('PDG', 'FN'),
			'countVDPandeglang'		=> $this->m_insight->countRelawanByDepartemen('PDG', 'VD'),
			'countCDPandeglang'		=> $this->m_insight->countRelawanByDepartemen('PDG', 'CD'),
			'countICPandeglang'		=> $this->m_insight->countRelawanByDepartemen('PDG', 'IC'),
			'countPRPandeglang'		=> $this->m_insight->countRelawanByDepartemen('PDG', 'PR'),
			'countIOPandeglang'		=> $this->m_insight->countRelawanByDepartemen('PDG', 'IO'),

			// Cilegon
			'countITCilegon'		=> $this->m_insight->countRelawanByDepartemen('CLG', 'IT'),
			'countFNCilegon'		=> $this->m_insight->countRelawanByDepartemen('CLG', 'FN'),
			'countVDCilegon'		=> $this->m_insight->countRelawanByDepartemen('CLG', 'VD'),
			'countCDCilegon'		=> $this->m_insight->countRelawanByDepartemen('CLG', 'CD'),
			'countICCilegon'		=> $this->m_insight->countRelawanByDepartemen('CLG', 'IC'),
			'countPRCilegon'		=> $this->m_insight->countRelawanByDepartemen('CLG', 'PR'),
			'countIOCilegon'		=> $this->m_insight->countRelawanByDepartemen('CLG', 'IO'),

			// Kabupaten Tangerang
			'countITKabTang'		=> $this->m_insight->countRelawanByDepartemen('KBT', 'IT'),
			'countFNKabTang'		=> $this->m_insight->countRelawanByDepartemen('KBT', 'FN'),
			'countVDKabTang'		=> $this->m_insight->countRelawanByDepartemen('KBT', 'VD'),
			'countCDKabTang'		=> $this->m_insight->countRelawanByDepartemen('KBT', 'CD'),
			'countICKabTang'		=> $this->m_insight->countRelawanByDepartemen('KBT', 'IC'),
			'countPRKabTang'		=> $this->m_insight->countRelawanByDepartemen('KBT', 'PR'),
			'countIOKabTang'		=> $this->m_insight->countRelawanByDepartemen('KBT', 'IO'),

			// Tangerang Selatan
			'countITTangsel'		=> $this->m_insight->countRelawanByDepartemen('TGS', 'IT'),
			'countFNTangsel'		=> $this->m_insight->countRelawanByDepartemen('TGS', 'FN'),
			'countVDTangsel'		=> $this->m_insight->countRelawanByDepartemen('TGS', 'VD'),
			'countCDTangsel'		=> $this->m_insight->countRelawanByDepartemen('TGS', 'CD'),
			'countICTangsel'		=> $this->m_insight->countRelawanByDepartemen('TGS', 'IC'),
			'countPRTangsel'		=> $this->m_insight->countRelawanByDepartemen('TGS', 'PR'),
			'countIOTangsel'		=> $this->m_insight->countRelawanByDepartemen('TGS', 'IO'),
		];

		$this->load->view('insight/index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */