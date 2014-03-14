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
<title>POLS Carga de Comprobante</title>
</head>
<body>
<!--include header-->
	<?php include('views/header.php'); ?>
<!--include header-->
<section class="container-padded">
	<div class="inner cf">	
		<div class="carga-comprobante-cont">
			<h1>Carga de comprobante de pago</h1>
			<form class="carga cf">
				<p>Ingresa el nombre de usuario y la contraseña generados en tu comprobante de pago.</p>
				<div class="cf"><label>E-mail</label><input type="text"></div>
				<div class="cf"><label>No. orden</label><input type="text"></div>
				<input type="file">
				<input type="button" value="Enviar comprobante" class="blue-btn">
			</form>
			<div class="consulta">
				<span>Consulta: <a href="">Politicas y env&iacute;os</a></span>
			</div>
		</div>	
	</div>
</section>
<!--include footer-->	
<?php include('views/footer.php'); ?>
<!--include footer-->	
</body>
</html> 