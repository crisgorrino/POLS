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
<section class="container-padded">
	<div class="inner cf">	
		<h1 class="datos-h1">Datos de env&iacute;o</h1>
		<form class="datos-envio cf">
			<div class="datos-cont left">
				<div class="cf"><label>Nombre</label><input type="text"></div>
				<div class="cf"><label>Apellidos</label><input type="text"></div>
				<div class="cf"><label>Tel&eacute;fono</label><input type="text"></div>
				<div class="cf"><label>E-mail</label><input type="text"></div>
			</div>
			<div class="datos-cont right">
				<div class="cf"><label>Domicilio</label><input type="text"></div>
				<div class="cf"><label>Ciudad</label><input type="text"></div>
				<div class="cf"><label>Estado</label><input type="text"></div>
				<div class="cf"><label>C&oacute;digo Postal</label><input type="text"></div>
				<input type="button" value="Continuar" class="blue-btn">
			</div>
		</form>
		<div class="consulta">
				<span>Consulta: <a href="">Env&iacute;os, t&eacute;rminos y condiciones</a> | <a href="">Cambios y devoluciones</a></span>
			</div>
	</div>
</section>
<!--include footer-->	
<?php include('views/footer.php'); ?>
<!--include footer-->	
</body>
</html> 