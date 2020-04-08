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
					<h4>KH. Ma'sum Abdullah</h4>
					<h6>Pimpinan Yayasan Daarul Qur'an</h6>
				</div>
				<div class="col-sm-3 text-center">
					<img src="<?= base_url('assets/images/config/' . $set['foto_kepala_ra'] ); ?>" width="80%" alt=""><br><br>	
					<h4>Nama Kepala RA</h4>
					<h6>Kepala RA Daarul Qur'an</h6>
				</div>
				<div class="col-sm-3 text-center">
					<img src="<?= base_url('assets/images/config/' . $set['foto_kepala_mts'] ); ?>" width="80%" alt=""><br><br>	
					<h4>Nama Kepala Mts</h4>
					<h6>Kepala Mts Daarul Qur'an</h6>
				</div>
				<div class="col-sm-3 text-center">
					<img src="<?= base_url('assets/images/config/' . $set['foto_kepala_ma'] ); ?>" width="80%" alt=""><br><br>	
					<h4>Nama Kepala MA</h4>
					<h6>Kepala MA Daarul Qur'an</h6>
				</div>
			</div>
			</div>
		</div>
		
		
			<div class="container">
				<div class="row">
					
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Nama Lembaga</label>
							<input type="text" disabled value="<?= $set['header-nav']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea style="resize: none;" name="" id="" cols="30" rows="3" class="form-control" disabled><?= $set['alamat']; ?></textarea>
						</div>
						<div class="form-group">
							<label for="">No Telpon</label>
							<input type="text" disabled value="<?= $set['telepon']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Status Lembaga</label>
							<input type="text" disabled value="Swasta" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Status Akreditasi</label>
							<input type="text" disabled value="B" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Tahun Berdiri yayasan</label>
							<input type="text" disabled value="1950" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Pendidikan yang tersedia</label>
							<input type="text" disabled value="RA - Pondok Pesantren - MTs - MA" class="form-control">
						</div>

					</div>
					<div class="col ml-4">
						<div class="section_title_container text-center">
							<h2 class="section_title">Tentang Daarul Qur'an</h2>
						</div>
						<br>
						<div class="form-group">
							<label for=""><h5>Sejarah</h5></label>
							<textarea name="sejarah" id="" cols="30" rows="6" disabled="" class="form-control" style="color: black; resize: none;"><?= $set['sejarah']; ?></textarea>
						</div>
						<div class="form-group">
							<label for=""><h5>Visi</h5></label>
							<textarea name="visi" id="" cols="30" rows="5" disabled="" class="form-control" style="color: black; resize: none;"><?= $set['visi']; ?></textarea>
						</div>
						<div class="form-group">
							<label for=""><h5>Misi</h5></label>
							<textarea name="visi" id="" cols="30" rows="5" disabled="" class="form-control" style="color: black; resize: none;"><?= $set['misi']; ?></textarea>
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
		
	