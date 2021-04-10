<?php defined('BASEPATH') or exit('No direct script access allowed');

// Website ini dibuat dan dikembangkan oleh awbimasakti
// Nama Template : OnlineShop Non-Courir
// Pencipta      : AWBimasakti and Yusuf1bimasakti
// Author        : PT. Bimasakti Indera Gemilang
// Creator       : https://ilmuparanormal.com

class Global_model extends CI_Model
{
    function getDataProdukLaris(){
        $query = $this->db->select();
        $query = $this->db->from('config_produk_laris as A');
        $query = $this->db->join('tbl_produk as B', 'A.id_produk=B.id_produk');
        $query = $this->db->where('B.status', 'PUBLISH');
        $query = $this->db->get();
        return $query->result();
    }
}
