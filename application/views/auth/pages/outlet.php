<div class="auth">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 d-none d-lg-grid"></div>
			<div class="col-sm-10 col-md-8 col-lg-6 auth-rigth m-auto">
				<div class="col-12 form-bg">
					<div class="header">
						<img src="<?= base_url() ?>assets/images/logo.png" alt="<?= NAMETITLE ?>" class="img-logo">
						<h2>Daftar Outlet</h2>
					</div>
					<div class="form-auth">
						<?php if (@isset($_SESSION["failed"])) { ?>
							<div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
								<span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>
						<form method="POST" action="<?= base_url(); ?>auth/createOutlet" class="col-12">
							<div class="col-12 mb-4">
								<label for="namaoutlet" class="form-label">Nama Outlet</label>
								<div class="input-group">
									<div class="input-group-text">
										<i class="fa-solid fa-building-user"></i>
									</div>
									<input type="text" name="namaoutlet" class="form-control" id="namaoutlet" value="<?= set_value('namaoutlet'); ?>" required>
								</div>
								<?= form_error('namaoutlet', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-12 mb-4">
								<label for="alamat" class="form-label">Alamat</label>
								<div class="input-group">
									<div class="input-group-text">
										<i class="fa-solid fa-map-location"></i>
									</div>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?= set_value('alamat'); ?>" required>
								</div>
								<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-12 mb-4">
								<label for="kota" class="form-label">Kota</label>
								<div class="input-group">
									<div class="input-group-text">
										<i class="fa-solid fa-map-location"></i>
									</div>
									<input type="text" name="kota" class="form-control" id="kota" value="<?= set_value('kota'); ?>" required>
								</div>
								<?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-12 mb-4">
								<label for="telp" class="form-label">No. Telephon</label>
								<div class="input-group">
									<div class="input-group-text">
										<i class="fa-solid fa-mobile"></i>
									</div>
									<input type="text" name="telp" class="form-control" id="telp" value="<?= set_value('telp'); ?>" required>
								</div>
								<?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-12 mb-4">
								<label for="bisnis_category" class="form-label">Kategori Bisnis</label>
								<div class="input-group">
									<div class="input-group-text">
										<i class="fa-solid fa-city"></i>
									</div>
									<select class="form-select" aria-label="Default select example" name="bisnis_category">
										<option selected>--Pilih Kategori--</option>
										<option value="Perdagangan">Perdagangan</option>
										<option value="Jasa">Jasa</option>
									</select>
								</div>
								<?= form_error('bisnis_category', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="col-12 d-grid gap-2 mb-2">
								<button class="btn btn-auth">Buat Outlet <i class="fa fa-arrow-right"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>