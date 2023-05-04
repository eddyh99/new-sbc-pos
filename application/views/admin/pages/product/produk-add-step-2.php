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
                    <div class="stepper-item completed">
                        <h3 class="stepper-title">Informasi Produk</h3>
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 2-->
                    <div class="stepper-item current">
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
                <form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="form_kelompok">
                    <!--begin::Step 1-->
                    <div class="current" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <div class="fv-row mb-10">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5 mb-5">
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="required form-label">Satuan Terkecil</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_address_1" placeholder="Satuan" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">Konversi</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_address_2" placeholder="1" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">SKU</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_address_2" placeholder="SKU" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5 mb-5">
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="required form-label">Harga Beli</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_address_1" placeholder="Harga Beli" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">Harga Jual</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_address_2" placeholder="Harga Jual" />
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
                                <!--begin::Title-->
                                <div class="fs-3 fw-bold mb-3">Dimensi Produk</div>
                                <!--end::Title-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5 mb-5">
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="required form-label">Volume Produk (P x L x T)</label>
                                        <!--end::Label-->

                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="P" />
                                                    <!--end::Input-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="L" />
                                                    <!--end::Input-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="T" />
                                                    <!--end::Input-->
                                                    <span>cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                    </div>

                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">Berat</label>
                                        <!--end::Label-->

                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="P" />
                                                    <!--end::Input-->
                                                    <span>gram</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>

                            <hr>

                            <!--begin::Repeater-->
                            <div class="fv-row mb-10" id="addSubForm">
                                <div data-repeater-list="addSubForm">
                                    <div data-repeater-item>
                                        <div class="col text-end">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-10 ms-auto">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5 mb-5">
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="required form-label">Satuan Terkecil</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="billing_order_address_1" placeholder="Satuan" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Konversi</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="billing_order_address_2" placeholder="1" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">SKU</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="billing_order_address_2" placeholder="SKU" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5 mb-5">
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="required form-label">Harga Beli</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="billing_order_address_1" placeholder="Harga Beli" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Harga Jual</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="billing_order_address_2" placeholder="Harga Jual" />
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
                                        <!--begin::Title-->
                                        <div class="fs-3 fw-bold mb-3">Dimensi Produk</div>
                                        <!--end::Title-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5 mb-5">
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="required form-label">Volume Produk (P x L x T)</label>
                                                <!--end::Label-->

                                                <!--begin::Form group-->
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                        <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="P" />
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="L" />
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="T" />
                                                            <!--end::Input-->
                                                            <span>cm</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form group-->
                                            </div>

                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Berat</label>
                                                <!--end::Label-->

                                                <!--begin::Form group-->
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                        <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mw-50px text-center" name="product_option_value" placeholder="P" />
                                                            <!--end::Input-->
                                                            <span>gram</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form group-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <hr>
                                    </div>
                                </div>
                                <!--begin::Form group-->
                                <div class="form-group mt-5">
                                    <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                        <i class="ki-duotone ki-plus fs-3"></i>
                                        Tambah Harga
                                    </a>
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Repeater-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">kosongkan harga jual, jika harga jual/min pembelian berdasarkan variasi produk</div>
                            <!--end::Description-->
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
                            <button type="submit" class="btn btn-lg btn-light" id="btn_submit_kelompok">Selanjutnya
                                <i class="ki-duotone ki-arrow-right fs-4 me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i></button>
                            <!--end::Actions-->

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
<!--end::Content container-->