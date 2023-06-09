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
			"titlehead"     => "Product / Daftar Kelompok",
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
			"titlehead"     => "Product / Daftar Kelompok / Edit",
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

	public function kategori()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/kategori/kategori",
			"titlehead"     => "Product / Daftar Kategori",
			"show_produk"   => "show",
			"mn_produk2"   => "active",
			"private_js"   => "admin/pages/product/kategori/js/kategori_js",
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function listkategori()
	{
		$url = URLAPI . "/v1/kategori/get_data_kategori?member_id=" . $_SESSION['user_id'];
		$data['kategori'] = apisbc($url)->messages;

		echo json_encode($data);
	}

	public function tambahkategori()
	{
		$url_kelompok = URLAPI . "/v1/kelompok/get_data_kelompok?member_id=" . $_SESSION['user_id'];
		$kelompok   = apisbc($url_kelompok)->messages;

		$url_outlet = URLAPI . "/v1/outlet/get_outlet?member_id=" . $_SESSION['user_id'];
		$outlet   = apisbc($url_outlet)->messages;

		$url_kt_outlet = URLAPI . "/v1/outlet/get_kategori_outlet";
		$kt_outlet   = apisbc($url_kt_outlet)->messages;

		$url_kategori = URLAPI . "/v1/kategori/get_data_kategori?member_id=" . $_SESSION['user_id'];
		$kategori = apisbc($url_kategori)->messages;

		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/kategori/tambah",
			"titlehead"     => "Product / Daftar Kategori",
			"show_produk"   => "show",
			"mn_produk2"   => "active",
			"private_js"   => "admin/pages/product/kategori/js/tambah_js",
			"dt_kelompok"   => $kelompok,
			"dt_outlet"   	=> $outlet,
			"dt_kt_outlet"	=> $kt_outlet,
			"dt_kategori"   => $kategori,
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function editkategori($id)
	{
		$id = base64_decode($id);
		$url_kelompok = URLAPI . "/v1/kelompok/get_data_kelompok?member_id=" . $_SESSION['user_id'];
		$kelompok   = apisbc($url_kelompok)->messages;

		$url_outlet = URLAPI . "/v1/outlet/get_outlet?member_id=" . $_SESSION['user_id'];
		$outlet   = apisbc($url_outlet)->messages;

		$url_kategori = URLAPI . "/v1/kategori/getbyId_kategori?id=" . $id;
		$kategori = apisbc($url_kategori)->messages;
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/kategori/form-edit",
			"titlehead"     => "Product / Edit Kategori",
			"show_produk"   => "show",
			"mn_produk2"   => "active",
			"private_js"   => "admin/pages/product/kategori/js/edit_js",
			"dt_kelompok"   => $kelompok,
			"dt_outlet"   	=> $outlet,
			"dt_kategori"   => $kategori,
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function changekategori($listDel = NULL)
	{
		$this->form_validation->set_rules('id_kt', 'Id Kategori', 'trim|required');
		$this->form_validation->set_rules('name', 'Nama Kategori', 'trim|required');
		$this->form_validation->set_rules('kelompok', 'Kelompok', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = "Data tidak boleh kosong";
		} else {
			$input		= $this->input;
			// $listDel = json_decode($listDel);

			$id		= $this->security->xss_clean($input->post("id_kt"));
			$nama		= $this->security->xss_clean($input->post("name"));
			$kelompok		= $this->security->xss_clean($input->post("kelompok"));
			$old_ot		= $this->security->xss_clean($input->post("old_ot"));
			$new_ot		= $this->security->xss_clean($input->post("addNewOT"));

			$outlet = array();
			if ($new_ot == NULL) {
				if ($old_ot == NULL) {
					header('HTTP/1.1 500 Internal Server Error');
					$messages = "Outlet tidak boleh kosong!";
				}
				$new_ot == NULL;
			} elseif ($old_ot == NULL) {
				if ($new_ot == NULL) {
					header('HTTP/1.1 500 Internal Server Error');
					$messages = "Outlet tidak boleh kosong!";
				}
				$old_ot == NULL;
			}

			foreach ($old_ot as $key => $subValue) {
				if (@$subValue['show'] == NULL) {
					$subValue['show'] = 'no';
				} else {
					$subValue['show'] = 'yes';
				}

				if ($subValue['ot']) {
					$tempold["id"] = $subValue['ot'];
					$tempold["showmenu"] = $subValue['show'];
					array_push($outlet, @$tempold);
				}
			}

			foreach ($new_ot as $key => $subValue) {
				if (@$subValue['new_show'] == NULL) {
					$subValue['new_show'] = 'no';
				} else {
					$subValue['new_show'] = 'yes';
				}

				if ($subValue['new_ot']) {
					$tempnew["id"] = $subValue['new_ot'];
					$tempnew["showmenu"] = $subValue['new_show'];
					array_push($outlet, @$tempnew);
				}
			}

			$mdata = array(
				'kategori_id' => $id,
				'kelompok_id'  => $kelompok,
				'kategori'  => $nama,
				'outlet' => $outlet
			);

			$url = URLAPI . "/v1/kategori/update_kategori";
			$result = apisbc($url, json_encode($mdata));

			if (@$result->code == 200) {
				// if ($listDel != NULL) {
				// 	foreach ($listDel as $ls) {
				// 		$urlDel = URLAPI . "/v1/outlet/delete_list_ot_kategori?kt=" . $ls['kt'] . "&ot=" . $ls['ot'];
				// 		$resultDel = apisbc($urlDel);
				// 		if (@$resultDel->code == 200) {
				// 			$messages = 'Data berhasil dirubah!';
				// 		}
				// 	}
				// }
				$messages = 'Data berhasil dirubah!';
			} else {
				header('HTTP/1.1 500 Internal Server Error');
				$messages = $result->messages;
			}
		}

		echo json_encode($messages);
	}

	public function list_ot_kt()
	{
		$input		= $this->input;
		$id_outlets = $this->security->xss_clean($input->post("id_outlets", FILTER_SANITIZE_STRING));
		$id_kt = $this->security->xss_clean($input->post("id_kt", FILTER_SANITIZE_STRING));

		$url_kt_outlet = URLAPI . "/v1/outlet/get_kategori_outlet";
		$kt_outlet   = apisbc($url_kt_outlet)->messages;

		$url_outlet = URLAPI . "/v1/outlet/get_outlet?member_id=" . $_SESSION['user_id'];
		$outlet   = apisbc($url_outlet)->messages;

		$listot = explode(",", $id_outlets);

		$data = array(
			"private_js"   => "admin/pages/product/kategori/js/edit_js",
			"listot"     	=> $listot,
			"id_outlets"     => $id_outlets,
			"id_kt"   		=> $id_kt,
			"dt_outlet"   	=> $outlet,
			"dt_kt_outlet"	=> $kt_outlet,
		);

		$response = array(
			"messages"   => utf8_encode($this->load->view('admin/pages/product/kategori/list-otlet-kategori', $data, TRUE))
		);

		echo json_encode($response);
	}

	public function delete_list_ot_kategori()
	{
		$kt = $this->security->xss_clean($this->input->get('kt'));
		$ot = $this->security->xss_clean($this->input->get('ot'));

		$url = URLAPI . "/v1/outlet/delete_list_ot_kategori?kt=" . $kt . "&ot=" . $ot;
		$result = apisbc($url);

		if (@$result->code == 200) {
			$messages = "Data berhasil dihapus!";
		} else {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = $result->messages;
		}

		echo json_encode($messages);
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

	public function deletekategori()
	{
		$id = $this->security->xss_clean($this->input->get('kategori'));

		$url = URLAPI . "/v1/kategori/delete_kategori?kategori_id=" . $id;
		$result = apisbc($url);

		if (@$result->code == 200) {
			$messages = "Data berhasil dihapus!";
		} else {
			header('HTTP/1.1 500 Internal Server Error');
			$messages = $result->messages;
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
		$url_outlet = URLAPI . "/v1/outlet/get_outlet?member_id=" . $_SESSION['user_id'];
		$outlet   = apisbc($url_outlet)->messages;

		$url_kategori = URLAPI . "/v1/kategori/get_data_kategori?member_id=" . $_SESSION['user_id'];
		$kategori = apisbc($url_kategori)->messages;

		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/produk-add-step-1",
			"titlehead"     => "Product / Tambah Produk",
			"show_produk"   => "show",
			"mn_produk3"   => "active",
			"private_js"   => "admin/pages/product/js/produk_js",
			"outlet"   => $outlet,
			"kategori"   => $kategori,
		);

		$this->load->view('admin/wrapper', $data);
	}

	public function getImages()
	{
		$messages = '';
		if (!empty($_FILES["foto"]["name"])) {
			$listImg = [];
			foreach ($_FILES["foto"] as $dt) {
				print("<pre>" . print_r($dt, true) . "</pre>");
				for ($i = 0; $i < count($dt); $i++) {
					// $temp['name'] = $dt[$i];
					print("<pre>" . print_r($dt[$i], true) . "</pre>");
				}
			}
			// $messages = base64_encode(file_get_contents($_FILES["foto"]));
		}

		echo $messages;
		print("<pre>" . print_r($_FILES["foto"], true) . "</pre>");
		die;
		// echo json_encode($messages);
	}

	public function addprodukstep2()
	{
		$data = array(
			"title"     => NAMETITLE . " - Product",
			"content"   => "admin/pages/product/produk-add-step-2",
			"titlehead"     => "Product / Tambah Produk",
			"show_produk"   => "show",
			"mn_produk3"   => "active",
			"private_js"   => "admin/pages/product/js/produk_step2_js",
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
