<?php
$sub_count = 0;
foreach ($dt_subvarian as $subvarian) {
	if ($subvarian != NULL) {
?>
		<div class="form-group row mb-3" id="subvarian<?= $sub_count; ?>">
			<div class="col">
				<!--begin::Input-->
				<input type="text" name="old[<?= $sub_count; ?>][subvarian]" class="form-control mb-3 mb-lg-0" placeholder="Contoh : Merah / Putih, XL/L/M" value="<?= $subvarian->subvarian ?>" />
				<!--end::Input-->
			</div>

			<div class="col-2">
				<button type="button" class="btn btn-sm btn-light-danger" onclick="deleteSubVarian('<?= $subvarian->id ?>','<?= $sub_count ?>');">
					<i class="ki-duotone ki-trash fs-2">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
						<span class="path4"></span>
						<span class="path5"></span>
					</i>
				</button>
			</div>
		</div>
<?php
		$sub_count++;
	}
}
?>