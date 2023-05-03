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
                        <h3 class="fw-bold mb-1">Tambah Kategori</h3>
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
                    <form id="form_kelompok" class="form" action="#" autocomplete="off">
                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Atur Outlet</label>
                            <!--end::Label-->

                            <!--begin::Input Select-->
                            <select class="form-select" data-control="select2" data-placeholder="Pilih Outlet">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <!--end::Input Select-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Nama Kategori</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control mb-3 mb-lg-0" placeholder="Contoh : Makanan" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Kelompok</label>
                            <!--end::Label-->

                            <!--begin::Input Select-->
                            <select class="form-select" data-control="select2" data-placeholder="Pilih Outlet">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <!--end::Input Select-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <div class="form-check form-switch form-check-custom form-check-success form-check-solid">
                                <input class="form-check-input " type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">
                                    Tampilkan di menu?
                                </label>
                            </div>
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
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Daftar Kategori</h3>
                        <!-- <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div> -->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar my-1">
                        <!--begin::Select-->
                        <div class="me-6 my-1">
                            <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="collapse" href="#addData" role="button" aria-expanded="false" aria-controls="addData">Tambah Kategori</a>
                        </div>
                        <!--end::Select-->
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search..." />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                            <thead class="fs-7 text-gray-400 text-uppercase">
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Jumlah Produk</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6">
                                <tr>
                                    <td>Elektronik</td>
                                    <td>100</td>
                                    <td><span class="badge badge-light-success fw-bold px-4 py-3">Aktif</span></td>
                                </tr>
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
    </div>
    <!--end::Row-->
</div>
<!--end::Content container-->