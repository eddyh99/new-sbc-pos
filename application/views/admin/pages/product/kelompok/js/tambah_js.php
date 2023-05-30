<script>
	// <!--begin::Tambah Data-->
	const formAdd = document.getElementById('form_tambah_kelompok');
	// Validasi Add Data Proses
	var validator = FormValidation.formValidation(
		formAdd, {
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

	// Add Data Proses
	const buttonAdd = document.getElementById('btn_tambah_kelompok');
	buttonAdd.addEventListener('click', function(e) {
		// Prevent default button action
		e.preventDefault();

		// Validate form before submit
		if (validator) {
			validator.validate().then(function(status) {
				if (status == 'Valid') {
					// Show loading indication
					buttonAdd.setAttribute('data-kt-indicator', 'on');

					// Disable button to avoid multiple click
					buttonAdd.disabled = true;

					var formAdd = $('#form_tambah_kelompok').serialize();
					$.ajax({
						type: 'POST',
						url: "<?= base_url() ?>product/addkelompok",
						data: formAdd,
						cache: false,
						error: function(xhr, status, error) {
							// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							setTimeout(function() {
								// Remove loading indication
								buttonAdd.removeAttribute('data-kt-indicator');

								// Enable button
								buttonAdd.disabled = false;

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
							// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							setTimeout(function() {
								// Remove loading indication
								buttonAdd.removeAttribute('data-kt-indicator');

								// Enable button
								buttonAdd.disabled = false;

								// Show popup confirmation
								Swal.fire({
									text: "Data berhasil ditambah",
									icon: "success",
									buttonsStyling: false,
									confirmButtonText: "Ok!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								}).then(function() {
									window.location.href = "<?= base_url() ?>product/kelompok";
								});
							}, 2000);
						}
					});
				}
			});
		}
	});
	// <!--end::Tambah Data-->
</script>