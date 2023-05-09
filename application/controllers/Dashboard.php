<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('user_id'))) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data = array(
			"title"     => NAMETITLE . " - Dashboard",
			"titlehead"     => "Dashboard",
			"content"   => "admin/pages/index",
			"mn_home"   => "active",
		);

		$this->load->view('admin/wrapper', $data);
	}
}
