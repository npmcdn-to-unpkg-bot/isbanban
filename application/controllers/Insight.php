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

			// Map Location
			'getLocationMap'		=> $this->m_insight->getLocation(),
		];

		$data['page']		= 'pages/insight/index';
		$this->load->view('layout/blank', $data);
	}

	function data($parameter) {

		switch ($parameter) {
			// Get Volunteer
			case "volunteer":
				$sql = "SELECT 
							relawan.chapter as chapter_code,
							relawan_chapter.nama as chapter,
							COUNT(CASE WHEN relawan.jenis_kelamin = 'laki-laki' then 1 END) as men,
							COUNT(CASE WHEN relawan.jenis_kelamin = 'perempuan' then 1 END) as women,
							COUNT(*) as total
						from relawan
						left join relawan_chapter
						on relawan_chapter.kode = relawan.chapter
						group by chapter_code";
				echo json_encode($this->db->query($sql)->result());
				break;

			case "donationall":
				$sql = "select 
							sum(donasi_banyak) as total_donation,
							count(nama) as total_donator
						from donasi
						where status = 1 and id_jenis = 3";
				echo json_encode($this->db->query($sql)->result());
				break;

			case "donationtoday":
				$sql = "select 
					sum(donasi_banyak) as total_donation,
					count(nama) as total_donator
				from donasi
				where status = 1 and id_jenis = 3 and confirmed_at = CURDATE();";
				$data = $this->db->query($sql)->result();

				foreach($data as $row) {
					if(empty($row->total_donation)) {
						$row->total_donation = 0;
					}
				}
				echo json_encode($data);
				break;

			case "donation":
				$sql = "SELECT bulan.month,
						COALESCE(SUM(`donat`.`donasi_banyak`),0) as total
						FROM (SELECT 'January' AS MONTH
					           UNION SELECT 'February' AS MONTH
					           UNION SELECT 'March' AS MONTH
					           UNION SELECT 'April' AS MONTH
					           UNION SELECT 'May' AS MONTH
					           UNION SELECT 'June' AS MONTH
					           UNION SELECT 'July' AS MONTH
					           UNION SELECT 'August' AS MONTH
					           UNION SELECT 'September' AS MONTH
					           UNION SELECT 'October' AS MONTH
					           UNION SELECT 'November' AS MONTH
					           UNION SELECT 'December' AS MONTH)
					           as bulan
					           LEFT JOIN ( SELECT * FROM `donasi` WHERE `donasi`.`status` = 1 and `donasi`.`id_jenis` = 3) as `donat`
					           on MONTHNAME(`donat`.`created_at`) = bulan.month
						group by month";
				echo json_encode($this->db->query($sql)->result());
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */