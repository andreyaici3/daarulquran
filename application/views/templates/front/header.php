<!-- Header -->

	<header class="header">
		<div class="fixed-top mt-2">
			<marquee><h3 style="color: red;">Seluruh Sektor Web Sedang tahap pembangunan</h3></marquee>
		</div>
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">

								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>0896-7567-7955</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>andreyandri90@gmail.com</div>
									</li>
								</ul>

								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="<?= base_url('auth');?>">Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="<?= base_url(); ?>">
									<div class="logo_text">Daarul <span>Qur'an</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="<?= base_url(); ?>">Home</a></li>
									
									<li class="nav-item dropdown">
								        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								          Sekolah
								        </a>
								        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								          <a class="dropdown-item" href="<?= base_url('home/profile'); ?>">Profile</a>
								          <a class="dropdown-item" href="<?= base_url('home/guru'); ?>">Guru</a>
								          <a class="dropdown-item" href="<?= base_url('home/siswa'); ?>">Siswa</a>
								        </div>
								    </li>
									<li><a href="<?= base_url('home/galery'); ?>">Galeri</a></li>
									<li><a href="<?= base_url('home/download'); ?>">Download</a></li>
									<li><a href="<?= base_url('home/berita'); ?>">Berita</a></li>
									<li><a href="<?= base_url('home/about'); ?>">About</a></li>
								</ul>
								<!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> -->

								<!-- Hamburger -->

								<!-- <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div> -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>