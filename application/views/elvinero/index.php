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
	<div class="banner">
		<div class="container">
			<!--header-->
			<div class="header">
				<div class="logo">
					<h1 class="wow zoomIn animated" data-wow-delay=".5s"><a href="<?php echo site_url("");?>">El Viñero</a></h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="<?php echo base_url();?>/static/images/menu.png" alt=""/></span>
					<ul>
						<li class="wow slideInDown animated" data-wow-delay=".5s"><a class="active" href="<?php echo site_url("");?>">Inicio</a></li>
						<li class="wow slideInDown" data-wow-delay=".6s"><a href="<?php echo site_url("index.php/nosotros");?>">Nosotros</a></li>					
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
			<div class="bnr-text wow slideInUp animated" data-wow-delay=".5s">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<h2 class="bnr-title">El mejor café de Huancayo</h2>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga.</p>								
						</li>
						<li>								
							<h3 class="bnr-title">Tenemos una gran variedad de postres</h3>
							<p>Vero eos at et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga.</p>
						</li>
						<li>
							<h3 class="bnr-title">Deliciosos cafés y postres</h3>
							<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga.</p>
						</li>
					</ul>
					<div class="clearfix"></div>
					<!--FlexSlider-->
					<script defer src="<?php echo base_url();?>/static/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				</div>
				<a href="<?php echo site_url("index.php/nosotros");?>" class="more more-right">Nosotros</a>
				<a href="<?php echo site_url("index.php/mas");?>" class="more more-left">Leer más</a>
			</div>
		</div>	
	</div>	
	<!--//banner--> 
	<!--welcome-->
	<div class="welcome">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Lo que temos para ti </h3>
			<div class="welcome-info">
				<div class="col-md-4 welcome-left w3l wow slideInLeft animated" data-wow-delay=".5s">
					
				</div>
				<div class="col-md-8 welcome-right w3l">
					<div class="welcome-text wow fadeInDown animated" data-wow-delay=".5s">
						<div class="col-md-2 wtext-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 wtext-right">
							<h4>Como en casa</h4>
							<p>Por la comodidad de nuestro local y muebles </p>
						</div>
						<div class="clearfix"> </div>
						<div class="welcome-bars">
							<label>80%</label>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
								</div>
							</div>
						</div>
					</div>
					<div class="welcome-text wow fadeInDown animated" data-wow-delay=".7s">
						<div class="col-md-2 wtext-left w3l">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 wtext-right">
							<h4>Buena atención</h4>
							<p>Además de la higene, nuestro trato con nuestros clientes es jovial, ameno y respetuso </p>
						</div>
						<div class="clearfix"> </div>
						<div class="welcome-bars">
							<label class="bar2">82%</label>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
								</div>
							</div>
						</div>
					</div>	
					<div class="welcome-text w3l wow fadeInDown animated" data-wow-delay=".9s">
						<div class="col-md-2 wtext-left">
							<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 wtext-right">
							<h4>Zona wifi</h4>
							<p>Tienes algun trabajo o informe pendiente, pues vienes y los terminas, a la ves disfrutas de nuestra carta, genial verdad! </p>
						</div>
						<div class="clearfix"> </div>
						<div class="welcome-bars agile">
							<label class="bar3">75%</label>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="clearfix"> </div>
			</div>	
		</div>	
	</div>	
	<!--//welcome--> 
	<!--menu-form-->
	<div class="menu-form">
		<div class="menu-info">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Nuestra carta</h3>
			<div class="scrollbar scrollbar1">
				<div class="menu-grids agile wow fadeInDown animated" data-wow-delay=".5s">
					<div class="menu-left">
						<h4>Cappuccino Espresso</h4>
						<p>El balance perfecto. Nuestra carga de espresso acompañada con abundante espuma de leche</p>
					</div>
					<div class="menu-right">
						<h5>$18</h5>
					</div>
					<div class="clearfix"> </div>
				</div>	
				<div class="menu-grids menu-grids-mdl wow fadeInDown animated" data-wow-delay=".6s">
					<div class="menu-left">
						<h4>Café Latte</h4>
						<p>Leche cremosa y espresso, ligeramente recubierto con suave espuma de leche</p>
					</div>
					<div class="menu-right">
						<h5>$12</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids wow fadeInDown animated" data-wow-delay=".7s">
					<div class="menu-left">
						<h4> Vanilla Latte </h4>
						<p>Delicioso café espresso con leche caliente y dulces toques de vainilla. Todo esto coronado con una sutil capa de espuma de leche</p>
					</div>
					<div class="menu-right">
						<h5>$14</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids menu-grids-mdl">
					<div class="menu-left">
						<h4> Café Mocha </h4>
						<p>Delicioso e intenso chocolate, espresso y leche cremosa, coronado con crema batida. Irresistible para los días fríos</p>
					</div>
					<div class="menu-right">
						<h5>$20</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids">
					<div class="menu-left">
						<h4> Café Mocha Blanco </h4>
						<p>Irresistible combinación de mocha blanco con nuestra carga de espresso y leche caliente, coronado con crema batida</p>
					</div>
					<div class="menu-right">
						<h5>$25</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids menu-grids-mdl">
					<div class="menu-left">
						<h4> Caramel Macchiato </h4>
						<p>Leche cremosa “manchada” con espresso y vainilla, cubierta con una deliciosa rejilla de caramelo. Dulce, cremoso e intenso</p>
					</div>
					<div class="menu-right">
						<h5>$20</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids">
					<div class="menu-left">
						<h4> Espresso </h4>
						<p>Es la verdadera esencia del café en la forma más concentrada. El espresso de Starbucks es intenso y con un toque acaramelado</p>
					</div>
					<div class="menu-right">
						<h5>$11</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids menu-grids-mdl">
					<div class="menu-left">
						<h4> Té Chai Latte </h4>
						<p>Deliciosa mezcla especiada de té Chai, leche y una delgada capa de espuma de leche</p>
					</div>
					<div class="menu-right">
						<h5>$20</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids">
					<div class="menu-left">
						<h4> Té Latte </h4>
						<p> Disfruta una delicioso Earl Grey o un Vanilla Rooibos combinado con leche</p>
					</div>
					<div class="menu-right">
						<h5>$11</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>	
	<!--//menu-form--> 
	<!--reservation-->
	<div class="reservation">
		<div class="container">
			<h3 class="title w3agile wow fadeInDown animated" data-wow-delay=".5s">Haz tu reservación</h3>
			<div class="book-info">
				<div class="col-md-5 book-left wow fadeInLeft animated" data-wow-delay=".5s">
					<h4 class="wow fadeInDown animated" data-wow-delay=".5s">Abierto de:</h4>
					<h5 class="wow fadeInDown animated" data-wow-delay=".6s">Lunes – Sabados 9:00 a.m – 9:00 p.m <br>
						domingos 10 a.m – 7 p.m <br>
						<span class="glyphicon glyphicon-earphone"></span> 995 562 030 </h5>
					<span class="burger wow zoomIn animated" data-wow-delay=".7s"> </span>
				</div>
				<div class="col-md-7 book-right agileinfo wow fadeInRight animated" data-wow-delay=".5s">
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdYXvcMHDV7h7Q3RcQCFw7-1y-TZlaYvC3p-gg2RsYgkIpKyw/viewform" width="100%" height="380" frameborder="0" marginheight="0" marginwidth="0" style="background: transparent;"></iframe>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--//reservation-->
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