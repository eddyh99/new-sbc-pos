<script>
	// Repeater
	$('#addSubForm').repeater({
		initEmpty: false,

		defaultValues: {
			'text-input': 'foo'
		},

		show: function() {
			$(this).slideDown();
			$(this).find('[data-kt-repeater="select2"]').select2();
		},

		hide: function(deleteElement) {
			$(this).slideUp(deleteElement);
		},

		ready: function() {
			$('.form-select').select2();
		}
	});

	// Define form element
	const form = document.getElementById('form_kategori');
	// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
	var validator = FormValidation.formValidation(
		form, {
			fields: {
				'outlet': {
					validators: {
						notEmpty: {
							message: 'Outlet is required'
						}
					}
				},
				'name': {
					validators: {
						notEmpty: {
							message: 'Name is required'
						}
					}
				},
				'kelompok': {
					validators: {
						notEmpty: {
							message: 'Kelompok is required'
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
	const submitButton = document.getElementById('btn_submit_kategori');
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

					var form = $('#form_kategori').serialize();
					$.ajax({
						type: 'POST',
						url: "<?= base_url() ?>product/addkategori",
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
							// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							setTimeout(function() {
								// Remove loading indication
								submitButton.removeAttribute('data-kt-indicator');

								// Enable button
								submitButton.disabled = false;

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
									window.location.href = "<?= base_url() ?>product/kategori";
								});
							}, 2000);
						}
					});
				}
			});
		}
	});
</script>