<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$data = array(
			"title"     => NAMETITLE . " - Login",
			"content"   => "auth/pages/index",
		);

		$this->load->view('auth/wrapper', $data);
	}

	public function regis()
	{
		$data = array(
			"title"     => NAMETITLE . " - Daftar akun",
			"content"   => "auth/pages/regis",
		);

		$this->load->view('auth/wrapper', $data);
	}

	public function forgetpass()
	{
		$data = array(
			"title"     => NAMETITLE . " - Lupa password",
			"content"   => "auth/pages/forgetpass",
		);

		$this->load->view('auth/wrapper', $data);
	}
}
