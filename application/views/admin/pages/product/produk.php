<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Products-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
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
                    <a href="<?= base_url() ?>product/addproduk" class="btn btn-sm fw-bold btn-primary">Tambah Produk</a>
                </div>
                <!--end::Select-->

                <!--begin::Export dropdown-->
                <button type="button" class="btn btn-sm btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-exit-up fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Export Report</button>
                <!--begin::Menu-->
                <div id="kt_ecommerce_report_views_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
                <!--end::Export dropdown-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga Modal</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                    <tr>
                        <td>Airsopgan</td>
                        <td class="">Mainan</td>
                        <td class="">Rp100.000</td>
                        <td class="">Rp110.000</td>
                        <td class="">Rp150.000</td>
                        <td class=""><span class="badge badge-light-warning fw-bold px-4 py-3">Kosong</span></td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</div>
<!--end::Content container-->