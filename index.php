<?php
$data = file_get_contents('data/produk.json');
$produk = json_decode($data, true);

// var_dump($produk);
$produk = $produk["produk"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Zenjiro Zulfani Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="node_modules/lightbox2/src/css/lightbox.css">
	<link href="node_modules/glightbox/css/glightbox.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">


</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



	<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>




	<section class="site-hero" style="background-color:#181818;" id="section-home">
		<div class="container">
			<div class="header row intro-text align-items-center justify-content-center">
				<div class="col-md-10 text-center">

					<a href="images/avatar1.jpg" data-lightbox="avatar1" alt="zenjiro zulfani" data-title="Zenjiro Zulfani"><img src="images/avatar1.jpg" class="avatar"></a>
					<h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">Zenjiro Zulfani</strong></h1>
					<h2><span id="typed"></span></h2>

				</div>
			</div>
		</div>
	</section> <!-- section -->


	<section class="site-section" id="section-about">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
					<img src="images/image_about.jpg" alt="Image placeholder" class="img-fluid">
				</div>
				<div class="col-lg-5 pl-lg-5">
					<div class="section-heading">
						<h2>About <strong>Me</strong></h2>
					</div>
					<p class="lead">Saya mahasiswa Universitas Dian Nuswantoro jurusan Teknik Informatika dengan minat studi Rekayasa Perangkat Lunak.</p>
					<p class="mb-5  ">Saya bersemangat untuk mempelajari sesuatu hal yang baru, mampu bekerja dalam tim dengan baik, bertanggung jawab dan disiplin. Saya sangat antusias menjadi web developer karena saya memiliki pengalaman dibidang pengembangan web. Dari pengalaman itu saya belajar bagaimana cara merancang, mendesain dan mengembangkan website dengan baik. Saya sangat menikmati belajar tentang pemrograman web dan memiliki hasrat yang kuat di bidang tersebut.</p>

					<p>
						<a href="download.php?filename=CVzenjiro.pdf" class="btn btn-primary px-4 py-2 btn-sm">Download CV</a>
						<!-- <a href="#" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a> -->
					</p>
				</div>
			</div>


		</div>
	</section>

	<section class="site-section " id="section-resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>My <strong>Resume</strong></h2>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="mb-5">Education</h2>
					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> 2018 - Sekarang</span>
						<h3>Universitas Dian Nuswantoro</h3>
						<ul>
							<li>
								<p>Jurusan Teknik Informatika.</p>
							</li>
							<li>
								<p>IPK Sementara 3,38.</p>
							</li>
							<li>
								<p>Semifinalis perlombaan kewirausahaan Creanovation UDINUS 2019.</p>
							</li>
						</ul>

						<span class="school">Kota Semarang</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> 2015 - 2018</span>
						<h3>SMAN 5 Kota Semarang</h3>
						<ul>
							<li>
								<p>Mengikuti organisasi Futsal dan Ikatan supporter ULTRAS SMALA.</p>
							</li>
							<li>
								<p>Juara 2 Ganesha Competition 2018 kejuaraan futsal tingkat Provinsi Jawa Tengah.</p>
							</li>
							<li>
								<p>Juara 1 Theresiana Cup 2016 kejuaraan futsal tingkat Kota Semarang.</p>
							</li>
						</ul>
						<span class="school">Kota Semarang</span>
					</div>



				</div>
				<div class="col-md-6">


					<h2 class="mb-5">Experience</h2>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Oktober 2021 - November 2021</span>
						<h3>Dinas Kebudayaan dan Pariwisata Kota Semarang</h3>
						<h6>Karyawan Magang</h6>
						<ul>
							<li>
								<p>Ditugaskan membuat website intern untuk pegawai dinas kebudayaan dan pariwisata kota Semarang.</p>
							</li>
							<li>
								<p>Ikut serta dalam program pelatihan tour guide 2021 di hotel Harris Semarang sebagai operator acara.</p>
							</li>
						</ul>
						<span class="school">Kota Semarang</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Juni 2021 </span>
						<h3>Relawan COVID-19 dari HKTI Kota Semarang</h3>
						<ul>
							<li>
								<p>Merekap data warga yang positif COVID-19 di kelurahan Sendangmulyo dan Gedawang.</p>
							</li>
							<li>
								<p>Mengirimkan paket obat-obatan ke alamat warga positif COVID-19 yang telah direkap.</p>
							</li>
							<li>
								<p>Melakukan follow-up terhadap keadaan pasien dan melaporkannya ke lembaga.</p>
							</li>
						</ul>
						<span class="school">Kota Semarang</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Maret 2021 - April 2021</span>
						<h3>PT. Ipsos Market Research</h3>
						<h6>Karyawan Surveyor Lepas</h6>
						<ul>
							<li>
								<p>Mempersiapkan titik-titik tempat survey dan koordinasi dengan project leader.</p>
							</li>
							<li>
								<p>Mempersiapkan kelengkapan peralatan survey dan terjun langsung ke lapangan melakukan survey di area yang menjadi tanggung jawab.</p>
							</li>
							<li>
								<p>Merekap data survey yang telah didapatkan dan melaporkannya kepada project leader.</p>
							</li>
						</ul>
						<span class="school">Kota Semarang</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Januari 2019 - Maret 2019</span>
						<h3>CV. IKSA BRAND Creative Agency</h3>
						<h6>Karyawan Magang</h6>
						<ul>
							<li>
								<p>Bertanggung jawab membuat website untuk kampanye klien calon anggota DPRD Kota Semarang dalam bentuk website statis.</p>
							</li>
							<li>
								<p>Membantu analisa data pemungutan suara dan perkiraan perolehan suara di wilayah pemilihan dari klien calon anggota DPRD Kota Semarang</p>
							</li>
							<li>
								<p>Mendesain ulang website hingga tahap perancangan dari klien organisasi non-profit SANTRENDELIK.</p>
							</li>
						</ul>
						<span class="school">Kota Semarang</span>
					</div>


				</div>
			</div>
		</div>
	</section> <!-- .section -->

	<section class="site-section" id="section-portfolio">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center col-md-12">
					<h2> <strong>Portfolio</strong></h2>
				</div>
			</div>
			<div class="filters">
				<ul>
					<li class="active" data-filter="*">All</li>
					<li data-filter=".website">Website</li>
					<li data-filter=".mobile">Mobile</li>
					<li data-filter=".game">Game</li>
					<li data-filter=".other">Other</li>
				</ul>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<?php foreach ($produk as $row) : ?>
						<div class="single-portfolio col-sm-4 all <?= $row["class"]; ?>">
							<div class="relative">
								<div class="thumb">
									<a href="images/<?= $row["gambar"]; ?>" data-title="<?= $row["judul"]; ?>" data-description="<hr>Kategori : <?= $row["kategori"]; ?> <br>Client : <?= $row["client"]; ?><br>Tanggal Projek : <?= $row["tanggal"]; ?> <br>Projek URL : - <br> <hr><?= $row["deskripsi"]; ?>" data-desc-position="left" data-type="image" data-effect="fade" data-width="900px" data-height="auto" data-zoomable="true" data-draggable="false" class="portfolio-lightbox">

										<img class="image img-fluid" src="images/<?= $row["thumbnail"]; ?>" alt="image">
									</a>
								</div>

							</div>
							<div class="p-inner">
								<h4><?= $row["judul"]; ?></h4>
								<div class="cat"><?= $row["kategori"]; ?></div>
								<div class="cat"><?= $row["tanggal"]; ?></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- .section -->




	<section class="site-section" id="section-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Get <strong>In Touch</strong></h2>
					</div>
				</div>

				<div class="col-md-7 mb-5 mb-md-0">
					<form action="send.php" method="POST" class="site-form">
						<h3 class="mb-5">Get In Touch</h3>
						<div class="form-group">
							<label for="name" style="color: white;">Name</label>
							<input type="text" name="nama" class="form-control px-3 py-4" style="color: black; background-color:white;">
						</div>
						<div class="form-group">
							<label for="email" style="color: white;">Email</label>
							<input type="email" name="email_dari" class="form-control px-3 py-4" style="color: black; background-color:white;">
						</div>
						<div class="form-group">
							<label for="subject" style="color: white;">Subject</label>
							<input type="text" name="subjek" class="form-control px-3 py-4" style="color: black; background-color:white;">
						</div>
						<div class="form-group mb-5">
							<label for="Message" style="color: white;">Message</label>
							<textarea id="example" name="pesan" class="form-control px-3 py-4" cols="30" rows="10" style="color: white;"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">
						</div>
					</form>
				</div>
				<div class="col-md-5 pl-md-5">
					<h3 class="mb-5">My Contact Details</h3>
					<ul class="site-contact-details">
						<li>
							<span class="text-uppercase">Email</span>
							zenjirozulfani40@gmail.com
						</li>
						<li>
							<span class="text-uppercase">Phone</span>
							<a href="https://wa.me/+6282257518522" target="_blank" style="color: #7A7A7A;">+62 822 5751 8522</a>
						</li>
						<li>
							<span class="text-uppercase">Address</span>
							Sampangan <br>
							Semarang, Indonesia
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy; <script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | This website is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by zenjirozulfani
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>

			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p>
						<a href="https://facebook.com/zenjirozulfani" target="_blank" class="social-item"><span class="icon-facebook2"></span></a>
						<a href="https://github.com/zenjirozulfani" target="_blank" class="social-item"><span class="icon-github"></span></a>
						<a href="https://instagram.com/zenjirozulfani" target="_blank" class="social-item"><span class="icon-instagram2"></span></a>
						<a href="https://www.linkedin.com/in/zenjiro-zulfani-39a13b1a1/" target="_blank" class="social-item"><span class="icon-linkedin2"></span></a>
						<a href="https://wa.me/+6282257518522" target="_blank" class="social-item"><span class="icon-whatsapp"></span></a>
					</p>
				</div>
			</div>

		</div>
	</footer>




	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

	<script src="js/vendor/jquery.easing.1.3.js"></script>

	<script src="js/vendor/jquery.stellar.min.js"></script>
	<script src="js/vendor/jquery.waypoints.min.js"></script>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="node_modules/lightbox2/src/js/lightbox.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<!-- <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script> -->
	<script src="node_modules/glightbox/js/glightbox.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>



	<script>
		var editor = new FroalaEditor('#example', {
			pluginsEnabled: ['align'],

		});
		var typed = new Typed('#typed', {
			strings: ["Web Developer.", "Back End Developer.", "Front End Developer"],
			typeSpeed: 50,
			backSpeed: 50,
			backDelay: 2000,
			loop: true,
		});

		var lightboxDescription = GLightbox({
			selector: '.portfolio-lightbox'
		});
	</script>

	<!-- Google Map -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    	<script src="js/google-map.js"></script> -->

</body>

</html>