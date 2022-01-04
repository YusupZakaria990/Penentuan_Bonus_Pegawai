<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Chart_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bonus_model');
    }

    public function getChart()
    {
        $this->db->select('*')
            ->from('tb_ranking')
            ->join('tb_karyawan', 'tb_ranking.id_karyawan = tb_karyawan.id_karyawan')
            ->where('tb_ranking.tahun', date('Y'))
            ->order_by('nilai_yi', 'DESC');
        $result = $this->db->get()->result();
        $data_bonus = $this->db->get('tb_bonus')->result();
        $data = [];
        $counter = 0;
        foreach ($data_bonus as $rowb) {
            $data['label'][] = $rowb->jumlah_bonus;
            foreach($result as $row) {
                $bonus = $this->Bonus_model->getBonus($row->nilai_yi);
                if (!empty($bonus) && $rowb->jumlah_bonus == $bonus['jumlah_bonus'] ) {
                    $counter++;
                }
            }
            $data['data'][] = $counter;
            $counter = 0;
        }

        return $data;
    }
}
