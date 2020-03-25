	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Pengummuman</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<div class="contact">
		<div class="contact_info_container">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>Daftar Pengumuman</h2><br>
					</div>
					<div class="col-md-12">
						<table id="myTable" class="table display">
							<thead>
								<tr>
									<td class="text-center text-dark" width="50px">No</td>
									<td class="text-dark">Judul Pengumuman</td>
									<td width="100px" class="text-center text-dark">Detail</td>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($file as $fs): ?>
									<tr>
										<td class="text-center text-dark"><?= $i; ?></td>
										<td class="text-dark"><?= $fs['judul_pengumuman']; ?></td>
										<td class="text-center  text-dark"><a class="btn btn-primary btn-sm" href="<?= base_url('home/pengumumanDetail/' . $fs['id_pengumuman']); ?>"><i class="fa fa-info fa-fw"></i> Lihat</a></td>
									</tr>
									<?php $i++; ?>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>

				</div>
			</div>
			
		</div>
	</div>
