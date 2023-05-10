<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('user_id')) {
			redirect("dashboard");
		}

		$data = array(
			"title"     => NAMETITLE . " - Login",
			"content"   => "auth/pages/index",
		);

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required|min_length[8]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/wrapper', $data);
		} else {
			$this->_login();
		}
	}

	public function _login()
	{
		$uname = $this->security->xss_clean($this->input->post('email'));
		$pass = $this->security->xss_clean($this->input->post('password'));

		$mdata = array(
			'email' => $uname,
			'password' => $pass
		);

		$url = URLAPI . "/v1/auth/signin";
		$result = apisbc($url, json_encode($mdata));
		if (@$result->code != 200) {
			$this->session->set_flashdata('failed', $result->messages);
			redirect(base_url() . "auth");
			return;
		}

		$userid = $result->messages->id;
		$session_data = array(
			'user_id'   => $userid,
			'appid'   => $result->messages->appid,
			'email'   => $result->messages->email,
			'passwd'   => $result->messages->passwd,
			'nama'   => $result->messages->nama,
			'status'   => $result->messages->status,
			'created_at'   => $result->messages->created_at,
			'update_at'   => $result->messages->update_at
		);
		$this->session->set_userdata($session_data);
		redirect('dashboard');
	}


	public function createOutlet()
	{
		$data = array(
			"title"     => NAMETITLE,
			"content"   => "auth/pages/outlet",
		);

		$this->form_validation->set_rules('namaoutlet', '', 'trim|required');
		$this->form_validation->set_rules('alamat', '', 'trim|required');
		$this->form_validation->set_rules('kota', '', 'trim|required');
		$this->form_validation->set_rules('telp', '', 'trim|required');
		$this->form_validation->set_rules('bisnis_category', '', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/wrapper', $data);
		} else {
			$namaoutlet = $this->security->xss_clean($this->input->post('namaoutlet'));
			$alamat = $this->security->xss_clean($this->input->post('alamat'));
			$kota = $this->security->xss_clean($this->input->post('kota'));
			$telp = $this->security->xss_clean($this->input->post('telp'));
			$bisnis_category = $this->security->xss_clean($this->input->post('bisnis_category'));

			$mdata = array(
				'member_id' => $_SESSION['user_id'],
				'namaoutlet' => $namaoutlet,
				'alamat' => $alamat,
				'kota' => $kota,
				'telp' => $telp,
				'bisnis_category' => $bisnis_category,
			);

			$url = URLAPI . "/v1/outlet/add_outlet";
			$result = apisbc($url, json_encode($mdata));
			if (@$result->code != 200) {
				$this->session->set_flashdata('failed', $result->messages);
				$this->load->view('auth/wrapper', $data);
				return;
			}

			$this->session->set_flashdata('success_create_outlet', 'Outlet berhasil dibauat!');
			redirect('dashboard');
		}
	}

	public function regis()
	{
		if ($this->session->userdata('user_id')) {
			redirect("dashboard");
		}
		$data = array(
			"title"     => NAMETITLE . " - Daftar akun",
			"content"   => "auth/pages/regis",
		);

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirmpassword', 'Konfirmasi Kata Sandi', 'trim|required|matches[password]');
		$this->form_validation->set_rules('cekregis', 'Ketentuan Layanan & Kebijakan SBC', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/wrapper', $data);
		} else {
			$input		= $this->input;
			$nama		= $this->security->xss_clean($input->post("nama"));
			$email		= $this->security->xss_clean($input->post("email"));
			$pass		= $this->security->xss_clean($input->post("password"));

			$mdata = array(
				'nama'     => $nama,
				'email'     => $email,
				'password'  => $pass
			);

			$url = URLAPI . "/v1/auth/register";
			$result = apisbc($url, json_encode($mdata));

			if ($result->code == 200) {
				$subject = 'SBC-POS Registration';
				$messages =
					'<h3>Selamat datang di pendaftaran Akun SBC-POS! Silahkan Konfirmasi!</h3><br>
				<p>Anda telah mendaftarkan akun SBC-POS dengan ' . $email . '. Silahkan pilih "Aktivasi Sekarang" untuk mengkonfirmasi akun Anda.</p><br>

				<a href="' . base_url("auth/activate?token=") . $result->messages->token . '"
				style="text-decoration: none; border: none; background: #04295D; padding: .5rem 1rem; color: #FFFFFF;"
				>Aktivasi Sekarang</a>
				';
				// send_email($email, $subject, $messages, $this->phpmailer_lib->load());

				$this->session->set_flashdata('token', $result->messages->token);
				redirect(base_url() . "auth/regis_notif");
				return;
			} else {
				$this->session->set_flashdata('failed', $result->messages);
				$this->load->view('auth/wrapper', $data);
				return;
			}
		}
	}

	public function regis_notif()
	{
		$data = array(
			"title"     => NAMETITLE,
			"content"   => "auth/pages/notif-regis",
		);

		$this->load->view('auth/wrapper', $data);
	}

	public function activeaccount()
	{
		$token = $this->security->xss_clean($this->input->get('token'));
		$url = URLAPI . "/v1/auth/activate?token=" . $token;
		$result = apisbc($url);

		if (!empty(@$result->code == 200)) {
			$this->session->set_flashdata('success', "Activation success");
			redirect(base_url() . "auth");
			return;
		} else {
			$this->session->set_flashdata('failed', $result->messages);
			redirect(base_url() . "auth");
			return;
		}
	}

	public function forgetpass()
	{
		$data = array(
			"title"     => NAMETITLE . " - Lupa password",
			"content"   => "auth/pages/forgetpass",
		);

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/wrapper', $data);
		} else {
			$email = $this->security->xss_clean($this->input->post('email'));

			$url = URLAPI . "/v1/auth/resetpassword?email=" . $email;
			$result = apisbc($url);
			if (!empty(@$result->code == 200)) {
				$subject =  'Reset Password for ' . NAMETITLE . ' Account';
				$messages =
					'<p>Dear ' . $email . ',</p>
				<p>Seseorang mencoba untuk mengganti kata sandi anda. Jika orang tersebut adalah Anda, silakan tekan "Ubah Password" di bawah untuk mengonfirmasi identitas Anda.</p><br>

				<a href="' . base_url("auth/recovery?token=") . $result->messages->token . '"
				style="text-decoration: none; border: none; background: #04295D; padding: .5rem 1rem; color: #FFFFFF;"
				>Ubah Password</a>
				';
				// send_email($email, $subject, $messages, $this->phpmailer_lib->load());

				$this->session->set_flashdata('token', $result->messages->token);
				redirect(base_url() . "auth/forgetpass_notif");
				return;
			} else {
				$this->session->set_flashdata('failed', $result->messages);
				$this->load->view('auth/wrapper', $data);
				return;
			}
		}
	}

	public function forgetpass_notif()
	{
		$data = array(
			"title"     => NAMETITLE,
			"content"   => "auth/pages/forgetpass-notif",
		);

		$this->load->view('auth/wrapper', $data);
	}

	public function recovery()
	{
		$token = $this->security->xss_clean($this->input->get('token'));
		if (empty($token)) {
			$this->session->set_flashdata('failed', 'Token is required');
			redirect(base_url() . "auth");
			return;
		}

		$url = URLAPI . "/v1/auth/recoverytoken?token=" . $token;
		$result = apisbc($url);

		if (!empty(@$result->code == 200)) {
			$this->session->set_flashdata('token', $result->messages->token);
			redirect(base_url() . "auth/changepass");
			return;
		} else {
			$this->session->set_flashdata('failed', $result->messages);
			redirect(base_url() . "auth");
			return;
		}
	}

	public function changepass()
	{
		$data = array(
			"title"     => NAMETITLE . " - Lupa password",
			"content"   => "auth/pages/changepass",
		);

		$this->form_validation->set_rules('token', 'Token', 'trim|required');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirmpassword', 'Konfirmasi Kata Sandi', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/wrapper', $data);
		} else {
			$input		= $this->input;
			$token		= $this->security->xss_clean($input->post("token"));
			$pass		= $this->security->xss_clean($input->post("password"));

			$mdata = array(
				'password'  => sha1($pass),
				'token'     => $token
			);

			$url = URLAPI . "/v1/auth/updatepassword";
			$result = apisbc($url, json_encode($mdata));
			if ($result->code == 200) {
				$this->session->set_flashdata("success", "Your password is successfully changed");
				redirect(base_url() . "auth");
			} else {
				$this->session->set_flashdata("failed", $result->messages);
				redirect(base_url() . "auth");
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		$this->session->set_flashdata('success', 'You Have been logged out');
		redirect('auth');
	}
}
