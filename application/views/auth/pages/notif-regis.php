<div class="auth">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 d-none d-lg-grid"></div>
			<div class="col-sm-10 col-md-8 col-lg-6 auth-rigth m-auto">
				<div class="col-12 form-bg">
					<div class="mt-auto">
						<div class="header">
							<img src="<?= base_url() ?>assets/images/email.png" alt="<?= NAMETITLE ?>" class="img-logo">
							<h2>Sukses Registrasi</h2>
							<p>
								Link verifikasi telah dikirimkan ke email kamu.<br>
								Cek email dan klik tombol <b>Aktivasi Sekarang</b>, untuk melanjutkan proses pendaftaran
							</p>
							<?php if (@isset($_SESSION["token"])) { ?>
								<a class="btn btn-primary" href="<?= base_url("auth/activeaccount?token=") . $_SESSION['token'] ?>">Aktivasi Account</a>
							<?php } ?>
						</div>
						<div class="form-auth mt-5">
							<div class="col-12 d-grid gap-2 mb-5">
								<a href="<?= base_url() ?>auth" class="btn btn-auth">Kembali Login <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-12 mt-auto footer-auth">
						<a href="<?= base_url() ?>" class="link">Privacy Policy</a>
						<a href="<?= base_url() ?>" class="link">Terms and Condition</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>