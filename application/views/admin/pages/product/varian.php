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
                        <h3 class="fw-bold mb-1">Tambah Varian</h3>
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
                    <form id="form_varian" class="form" action="<?= base_url() ?>product/addvarian" method="post" autocomplete="off">
                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Nama Produk Varian</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control mb-3 mb-lg-0" placeholder="Contoh : Size/Warna" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <!--begin::Repeater-->
                        <div class="fv-row mb-10" id="addSubForm">
                            <div data-repeater-list="addSubForm">
                                <div data-repeater-item>
                                    <div class="form-group row">
                                        <div class="col-8">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2">Masukkan Produk Varian</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="sub" class="form-control mb-3 mb-lg-0" placeholder="Contoh : Merah / Putih, XL/L/M" value="" />
                                            <!--end::Input-->
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-10">
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

        <!--begin::Col-->
        <div class="col mb-xl-10">
            <!--begin::Table-->
            <div class="card card-flush mt-6 mt-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Daftar Varian</h3>
                        <!-- <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div> -->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar my-1">
                        <!--begin::Select-->
                        <div class="me-6 my-1">
                            <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="collapse" href="#addData" role="button" aria-expanded="false" aria-controls="addData">Tambah Varian</a>
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
                                    <th>Nama Varian</th>
                                    <th>Setting Pilihan Varian</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6">
                                <tr>
                                    <td>Baru</td>
                                    <td>???</td>
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