<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('user_id'))) {
			redirect('auth');
		}
	}

	public function kelompok()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/kelompok/kelompok",
			"titlehead"     => "Product / Daftar Kelompok",
			"show_produk"   => "show",
			"mn_produk1"   => "active",
			"private_js"   => "admin/pages/product/kelompok/js/kelompok_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function listkelompok()
	{
		$url = URLAPI . "/v1/kelompok/get_data_kelompok?member_id=" . $_SESSION['user_id'];
		$data['kelompok']   = apisbc($url)->messages;

		echo json_encode($data);
	}

	public function tambahkelompok()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/kelompok/tambah",
			"titlehead"     => "Product / Tambah Kelompok",
			"show_produk"   => "show",
			"mn_produk1"   => "active",
			"private_js"   => "admin/pages/product/kelompok/js/tambah_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function addkelompok()
	{
		$this->form_validation->set_rules('name', 'Kelompok', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = "Data tidak boleh kosong";
		} else {
			$input		= $this->input;
			$nama		= $this->security->xss_clean($input->post("name"));

			$mdata = array(
				'kelompok'     => $nama,
				'member_id' => $_SESSION['user_id']
			);

			$url = URLAPI . "/v1/kelompok/add_data_kelompok";
			$result = apisbc($url, json_encode($mdata));

			if (@$result->code == 200) {
				$messages = "Data berhasil ditambah!";
			} else {
				header('HTTP/1.1 500 Internal Server Error');
				$messages = $result->messages;
			}
		}

		echo json_encode($messages);
	}

	public function editkelompok($id)
	{
		$id = base64_decode($id);
		$url = URLAPI . "/v1/kelompok/get_data_kelompok_by_id?member_id=" . $_SESSION['user_id'] . "&kelompok_id=" . $id;
		$kelompok   = apisbc($url)->messages;

		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/kelompok/edit",
			"titlehead"     => "Product / Edit Kelompok",
			"show_produk"   => "show",
			"mn_produk1"   => "active",
			"dt_kelompok"   => $kelompok,
			"private_js"   => "admin/pages/product/kelompok/js/edit_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function changekelompok()
	{
		$this->form_validation->set_rules('id', 'Id', 'trim|required');
		$this->form_validation->set_rules('name', 'Kelompok', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = "Data tidak boleh kosong";
		} else {
			$input		= $this->input;
			$id		= $this->security->xss_clean($input->post("id"));
			$nama		= $this->security->xss_clean($input->post("name"));

			$mdata = array(
				'kelompok'     => $nama,
				'kelompok_id' => $id
			);

			$url = URLAPI . "/v1/kelompok/update_kelompok";
			$result = apisbc($url, json_encode($mdata));

			if (@$result->code == 200) {
				$messages = "Data berhasil ditambah!";
			} else {
				header('HTTP/1.1 500 Internal Server Error');
				$messages = $result->messages;
			}
		}

		echo json_encode($messages);
	}

	public function deletekelompok()
	{
		$id = $this->security->xss_clean($this->input->get('kelompok'));

		$url = URLAPI . "/v1/kelompok/delete_kelompok?kelompok_id=" . $id;
		$result = apisbc($url);

		if (@$result->code == 200) {
			$messages = "Data berhasil dihapus!";
		} else {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = $result->messages;
		}

		echo json_encode($messages);
	}
}
