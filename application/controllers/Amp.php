<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Amp extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("news_m");
		$this->data['daerah'] = $this->settings->dataDaerah($_SERVER['HTTP_HOST'])[0];
	}

	// Untuk detail berita
	public function baca()
	{
		$data['daerah'] = $this->data['daerah'];
		
		//Cek URL Lama atau Terbaru
		$versionData = $this->fungsi->cekUrlAmp();
		$data['data'] = $this->news_m->getDetail($versionData['id'])[0];
		// $data['footer_script'] = "footer/beranda";
		$data['headline'] = $this->news_m->getHeadline();
		// test($data['similar']);
		$data['satukanal'] = $this->news_m->getSameCategory($data['data']['catnews_id']);
		$data['kategori'] = $this->news_m->getCategoryData("catnews_id",$data['data']['catnews_id'])[0]['catnews_title'];
		$data['editor'] = $this->fungsi->getProfile("editor",$data['data']['editor_id'])[0]['editor_name'];
		$this->load->view('amp/detail', $data);		
	}
	
}
