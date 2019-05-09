<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/png">
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
									<li class="nav-item ">
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
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	
	<!--================End Home Banner Area =================-->

	<!--================Hot Deals Area =================-->
	
	<!--================End Hot Deals Area =================-->

	<!--================Clients Logo Area =================-->
	
	<!--================End Clients Logo Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2><?php echo $cate ?></h2>
						
					</div>
				</div>
				<div class="row">

					 <?php foreach ($Produit as $Prod){?>
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="<?php echo base_url();?>assets/img/product/feature-product/f-p-1.jpg" alt="">
								
							</div>
							<a href="<?php echo base_url();?>Produit/details-<?php echo $Prod->id; ?>">
								<h4><?php echo $Prod->nom; ?></h4>
							</a>
							<h5><?php echo $Prod->prix; ?></h5>
						</div>
					</div>
					<?php }?>


					

					
					

			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->

	

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