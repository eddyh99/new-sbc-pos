<div class="auth">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 d-none d-lg-grid"></div>
			<div class="col-sm-10 col-md-8 col-lg-6 auth-rigth m-auto">
				<div class="col-12 form-bg">
					<div class="header">
						<img src="<?= base_url() ?>assets/images/logo.png" alt="<?= NAMETITLE ?>" class="img-logo">
						<h2>Atur Ulang Kata Sandi</h2>
					</div>
					<div class="form-auth">
						<?php if (@isset($_SESSION["failed"])) { ?>
							<div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
								<span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>
						<form method="POST" action="<?= base_url(); ?>auth/changepass" class="col-12">
							<input type="text" name="token" id="token" value="<?= $_SESSION["token"] ?>" hidden>
							<div class="col-12 mb-4">
								<label for="password" class="form-label">Kata Sandi</label>
								<div class="input-group">
									<div class="input-group-text">
										<span>
											<i class="fa fa-lock"></i>
										</span>
									</div>
									<input type="password" name="password" class="form-control" id="password" placeholder="*****************" required>
									<div class="input-group-text">
										<span>
											<i class="far fa-eye-slash" id="togglePassword" style="cursor: pointer" toggle="#password"></i>
										</span>
									</div>
								</div>
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-12 mb-3">
								<label for="password" class="form-label">Ulang Kata Sandi</label>
								<div class="input-group">
									<div class="input-group-text">
										<span>
											<i class="fa fa-lock"></i>
										</span>
									</div>
									<input type="password" name="confirmpassword" class="form-control" id="password1" placeholder="*****************" required>
									<div class="input-group-text">
										<span>
											<i class="far fa-eye-slash" id="togglePassword1" style="cursor: pointer" toggle="#password1"></i>
										</span>
									</div>
								</div>
								<?= form_error('confirmpassword', '<small class="text-danger pl-3">', '</small>'); ?>
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