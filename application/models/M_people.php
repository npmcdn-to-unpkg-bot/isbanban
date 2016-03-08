<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_people extends CI_Model {

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
	function getAll()
	{
        // $this->db->limit($limit,$offset);
        // $query = $this->db->get('relawan');
        // return $query->result();
        // 
        return $this->db->get('relawan')->result();
	}

	function getThis($slug)
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
		WHERE relawan.`slug`='$slug'
		";

		return $this->db->query($query)->result();
		// return $this->db->get_where('relawan', array('slug' => $slug))->result();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
