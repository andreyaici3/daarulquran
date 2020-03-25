<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Galery</li>
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
						<h2 class="section_title">Welcome To Album Daarul Qur'an</h2>
						<div class="section_subtitle"><p>Ini adalah halman galery kegiatan yang telah dilaksanakan oleh Daarul Qur'an, baik dalam kegiatan Pondok Pesantren, TK/RA, Madrasah Tsanawiyah, dan juga Madrasah Aliyah.</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				<?php foreach ($galery as $gry): ?>
					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><a href="<?= base_url('home/galeryDetail/' . $gry['id_album']);  ?>"><img src="<?= base_url('assets/images/galery/' . $gry['sampul']); ?>" alt=""></a></div><br><br><br><br>
							<h3 class="feature_title"><?= $gry['judul_album']; ?></h3>
							<div class="feature_text"><p>Dalam Album ini terdapat<br><?= $gry['jml']; ?> foto</p></div>
						</div>
					</div>	
				<?php endforeach ?>
				
			</div>
		</div>
	</div>