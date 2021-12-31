<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bonus_model extends CI_Model
{
    public function getBonus($yi)
    {
        $this->db->select('*')
                 ->from('tb_bonus')
                 ->where("$yi BETWEEN min_nilai_yi AND max_nilai_yi", NULL, FALSE );
        $query = $this->db->get();
        return $query->row_array();
    }

	public function tampildata_bonus(){
		$query = $this->db->query('SELECT jumlah_bonus AS label, COUNT(*) AS data from tb_bonus group by jumlah_bonus');
		return $query->result_array();
	}
}
