<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
			"private_js"   => "admin/pages/product/js/kelompok_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function listkelompok()
	{
		$url = URLAPI . "/v1/kelompok/get_data_kelompok?member_id=" . $_SESSION['user_id'];
		$data['kelompok']   = apisbc($url)->messages;

		echo json_encode($data);
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

	public function kategori()
	{
		$url_kelompok = URLAPI . "/v1/kelompok/get_data_kelompok?member_id=" . $_SESSION['user_id'];
		$kelompok   = apisbc($url_kelompok)->messages;

		$url_outlet = URLAPI . "/v1/outlet/get_outlet?member_id=" . $_SESSION['user_id'];
		$outlet   = apisbc($url_outlet)->messages;

		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/kategori/kategori",
			"titlehead"     => "Product / Daftar Kategori",
			"show_produk"   => "show",
			"mn_produk2"   => "active",
			"private_js"   => "admin/pages/product/js/kategori_js",
			"dt_kelompok"   => $kelompok,
			"dt_outlet"   => $outlet,
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function listkategori()
	{
		$url = URLAPI . "/v1/kategori/get_data_kategori?member_id=" . $_SESSION['user_id'];
		$data['kategori'] = apisbc($url)->messages;

		echo json_encode($data);
	}

	public function addkategori()
	{
		$this->form_validation->set_rules('name', 'Nama Kategori', 'trim|required');
		$this->form_validation->set_rules('kelompok', 'Kelompok', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = "Data tidak boleh kosong";
		} else {
			$input		= $this->input;
			$nama		= $this->security->xss_clean($input->post("name"));
			$kelompok		= $this->security->xss_clean($input->post("kelompok"));
			$repeater		= $this->security->xss_clean($input->post("addSubForm"));

			if ($repeater == NULL) {
				header('HTTP/1.1 500 Internal Server Error');
				$messages = "Data outlet tidak boleh kosong";
			}

			$outlet = array();
			foreach ($repeater as $key => $subValue) {
				if (@$subValue['show'] == NULL) {
					$subValue['show'] = 'no';
				} else {
					$subValue['show'] = 'yes';
				}

				$temp["id_outlet"] = $subValue['outlet'];
				$temp["show"] = $subValue['show'];
				array_push($outlet, $temp);
			}

			$mdata = array(
				'member_id' => $_SESSION['user_id'],
				'kelompok_id'     => $kelompok,
				'kategori'     => $nama,
				'outlet' => $outlet
			);

			$url = URLAPI . "/v1/kategori/add_kategori";
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

	public function varian()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/varian/varian",
			"titlehead"     => "Product / Daftar Varian",
			"show_produk"   => "show",
			"mn_produk4"   => "active",
			"private_js"   => "admin/pages/product/js/varian_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function listvarian()
	{
		$url_varian = URLAPI . "/v1/varian/get_varian?member_id=" . $_SESSION['user_id'];
		$data['varian'] = apisbc($url_varian)->messages;

		echo json_encode($data);
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

	public function produk()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/produk",
			"titlehead"     => "Product / Daftar Produk",
			"show_produk"   => "show",
			"mn_produk3"   => "active",
			"private_js"   => "admin/pages/product/js/index",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function addproduk()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/produk-add-step-1",
			"titlehead"     => "Product / Tambah Produk",
			"show_produk"   => "show",
			"mn_produk3"   => "active",
			"private_js"   => "admin/pages/product/js/index",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function addprodukstep2()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/produk-add-step-2",
			"titlehead"     => "Product / Tambah Produk",
			"show_produk"   => "show",
			"mn_produk3"   => "active",
			"private_js"   => "admin/pages/product/js/index",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function addprodukstep3()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/produk-add-step-3",
			"titlehead"     => "Product / Tambah Produk",
			"show_produk"   => "show",
			"mn_produk3"   => "active",
			"private_js"   => "admin/pages/product/js/index",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function addprodukstep_summary()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/produk-add-step-final",
			"titlehead"     => "Product / Tambah Produk",
			"show_produk"   => "show",
			"mn_produk3"   => "active",
			"private_js"   => "admin/pages/product/js/index",
		);

		$this->load->view('admin/wrapper', $data);
	}
}
