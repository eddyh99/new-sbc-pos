<?php
$ot_count = 0;
foreach ($listot as $list_ot) {
	if ($list_ot != NULL) {
?>
		<div class="form-group row mb-5" id="old_ot_preview<?= $list_ot; ?>">
			<div class="col">
				<!--begin::Input Select-->
				<select class="form-select" data-control="select2" data-placeholder="Pilih Kelompok" name="old_ot[<?= $ot_count; ?>][ot]">
					<option></option>
					<?php foreach ($dt_outlet as $dtoutlet) { ?>
						<option value="<?= $dtoutlet->id; ?>" <?php echo ($dtoutlet->id == $list_ot) ? 'selected' : ''; ?>><?= $dtoutlet->namaoutlet; ?></option>
					<?php } ?>
				</select>
				<!--end::Input Select-->

				<!--begin::Input Checkbox-->
				<div class="form-check form-switch form-check-custom form-check-success form-check-solid mt-3">
					<?php
					foreach ($dt_kt_outlet as $kt_outlet) {
						if (($kt_outlet->id_kategori == $id_kt) && ($kt_outlet->id_outlet == $list_ot)) {
					?>
							<input class="form-check-input h-20px w-30px" type="checkbox" value="yes" id="<?= $list_ot ?>" name="old_ot[<?= $ot_count; ?>][show]" <?php echo ($kt_outlet->show_menu == 'yes') ? 'checked' : ''; ?> />
					<?php
						}
					} ?>

					<label class="form-check-label" for="<?= $list_ot ?>">
						Tampilkan di Menu
					</label>
				</div>
				<!--end::Input Checkbox-->
			</div>

			<div class="col-2">
				<button type="button" class="btn btn-sm btn-light-danger" onclick="deleteKtOT('<?= $id_kt ?>','<?= $list_ot ?>');">
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


		<script>
			$('.form-select').select2();
		</script>
<?php
		$ot_count++;
	}
}
?>