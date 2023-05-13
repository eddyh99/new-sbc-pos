<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-10 mb-5 mb-xl-0">
		<!--begin::Col-->
		<div class="col-md mb-xl-10" id="changeData">
			<!--begin::Card-->
			<div class="card card-flush mt-6 mt-xl-9">
				<!--begin::Card header-->
				<div class="card-header mt-5">
					<!--begin::Card title-->
					<div class="card-title flex-column">
						<h3 class="fw-bold mb-1">Ubah Data Kategori</h3>
						<!-- <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div> -->
					</div>
					<!--end::Card title-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Form-->
					<form id="form_change_kategori" class="form" method="post" autocomplete="off" action="<?= base_url() ?>product/editkategori/<?= $dt_kategori->id ?>">
						<input name="id_outlets" type="text" value="<?= $dt_kategori->outlet ?>" hidden>
						<input name="id_kt" type="text" value="<?= $dt_kategori->id ?>" hidden>

						<!--begin::Input group-->
						<div class="fv-row mb-5">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Nama Kategori</label>
							<!--end::Label-->

							<!--begin::Input-->
							<input type="text" name="name" class="form-control mb-3 mb-lg-0" value="<?= $dt_kategori->kategori ?>" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->

						<!--begin::Input group-->
						<div class="fv-row mb-5">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Kelompok</label>
							<!--end::Label-->

							<!--begin::Input Select-->
							<select class="form-select" data-control="select2" data-placeholder="Pilih Kelompok" name="kelompok">
								<option></option>
								<?php foreach ($dt_kelompok as $dtkel) {
								?>
									<option value="<?= $dtkel->id; ?>" <?= ($dtkel->id == $dt_kategori->id_kelompok) ? 'selected' : ''; ?>><?= $dtkel->kelompok; ?></option>
								<?php
								} ?>
							</select>
							<!--end::Input Select-->
						</div>
						<!--end::Input group-->

						<!--begin::Input group-->
						<div class="fv-row mb-5">
							<!--begin::Label-->
							<label class="fw-semibold fs-6 mb-2">Atur Outlet</label>
							<!--end::Label-->
							<div id="list_ot_kt">
							</div>
						</div>
						<!--end::Input group-->

						<!--begin::Repeater-->
						<div class="fv-row mb-10" id="addNewOT">
							<div data-repeater-list="addNewOT">
								<div data-repeater-item class="mb-3">
									<div class="form-group row">
										<div class="col">
											<!--begin::Input Select-->
											<select class="form-select" data-control="select2" data-placeholder="Pilih Outlet Baru" name="new_ot">
												<option></option>
												<?php foreach ($dt_outlet as $dtoutlet) { ?>
													<option value="<?= $dtoutlet->id; ?>"><?= $dtoutlet->namaoutlet; ?></option>
												<?php } ?>
											</select>
											<!--end::Input Select-->

											<!--begin::Input Checkbox-->
											<div class="form-check form-switch form-check-custom form-check-success form-check-solid mt-3">
												<input class="form-check-input h-20px w-30px" type="checkbox" value="yes" id="new_show" name="new_show" />
												<label class="form-check-label" for="new_show">
													Tampilkan di Menu
												</label>
											</div>
											<!--end::Input Checkbox-->

										</div>

										<div class="col-2">
											<a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger">
												<i class="ki-duotone ki-trash fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!--begin::Form group-->
							<div class="form-group mt-5">
								<a href="javascript:;" data-repeater-create class="btn btn-light-primary">
									<i class="ki-duotone ki-plus fs-3"></i>
									Tambah Outlet Lainnya
								</a>
							</div>
							<!--end::Form group-->
						</div>
						<!--end::Input group-->

						<!--begin::Actions-->
						<button id="btn_change_kategori" type="submit" class="btn btn-primary">
							<span class="indicator-label">
								Simpan
							</span>
							<span class="indicator-progress">
								Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
							</span>
						</button>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Col-->

	</div>
	<!--end::Row-->
</div>
<!--end::Content container-->
<?php if (@isset($_SESSION['failed'])) { ?>
	<script>
		setTimeout(function() {
			// Show popup confirmation
			Swal.fire({
				text: "Kategori gagal diubah!",
				icon: "error",
				buttonsStyling: false,
				confirmButtonText: "Ok!",
				customClass: {
					confirmButton: "btn btn-danger"
				}
			});
		}, 100);
	</script>
<?php } ?>