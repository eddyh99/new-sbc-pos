<script>
	// <!--begin::Edit Data-->
	const formEdit = document.getElementById('form_edit_kelompok');
	// Validasi Add Data Proses
	var validator = FormValidation.formValidation(
		formEdit, {
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

	const buttonEdit = document.getElementById('btn_edit_kelompok');
	buttonEdit.addEventListener('click', function(e) {
		// Prevent default button action
		e.preventDefault();

		// Validate form before submit
		if (validator) {
			validator.validate().then(function(status) {
				if (status == 'Valid') {
					// Show loading indication
					buttonEdit.setAttribute('data-kt-indicator', 'on');

					// Disable button to avoid multiple click
					buttonEdit.disabled = true;

					var formEdit = $('#form_edit_kelompok').serialize();
					$.ajax({
						type: 'POST',
						url: "<?= base_url() ?>product/changekelompok",
						data: formEdit,
						cache: false,
						error: function(xhr, status, error) {
							// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							setTimeout(function() {
								// Remove loading indication
								buttonEdit.removeAttribute('data-kt-indicator');

								// Enable button
								buttonEdit.disabled = false;

								// Show popup confirmation
								Swal.fire({
									text: "Data gagal diubah!",
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
								buttonEdit.removeAttribute('data-kt-indicator');

								// Enable button
								buttonEdit.disabled = false;

								// Show popup confirmation
								Swal.fire({
									text: "Data berhasil diubah!",
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
	// <!--end::Edit Data-->
</script>