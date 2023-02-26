<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Err extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->data['daerah'] = $this->settings->dataDaerah($_SERVER['HTTP_HOST'])[0];
	}

	public function index()
	{
		$data['daerah'] = $this->data['daerah'];
		$this->template->load('template/main', 'err/404', $data);
	}
}
