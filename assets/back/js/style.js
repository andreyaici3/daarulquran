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