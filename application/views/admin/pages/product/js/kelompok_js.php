<script>
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
					order: [
						[2, 'desc']
					],
					stateSave: true,
					select: {
						style: 'multi',
						selector: 'td:first-child input[type="checkbox"]',
						className: 'row-selected'
					},
					ajax: {
						url: "<?= base_url(); ?>product/listkelompok",
						type: "POST",

						dataSrc: function(data) {
							// console.log(data["kelompok"]);
							return data["kelompok"];
						},
					},
					columns: [{
							data: 'id'
						},
						{
							data: 'kelompok'
						},
						{
							data: 'jml'
						},
						{
							data: null
						},
					],
					columnDefs: [{
							targets: 0,
							orderable: false,
							render: function(data) {
								return `
								<span class="d-none">` + data + `</span>
								<div class="form-check form-check-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="${data}" />
								</div>`;
							}
						},
						{
							targets: -1,
							data: null,
							orderable: false,
							className: 'text-end',
							render: function(data, type, row) {
								return `
                            <a href="<?= base_url(); ?>product/editkelompok/` + encodeURI(btoa(data.id)) + `"  class="btn btn-light-success btn-active-success btn-sm">
								<i class="ki-duotone fs-2 ki-notepad-edit">
									<i class="path1"></i>
									<i class="path2"></i>
								</i>
                            </a>
                            <a href="#" class="btn btn-light-danger btn-active-danger btn-sm" data-kt-docs-table-filter="delete_row" id="deletedata">
								<i class="ki-duotone fs-2 ki-trash">
									<i class="path1"></i>
									<i class="path2"></i>
									<i class="path3"></i>
									<i class="path4"></i>
									<i class="path5"></i>
								</i>
                            </a>
                        `;
							},
						},
					],
				});

				table = dt.$;

				// Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
				dt.on('draw', function() {
					handleDeleteRows();
					toggleToolbars();
					KTMenu.createInstances();
				});
			}

			// Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
			var handleSearchDatatable = function() {
				const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
				filterSearch.addEventListener('keyup', function(e) {
					dt.search(e.target.value).draw();
				});
			}

			// Delete customer
			var handleDeleteRows = () => {
				// Select all delete buttons
				const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

				deleteButtons.forEach(d => {
					// Delete button on click
					d.addEventListener('click', function(e) {
						e.preventDefault();

						// Select parent row
						const parent = e.target.closest('tr');

						// Get customer name
						const kelompok = parent.querySelectorAll('td')[1].innerText;
						const id = parent.querySelectorAll('td span')[0].innerText;

						// SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
						Swal.fire({
							text: "Apakah kamu yakin menghapus " + kelompok + "? Data yang terkait dengan data " + kelompok + " tersebut akan dihapus juga!",
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
									url: "<?= base_url() ?>product/deletekelompok?kelompok=" + id,
									cache: false,
									error: function(xhr, status, error) {
										Swal.fire({
											text: "Deleting " + kelompok,
											icon: "info",
											buttonsStyling: false,
											showConfirmButton: false,
											timer: 2000
										}).then(function() {
											Swal.fire({
												text: kelompok + " gagal dihapus!.",
												icon: "error",
												buttonsStyling: false,
												confirmButtonText: "Ok!",
												customClass: {
													confirmButton: "btn fw-bold btn-primary",
												}
											})
										});
									},
									success: function(data) {
										Swal.fire({
											text: "Deleting " + kelompok,
											icon: "info",
											buttonsStyling: false,
											showConfirmButton: false,
											timer: 2000
										}).then(function() {
											Swal.fire({
												text: "Berhasil menghapus " + kelompok + "!.",
												icon: "success",
												buttonsStyling: false,
												confirmButtonText: "Ok!",
												customClass: {
													confirmButton: "btn fw-bold btn-primary",
												}
											}).then(function() {
												showList();
											});
										});
									}
								});
							} else if (result.dismiss === 'cancel') {
								Swal.fire({
									text: kelompok + " tidak dihapus!.",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "Ok!",
									customClass: {
										confirmButton: "btn fw-bold btn-primary",
									}
								});
							}
						});
					})
				});
			}

			// Init toggle toolbar
			var initToggleToolbar = function() {
				// Toggle selected action toolbar
				// Select all checkboxes
				const container = document.querySelector('#kt_datatable_kelompok');
				const checkboxes = container.querySelectorAll('[type="checkbox"]');

				// Toggle delete selected toolbar
				checkboxes.forEach(c => {
					// Checkbox on click event
					c.addEventListener('click', function() {
						setTimeout(function() {
							toggleToolbars();
						}, 50);
					});
				});
			}

			// Toggle toolbars
			var toggleToolbars = function() {
				// Define variables
				const container = document.querySelector('#kt_datatable_kelompok');

				// Select refreshed checkbox DOM elements
				const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');

				// Detect checkboxes state & count
				let checkedState = false;
				let count = 0;

				// Count checked boxes
				allCheckboxes.forEach(c => {
					if (c.checked) {
						checkedState = true;
						count++;
					}
				});
			}

			// Public methods
			return {
				init: function() {
					initDatatable();
					handleSearchDatatable();
					handleDeleteRows();
					initToggleToolbar();
				}
			}
		}();

		// On document ready
		KTUtil.onDOMContentLoaded(function() {
			KTDatatablesServerSide.init();
		});

	}
</script>