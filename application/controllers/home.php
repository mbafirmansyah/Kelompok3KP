<?php if (! defined('BASEPATH') ) exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	function Index()
	{
		$this->load->view('home');
	}
}