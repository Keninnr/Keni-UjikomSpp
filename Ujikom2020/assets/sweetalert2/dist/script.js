const flashdata = $('.flash-data').data('flashdata');

if (flashdata == 'Berhasil DiSimpan' || flashdata == 'Berhasil DiEdit' || flashdata == 'Berhasil DiHapus' || flashdata == 'Berhasil DiImport') {
	Swal.fire({
		title: 'Data',
		text: flashdata,
		type: 'success'
	});
} else if (flashdata) {
	Swal.fire({
		title: flashdata,
		type: 'error'
	});
}
// Hapus
$('.hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: 'Data Akan Dihapus',
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Hapus',
		cancelButtonText: 'Kembali'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
