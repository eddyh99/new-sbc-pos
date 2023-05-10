<?php
foreach ($kelompok as $dt) { ?>
	<tr>
		<td><?= $dt->kelompok; ?></td>
		<td class=""><?= $dt->jml; ?></td>
	</tr>
<?php } ?>