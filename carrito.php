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
<section class="inner carrito cf">	
        <h1>Art&iacute;culos en carrito: <strong>1</strong></h1>
        <div class="heads">
            <span class="producto-hd">Producto</span>
             <span class="elim-hd">Talla</span>
            <span class="cant-hd">Cant.</span>
            <span class="pu-hd">P.U.</span>
            <span class="total-hd">Total</span>
        </div>
	
        <!--producto-->
        <div class="productos-carrito cf">		
            <!--eliminar-->
            <span class="eliminar"><a onclick="
                jConfirm('Est\u00e1 seguro de que deseas quitar el producto?', 'Confirmar', function(r){
                if(r){
                    document.getElementById('ver_pedido').action='carrito.php'; 
                    document.getElementById('indice').value=''; 
                    document.getElementById('opcion').value='delCart'; 
                    document.getElementById('ver_pedido').submit();
                }
            
                });
                " style="cursor:pointer;" class="icon-cross"></a></span>
            <!--eliminar-->
            
            <!--producto-desc y foto-->
            <span class="producto">
            	
				<img src="img/pols-carrito-zapato.jpg" alt="Nombre del producto">
					
                <span class="info-desc">
                    <strong>Corbata X</strong>
                    <span>Descripci&oacute;n de la Corbata, etc, etc...</span>
                </span>	
            </span>
            <!--producto-desc y foto-->	
            
             <!--talla-->
            <span class="cant">
                <span>7</span>
            </span>
            <!--talla-->		
            <!--cant-->
            <span class="cant">
                <input type="text" name="cantidad[1]" value="2" class="entero_positivo" onkeyup="document.getElementById('opcion').value='actualizaCart'; document.getElementById('ver_pedido').action='carrito.php'; document.getElementById('ver_pedido').submit();" onchange="document.getElementById('opcion').value='actualizaCart'; document.getElementById('ver_pedido').action='carrito.php'; document.getElementById('ver_pedido').submit();" />
                <a style="cursor:pointer;" onclick="document.getElementById('opcion').value='actualizaCart'; document.getElementById('ver_pedido').action='carrito.php'; document.getElementById('ver_pedido').submit();" class="icon-loop"></a>
            </span>
            <!--cant-->		
            <!--precio unitario-->
            <div class="pu-total">
                <span>$500 MXN</span>
            </div>
            <!--precio unitario-->		
            <!--precio unitario-->
            <div class="pu-total">
                <span>$1,000 MXN</span>
            </div>
            <!--precio unitario-->		
        </div>
        <!--producto-->
        <?php
        //#####     *****     #####//
        //Variables para PayPal
        ?>
        <input name="L_NUMBER[]" type="hidden" value="" /> 
        <input name="L_NAME[]" maxlength="32" class="mayus" type="hidden" value="" />
        <input name="L_DESC[]" maxlength="32" class="mayus" type="hidden" value="" />
        <input name="L_QTY[]" maxlength="7" class="mayus" type="hidden" value="" />
        <?php /*?>        
        <input name="L_AMT[]" maxlength="11" type="hidden" value="<?php echo $costoP; ?>" /><?php */?>
        
        
        <!--producto-->
        <div class="productos-carrito cf">		
            <!--eliminar-->
             <span class="eliminar"><a onclick="
                jConfirm('Est\u00e1 seguro de que deseas quitar el producto?', 'Confirmar', function(r){
                if(r){
                    document.getElementById('ver_pedido').action='carrito.php'; 
                    document.getElementById('indice').value=''; 
                    document.getElementById('opcion').value='delCart'; 
                    document.getElementById('ver_pedido').submit();
                }
            
                });
                " style="cursor:pointer;" class="icon-cross"></a></span>
            <!--eliminar-->
            
            <!--producto-desc y foto-->
            <span class="producto">
            	
				<img src="img/pols-carrito-zapato.jpg" alt="Nombre del producto">
					
                <span class="info-desc">
                    <strong>Corbata X</strong>
                    <span>Descripci&oacute;n de la Corbata, etc, etc...</span>
                </span>	
            </span>
            <!--producto-desc y foto-->	
             <!--talla-->
            <span class="cant">
                <span>7</span>
            </span>
            <!--talla-->		
            <!--cant-->
            <span class="cant">
                <input type="text" name="cantidad[1]" value="2" class="entero_positivo" onkeyup="document.getElementById('opcion').value='actualizaCart'; document.getElementById('ver_pedido').action='carrito.php'; document.getElementById('ver_pedido').submit();" onchange="document.getElementById('opcion').value='actualizaCart'; document.getElementById('ver_pedido').action='carrito.php'; document.getElementById('ver_pedido').submit();" />
                <a style="cursor:pointer;" onclick="document.getElementById('opcion').value='actualizaCart'; document.getElementById('ver_pedido').action='carrito.php'; document.getElementById('ver_pedido').submit();" class="icon-loop"></a>
            </span>
            <!--cant-->		
            <!--precio unitario-->
            <div class="pu-total">
                <span>$500 MXN</span>
            </div>
            <!--precio unitario-->		
            <!--precio unitario-->
            <div class="pu-total">
                <span>$1,000 MXN</span>
            </div>
            <!--precio unitario-->		
        </div>
        <!--producto-->
        <?php
        //#####     *****     #####//
        //Variables para PayPal
        ?>
        <input name="L_NUMBER[]" type="hidden" value="" /> 
        <input name="L_NAME[]" maxlength="32" class="mayus" type="hidden" value="" />
        <input name="L_DESC[]" maxlength="32" class="mayus" type="hidden" value="" />
        <input name="L_QTY[]" maxlength="7" class="mayus" type="hidden" value="" />
        <?php /*?>        
        <input name="L_AMT[]" maxlength="11" type="hidden" value="<?php echo $costoP; ?>" /><?php */?>
        
    
        <!--metodo de envio-->
        <section class="metodo-envio">
            <h3>Seleccione m&eacute;todo de env&iacute;o</h3>
            <div id="ajax_metodo_envio" class="envio">
            <!--bitboys-->
                <div class="envio-inner">
                    <input onclick="setMetodoEnvio('envio_metodo_id1', '250')" type="radio" id="envio_metodo_id1" name="envio_metodo_id" value="1">
                    <label for="envio_metodo_id1">
                       <strong>Bitboys</strong><br>
                        Env&iacute;o solo Guadalajara y ZM<br>
                        <strong><small>Lun -Vie de 11 a 8pm. y Sab de 11 a 4 pm.</small></strong>
                    </label>
                    <br>
                    <br>
                    <div class="inmediato">
	                    <input onclick="setMetodoEnvio('envio_metodo_id1', '250')" type="radio" id="envio_metodo_id1" name="envio_metodo_id" value="1">
	                    <label for="envio_metodo_id1">
	                       Inmediato (20 a 90 min)<br>
	                       <strong><small>$80.00</small></strong>
	                    </label>
                    </div>
                    
                     <div class="programado cf">
	                    <input onclick="setMetodoEnvio('envio_metodo_id1', '250')" type="radio" id="envio_metodo_id1" name="envio_metodo_id" value="1">
	                    <label for="envio_metodo_id1">
	                      Programado<br>
	                        <strong><small>$60.00</small></strong>
	                    </label>
	                    <br>
	                    <br>
	                    <input type="text" class="left slecciona-fecha"><span class="selecciona-fecha-txt">Selecciona Fecha</span>
	                    	<div class="styled-select right">
			                   	 <select>
				                    <option>Hora</option>
			                    </select>
		                    </div>
                    </div>
                </div>
                <!--bitboys-->
                <!--nacional-->
                <div class="envio-inner">
                    <input onclick="setMetodoEnvio('envio_metodo_id2', '250')" type="radio" id="envio_metodo_id2" name="envio_metodo_id" value="2">
                    <label for="envio_metodo_id2">
                        <strong>Envio Nacional</strong><br>
                        1 a 3 d&iacute;as h&aacute;biles<br>
                        <strong>$110.00</strong><br>
                        <img src="img/redpack.jpg" alt="">
                    </label>                
                </div>                
            </div>            
        </section>
        <!--metodo de envio-->	
    
        <!--totales-->
        <section class="totales cf">
            <div class="totales-inner">
                <div class="sub">
                    <span>Subtotal</span>
                    <p>$2,000 MXN</p>
                </div>
                <div class="sub">
                    <span>Env&iacute;o</span>
                    <p id="ajax_costo_envio">$80 MXN</p>
                </div>
                <div class="sub">
                    <span>Total</span>
                    <p id="ajax_gran_total">$2,080 MXN</p>
                </div>
            </div>
            <a style="cursor:pointer;" onclick="document.getElementById('ver_pedido').submit();" class="blue-btn right continuar">Continuar</a>
        </section>
        <!--totales-->
    </section>
</section>
<!--include footer-->	
<?php include('views/footer.php'); ?>
<!--include footer-->	
</body>
</html> 