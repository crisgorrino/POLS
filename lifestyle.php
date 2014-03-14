<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<title>POLS Lifestyle</title>
</head>
<body>
<!--include header-->
	<?php include('views/header.php'); ?>
<!--include header-->
<section class="container black-bg">
	<div class="inner-padded center cf">	
	<h1 class="story-hdr">LIFESTYLE</h1>	
	</div>
</section>
<section class="container gray-bg">
	<div class="inner cf">
		<img src="img/perrito-contacto.png" class="perrito-hdr" alt="wa wa"> 
	</div>
</section>
<section class="container gray-bg">
	<div class="inner-padded cf">
		<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
				<img src="img/lifestyle-slide-1-top.jpg" alt="">
				<img src="img/mini-pols-slide-1.jpg" alt="">
            </div>	
		</div>
	</div>
</section>
<section class="container ">
	<div class="inner-padded cf center">
		<img src="img/mini-pols-logo.jpg" class="" alt="los beibis" style="display:inline-block;"> 
	</div>
</section>
	
<section class="container gray-bg">
	<div class="inner-padded cf">
		<div class="slider-wrapper theme-default">
            <div id="slider2" class="nivoSlider">
				<img src="img/mini-pols-slide-1.jpg" alt="">
				<img src="img/lifestyle-slide-1-top.jpg" alt="">
            </div>	
		</div>
	</div>
</section>
<section class="container gray-bg">
	<div class="inner-padded cf">
	<!--news-->
		<div class="lifestyle-news cf">
			<div class="lifestyle-news-hdr cf">
				<h2><span>LIFESTYLE</span> <strong>NEWS</strong></h2>
				<img src="img/pols-lifestyle-news.jpg" class="" alt="wa wa"> 
			</div>
			<div class="news-feed">
				<!--articulo-->
				<div class="news-artilce">
					<h4>MINI POLS ya a la venta.</h4>
					<p>Aliquip ex ea commodo consequat. Duis autem vel eum iriuredolor in hendrerit in vulputate</p>
				</div>
				<!--articulo-->
				<!--articulo-->
				<div class="news-artilce">
					<h4>MINI POLS ya a la venta.</h4>
					<p>Aliquip ex ea commodo consequat. Duis autem vel eum iriuredolor in hendrerit in vulputate</p>
				</div>
				<!--articulo-->
				<!--articulo-->
				<div class="news-artilce">
					<h4>MINI POLS ya a la venta.</h4>
					<p>Aliquip ex ea commodo consequat. Duis autem vel eum iriuredolor in hendrerit in vulputate</p>
				</div>
				<!--articulo-->
				<!--articulo-->
				<div class="news-artilce">
					<h4>MINI POLS ya a la venta.</h4>
					<p>Aliquip ex ea commodo consequat. Duis autem vel eum iriuredolor in hendrerit in vulputate</p>
				</div>
				<!--articulo-->
				<!--articulo-->
				<div class="news-artilce">
					<h4>MINI POLS ya a la venta.</h4>
					<p>Aliquip ex ea commodo consequat. Duis autem vel eum iriuredolor in hendrerit in vulputate</p>
				</div>
				<!--articulo-->
				<!--articulo-->
				<div class="news-artilce">
					<h4>MINI POLS ya a la venta.</h4>
					<p>Aliquip ex ea commodo consequat. Duis autem vel eum iriuredolor in hendrerit in vulputate</p>
				</div>
				<!--articulo--><!--articulo-->
				<div class="news-artilce">
					<h4>MINI POLS ya a la venta.</h4>
					<p>Aliquip ex ea commodo consequat. Duis autem vel eum iriuredolor in hendrerit in vulputate</p>
				</div>
				<!--articulo-->
			</div>
		</div>
		<!--news-->
		<div class="news-add-cont">	
			<img src="img/veinteporciento.jpg" alt="">
		</div>	
		
		<!--videos-->
		<div class="videos-cont cf">	
			<h2>VIDEO POLS  <span>LIFESTYLE</span></h2>
			<div class="vid">
				<a href="#"><img src="img/vid-1.jpeg" alt=""></a>
				<h3>Wake Party Pols 2013</h3>
				<p>Video Promocional en Boca Laguna México 2013</p>
			</div>
			
			<div class="vid">
				<a href="#"><img src="img/vid-2.jpeg" alt=""></a>
				<h3>Wake Party Pols 2013</h3>
				<p>Video Promocional Campaña 2012</p>
			</div>
			
			<div class="vid">
				<a href="#"><img src="img/vid-3.jpeg" alt=""></a>
				<h3>Wake Party Pols 2013</h3>
				<p>Pasarela MiniPols 2013</p>
			</div>
		</div>	
		<!--videos-->
		<!--instagram feed-->
		<div class="insta_container cf">
        	<div class="insta_head"><img src="img/instagram_hdr_img.jpg" alt="instagram"></div>
        	<div class="instagram cf"></div>
        </div>
        <!--instagram feed-->
	</div>
</section>	
<!--include footer-->	
<?php include('views/footer.php'); ?>
<!--include footer-->	
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.instagram.js"></script>
<script type="text/javascript" src="js/jquery.slimbox2.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
// Instagram Extension 

$(document).ready(function() {
	$(".instagram").instagram({
    hash: 'lovepols',
	 show: '20',
    clientId: 'f899d1bf7a7b47c5b8a3dc9c0493c56e'
    });
   
	});
	
	$(window).load(function () {
 	$('div.instagram-placeholder').each( function(i) {
  	if( i % 4 != 3 )
    return
 	$(this).addClass('last')
	})
});
</script>

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider2').nivoSlider();
});
</script>

</body>
</html> 