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
	function index()
	{
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getAll($this->data['daerah']['kode'],"1000","0");
		$this->load->view('sitemap/all', $data);
	}

	function kanal()
	{
		$kategori = str_replace(['-','.xml'],[' ',''],$this->uri->segment("3"));
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getCategory($kategori,"150","0");
		$this->load->view('sitemap/kategori', $data);
	}
	
	function allWeb()
	{
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getAll($this->data['daerah']['kode'],"150","0");
		$this->load->view('sitemap/all_web', $data);
	}
	
	function news()
	{
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getAll($this->data['daerah']['kode'],"150","0");
		$this->load->view('sitemap/all_news', $data);
	}
	
	function allNews()
	{
		$jumlah = str_replace(['-','.xml'],[' ',''],$this->uri->segment("3"));
		$perload = 150;
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getAll($this->data['daerah']['kode'],$jumlah*$perload,$jumlah);
		$this->load->view('sitemap/all_news', $data);
	}
	
}
