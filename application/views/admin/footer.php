</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->
<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer">
	<!--begin::Footer container-->
	<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted fw-semibold me-1"><?= date('Y'); ?> &copy;</span>
			<a href="#" target="_blank" class="text-gray-800 text-hover-primary">SoftwareBali</a>
		</div>
		<!--end::Copyright-->
	</div>
	<!--end::Footer container-->
</div>
<!--end::Footer-->
</div>
<!--end:::Main-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up">
		<span class="path1"></span>
		<span class="path2"></span>
	</i>
</div>
<!--end::Scrolltop-->

<!--begin::Javascript-->
<script>
	var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= base_url() ?>assets/dashboardadmin/assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?= base_url() ?>assets/dashboardadmin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->

<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/apps/projects/project/project.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/utilities/modals/create-account.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/apps/ecommerce/reports/views/views.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/widgets.bundle.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/widgets.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/utilities/modals/create-app.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/utilities/modals/new-target.js"></script>
<script src="<?= base_url() ?>assets/dashboardadmin/assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->

<?php
if (isset($index_js)) {
	$this->load->view($index_js);
}
if (isset($private_js)) {
	$this->load->view($private_js);
}
if (@isset($_SESSION['success_create_outlet'])) {
?>
	<script>
		setTimeout(function() {
			// Show popup confirmation
			Swal.fire({
				text: "Outlet berhasil dibauat!",
				icon: "success",
				buttonsStyling: false,
				confirmButtonText: "Ok!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
			});
		}, 100);
	</script>
<?php } ?>
</body>
<!--end::Body-->

</html>