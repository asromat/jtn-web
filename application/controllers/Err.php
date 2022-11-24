<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Err extends CI_Controller {

	public function index()
	{
		$this->template->load('template/main', 'err/404');
	}
}
