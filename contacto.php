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
<title>POLS Estilos</title>
</head>
<body>
<!--include header-->
	<?php include('views/header.php'); ?>
<!--include header-->
<section class="container blue-bg">
	<div class="inner-padded">
		<img src="img/perrito-contacto.png" alt="wa wa" class="contact-img">
		<div class="contact-hdr">
			<h1>Cont&aacute;ctanos!</h1>
			<h2>Tus comentarios son muy importantes para nosotros.<br>
				Comunicate con nosotros y enseguida un asesor te contactara</h2>
		</div>
	</div>
</section>
<section class="container-padded">
	<div class="inner cf">	
		<form class="contact-form cf">
			<div class="contact-right">
				<input type="text" placeholder="Nombre">
				<input type="text" placeholder="E-mail">
				<input type="text" placeholder="Tel&eacute;fono">
			</div>
			<textarea placeholder="Comentario">
				
			</textarea>
			<input type="button" class="blue-btn" value="Enviar">
		</form>	
	</div>
</section>
<!--include footer-->	
<?php include('views/footer.php'); ?>
<!--include footer-->	
</body>
</html> 