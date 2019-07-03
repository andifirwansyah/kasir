<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="author" content="codepixer">
	<meta name="keywords" content="KPCodeLab">
	<meta charset="UTF-8">
	<title>Coffee</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/linearicons.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/font-awesome.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/bootstrap.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/magnific-popup.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/nice-select.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/animate.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/owl.carousel.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/page/css/main.css") ?>">
</head>

<body>

	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
						<ul>
							<li>
								Mon-Fri: 8am to 2pm
							</li>
							<li>
								Sat-Sun: 11am to 4pm
							</li>
							<li>
								<a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="#home">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#coffee">Coffee</a></li>
						<li><a href="#review">Review</a></li>
						<li><a href="#blog">Blog</a></li>
						<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
							</ul>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area" id="home">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-start">
				<div class="banner-content col-lg-7">
					<h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
					<h1>
						Start your day with <br>
						a black Coffee
					</h1>
					<a href="#" class="primary-btn text-uppercase">Buy Now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start video-sec Area -->
	<section class="video-sec-area pb-100 pt-40" id="about">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
					<div class="overlay overlay-bg"></div>
					<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a>
				</div>
				<div class="col-lg-6 video-left">
					<h6>Live Coffee making process.</h6>
					<h1>We Telecast our <br>
						Coffee Making Live</h1>
					<p><span>We are here to listen from you deliver exellence</span></p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
					</p>
					<img class="img-fluid" src="img/signature.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End video-sec Area -->

	<!-- Start menu Area -->
	<section class="menu-area section-gap" id="coffee">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">What kind of Coffee we serve for you</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($product as $row) : ?>
					<?php if ($row["nama_category"] == "Minuman") { ?>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?= $row["nama_product"] ?></h4>
									<p class="price float-right">
										Rp. <?= $row["harga"] ?>
									</p>
								</div>
								<p>
									<!-- Usage of the Internet is becoming more common due to rapid advance. -->
									<?= $row["nama_category"] ?>
								</p>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
				<div class="col-md-12 text-center" style="margin-top:30px;">
					<a href="#" class="genric-btn primary circle arrow">View All Menus<span class="lnr lnr-arrow-right"></span></a>
				</div>

			</div>
		</div>
	</section>
	<!-- End menu Area -->

	<!-- Start gallery Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">What services we provide to you</h1>
						<p>We will serve you with the best service</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<a href="<?= base_url("/foto/gallery/").$images[0]["gambar"] ?>" class="img-pop-home">
						<img class="img-fluid" src="<?= base_url("/foto/gallery/").$images[0]["gambar"] ?>" alt="">
					</a>
					<a href="<?= base_url("/foto/gallery/").$images[1]["gambar"] ?>" class="img-pop-home">
						<img class="img-fluid" src="<?= base_url("/foto/gallery/").$images[1]["gambar"] ?>" alt="">
					</a>
				</div>
				<div class="col-lg-8">
					<a href="<?= base_url("/foto/gallery/").$images[2]["gambar"] ?>" class="img-pop-home">
						<img class="img-fluid" src="<?= base_url("/foto/gallery/").$images[2]["gambar"] ?>" alt="">
					</a>
					<div class="row">
						<div class="col-lg-6">
							<a href="<?= base_url("/foto/gallery/").$images[3]["gambar"] ?>" class="img-pop-home">
								<img class="img-fluid" src="<?= base_url("/foto/gallery/").$images[3]["gambar"] ?>" alt="">
							</a>
						</div>
						<div class="col-lg-6">
							<a href="<?= base_url("/foto/gallery/").$images[4]["gambar"] ?>" class="img-pop-home">
								<img class="img-fluid" src="<?= base_url("/foto/gallery/").$images[4]["gambar"] ?>" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End gallery Area -->

	<!-- Start review Area -->
	<section class="review-area section-gap" id="review">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">What kind of Coffee we serve for you</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 single-review">
					<img src="img/r1.png" alt="">
					<div class="title d-flex flex-row">
						<h4>lorem ipusm</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>
				<div class="col-lg-6 col-md-6 single-review">
					<img src="img/r2.png" alt="">
					<div class="title d-flex flex-row">
						<h4>lorem ipusm</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
				</div>
			</div>
			<div class="row counter-row">
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">2536</h1>
					<p>Happy Client</p>
				</div>
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">7562</h1>
					<p>Total Projects</p>
				</div>
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">2013</h1>
					<p>Cups Coffee</p>
				</div>
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">10536</h1>
					<p>Total Submitted</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End review Area -->

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">What kind of Coffee we serve for you</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 single-blog">
					<img class="img-fluid" src="img/b1.jpg" alt="">
					<ul class="post-tags">
						<li><a href="#">Travel</a></li>
						<li><a href="#">Life Style</a></li>
					</ul>
					<a href="#">
						<h4>Portable latest Fashion for young women</h4>
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
					</p>
					<p class="post-date">
						31st January, 2018
					</p>
				</div>
				<div class="col-lg-6 col-md-6 single-blog">
					<img class="img-fluid" src="img/b2.jpg" alt="">
					<ul class="post-tags">
						<li><a href="#">Travel</a></li>
						<li><a href="#">Life Style</a></li>
					</ul>
					<a href="#">
						<h4>Portable latest Fashion for young women</h4>
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
					</p>
					<p class="post-date">
						31st January, 2018
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End blog Area -->


	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
						</p>
						<p class="footer-text">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://instagram.com/andiwawank__" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>

								<div class="info pt-20"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="<?= base_url("assets/page/js/vendor/jquery-2.2.4.min.js") ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?= base_url("assets/page/js/vendor/bootstrap.min.js") ?>"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="<?= base_url("assets/page/js/easing.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/hoverIntent.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/superfish.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/jquery.ajaxchimp.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/jquery.magnific-popup.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/owl.carousel.min.js") ?>"></script>

	<script src="<?= base_url("assets/page/js/jquery.sticky.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/jquery.nice-select.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/parallax.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/waypoints.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/jquery.counterup.min.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/mail-script.js") ?>"></script>
	<script src="<?= base_url("assets/page/js/main.js") ?>"></script>
</body>

</html>