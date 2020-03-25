<!-- Latest News -->
	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Pengumuman</h2>
						<div class="section_subtitle"><p>Pengumuman ini ditujukan kepada seluruh siswa, siswi yang terdaftar di yayasan daarul qur'an, seperti info tugas, ataupun agenda kegiatan</p></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">
					
					<!-- News Post Large -->
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img src="<?= base_url('assets/front/'); ?>images/news_1.jpg" alt=""></div>
							<div class="news_post_large_title"><a href="<?= base_url('home/pengumuman'); ?>">Sering - seringlah membuka halaman ini</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									
								</ul>
							</div>
							<div class="news_post_text">
								<p>Halaman ini berisi informasi seluruh tugas, dan juga agenda kegiatan yang akan datang. jadi saya mohon untuk siswa / siswi yang sedang menempuh pendidikan di Daarul Qur'an sering sering lah membuka halaman ini, agar tidak ketinggalan informasi.</p>
							</div>
							<div class="news_post_link"><a href="<?= base_url('home/pengumuman'); ?>">read more</a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 news_col">
					<div class="news_posts_small">
						<?php for($i=0; $i<4; $i++){ ?>
						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="<?= base_url('home/pengumumanDetail/' . $pengumuman[$i]['id_pengumuman']); ?>"><?= $pengumuman[$i]['judul_pengumuman']; ?></a>
							</div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#"><?= $pengumuman[$i]['tanggal_pengumuman']; ?></a></li>
								</ul>
							</div>
						</div>
						<?php }; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	