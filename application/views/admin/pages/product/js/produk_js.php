<script>
	var outlet = JSON.parse(localStorage.getItem('outlet'));
	var nama = JSON.parse(localStorage.getItem('nama'));
	var deskripsi = JSON.parse(localStorage.getItem('deskripsi'));
	var kategori = JSON.parse(localStorage.getItem('kategori'));
	var mstok = JSON.parse(localStorage.getItem('mstok'));
	var stokminimal = JSON.parse(localStorage.getItem('stokminimal'));

	if (outlet) {
		$("#outlet").val(outlet.outlet).change();
	}

	if (kategori) {
		$("#kategori").val(kategori.kategori).change();
	}

	if (nama) {
		$("#name").val(nama.nama);
	}

	if (deskripsi) {
		$("#deskripsi").val(deskripsi.deskripsi);
	}

	if (mstok) {
		$("#mstok").prop('checked', true);
	}

	if (stokminimal) {
		$("#sminimal").val(stokminimal.stokminimal);
	}

	function getBase64Image(img) {
		var canvas = document.createElement("canvas");
		canvas.width = img.width;
		canvas.height = img.height;

		var ctx = canvas.getContext("2d");
		ctx.drawImage(img, 0, 0);

		var dataURL = canvas.toDataURL("image/png");

		return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
	}

	// Define form element
	const form = document.getElementById('form_produk');
	// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
	var validator = FormValidation.formValidation(
		form, {
			fields: {
				'nama': {
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
	$('#foto').repeater({
		repeaters: [{
			selector: '.inner-repeater',
			show: function() {
				if ($("div[data-repeater-item]").length <= 5) {
					$(this).slideDown();
				} else {
					$(this).remove();
				}

				// $(this).slideDown();
			},

			hide: function(deleteElement) {
				$(this).slideUp(deleteElement);
			}
		}],

		show: function() {
			if ($("div[data-repeater-item]").length <= 5) {
				$(this).slideDown();
			} else {
				$(this).remove();
			}
			// $(this).slideDown();
		},

		hide: function(deleteElement) {
			$(this).slideUp(deleteElement);
		}
	});

	// Submit button handler
	const submitButton = document.getElementById('tes');
	submitButton.addEventListener('click', function(e) {
		// Prevent default button action
		e.preventDefault();

		// Validate form before submit
		if (validator) {
			validator.validate().then(function(status) {
				console.log('validated!');

				if (status == 'Valid') {
					// Show loading indication
					submitButton.setAttribute('data-kt-indicator', 'on');

					// Disable button to avoid multiple click
					submitButton.disabled = true;

					// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
					setTimeout(function() {
						// Remove loading indication
						submitButton.removeAttribute('data-kt-indicator');

						// Enable button
						submitButton.disabled = false;

						var form = $('#form_produk').serialize();
						$.ajax({
							type: 'POST',
							url: "<?= base_url() ?>product/getImages",
							data: form,
							cache: false,
							success: function(data) {
								console.log(data);
								// Show popup confirmation
								Swal.fire({
									text: "Berhasil! Lanjutkan ke tahap selanjutnya!",
									icon: "success",
									buttonsStyling: false,
									confirmButtonText: "Ok!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								}).then(function() {
									var b64images = {
										"b64images": data,
									};
									var outlet = {
										"outlet": $("#outlet").val(),
									};

									var nama = {
										"nama": $("#name").val(),
									};

									var deskripsi = {
										"deskripsi": $("#deskripsi").val(),
									};

									var kategori = {
										"kategori": $("#kategori").val(),
									};

									var mstok = {
										"mstok": $("#mstok").val(),
									};

									var stokminimal = {
										"stokminimal": $("#sminimal").val(),
									};

									localStorage.setItem("outlet", JSON.stringify(outlet))
									localStorage.setItem("nama", JSON.stringify(nama))
									localStorage.setItem("deskripsi", JSON.stringify(deskripsi))
									localStorage.setItem("kategori", JSON.stringify(kategori))
									localStorage.setItem("mstok", JSON.stringify(mstok))
									localStorage.setItem("stokminimal", JSON.stringify(stokminimal))
									localStorage.setItem("b64images", JSON.stringify(b64images))

									// window.location.href = "<?= base_url() ?>product/addprodukstep2"
								});
							}
						});
					}, 2000);
				}
			});
		}
	});
</script>
