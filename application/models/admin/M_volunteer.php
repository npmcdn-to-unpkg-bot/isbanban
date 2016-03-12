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
		$query = 
		"
		SELECT relawan.*,
			   relawan_posisi.nama as posisi_relawan,
			   relawan_departemen.nama as departemen_relawan,
			   relawan_chapter.nama as chapter_relawan
		FROM relawan
			   LEFT JOIN relawan_posisi
			   		ON relawan_posisi.`id` = relawan.`posisi`
			   LEFT JOIN relawan_departemen
			   		ON relawan_departemen.`kode` = relawan.`departemen`
		   	   LEFT JOIN relawan_chapter
					ON relawan_chapter.`kode` = relawan.`chapter`
		WHERE parameter_code='$parameter_code'
		";

		return $this->db->query($query)->result();
		// return $this->db->get_where('relawan', array('parameter_code' => $parameter_code))->result();
	}

	function getAll()
	{
		// $query = 
		// "
		// SELECT relawan.*,
		// 	   relawan_posisi.nama as posisi_relawan,
		// 	   relawan_departemen.nama as departemen_relawan,
		// 	   relawan_chapter.nama as chapter_relawan
		// FROM relawan
		// 	   LEFT JOIN relawan_posisi
		// 	   		ON relawan_posisi.`id` = relawan.`posisi`
		// 	   LEFT JOIN relawan_departemen
		// 	   		ON relawan_departemen.`kode` = relawan.`departemen`
		//    	   LEFT JOIN relawan_chapter
		// 			ON relawan_chapter.`kode` = relawan.`chapter`
		// ";
		$query	=
		"
		SELECT * FROM relawan WHERE YEAR(bulan_masuk) != '2016' AND MONTH(bulan_masuk) != '01' AND MONTH(bulan_masuk) != '02' AND MONTH(bulan_masuk) != '03' AND MONTH(bulan_masuk) != '04'
		";

		return $this->db->query($query)->result();
		// return $this->db->get('relawan')->result();
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

	function delete($parameter_code)
	{
		$this->db->delete('relawan', array('parameter_code' => $parameter_code)); 
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
