<!DOCTYPE html>
<html>
<head>
<title>El Viñero Huancayo</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="el viñero, huancayo, café peruano, valle del mantaro" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="<?php echo base_url();?>/static/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url();?>/static/css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>/static/css/flexslider.css" type="text/css" media="screen" />
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo base_url();?>/static/js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--animate-->
<link href="<?php echo base_url();?>/static/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url();?>/static/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
	<!--favicon-->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>/static/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>/static/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>/static/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/static/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>/static/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>/static/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>/static/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>/static/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>/static/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>/static/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>/static/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>/static/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/static/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--//end-animate-->
</head>
<body>
	<!--banner-->
	<div class="banner about-banner">
		<div class="container">
			<!--header-->
			<div class="header">
				<div class="logo">
					<h1 class="wow zoomIn animated" data-wow-delay=".5s"><a href="<?php echo site_url("");?>">El Viñero</a></h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="<?php echo base_url();?>/static/images/menu.png" alt=""/></span>
					<ul>
						<li class="wow slideInDown animated" data-wow-delay=".5s"><a href="<?php echo site_url("");?>">Inicio</a></li>
						<li class="wow slideInDown" data-wow-delay=".6s"><a href="<?php echo site_url("index.php/nosotros");?>">Nosotros</a></li>					
						<li class="wow slideInDown" data-wow-delay=".7s"><a class="active" href="<?php echo site_url("index.php/galeria");?>">Galeria</a></li>
						
						
					</ul>
					<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>	
			<!--//header-->
			<div class="bnr-text wow slideInLeft animated" data-wow-delay=".9s">
				<h2 class="bnr-title wthree-title">El Mejor Café Tradicional</h2>
			</div>	
		</div>	
	</div>	
	<!--//banner--> 
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h3 class="title">Galleria</h3> 
			<div class="gallery-info">
				<div class="col-md-3 gallery-grids">
					<a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="<?php echo base_url();?>/static/images/g1.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="<?php echo base_url();?>/static/images/g2.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 gallery-grids gallery-two wthree">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also remaining essentially unchanged. ">
						<img src="<?php echo base_url();?>/static/images/g3.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids gallery-grids-mdl">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="<?php echo base_url();?>/static/images/g4.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids gallery-grids-mdl">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="<?php echo base_url();?>/static/images/g1.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 gallery-grids gallery-grids-mdl gallery-two">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also essentially unchanged. ">
						<img src="<?php echo base_url();?>/static/images/g5.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>	
				<div class="col-md-6 gallery-grids gallery-two w3agile-two">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, remaining essentially unchanged. ">
						<img src="<?php echo base_url();?>/static/images/g7.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>	
				<div class="col-md-3 gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="<?php echo base_url();?>/static/images/g2.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g9.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="<?php echo base_url();?>/static/images/g9.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>	
				<div class="clearfix"> </div>
				<script src="<?php echo base_url();?>/static/js/lightbox-plus-jquery.min.js"> </script>
			</div>	
		</div>	
	</div>	
	<!--//gallery--> 
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3agile">
				<div class="col-md-4 footer-grids footer-address">
					<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Contactanos:</h3>
					<ul>
						<li class="wow slideInLeft animated" data-wow-delay=".5s"><i class="glyphicon glyphicon-send"></i> Jr. Arequipa N° 568, 12001  <span> Huancayo, Perú </span></li>
						<li class="wow slideInLeft animated" data-wow-delay=".5s"><i class="glyphicon glyphicon-phone"></i> 995 562 030</li>
						<li class="wow slideInLeft animated" data-wow-delay=".5s"><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids">
					<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Lo más pedido</h3>
					<div class="footer-grd wow zoomIn animated" data-wow-delay=".5s">
						<a href="mas.html">
							<img src="<?php echo base_url();?>/static/images/f1.jpg" class="img-responsive" alt=" ">
						</a>
					</div>
					<div class="footer-grd wow zoomIn animated" data-wow-delay=".5s">
						<a href="mas.html">
							<img src="<?php echo base_url();?>/static/images/f2.jpg" class="img-responsive" alt=" ">
						</a>
					</div>
					<div class="footer-grd wow zoomIn animated" data-wow-delay=".5s">
						<a href="mas.html">
							<img src="<?php echo base_url();?>/static/images/f3.jpg" class="img-responsive" alt=" ">
						</a>
					</div>
					<div class="clearfix"> </div>
					<div class="footer-grd wow zoomIn animated" data-wow-delay=".5s">
						<a href="mas.html">
							<img src="<?php echo base_url();?>/static/images/f4.jpg" class="img-responsive" alt=" ">
						</a>
					</div>
					<div class="footer-grd wow zoomIn animated" data-wow-delay=".5s">
						<a href="mas.html">
							<img src="<?php echo base_url();?>/static/images/f5.jpg" class="img-responsive" alt=" ">
						</a>
					</div>
					<div class="footer-grd wow zoomIn animated" data-wow-delay=".5s">
						<a href="mas.html">
							<img src="<?php echo base_url();?>/static/images/f6.jpg" class="img-responsive" alt=" ">
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-grids">
					<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Redes Sociales</h3>
					
					<div class="social-icons wow slideInRight animated" data-wow-delay=".5s">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="https://www.facebook.com/Elvinerohuancayo/" target="_blank" class="fb"> </a></li>
							<li><a href="#" class="in"> </a></li>
							<li><a href="#" class="dott"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-copy wow slideInUp animated" data-wow-delay=".5s">
				<p>© 2017. All rights reserved | Diseñado por <a href="">El Viñero Huancayo</a></p>
			</div>
		</div>	
	</div>	
	<!--//footer-->	
	<!-- start-smooth-scrolling-->
	<script type="text/javascript" src="<?php echo base_url();?>/static/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/static/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!--//end-smooth-scrolling-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!--scrolling js-->
	<script src="<?php echo base_url();?>/static/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url();?>/static/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>/static/js/bootstrap.js"></script>
</body>
</html>