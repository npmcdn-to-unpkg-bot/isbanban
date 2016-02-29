<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_volunteer extends CI_Model {

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
	function insert($data)
	{
		$this->db->insert('relawan', $data);
	}

	function update($data, $parameter_code)
	{
		$this->db->where('parameter_code', $parameter_code)->update('relawan', $data);
	}

	function getByParameter($parameter_code)
	{
		return $this->db->get_where('relawan', array('parameter_code' => $parameter_code))->result();
	}

	function getAll()
	{
		return $this->db->get('relawan')->result();
	}

	function getRecruitment()
	{
		$query = "SELECT * FROM relawan WHERE YEAR(bulan_masuk)='2016'";

		return $this->db->query($query)->result();
	}

	function getChapter()
	{
		return $this->db->get('relawan_chapter')->result();
	}

	function getDepartment()
	{
		return $this->db->get('relawan_departemen')->result();
	}

	function getPosition()
	{
		return $this->db->get('relawan_posisi')->result();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
