<script>
	var outlet = JSON.parse(localStorage.getItem('outlet'));
	var nama = JSON.parse(localStorage.getItem('nama'));
	var deskripsi = JSON.parse(localStorage.getItem('deskripsi'));
	var kategori = JSON.parse(localStorage.getItem('kategori'));
	var mstok = JSON.parse(localStorage.getItem('mstok'));
	var stokminimal = JSON.parse(localStorage.getItem('stokminimal'));
	var b64images = JSON.parse(localStorage.getItem('b64images'));

	console.log(outlet.outlet);
	console.log(nama.nama);
	console.log(deskripsi.deskripsi);
	console.log(kategori.kategori);
	console.log(mstok.mstok);
	console.log(stokminimal.stokminimal);
	console.log(b64images.b64images);
</script>
