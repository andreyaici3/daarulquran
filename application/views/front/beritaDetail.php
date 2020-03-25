<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Berita</li>
								<li><?= $berita['judul_berita']; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<!-- Courses -->

<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?= $berita['judul_berita']; ?></div>
						<div class="blog_meta">
							<ul>
								<li>Post on <a href="#"><?= date('M d, Y',$berita['tanggal_berita']); ?></a></li>
								<li>By <a href="#"><?= $berita['name']; ?></a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="<?= base_url('assets/images/berita/' . $berita['gambar_berita']); ?>" alt=""></div>
							<?= $berita['isi_berita']; ?>
					</div>
					
				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest News</div>
							<div class="sidebar_latest">
								<!-- Latest Course -->
								<?php foreach ($latest as $lts): ?>
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div class="latest_image"><div><img src="<?= base_url('assets/images/berita/' . $lts['gambar_berita']); ?>" alt=""></div></div>
										<div class="latest_content">
											<div class="latest_title"><a href="<?= base_url('berita/post/' . $lts['slug_berita']); ?>"><?= $lts['judul_berita']; ?></a></div>
											<div class="latest_date"><?= date('M d, Y', $lts['tanggal_berita']); ?></div>
										</div>
									</div>	
								<?php endforeach ?>
								

								

							</div>
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</div>