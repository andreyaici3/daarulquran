$(function(){

	$('.addMapel').on('click', function(){
		$('#myModalLabel').html('Add New Mapel');
		$('.modal-footer button[type=submit]').html('Add');
		$('.modal-body form').attr('action','http://localhost/dq/mapel/add');

		$('#kode').val('');
		$('#mapel').val('');
		$('#id').val('');

	});

	$('.hpsModalMapel').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action','http://localhost/dq/mapel/delete');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/dq/mapel/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalSiswa').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data Siswa.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action','http://localhost/dq/siswa/delete');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/dq/siswa/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalKelas').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data Kelas.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action','http://localhost/dq/kelas/delete');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/dq/kelas/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalPengumuman').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Pengumuman.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action','http://localhost/dq/pengumuman/delete');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/dq/pengumuman/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalBerita').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Berita.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action','http://localhost/dq/berita/delete');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/dq/berita/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.hpsModalGuru').on('click', function(){
		$('#myModalLabel').html('Yakin Ingin Menghapus Data Guru.?');
		$('.modal-footer button[type=submit]').html('Hapus');
		$('.modal-footer button[type=submit]').attr('class','btn btn-danger');
		$('.bd').html('Jika Anda mengklik tombol hapus, maka data akan terhapus');
		$('.modal-body form').attr('action','http://localhost/dq/guru/delete');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/dq/guru/delete',
			method: 'post',
			data: {id : id}
		});

	});

	$('.ubhModal').on('click', function(){
		$('#myModalLabel').html('Edit Mapel');
		$('.modal-footer button[type=submit]').html('Edit');
		$('.modal-body form').attr('action','http://localhost/dq/mapel/edit');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/dq/mapel/getEdit',
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