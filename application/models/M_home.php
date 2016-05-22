<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {

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
	function countData($data)
	{
		return $this->db->get($data)->num_rows();
	}

	function countCashData()
	{
		$sql =
			"
			SELECT sum(donasi_banyak) as cashDonation FROM donasi WHERE id_jenis=3 and status=1
			";
		return $this->db->query($sql)->result();
	}

	function countBookData()
	{
		$sql =
			"
			SELECT sum(donasi_banyak) as bookDonation FROM donasi WHERE id_jenis=1 and status=1
			";
		return $this->db->query($sql)->result();
	}

	function getBlogPost($limit, $table)
	{
		$sql =
		"
			SELECT * FROM blog WHERE kategori != 2 ORDER BY created_at DESC LIMIT 0, 6
		";
		return $this->db->query($sql)->result();
		// return $this->db->get($table, $limit)->result();
	}

	function getFeedback()
	{
		$sql	=
		"
		SELECT 
			testimoni.*,
			testimoni.path_foto as testimoni_path_foto,
			blog.slug as blog_slug
		FROM testimoni
		LEFT JOIN blog
		ON testimoni.id_detail=blog.id;
		";
		return $this->db->query($sql)->result();
	}

	function getStrategicPartners()
	{
		$this->db->where('category_id', 1);
		return $this->db->get('partners')->result();
	}

	function getMediaPartners()
	{
		$this->db->where('category_id', 2);
		return $this->db->get('partners')->result();
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
