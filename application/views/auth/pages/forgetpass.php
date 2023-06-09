<div class="auth">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 d-none d-lg-grid"></div>
			<div class="col-sm-10 col-md-8 col-lg-6 auth-rigth m-auto">
				<div class="col-12 form-bg">
					<div class="header">
						<img src="<?= base_url() ?>assets/images/logo.png" alt="<?= NAMETITLE ?>" class="img-logo">
						<h2>Atur Ulang Kata Sandi</h2>
						<p>Masukkan Email yang terhubung dengan akun sbc untuk mengatur ulang kata sandi</p>
					</div>
					<div class="form-auth">
						<?php if (@isset($_SESSION["failed"])) { ?>
							<div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
								<span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>
						<form method="POST" action="<?= base_url(); ?>auth/forgetpass" class="col-12">
							<div class="col-12 mb-4">
								<label for="email" class="form-label">Email</label>
								<div class="input-group">
									<div class="input-group-text">
										<span>
											<i class="fa fa-user"></i>
										</span>
									</div>
									<input type="text" name="email" class="form-control" id="email" placeholder="Type here" required>
								</div>
							</div>

							<div class="col-12 d-grid gap-2 mb-2">
								<button class="btn btn-auth">Atur Ulang Kata Sandi <i class="fa fa-arrow-right"></i></button>
							</div>
							<div class="col-12 text-center mb-5">
								<span class="text-normal">Batal? <a href="<?= base_url() ?>auth/index" class="link-form">Masuk di sini</a></span>
							</div>
						</form>
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