<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Siswa</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Siswa Daarul  Qur'an</h2>
						<div class="section_subtitle"><p>Halaman Siswa yang ingin menampilkan diri dengan Quote / Moto terbaik</p></div>
					</div>
				</div>
			</div>

			<div class="row team_row">
				
				<?php foreach ($datas as $data): ?>
					<!-- Team Item -->
					<div class="col-lg-3 col-md-6 team_col">

						<div class="team_item">
							<div class="team_image"><img src="<?= base_url('assets/images/siswa/' . $data['foto_siswa']); ?>" alt=""></div>
							<div class="team_body">
								<div class="team_title"><a href="#"><?= $data['nama_siswa'] ?></a></div>
								<div class="team_subtitle"><?= $data['kelas']; ?></div>
								<div class="team_subtitle" style="margin-right: 10px; margin-left: 10px;">
									<center>"<?= $data['quote']; ?>"</center>
								</div> 
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>	
				<?php endforeach ?>
				

				

			</div>
		</div>
	</div>