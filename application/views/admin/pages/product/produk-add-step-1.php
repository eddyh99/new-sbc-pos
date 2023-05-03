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
                <form class="form mx-auto mw-600px w-100 pt-15 pb-10" action="#" autocomplete="off" novalidate="novalidate" id="form_kelompok">
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
                                <label class="required fw-semibold fs-6 mb-2">Nama Produk</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control mb-3 mb-lg-0" placeholder="Nama produk" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="fw-semibold fs-6 mb-2">Deskripsi Produk</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <textarea class="form-control" data-kt-autosize="true" placeholder="Deskripsi Produk"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="fw-semibold fs-6 mb-2">Foto</label>
                                <!--end::Label-->

                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-file-up text-primary fs-3x">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Pilih atau letakkan berkas di sini</h3>
                                            <span class="fs-7 fw-semibold text-gray-400">Maksimal 5 foto</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->

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
                                <select class="form-select" data-control="select2" data-placeholder="Pilih Kategori">
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
                                    <input class="form-check-input " type="checkbox" value="" id="kt_flexSwitchCustomDefault_1_1" />
                                    <label class="form-check-label" for="flexSwitchDefault">
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
                                <input type="text" name="name" class="form-control mb-3 mb-lg-0" placeholder="Stok minimum produk" value="" />
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
                            <button type="submit" class="btn btn-lg btn-primary" id="btn_submit_kelompok">Selanjutnya
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