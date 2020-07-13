	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Pengumuman</li>
								<li><?= $guru['judul_pengumuman']; ?></li>
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
						<h2 align="justify"><?= $guru['judul_pengumuman']; ?></h2>
						<br>
						<p style="text-align: justify; color: black; font-size: 14px;">
						<?= $guru['isi_pengumuman']; ?><br>
						</p>
					</div>

				</div>
			</div>
			
		</div>
	</div>
