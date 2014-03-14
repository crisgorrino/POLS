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
<title>POLS Detalle</title>
</head>
<body>
<!--include header-->
	<?php include('views/header.php'); ?>
<!--include header-->
<section class="container-padded">
	<div class="inner cf">	
		<div class="zapato">
			<img src="img/zapato-detalle.jpg" alt="POLS">
		</div>
		<div class="detalle-info">
			<h1>Polo Brown</h1>
			<p class="codigo">Codigo PBP0202</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			<div class="tallas-cont cf">
				<h2>Seleccione su talla</h2>
				<div class="tallas">
					<a href="" class="talla active">7</a>
					<a href="" class="talla ">7.5</a>
					<a href="" class="talla ">8</a>
					<a href="" class="talla ">8.5</a>
					<a href="" class="talla ">9</a>
					<a href="" class="talla agotado">10.5</a>
				</div>
				<div class="que-talla-politicas">
					<a href="" class="que-t-soy">&iquest;Qu&eacute; talla soy?</a>
					<a href="" class="pol-sug">Politicas y sugerencias</a>
				</div>
				<div class="share">
					
				</div>
				<div class="anadir">
					<span>$399.00</span>
					<input type="button" class="blue-btn" value="A&ntilde;adir a carrito">
				</div>
			</div>
		</div>
	</div>
</section>
<!--include footer-->	
<?php include('views/footer.php'); ?>
<!--include footer-->	
<script src="js/jquery.js"></script>
<script  type='text/javascript'>
$(document).ready(function(){
	$(".zapato img").mouseenter(function(){$(this).fadeOut(function() { 
	 	 $(this).load(function() { $(this).fadeIn('fast'); }); 
	 	 $(this).attr("src", "img/zapato-detalle-2.jpg"); 
	 	 }); 
	});
	
	$(".zapato img").mouseout(function(){$(this).fadeOut(function() { 
	 	 $(this).load(function() { $(this).fadeIn('fast'); }); 
	 	 $(this).attr("src", "img/zapato-detalle.jpg"); 
	 	 }); 
	});
});

</script>
</body>
</html> 