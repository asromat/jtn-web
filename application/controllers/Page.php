<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->data['daerah'] = $this->settings->dataDaerah($_SERVER['HTTP_HOST'])[0];
	}

	public function index()
	{
		redirect("");
	}

	public function static()
	{		
		$data['daerah'] = $this->data['daerah'];
		
		$page = $this->uri->segment("1");
		if ($page == "redaksi"){
			$halaman = "redaksi";
		} elseif ($page == "info-iklan"){
			$halaman = "info-iklan";
		} elseif ($page == "kontak"){
			$halaman = "info-iklan";
		} elseif ($page == "disclaimer"){
			$halaman = "disclaimer";
		} elseif ($page == "pedoman"){
			$halaman = "pedoman-media-siber";
		} elseif ($page == "privacy"){
			$halaman = "privacy";
		} else {
			redirect();
		}

		$data['menu'] = "Redaksi";
		$this->template->load('template/main', 'tampilan/page/'.$halaman, $data);
	}
	
}


