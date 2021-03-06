<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url();?>assets/<?php echo base_url();?>assets/img/favicon.png" type="image/png">
	<title>Fashiop</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="<?php echo base_url();?>assets/img/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="<?php echo base_url();?>Accueil">Accueil</a>
									</li>
									

									 <?php foreach ($Categorie as $cat){?>
									<li class="nav-item ">
										<a class="nav-link"
	  href="<?php echo base_url();?>Categorie/Produit-<?php echo $cat->id; ?>"><?php echo $cat->nom; ?></a>
									</li>
									<?php }?>


								</ul>
							</div>

						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Single Product Page</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="category.html">Category</a>
						<a href="single-product.html">Product Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							

							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="<?php echo base_url();?>assets/img/product/single-product/s-product-1.jpg" alt="First slide">
								</div>
								
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $Produit[0]->nom; ?></h3>
						<h2>$<?php echo $Produit[0]->prix; ?></h2>
						<ul class="list">
							<li>
								<a class="active" href="#">
									<span>Categorie</span> : <?php echo $Produit[0]->categorie; ?></a>
							</li>
						
						</ul>
						<p><?php echo $Produit[0]->description; ?></p>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	
	<!--================End Product Description Area =================-->

	<!--================ Subscription Area ================-->
	
	<!--================ End Subscription Area ================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				
				
				
				<div class="col-lg-2 col-md-6 col-sm-6">
					
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with RAKOTONDRAMANITRA Christopher Promo10A N26<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/stellar.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/isotope/isotope-min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/flipclock/timer.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/counter-up/jquery.counterup.js"></script>
	<script src="<?php echo base_url();?>assets/js/mail-script.js"></script>
	<script src="<?php echo base_url();?>assets/js/theme.js"></script>
</body>

</html>