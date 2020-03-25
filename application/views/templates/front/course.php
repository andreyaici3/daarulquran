<!-- Popular Courses -->
	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/front/'); ?>images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Berita Terbaru</h2>
						<div class="section_subtitle"><p>Berita terbaru di post dalam website ini</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				<?php for ($i = 0; $i<3; $i++) { ?>
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url('assets/images/berita/' . $berita[$i]['gambar_berita']); ?>" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="<?= $berita[$i]['slug_berita']; ?>"><?= substr(strip_tags($berita[$i]['judul_berita']),0,28); ?></a></h3>
							<div class="course_teacher">Author: <?= $berita[$i]['name']; ?></div>
							<div class="course_text">
								<p><?= substr(strip_tags($berita[$i]['isi_berita']),0,100); ?>... Read More</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span style="font-size: 10px;">Created: <?= date('d-m-Y', $berita[$i]['tanggal_berita']); ?></span>
								</div>				
								<div class="course_info">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span style="font-size: 10px;">Last Update: <?= date('d-m-Y', $berita[$i]['terakhir_diupdate']); ?></span>
								</div>
							</div>
					</div>
				</div>
			</div>

				
			<?php }; ?>
				

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('home/berita'); ?>">Lihat Semua Berita</a></div>
				</div>
			</div>
		</div>
	</div>

