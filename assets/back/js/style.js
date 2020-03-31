$(function(){


	const url = 'http://localhost/dq/'

	$('.addMapel').on('click', function(){
		$('#myModalLabel').html('Add New Mapel');
		$('.modal-footer button[type=submit]').html('Add');
		$('.modal-body form').attr('action',url + 'mapel/add');

		$('#kode').val('');
		$('#mapel').val('');
		$('#id').val('');

	});

	$('.hpsModalFile').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action',url + 'upload/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'upload/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalMapel').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action', url +  'mapel/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'mapel/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalSiswa').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data Siswa.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action', url + 'siswa/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'siswa/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalKelas').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data Kelas.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action', url + 'kelas/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'kelas/delete',
			method: 'post',
			data: {id : id}
		});

	});

	

	$('.hpsModalPengumuman').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Pengumuman.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action',url + 'pengumuman/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'pengumuman/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalBerita').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Berita.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action', url + 'berita/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'berita/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalAlbum').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Album.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action',url + 'galery/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'galery/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalGuru').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data Guru.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action', url + 'guru/delete');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'guru/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.ubhModal').on('click', function(){
		$('#myModalLabel').html('Edit Mapel');
		$('.modal-footer button[type=submit]').html('Edit');
		$('.modal-body form').attr('action',url + 'mapel/edit');

		const id = $(this).data('id');

		$.ajax({
			url: url + 'mapel/getEdit',
			method: 'post',
			data: {id : id},
			dataType: 'json',
			success: function(data){
				$('#kode').val(data.kode_mapel);
				$('#mapel').val(data.nama_mapel);
				$('#id').val(data.id);
			}
		});

	});


});