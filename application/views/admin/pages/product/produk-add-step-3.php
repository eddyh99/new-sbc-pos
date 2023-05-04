<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-xxl">

    <div class="row gy-5 g-xl-10 mb-5 mb-xl-0">
        <!--begin::Col-->
        <div class="col-md-4 mb-xl-10 collapse" id="addData">
            <!--begin::Card-->
            <div class="card card-flush mt-6 mt-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Varian</h3>
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
                        <div class="d-flex flex-column flex-md-row gap-5 mb-5">
                            <div class="fv-row flex-row-fluid">
                                <!--begin::Label-->
                                <label class="required form-label">Harga Jual</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control" name="billing_order_address_1" placeholder="1000" value="" />
                                <!--end::Input-->
                            </div>
                            <div class="flex-row-fluid">
                                <!--begin::Label-->
                                <label class="form-label">Min. Pembelian</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control" name="billing_order_address_2" placeholder="1" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Repeater-->
                        <div class="fv-row mb-10" id="addSubForm">
                            <div data-repeater-list="addSubForm">
                                <div data-repeater-item>
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Varian Produk</label>
                                        <!--end::Label-->

                                        <!--begin::Input Select-->
                                        <select class="form-select" data-control="select2" data-placeholder="Pilih Variasi">
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
                                        <label class="required fw-semibold fs-6 mb-2">Sub Varian Produk</label>
                                        <!--end::Label-->

                                        <!--begin::Input Select-->
                                        <select class="form-select" data-control="select2" data-placeholder="Pilih Sub Variasi">
                                            <option></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </select>
                                        <!--end::Input Select-->
                                    </div>
                                    <!--end::Input group-->
                                    <div class="col d-grid gap-2">
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
                                    <!-- begin::Lane -->
                                    <div class="separator separator-dashed my-8"></div>
                                    <!-- end::Lane -->
                                </div>
                            </div>
                            <!--begin::Form group-->
                            <div class="form-group mt-5 d-grid gap-2">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                    <i class="ki-duotone ki-plus fs-3"></i>
                                    Tambah Sub Varian
                                </a>
                            </div>
                            <!--end::Form group-->
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
            <!--begin::Card-->
            <div class="card mt-6 mt-xl-9">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav mb-5">
                            <!--begin::Step 1-->
                            <div class="stepper-item completed">
                                <h3 class="stepper-title">Informasi Produk</h3>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item completed">
                                <h3 class="stepper-title">Harga dan Satuan</h3>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item current">
                                <h3 class="stepper-title">Varian</h3>
                            </div>
                            <!--end::Step 3-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Form-->
                        <form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar my-1 mb-5">
                                        <!--begin::Select-->
                                        <div class="text-end my-1">
                                            <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="collapse" href="#addData" role="button" aria-expanded="false" aria-controls="addData">Tambah Varian</a>
                                        </div>
                                        <!--end::Select-->
                                    </div>
                                    <!--begin::Card toolbar-->
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

                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-15">
                                <!--begin::Wrapper-->
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3">
                                        <i class="ki-duotone ki-arrow-left fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Back</button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <!--begin::Actions-->
                                    <button type="submit" class="btn btn-lg btn-primary" id="btn_submit_kelompok">Simpan
                                        <i class="ki-duotone ki-double-check">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
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
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
<!--end::Content container-->