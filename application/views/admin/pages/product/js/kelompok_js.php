<script>
	// Define form element
	const form = document.getElementById('form_kelompok');

	// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
	var validator = FormValidation.formValidation(
		form, {
			fields: {
				'name': {
					validators: {
						notEmpty: {
							message: 'Name is required'
						}
					}
				},
			},

			plugins: {
				trigger: new FormValidation.plugins.Trigger(),
				bootstrap: new FormValidation.plugins.Bootstrap5({
					rowSelector: '.fv-row',
					eleInvalidClass: '',
					eleValidClass: ''
				})
			}
		}
	);

	// Submit button handler
	const submitButton = document.getElementById('btn_submit_kelompok');
	submitButton.addEventListener('click', function(e) {
		// Prevent default button action
		e.preventDefault();

		// Validate form before submit
		if (validator) {
			validator.validate().then(function(status) {
				if (status == 'Valid') {
					// Show loading indication
					submitButton.setAttribute('data-kt-indicator', 'on');

					// Disable button to avoid multiple click
					submitButton.disabled = true;

					var form = $('#form_kelompok').serialize();
					$.ajax({
						type: 'POST',
						url: "<?= base_url() ?>product/addkelompok",
						data: form,
						cache: false,
						error: function(xhr, status, error) {
							// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							setTimeout(function() {
								// Remove loading indication
								submitButton.removeAttribute('data-kt-indicator');

								// Enable button
								submitButton.disabled = false;

								// Show popup confirmation
								Swal.fire({
									text: "Data gagal ditambah",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "Ok!",
									customClass: {
										confirmButton: "btn btn-danger"
									}
								});
							}, 2000);

						},
						success: function(data) {
							Colforminput = document.getElementById('addData');
							// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							setTimeout(function() {
								// Remove loading indication
								submitButton.removeAttribute('data-kt-indicator');

								// Enable button
								submitButton.disabled = false;

								// Hide Form
								Colforminput.classList.remove("show");

								// Show popup confirmation
								Swal.fire({
									text: "Data berhasil ditambah",
									icon: "success",
									buttonsStyling: false,
									confirmButtonText: "Ok!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								});

								showList();
							}, 2000);
						}
					});
				}
			});
		}
	});

	showList();

	function showList() {
		// Class definition
		var KTDatatablesServerSide = function() {
			// Shared variables
			var table;
			var dt;
			var filterPayment;

			// Private functions
			var initDatatable = function() {
				dt = $("#kt_datatable_kelompok").DataTable({
					bDestroy: true,
					searchDelay: 500,
					processing: true,
					serverSide: false,

					stateSave: true,
					ajax: {
						url: "<?= base_url(); ?>product/listkelompok",
						type: "POST",

						dataSrc: function(data) {
							console.log(data["kelompok"]);
							return data["kelompok"];
						},
					},
					columns: [{
							data: 'kelompok'
						},
						{
							data: 'jml'
						},
					],
				});

				table = dt.$;
			}

			// Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
			var handleSearchDatatable = function() {
				const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
				filterSearch.addEventListener('keyup', function(e) {
					dt.search(e.target.value).draw();
				});
			}

			// Public methods
			return {
				init: function() {
					initDatatable();
					handleSearchDatatable();
				}
			}
		}();

		// On document ready
		KTUtil.onDOMContentLoaded(function() {
			KTDatatablesServerSide.init();
		});

	}
</script>