<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
// Website ini dibuat dan dikembangkan oleh awbimasakti
// Nama Template : OnlineShop Non-Courir
// Pencipta      : AWBimasakti and Yusuf1bimasakti
// Author        : PT. Bimasakti Indera Gemilang
// Creator       : https://ilmuparanormal.com

	public function __construct()
    {
        parent::__construct();
        $this->load->model('global_model');
    $this->load->library('user_agent');
    $this->set_timezone();
    }
    public function set_timezone()
    {
        date_default_timezone_set("Asia/Jakarta");
    }
	public function index()
	{
		$data_header   = $this->db->get_where('tbl_sett_topbar')->row_array();
        $data_laris    = $this->global_model->getDataProdukLaris();
        $data_depan    = $this->db->get_where('config_cs')->row_array();
        // $data_01 = array(
        //     'browser'         => $this->agent->browser(),
        //     'browser_version' => $this->agent->version(),
        //     'os'              => $this->agent->agent_string()
        //     // 'ip_address'      => $this->agent->ip_address()
        // );
        // echo '<pre>';
        // var_dump($data_01);
        // die;
        $data = array(
            'halaman'         => 'home',
            // Data Produk Laris
            'produk_laris'    => $data_laris,
            'data_depan'      => $data_depan,
            'awconfig_header' => $data_header
        );
		// echo "<pre>";
		// var_dump($data);
		// die;
        $this->load->view('include/index', $data);
	}
}
