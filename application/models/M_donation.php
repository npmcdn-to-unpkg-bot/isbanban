<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_donation extends CI_Model {

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
	function countAll()
	{
		return $this->db->get('relawan')->num_rows();
	}

	function countDonate($jenis_kode)
	{
		$sql = "
		SELECT SUM(donasi_banyak) as total_donasi_uang FROM donasi WHERE status=1 AND id_jenis=$jenis_kode
		";
		return $this->db->query($sql)->result();
	}

	function getBankAccount()
	{
		return $this->db->get('donasi_bank_info')->result();
	}

	function insert($datadb)
	{
		$this->db->insert('donasi', $datadb);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
