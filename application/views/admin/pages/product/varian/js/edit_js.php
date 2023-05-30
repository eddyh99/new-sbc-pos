<script>
	showList_varian();

	function showList_varian() {
		$.ajax({
			url: "<?= base_url() ?>product/list_subvarian",
			method: "post",
			data: $("#form_varian").serialize(),
			cache: false,
			success: function(response) {
				var data = JSON.parse(response);
				$("#list_subvarian").html(data.messages);
				// console.log(data);
				if (!data.messages) {
					$("#list_subvarian").hide();
				}
			},
		});
	}

	// Define form element
	const form = document.getElementById('form_varian');

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

	// Repeater
	$('#addSubForm').repeater({
		initEmpty: false,

		defaultValues: {
			'text-input': 'foo'
		},

		show: function() {
			$(this).slideDown();
		},

		hide: function(deleteElement) {
			$(this).slideUp(deleteElement);
		}
	});


	// Submit button handler
	const submitButton = document.getElementById('btn_submit_varian');
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

					var form = $('#form_varian').serialize();
					$.ajax({
						type: 'POST',
						url: "<?= base_url() ?>product/changevarian",
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
									window.location.href = "<?= base_url() ?>product/varian";
								});

							}, 2000);
						}
					});
				}
			});
		}
	});

	function deleteSubVarian(id, row) {
		// SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
		Swal.fire({
			text: "Apakah kamu yakin menghapus ini?",
			icon: "warning",
			showCancelButton: true,
			buttonsStyling: false,
			confirmButtonText: "Yes, delete!",
			cancelButtonText: "No, cancel",
			customClass: {
				confirmButton: "btn fw-bold btn-danger",
				cancelButton: "btn fw-bold btn-active-light-primary"
			}
		}).then(function(result) {
			if (result.value) {
				$.ajax({
					type: 'POST',
					url: "<?= base_url() ?>product/deleteSubVarian?id=" + id,
					cache: false,
					error: function(xhr, status, error) {
						Swal.fire({
							text: "Deleting!",
							icon: "info",
							buttonsStyling: false,
							showConfirmButton: false,
							timer: 2000
						}).then(function() {
							Swal.fire({
								text: "Gagal dihapus!.",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Ok!",
								customClass: {
									confirmButton: "btn fw-bold btn-primary",
								}
							})
							console.log(status);
						});
					},
					success: function(data) {
						Swal.fire({
							text: "Deleting!",
							icon: "info",
							buttonsStyling: false,
							showConfirmButton: false,
							timer: 2000
						}).then(function() {
							Swal.fire({
								text: "Berhasil dihapus!.",
								icon: "success",
								buttonsStyling: false,
								confirmButtonText: "Ok!",
								customClass: {
									confirmButton: "btn fw-bold btn-primary",
								}
							}).then(function() {
								showList_varian();
								$("#subvarian" + row).hide();
							});
						});
					}
				});
			} else if (result.dismiss === 'cancel') {
				Swal.fire({
					text: "Batal dihapus!.",
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "Ok!",
					customClass: {
						confirmButton: "btn fw-bold btn-primary",
					}
				});
			}
		});
	}
</script>