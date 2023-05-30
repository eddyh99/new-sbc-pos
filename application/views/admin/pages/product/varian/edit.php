<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-10 mb-5 mb-xl-0 justify-content-center">
		<!--begin::Col-->
		<div class="col-md-8 mb-xl-10">
			<!--begin::Card-->
			<div class="card card-flush mt-6 mt-xl-9">
				<!--begin::Card header-->
				<div class="card-header mt-5">
					<!--begin::Card title-->
					<div class="card-title flex-column">
						<h3 class="fw-bold mb-1">Tambah Varian</h3>
						<!-- <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div> -->
					</div>
					<!--end::Card title-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Form-->
					<form id="form_varian" class="form" method="post" autocomplete="off">
						<input type="text" name="id_varian" value="<?= $varian->id ?>" hidden />
						<!--begin::Input group-->
						<div class="fv-row mb-5">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Nama Produk Varian</label>
							<!--end::Label-->

							<!--begin::Input-->
							<input type="text" name="name" class="form-control mb-3 mb-lg-0" placeholder="Contoh : Size/Warna" value="<?= $varian->namavarian ?>" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->

						<!--begin::Input group-->
						<div class="fv-row">
							<!--begin::Label-->
							<label class="fw-semibold fs-6 mb-2">Masukkan Produk Varian</label>
							<!--end::Label-->
							<div id="list_subvarian">
							</div>
						</div>
						<!--end::Input group-->

						<!--begin::Input group-->
						<!--begin::Repeater-->
						<div class="fv-row mb-10" id="addSubForm">
							<div data-repeater-list="addSubForm">
								<div data-repeater-item class="mb-5">
									<div class="form-group row">
										<div class="col">
											<!--begin::Input-->
											<input type="text" name="new" class="form-control mb-3 mb-lg-0" placeholder="Contoh : Merah / Putih, XL/L/M" value="" />
											<!--end::Input-->
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
									Tambah Sub Varian
								</a>
							</div>
							<!--end::Form group-->
						</div>
						<!--end::Input group-->

						<!--begin::Actions-->
						<button id="btn_submit_varian" type="submit" class="btn btn-primary">
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