<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Varian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('user_id'))) {
			redirect('auth');
		}
	}



	public function varian()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/varian/varian",
			"titlehead"     => "Product / Daftar Varian",
			"show_produk"   => "show",
			"mn_produk4"   => "active",
			"private_js"   => "admin/pages/product/varian/js/varian_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function listvarian()
	{
		$url_varian = URLAPI . "/v1/varian/get_varian?member_id=" . $_SESSION['user_id'];
		$data['varian'] = apisbc($url_varian)->messages;

		echo json_encode($data);
	}

	public function tambahvarian()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/varian/tambah",
			"titlehead"     => "Product / Tambah Varian",
			"show_produk"   => "show",
			"mn_produk4"   => "active",
			"private_js"   => "admin/pages/product/varian/js/tambah_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function addvarian()
	{
		$this->form_validation->set_rules('name', 'Nama Varian', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = "Data tidak boleh kosong";
		} else {
			$input		= $this->input;
			$nama		= $this->security->xss_clean($input->post("name"));
			$repeater		= $this->security->xss_clean($input->post("addSubForm"));

			if ($repeater == NULL) {
				header('HTTP/1.1 500 Internal Server Error');
				$messages = "Data outlet tidak boleh kosong";
			}

			$subvarian = array();
			foreach ($repeater as $key => $subValue) {
				array_push($subvarian, $subValue['subvarian']);
			}

			$mdata = array(
				'member_id' => $_SESSION['user_id'],
				'namavarian'     => $nama,
				'subvarian'     => $subvarian,
			);

			$url = URLAPI . "/v1/varian/add_varian";
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

	public function editvarian($id)
	{
		$id = base64_decode($id);
		$url_varian = URLAPI . "/v1/varian/get_varian_by_id?member_id=" . $_SESSION['user_id'] . "&varian_id=" . $id;
		$varian = apisbc($url_varian)->messages;

		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/varian/edit",
			"titlehead"     => "Product / Edit Varian",
			"show_produk"   => "show",
			"mn_produk4"   => "active",
			"private_js"   => "admin/pages/product/varian/js/edit_js",
			"varian"	   => $varian,
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function list_subvarian()
	{
		$input		= $this->input;
		$id_varian = $this->security->xss_clean($input->post("id_varian", FILTER_SANITIZE_STRING));

		$url_varian = URLAPI . "/v1/varian/get_subvarian_by_id_varian?varian_id=" . $id_varian;
		$subvarian = apisbc($url_varian)->messages;

		$data = array(
			"id_varian"   => $id_varian,
			"dt_subvarian"   => $subvarian,
		);

		$response = array(
			"messages"   => utf8_encode($this->load->view('admin/pages/product/varian/list-subvarian', $data, TRUE))
		);

		echo json_encode($response);
	}

	public function deleteSubVarian()
	{
		$id = $this->security->xss_clean($this->input->get('id'));

		$url = URLAPI . "/v1/varian/delete_subvarian?id=" . $id;
		$result = apisbc($url);

		if (@$result->code == 200) {
			$messages = "Data berhasil dihapus!";
		} else {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = $result->messages;
		}

		echo json_encode($messages);
	}

	public function changevarian()
	{
		$this->form_validation->set_rules('id_varian', 'Id Varian', 'trim|required');
		$this->form_validation->set_rules('name', 'Nama Varian', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = "Data tidak boleh kosong";
		} else {
			$input		= $this->input;

			$id		= $this->security->xss_clean($input->post("id_varian"));
			$nama		= $this->security->xss_clean($input->post("name"));
			$old		= $this->security->xss_clean($input->post("old"));
			$new		= $this->security->xss_clean($input->post("addSubForm"));

			$subVarian = array();
			if ($new == NULL) {
				if ($old == NULL) {
					header('HTTP/1.1 500 Internal Server Error');
					$messages = "Outlet tidak boleh kosong!";
				}
				$new == NULL;
			} elseif ($old == NULL) {
				if ($new == NULL) {
					header('HTTP/1.1 500 Internal Server Error');
					$messages = "Outlet tidak boleh kosong!";
				}
				$old == NULL;
			}

			foreach ($old as $key => $subValue) {
				if ($subValue['subvarian']) {
					array_push($subVarian, $subValue['subvarian']);
				}
			}

			foreach ($new as $key => $subValue) {
				if ($subValue['subvarian']) {
					array_push($subVarian, $subValue['subvarian']);
				}
			}

			$mdata = array(
				'varian_id' => $id,
				'namavarian'     => $nama,
				'subvarian'     => $subVarian,
			);

			$url = URLAPI . "/v1/varian/update_varian";
			$result = apisbc($url, json_encode($mdata));

			if (@$result->code == 200) {
				$messages = 'Data berhasil dirubah!';
			} else {
				header('HTTP/1.1 500 Internal Server Error');
				$messages = $result->messages;
			}
		}

		echo json_encode($messages);
	}

	public function deleteVarian()
	{
		$id = $this->security->xss_clean($this->input->get('id'));

		$url = URLAPI . "/v1/varian/delete_varian?id=" . $id;
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
