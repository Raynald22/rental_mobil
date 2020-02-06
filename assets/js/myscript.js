const flashData = $('.flash-data').data('pesan');

if (flashData) {
	Swal({
		title: 'Data Berhasil' + flashData,
		text: 'Ditambah' + flashData,
		type: 'danger'
	});
}
