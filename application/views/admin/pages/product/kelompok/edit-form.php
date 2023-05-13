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