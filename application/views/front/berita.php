<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						<h2>Berita</h2>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<?php foreach ($berita as $brt): ?>
								
							
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="<?= base_url('assets/images/berita/' . $brt['gambar_berita']); ?>" height="170px" width="100%" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="<?= base_url('berita/post/' . ($brt['slug_berita'])); ?>"><?= substr(strip_tags($brt['judul_berita']),0,28); ?> ..</a></h3>
										<div class="course_teacher">Author: <?= $brt['name']; ?></div>
										<div class="course_text">
											<p><?= substr(strip_tags($brt['isi_berita']),0,100); ?>... Read More</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span style="font-size: 10px;">Created: <?= date('d-m-Y', $brt['tanggal_berita']); ?></span>
											</div>				
											<div class="course_info">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span style="font-size: 10px;">Last Update: <?= date('d-m-Y', $brt['terakhir_diupdate']); ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php endforeach ?>
							
						</div>
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<?php 

											if (isset($paginasi)) {
												echo $paginasi;
											}

										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
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
