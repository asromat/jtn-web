<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Rss extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('xml');
        $this->load->helper('text');
		$this->load->model("news_m");
		$this->data['daerah'] = $this->settings->dataDaerah($_SERVER['HTTP_HOST'])[0];
	}

	// Beranda
	function index()
	{
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getAll($this->data['daerah']['kode'],"150","0");
		$this->load->view('rss/rss_all', $data);
	}

	function kanal()
	{
		$kategori = str_replace(['-','.xml'],[' ',''],$this->uri->segment("3"));
		$data['daerah'] = $this->data['daerah'];
		$data['data'] = $this->news_m->getCategory($kategori,"150","0");
		$this->load->view('rss/rss_all', $data);
	}
	
}
