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
			<div class="bnr-text wow slideInLeft animated" data-wow-delay=".9s">
				<h2 class="bnr-title">El Mejor Café Tradicional</h2>
			</div>	
		</div>	
	</div>	
	<!--//banner--> 
	<!--single-page-->
	<div class="blog single-page">
		<div class="container">
			<div class="blog-info">
				<div class="blog-left wow slideInLeft animated" data-wow-delay=".5s">
					<h6>25<span>th</span></h6>
					<h5>April</h5>
				</div>
				<div class="blog-right wow slideInRight animated" data-wow-delay=".5s">
					<div class="blog-img">
						<img src="<?php echo base_url();?>/static/images/img6.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="blog-text">
						<h4 class="w3l wow fadeInDown animated" data-wow-delay=".5s">Integer interdum eros vitae sem ultrices sed eleifend tellus tincidunt</h4>
						<p class="wow fadeInDown animated" data-wow-delay=".5s">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur,Duis aute irure dolor in quis nostrud exercitation ullamco
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur</p>
						<div class="article-links wow fadeInDown animated" data-wow-delay=".7s">
							<ul>
								<li><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span>April 25, 2016</span></li>
								<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i><span>Admin</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>No comments</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i><span>View posts</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-link" aria-hidden="true"></i><span>Permalink</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 
			<!--admin-text-->
			<div class="admin-text wthree wow fadeInDown animated" data-wow-delay=".5s">
				<h5>Written By Admin</h5>
				<div class="admin-text-left">
					<a href="#"><img src="<?php echo base_url();?>/static/images/icon1.png" alt=""/></a>
				</div>
				<div class="admin-text-right">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<span>View all posts by:<a href="#"> Admin </a></span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//admin-text--> 
			<!--related-posts-->
			<div class="row related-posts agile">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Related Posts</h3>
				<div class="col-xs-3 col-md-3 related-grids wow zoomIn animated" data-wow-delay=".5s">
					<a href="single.html" class="thumbnail">
						<img src="<?php echo base_url();?>/static/images/g7.jpg" alt=""/>
					</a>
					<h5><a href="single.html">Lorem Ipsum is simply</a></h5>
				</div>	
				<div class="col-xs-3 col-md-3 related-grids wow zoomIn animated" data-wow-delay=".5s">
					<a href="single.html" class="thumbnail">
						<img src="<?php echo base_url();?>/static/images/g3.jpg" alt=""/>
					</a>
					<h5><a href="single.html">Lorem Ipsum is simply</a></h5>
				</div>
				<div class="col-xs-3 col-md-3 related-grids wow zoomIn animated" data-wow-delay=".6s">
					<a href="single.html" class="thumbnail">
						<img src="<?php echo base_url();?>/static/images/g5.jpg" alt=""/>
					</a>
					<h5><a href="single.html">Lorem Ipsum is simply</a></h5>
				</div>
				<div class="col-xs-3 col-md-3 related-grids agileits wow zoomIn animated" data-wow-delay=".6s">
					<a href="single.html" class="thumbnail">
						<img src="<?php echo base_url();?>/static/images/g7.jpg" alt=""/>
					</a>
					<h5><a href="single.html">Lorem Ipsum is simply</a></h5>
				</div>					
			</div>				
			<!--//related-posts-->
			<!--comments-->
			<div class="comment-grid-top">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Responses</h3>
				<div class="comments-top-top wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="top-comment-left">
						<a href="#"><img class="img-responsive" src="<?php echo base_url();?>/static/images/icon1.png" alt=""></a>
					</div>
					<div class="top-comment-right">
						<ul>
							<li><span class="left-at"><a href="#">Admin</a></span></li>
							<li><span class="right-at">April 28, 2016 at 10.30am</span></li>
							<li><a class="reply" href="#">Reply</a></li>
						</ul>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="comments-top-top top-grid-comment wow fadeInRight animated" data-wow-delay=".5s">
					<div class="top-comment-left">
						<a href="#"><img class="img-responsive" src="<?php echo base_url();?>/static/images/icon1.png" alt=""></a>
					</div>
					<div class="top-comment-right w3">
						<ul>
							<li><span class="left-at"><a href="#">Admin</a></span></li>
							<li><span class="right-at">May 18, 2016 at 10.30am</span></li>
							<li><a class="reply" href="#">Reply</a></li>
						</ul>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//comments-->
			<div class="artical-commentbox">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">leave a comment</h3>
				<div class="table-form agileinfo">
					<form>
						<input class="wow fadeInDown animated" data-wow-delay=".5s" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						<input class="wow fadeInDown animated" data-wow-delay=".6s" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<input class="wow fadeInDown animated" data-wow-delay=".7s" type="text" value="Phone number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone number';}">
						<textarea class="wow fadeInDown animated" data-wow-delay=".7s" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>	
						<input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="Send">
					</form>
				</div>
			</div>	
		</div>	
	</div>	
	<!--//blog-->	
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