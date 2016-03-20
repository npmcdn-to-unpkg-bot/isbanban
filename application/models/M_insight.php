<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_insight extends CI_Model {

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
	// function getAll($limit, $offset)
	function count($table_name)
	{
		return $this->db->get($table_name)->num_rows();
	}

	function countRelawan($jenis_kelamin, $tahun)
	{
		$query = "SELECT * FROM relawan WHERE jenis_kelamin='$jenis_kelamin' and YEAR(bulan_masuk)='$tahun';";
		return $this->db->query($query)->num_rows();
	}

	function countRelawanByGender($jenis_kelamin)
	{
		$query = "SELECT * FROM relawan WHERE jenis_kelamin='$jenis_kelamin';";
		return $this->db->query($query)->num_rows();
	}

	function countRelawanByChapter($kode_chapter)
	{
		$query = "SELECT * FROM relawan WHERE chapter='$kode_chapter'";
		return $this->db->query($query)->num_rows();
	}

	function countRelawanByDepartemen($chapter, $departemen)
	{
		$query = "SELECT * FROM relawan WHERE departemen='$departemen' AND chapter='$chapter'";
		return $this->db->query($query)->num_rows();
	}

	function countDonationTotal()
	{
		$query = "SELECT SUM(donasi_banyak) as jumlah_uang FROM donasi WHERE status=1 AND id_jenis=3";
		return $this->db->query($query)->result();
	}

	function countDonationTotalToday($date)
	{
		$query = "SELECT SUM(donasi_banyak) as jumlah_uang FROM donasi WHERE status=1
		AND confirmed_at='$date'
		AND id_jenis=3
		";
		return $this->db->query($query)->result();
	}

	function getLocation()
	{
		return $this->db->get('desa')->result();
	}

	function getDetailRelawan($chapter, $jenis_kelamin)
	{
		$sql	= "SELECT * FROM relawan WHERE chapter='$chapter' AND jenis_kelamin='$jenis_kelamin'";
		return $this->db->query($sql)->num_rows();
	}

	function getDetailRelawanTotal($chapter)
	{
		$sql	= "SELECT * FROM relawan WHERE chapter='$chapter'";
		return $this->db->query($sql)->num_rows();	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
