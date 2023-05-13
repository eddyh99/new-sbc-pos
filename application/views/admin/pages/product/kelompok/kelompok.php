<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-10 mb-5 mb-xl-0">
		<!--begin::Col-->
		<div class="col-md-4 mb-xl-10 collapse" id="addData">
			<!--begin::Card-->
			<div class="card card-flush mt-6 mt-xl-9">
				<!--begin::Card header-->
				<div class="card-header mt-5">
					<!--begin::Card title-->
					<div class="card-title flex-column">
						<h3 class="fw-bold mb-1">Tambah Kelompok</h3>
						<!-- <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div> -->
					</div>
					<!--end::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar my-1">
						<!--begin::Select-->
						<div class="my-1">
							<a data-bs-toggle="collapse" href="#addData" role="button" aria-expanded="false" aria-controls="addData">
								<i class="ki-duotone ki-abstract-11 fs-2 text-danger">
									<i class="path1"></i>
									<i class="path2"></i>
								</i>
							</a>
						</div>
						<!--end::Select-->
					</div>
					<!--begin::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Form-->
					<form id="form_kelompok" class="form" method="post" autocomplete="off">
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Nama Kelompok</label>
							<!--end::Label-->

							<!--begin::Input-->
							<input type="text" id="name" name="name" class="form-control mb-3 mb-lg-0" placeholder="Contoh : Makanan" value="" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->

						<!--begin::Actions-->
						<button id="btn_submit_kelompok" type="submit" class="btn btn-primary">
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

		<!--begin::Col-->
		<div class="col mb-xl-10">
			<!--begin::Table-->
			<div class="card card-flush mt-6 mt-xl-9">
				<!--begin::Card header-->
				<div class="card-header align-items-center py-5 gap-2 gap-md-5">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>
							<input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
						</div>
						<!--end::Search-->
						<!--begin::Export buttons-->
						<div id="kt_ecommerce_report_views_export" class="d-none"></div>
						<!--end::Export buttons-->
					</div>
					<!--end::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
						<!--begin::Select-->
						<div class="me-6 my-1">
							<a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="collapse" href="#addData" role="button" aria-expanded="false" aria-controls="addData" id="btnAdd">Tambah Kelompok</a>
						</div>
						<!--end::Select-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table id="kt_datatable_kelompok" class="table align-middle table-row-dashed fs-6 gy-5">
							<thead>
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="w-10px pe-2">
										<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
											<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_kelompok .form-check-input" value="1" />
										</div>
									</th>
									<th>Kelompok</th>
									<th>Jumlah Kategori</th>
									<th class="text-end min-w-100px">Actions</th>
								</tr>
							</thead>
							<tbody class="text-gray-600 fw-semibold">
							</tbody>
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Col-->

		<?php foreach ($dt_kelompok as $dt) { ?>
			<!--begin::Col-->
			<div class="col-md-4 mb-xl-10 collapse" id="changeData<?= $dt->id ?>">
				<!--begin::Card-->
				<div class="card card-flush mt-6 mt-xl-9">
					<!--begin::Card header-->
					<div class="card-header mt-5">
						<!--begin::Card title-->
						<div class="card-title flex-column">
							<h3 class="fw-bold mb-1">Ubah Data Kelompok</h3>
							<!-- <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div> -->
						</div>
						<!--end::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar my-1">
							<!--begin::Select-->
							<div class="my-1">
								<a data-bs-toggle="collapse" href="#changeData<?= $dt->id ?>" role="button" aria-expanded="false" aria-controls="changeData<?= $dt->id ?>">
									<i class="ki-duotone ki-abstract-11 fs-2 text-danger">
										<i class="path1"></i>
										<i class="path2"></i>
									</i>
								</a>
							</div>
							<!--end::Select-->
						</div>
						<!--begin::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<!--begin::Form-->
						<form id="form_change_kelompok<?= $dt->id ?>" class="form" method="post" autocomplete="off">
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="required fw-semibold fs-6 mb-2">Nama Kelompok</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" id="id" name="id" value="<?= $dt->id ?>" hidden />
								<input type="text" id="name" name="name" class="form-control mb-3 mb-lg-0" value="<?= $dt->kelompok ?>" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Actions-->
							<button id="btn_change_kelompok<?= $dt->id ?>" type="submit" class="btn btn-primary">
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
		<?php } ?>
	</div>
	<!--end::Row-->
</div>
<!--end::Content container-->