<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Guru</li>
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
						<h2>Tenaga Pendidik </h2><br><br>
					</div>
					<?php foreach ($guru as $gr): ?>
					<!-- Team Item -->
						<div class="col-lg-3 col-md-6 team_col">
							<div class="team_item">
								<div class="team_image"><img src="<?= base_url('assets/images/guru/' . $gr['foto_guru']); ?>" alt=""></div>
								<div class="team_body">
									<div class="team_title"><a href="#"><?= $gr['nama_guru']; ?></a></div>
									<div class="team_subtitle"><?= $gr['nip']; ?></div>
									<div class="team_subtitle"><?= $gr['tempat_lahir'] . ', ' . date('d-m-Y', $guru['tanggal_lahir']); ?></div>
									<div class="team_subtitle"><?= $gr['nama_mapel']; ?></div>
									<div class="team_subtitle"><?= $gr['pendidikan']; ?></div>

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
	</div>
