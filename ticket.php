<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="all">
 	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
 
</head>

<body>

<article class="container-top">
	<section class="inner carrito cf">
    	<span class="right imrpimir_mail_container"><a style="cursor:pointer;" onClick="imprSelec('imprimir_html');" class="imprimir bold">Imprimir</a></span>
    	<div class="clear"></div>
    	<?php
		ob_start();
		?>
        <page id="imprimir_html" style="background-color:#FFF;">
            <style type="text/css">
                a:link {
                color: #3f3f3f;
                            text-decoration: none;
                }
                a:visited {
                color:#3f3f3f;
                text-decoration:none;
                }
                a:hover {
                color:#3f3f3f;
                text-decoration:underline;
                }
                a:active {
                color:#3f3f3f;
                text-decoration:none;
                }
                p{margin:0px; padding:0px;
                color:#3f3f3f;}
                h1,h2,h3,h4{font-family:Helvetica, Arial, sans-serif; font-weight:normal; color:#3f3f3f; margin: 0;}
                h2{font-size: 16px;}
                .img_border{border:1px solid #686565;}
            </style>
            
            <table style="width:100%; padding:25px 25px 0 25px;" height="200" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
            <td style="width:45%; border-bottom:1px solid gray;" height="114"><img src="img/pols-logo.png" alt="logo"></td>
            <td style="width:55%; border-bottom:1px solid gray; text-align:right;">
            <h1 style="color: #3f3f3f;">Ticket de Venta</h1>
            
            <p>Comprador Test<br>
            cacer_marketing_personal@gmail.com</p>
            </td>
            </tr>
            </tbody></table>
             <br>
            <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
            <tbody><tr>
            <td style="width:45%;" height="15"><p><span style="color: #3f3f3f;">Número de Orden:</span> 08K12149CE8482943</p></td>
            <td style="width:55%; text-align:right;" height="15"><p><span style="color: #3f3f3f;">Pedido el:</span> 28 de Enero de 2014</p></td>
            </tr>
            <!--<tr><td><p>Articulos por enviar:</p></td></tr>-->
            </tbody></table>
            <br>
            <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
            <tbody><tr>
            <td style="width:46%; border-bottom:1px solid gray;" height="15"><p>Artículos</p></td>
            <td style="width:10%; border-bottom:1px solid gray; text-align:center;" height="15"><p>Talla</p></td>
            <td style="width:14%; border-bottom:1px solid gray;" height="15"><p>Precio</p></td>
            <td style="width:14%; border-bottom:1px solid gray; text-align:center;" height="15"><p>Cantidad</p></td>
            <td style="width:16%; border-bottom:1px solid gray;" height="15"><p>Total</p></td>
            </tr>
            </tbody></table>
            <br>
            <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
            <tbody><tr>
            <td style="width:14%; border-bottom:1px solid gray;">
                                    <img alt="" src="img/pols-carrito-zapato.jpg">
                                </td>
            <td style="width:32%; border-bottom:1px solid gray;">
                <p>Azul con Puntos Rosas</p>
                <span>Juego con corbata, pañuelo y mancuernillas color azul con puntos rosa</span>
            </td>
            <td style="width:10%; border-bottom:1px solid gray; text-align:center;"><p>S</p></td>
            <td style="width:14%; border-bottom:1px solid gray;"><p>$590.00 MXN</p></td>
            <td style="width:14%; border-bottom:1px solid gray; text-align:center;"><p>1</p></td>
            <td style="width:16%; border-bottom:1px solid gray;"><p><strong>$590 MXN</strong></p></td>
            </tr>
            </tbody></table>
            <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
            <tbody><tr>
            <td style="width:14%; border-bottom:1px solid gray;">
                                    <img alt="" src="img/pols-carrito-zapato.jpg">
                                </td>
            <td style="width:32%; border-bottom:1px solid gray;">
                <p>Azul con Puntos Rosas</p>
                <span>Juego con corbata, pañuelo y mancuernillas color azul con puntos rosa</span>
            </td>
            <td style="width:10%; border-bottom:1px solid gray; text-align:center;"><p>CH</p></td>
            <td style="width:14%; border-bottom:1px solid gray;"><p>$590.00 MXN</p></td>
            <td style="width:14%; border-bottom:1px solid gray; text-align:center;"><p>1</p></td>
            <td style="width:16%; border-bottom:1px solid gray;"><p><strong>$590 MXN</strong></p></td>
            </tr>
            </tbody></table>
            <br>
            <table style="width:100%; padding:0 25px 4px 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
            <tbody><tr><td style="width:100%; border-bottom:1px solid gray;" height="30"><h2>Envío:</h2></td></tr>
            </tbody></table>
                    
            <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
            <tbody><tr>
            <td style="width:14%; border-bottom:1px solid gray; text-align:right;" height="18"><p>&nbsp;</p></td>
            <td style="width:70%; border-bottom:1px solid gray;" height="18"><p>Envío México:&nbsp;Envío Nacional 300 gramos</p></td>
            <td style="width:16%; border-bottom:1px solid gray;" height="18"><p><strong>$30.00 MXN</strong></p></td>
            </tr>
            </tbody></table>
            <br>
            <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
            <tbody><tr>
            <td style="width:14%; padding-bottom:5px; border-bottom:1px solid gray;"><p style="color:#3f3f3f;">Enviar a:</p></td>
            <td style="width:86%; padding-bottom:5px; border-bottom:1px solid gray;"><p>Comprador Test<br>
                    1 Main St áéíóú<br>
                    95131 San Jose, CA. US.<br>
                    </p></td>
            </tr>
            </tbody></table>
            <br>
            <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
                    <tbody>
                <tr>
                                <td style="width:84%; text-align:right; padding-right:5px;"><p><span style="color: #3f3f3f;">Subtotal:</span></p></td>
                    <td style="width:16%;"><p><strong>$1180 MXN</strong></p></td>
                </tr>
                <tr>
                    <td style="text-align:right; padding-right:5px;"><p><span style="color: #3f3f3f;">Envío:</span></p></td>
                    <td><p><strong>$30.00 MXN</strong></p></td>
                </tr>
                <tr>
                    <td style="text-align:right; padding-right:5px;"><p><span style="color: #3f3f3f;">Total:</span></p></td>
                    <td><p><strong>$2110.00 MXN</strong></p></td>
                </tr>
                <tr>
                    <td style="text-align:right; padding-right:5px;"><p><span style="color: #3f3f3f;">Método de Pago:</span></p></td>
                    <td><p><strong class="bold">Paypal</strong></p></td>
                </tr>
                    </tbody>
            </table>
            
            <page_footer>
                <table style="width:100%; padding:0 25px 0 25px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff">
                <tbody>
                <tr>
                    <td style="width:50%; border-top:1px solid gray; font-size:9px;"><p>Para cualquier informaci&oacute;n adicional favor de contactarnos en <a href="mailto:ventas@pols.com.mx" class="mail_link">ventas@pols.com.mx</a></p></td>
                    <td style="text-align:right; width:50%; border-top:1px solid gray;">
                    <h2><span style="color: #3f3f3f;">OFICINAS</span></h2>
                    <p><span style="color: #3f3f3f; font-size:9px;">Av. Patria 623-A, Colonia Jardines de Universidad, C.P. 45110, en Guadalajara, Jalisco, MX.</span><br>
                    <strong style="font-size:9px;" class="bold">t. (33) 3456 7890</strong><br>
                    <a href="mailto:ventas@pols.com.mx">ventas@pols.com.mx</a></p><br></td>
                </tr>
                </tbody>
                </table>
            </page_footer>
        </page>
        <?php
		$content = ob_get_clean();
		echo $content;
		?>
        <span class="right imrpimir_mail_container"><a style="cursor:pointer;" onClick="imprSelec('imprimir_html');" class="imprimir bold">Imprimir</a></span>
    	<div class="clear"></div>
    	<script language="Javascript">
		function imprSelec(nombre)
		{
		  var ficha = document.getElementById(nombre);
		  var ventimp = window.open(' ', 'popimpr');
		  ventimp.document.write( '<link rel="stylesheet" href="css/style.css" type="text/css" media="all">'+ficha.innerHTML );
		  ventimp.document.close();
		  ventimp.print( );
		  ventimp.close();
		}
		</script>
	</section>
</article>

</body>
</html>