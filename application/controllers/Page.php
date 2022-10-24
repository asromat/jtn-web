<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		redirect("");
	}

	public function static()
	{		
		$page = $this->uri->segment("1");
		if ($page == "redaksi"){
			$halaman = "redaksi";
		} elseif ($page == "info-iklan"){
			$halaman = "info-iklan";
		} else {
			redirect();
		}

		$data['menu'] = "Redaksi";
		$this->template->load('template/main', 'tampilan/page/'.$halaman, $data);
	}
	
}


