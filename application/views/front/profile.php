<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li>Profile</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 text-center">
					<img src="<?= base_url('assets/images/config/' . $set['foto_pimp']); ?>" width="80%" alt=""><br><br>	
					<h4><?= $set['nama_pimp']; ?></h4>
					<h6><?= $set['sub_pimp']; ?></h6>
				</div>
				<div class="col-sm-3 text-center">
					<img src="<?= base_url('assets/images/config/' . $set['foto_kepala_ra'] ); ?>" width="80%" alt=""><br><br>	
					<h4><?= $set['nama_kepala_ra']; ?></h4>
					<h6><?= $set['sub_kepala_ra'] ; ?></h6>
				</div>
				<div class="col-sm-3 text-center">
					<img src="<?= base_url('assets/images/config/' . $set['foto_kepala_mts'] ); ?>" width="80%" alt=""><br><br>	
					<h4><?= $set['nama_kepala_mts']; ?></h4>
					<h6><?= $set['sub_kepala_mts'] ; ?></h6>
				</div>
				<div class="col-sm-3 text-center">
					<img src="<?= base_url('assets/images/config/' . $set['foto_kepala_ma'] ); ?>" width="80%" alt=""><br><br>	
					<h4><?= $set['nama_kepala_ma']; ?></h4>
					<h6><?= $set['sub_kepala_ma'] ; ?></h6>
				</div>
			</div>
			</div>
		</div>
		
		
			<div class="container">
				<div class="row">
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Nama Lembaga</label>
							<input type="text" disabled value="<?= $set['nama_lembaga']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea style="resize: none;" name="" id="" cols="30" rows="3" class="form-control" disabled><?= $set['alamat_lembaga']; ?></textarea>
						</div>
						<div class="form-group">
							<label for="">No Telpon</label>
							<input type="text" disabled value="<?= $set['no_lembaga']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Status Lembaga</label>
							<input type="text" disabled value="<?= $set['status_lembaga']; ?>" class="form-control" value="<?= $set['status_lembaga']; ?>">
						</div>
						<div class="form-group">
							<label for="">Status Akreditasi</label>
							<input type="text" disabled value="<?= $set['status_akre']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Tahun Berdiri yayasan</label>
							<input type="text" disabled value="<?= $set['tahun_berdiri']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Pendidikan yang tersedia</label>
							<input type="text" disabled value="<?= $set['jenjang_pend']; ?>" class="form-control">
						</div>

					</div>
					<div class="col ml-4">
						<div class="section_title_container text-center">
							<h2 class="section_title">Tentang Daarul Qur'an</h2>
						</div>
						<br>
						<div class="form-group">
							<label for=""><h5>Sejarah</h5></label>
							<div class="blog_content" style="color: black; text-align: justify;"><?= $set['sejarah']; ?></div>
						</div>
						<div class="form-group">
							<label for=""><h5>Visi</h5></label>
							<div class="blog_content" style="color: black; text-align: justify;"><?= $set['visi']; ?></div>
						</div>
						<div class="form-group">
							<label for=""><h5>Misi</h5></label>
							<div class="blog_content" style="color: black; text-align: justify;"><?= $set['misi']; ?></div>
						</div>
					</div>
			</div>
			</div>
			<div class="container text-center">
				<div class="row">
					<div class="col-sm mt-5">
						<a href="<?= base_url(); ?>" class="btn btn-primary btn-md">Kembali ke Home</a>
					</div>
				</div>
			</div>
		
	