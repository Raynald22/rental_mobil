const flashData = $('flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Anda Harus Login untuk Masuk Ke Halaman Admin!' + flashData,
		text: '' + flashData,
		type: 'danger'
	});
}
