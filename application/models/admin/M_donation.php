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
	function getAll()
	{
		$sql =
		"
		SELECT  donasi.*,
				donasi.created_at as donasi_created_at,
				donasi_jenis.*, 
				donasi_jenis.`jenis` as donasi_jenis
		FROM donasi
			LEFT JOIN donasi_jenis
			ON donasi_jenis.`id` = donasi.`id_jenis`
		";
		return $this->db->query($sql)->result();
	}

	function getThis($parameter_code)
	{
		$sql =
		"
		SELECT donasi.*,
			   donasi.nama as donatur_nama,
			   donasi.created_at as donatur_created_at,
			   donasi.confirmed_at as donatur_confirmed_at,
			   donasi.parameter_code as parameter_update,
			   donasi_jenis.*,
			   donasi_jenis.jenis as donatur_jenis,
			   donasi_bank_info.*,
			   donasi_bank_info.nama as nama_bank
		FROM donasi
			LEFT JOIN donasi_jenis
			ON donasi_jenis.id = donasi.id_jenis
			LEFT JOIN donasi_bank_info
			ON donasi_bank_info.id = donasi.donasi_transfer
		WHERE donasi.parameter_code='$parameter_code'
		";
		return $this->db->query($sql)->result();
	}

	function getBankAccount()
	{
		return $this->db->get('donasi_bank_info')->result();
	}

	function getDonationCategory()
	{
		return $this->db->get('donasi_jenis')->result();
	}

	function update($parameter_code, $data)
	{
		$this->db->where('parameter_code', $parameter_code)->update('donasi', $data);
	}

	function insert($data)
	{
		$this->db->insert('donasi', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
