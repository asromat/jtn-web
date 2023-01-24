<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Tag extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("news_m");
		$this->data['daerah'] = $this->settings->dataDaerah($_SERVER['HTTP_HOST'])[0];
	}

	// Beranda
	public function index()
	{
        // Kalau cuma mengunjungi /tag kembalikan ke beranda
        redirect('');
	}
	
	
	
}
