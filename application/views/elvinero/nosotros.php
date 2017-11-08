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
<!--//end-animate-->
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
<!--//end-smooth-scrolling-->
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
						<li class="wow slideInDown" data-wow-delay=".6s"><a class="active" href="<?php echo site_url("index.php/nosotros");?>">Nosotros</a></li>					
						<li class="wow slideInDown" data-wow-delay=".7s"><a href="<?php echo site_url("index.php/galeria");?>">Galeria</a></li>
						
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
			<div class="bnr-text wow slideInLeft animated" data-wow-delay=".7s">
				<h2 class="bnr-title agileinfo">El Mejor Café Tradicional</h2>
			</div>	
		</div>	
	</div>	
	<!--//banner--> 
	<!--about-page-->
	<!--about-info-->
	<div class="about">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Nosotros</h3>
			<div class="about-info w3agile-info">
				<div class="col-md-6 about-left wow fadeInLeft animated" data-wow-delay="1s">
					<img src="<?php echo base_url();?>/static/images/img3.jpg" alt=""/>
				</div>
				<div class="col-md-6 about-right wow fadeInRight animated" data-wow-delay="1s">
					<h4>Blanditiis praesentium deleniti atque corrupti quos corrupti quos dolores et quas molestias excepturi</h4>
					<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti deserunt mollitia laborum et dolorum fuga. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat </p>							
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-info--> 
	<!--team-->
	<div class="team">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Nuestro Equipo</h3>
			<div class="row team-row">
				<div class="col-md-3 team-grids wow slideInLeft animated" data-wow-delay=".5s">
					<div class="thumbnail team-thmnl">
						<img src="<?php echo base_url();?>/static/images/t1.jpg" class="img-responsive" alt="">
						<div class="caption">
							<h4>Vaura Tegsner</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#"> </a></li>
								<li><a href="#" class="fb"> </a></li>
								<li><a href="#" class="in"> </a></li>
								<li><a href="#" class="dott"> </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 team-grids wow slideInLeft animated" data-wow-delay=".7s">
					<div class="thumbnail team-thmnl">
						<img src="<?php echo base_url();?>/static/images/t2.jpg" class="img-responsive" alt="">
						<div class="caption">
							<h4>Jark Kohnson</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#"> </a></li>
								<li><a href="#" class="fb"> </a></li>
								<li><a href="#" class="in"> </a></li>
								<li><a href="#" class="dott"> </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 team-grids agileits wow slideInRight animated" data-wow-delay=".5s">
					<div class="thumbnail team-thmnl">
						<img src="<?php echo base_url();?>/static/images/t3.jpg" class="img-responsive" alt="">
						<div class="caption">
							<h4>Goes Mehak</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#"> </a></li>
								<li><a href="#" class="fb"> </a></li>
								<li><a href="#" class="in"> </a></li>
								<li><a href="#" class="dott"> </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 team-grids wow slideInRight animated" data-wow-delay=".7s">
					<div class="thumbnail team-thmnl">
						<img src="<?php echo base_url();?>/static/images/t4.jpg" class="img-responsive" alt="">
						<div class="caption">
							<h4>Jark Kohnson</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
						<div class="social-icons team-icons">
							<ul>
								<li><a href="#"> </a></li>
								<li><a href="#" class="fb"> </a></li>
								<li><a href="#" class="in"> </a></li>
								<li><a href="#" class="dott"> </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//team--> 
	<!--news-->
	<div class="news">
		<!-- container -->
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Novedades &amp; Eventos</h3>
			<div class="news-row">
				<div class="col-md-6 news-grid wow slideInLeft animated" data-wow-delay=".5s">
					<a href="single.html"><img src="<?php echo base_url();?>/static/images/img4.jpg" alt=""></a>
					<div class="news-grid-info">
						<a href="single.html">Donec cursus felis a enim egestas</a>
						<h5>29th March | 10:00 - 12:00</h5>
						<p>Etiam ex lorem cursus vitae placerat suscipit dapibus tortor sed nec augue vitae placerat suscipit dapibus tortor sed nec augue enim rhoncus ultricies eros interdum aliquam eros iaculis id.</p>
					</div>
				</div>
				<div class="col-md-6 news-grid wow slideInRight animated" data-wow-delay=".5s">
					<a href="single.html"><img src="<?php echo base_url();?>/static/images/img5.jpg" alt=""></a>
					<div class="news-grid-info">
						<a href="single.html">Donec cursus felis a enim egestas</a>
						<h5>10th April | 09:00 - 11:00</h5>
						<p>Etiam ex lorem cursus vitae placerat suscipit dapibus tortor sed nec augue vitae placerat suscipit dapibus tortor sed nec augue enim rhoncus ultricies eros interdum aliquam eros iaculis id.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!--//news-->
	<!--//about-page-->
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