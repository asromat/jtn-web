<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Err extends CI_Controller {

	public function index()
	{
		$this->load->view('err/404.php');
	}
}
