<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Card-->
	<div class="card">
		<!--begin::Card body-->
		<div class="card-body">
			<!--begin::Stepper-->
			<div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
				<!--begin::Nav-->
				<div class="stepper-nav mb-5">
					<!--begin::Step 1-->
					<div class="stepper-item current">
						<h3 class="stepper-title">Informasi Produk</h3>
					</div>
					<!--end::Step 1-->
					<!--begin::Step 2-->
					<div class="stepper-item">
						<h3 class="stepper-title">Harga dan Satuan</h3>
					</div>
					<!--end::Step 2-->
					<!--begin::Step 3-->
					<div class="stepper-item">
						<h3 class="stepper-title">Varian</h3>
					</div>
					<!--end::Step 3-->
				</div>
				<!--end::Nav-->
				<!--begin::Form-->
				<form class="form mx-auto mw-600px w-100 pt-15 pb-10" method="post" enctype="multipart/form-data" action="<?= base_url() ?>product/getImages" autocomplete="off" novalidate="novalidate" id="form_produk">
					<!--begin::Step 1-->
					<div class="current" data-kt-stepper-element="content">
						<!--begin::Wrapper-->
						<div class="w-100">
							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<!--begin::Label-->
								<label class="required fw-semibold fs-6 mb-2">Pilih Outlet</label>
								<!--end::Label-->

								<!--begin::Input Select-->
								<select class="form-select" data-control="select2" data-placeholder="Pilih Outlet" name="outlet" id="outlet">
									<option></option>
									<?php foreach ($outlet as $ot) { ?>
										<option value="<?= $ot->id ?>"><?= $ot->namaoutlet ?></option>
									<?php } ?>
								</select>
								<!--end::Input Select-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<!--begin::Label-->
								<label class="required fw-semibold fs-6 mb-2">Nama Produk</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" name="name" id="name" class="form-control mb-3 mb-lg-0" placeholder="Nama produk" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<!--begin::Label-->
								<label class="fw-semibold fs-6 mb-2">Deskripsi Produk</label>
								<!--end::Label-->

								<!--begin::Input-->
								<textarea class="form-control" data-kt-autosize="true" placeholder="Deskripsi Produk" name="deskripsi" id="deskripsi"></textarea>
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<!--begin::Label-->
								<label class="fw-semibold fs-6 mb-2">Foto</label>
								<!--end::Label-->

								<!-- <div class="input-group pb-3">
									<input type="file" class="form-control validation-foto" name="foto1" id="foto1" />
								</div>

								<div class="input-group pb-3">
									<input type="file" class="form-control validation-foto" name="foto2" id="foto2" />
								</div>

								<div class="input-group pb-3">
									<input type="file" class="form-control validation-foto" name="foto3" id="foto3" />
								</div>

								<div class="input-group pb-3">
									<input type="file" class="form-control validation-foto" name="foto4" id="foto4" />
								</div>

								<div class="input-group pb-3">
									<input type="file" class="form-control validation-foto" name="foto5" id="foto5" />
								</div> -->

								<!--begin::Image input-->
								<div class="form-control mb-2 d-flex flex-wrap">
									<!--begin::Repeater-->
									<div id="foto" class="col-12">
										<div class="col-12 mb-5">
											<a href="javascript:;" data-repeater-create class="btn btn-flex btn-light-primary">
												<i class="ki-duotone ki-plus fs-3"></i>
												Tambah Foto
											</a>
										</div>
										<div data-repeater-list="foto" class="row">
											<div data-repeater-item class="col-12 px-5">
												<div class="input-group pb-3">
													<input type="file" class="form-control validation-foto" name="foto" id="foto" />
													<button class="border border-secondary btn btn-icon btn-flex btn-light-danger" data-repeater-delete type="button">
														<i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Image input-->

								<!--begin::Description-->
								<div class="text-muted fs-7">Rasio foto 1:1 dengan besar file 10Kb dan maksimal 1Mb, Format foto .jpg .jpeg .png Ukuran minimum 100px x 100px (Untuk gambar optimal gunakan ukuran maksimum 1000px x 1000px). </div>
								<!--end::Description-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<!--begin::Label-->
								<label class="required fw-semibold fs-6 mb-2">Pilih Kategori</label>
								<!--end::Label-->

								<!--begin::Input Select-->
								<select class="form-select" data-control="select2" data-placeholder="Pilih Kategori" name="kategori" id="kategori">
									<option></option>
									<?php foreach ($kategori as $kt) { ?>
										<option value="<?= $kt->id ?>"><?= $kt->kategori ?></option>
									<?php } ?>
								</select>
								<!--end::Input Select-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<div class="form-check form-switch form-check-custom form-check-success form-check-solid">
									<input class="form-check-input" type="checkbox" value="1" id="mstok" name="mstok" />
									<label class="form-check-label" for="mstok">
										Monitor Stok
									</label>
								</div>
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<!--begin::Label-->
								<label class="required fw-semibold fs-6 mb-2">Stok Minimum</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" name="sminimal" id="sminimal" class="form-control mb-3 mb-lg-0" placeholder="Stok minimum produk" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Step 1-->

					<!--begin::Actions-->
					<div class="d-flex flex-stack pt-15">
						<!--begin::Wrapper-->
						<div class="ms-auto">
							<!--begin::Actions-->
							<button type="submit" class="btn btn-lg btn-primary" id="btn_submit_produk">Selanjutnya
								<i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i></button>
							<!--end::Actions-->
						</div>

						<!--end::Wrapper-->
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Stepper-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Content container-->
