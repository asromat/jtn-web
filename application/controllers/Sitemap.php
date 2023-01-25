<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
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
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getAll($this->data['daerah']['kode'],"1000","0");
		$this->load->view('sitemap/all', $data);
	}
	
}
