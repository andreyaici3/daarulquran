<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Galery</li>
								<li><?= $galery['judul_album']; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>




	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Album Daarul Qur'an <br> <?= $galery['judul_album']; ?></h2>
						<div class="section_subtitle"><p>Ini adalah halman galery kegiatan yang telah dilaksanakan oleh Daarul Qur'an, baik dalam kegiatan Pondok Pesantren, TK/RA, Madrasah Tsanawiyah, dan juga Madrasah Aliyah.</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				<?php foreach ($foto as $gry): ?>
					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><a href="<?= base_url('assets/images/galery/' . $gry['foto']); ?>"><img src="<?= base_url('assets/images/galery/' . $gry['foto']); ?>" alt="" height="150px"></a></div><br><br><br><br>
							<h3 class="feature_title"><?= $gry['ket_foto']; ?></h3>
						</div>
					</div>	
				<?php endforeach ?>
				
			</div>
		</div>
	</div>