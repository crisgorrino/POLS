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
                <span>2</span>
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
              <span>2</span>
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
        
     <!--metodos de pago-->
       <div class="metodos-d-pago">
        <h3>Métodos de pago</h3>
        
        <div class="metodo-cred cf">
	        <label for="paypal">
                <img src="img/paypal.jpg" alt="">
                <p style="border-bottom:1px solid #000; margin:8% 0;">Crédito</p>
                <input id="paypal" type="radio" name="metodo" class="" checked="checked" value="paypal">
                <img src="img/tarjeta-cred.jpg" alt="" class="right">
            </label>
        </div>
        
        <div class="metodo-deb cf">
        	<label for="banco">
                <img src="img/blank.jpg" alt="">
                <p style="border-bottom:1px solid #000;">Débito</p>
                <input id="banco" type="radio" name="metodo" class="" value="banco">
                <img src="img/tarjeta-deb.jpg" alt="" class="right">
            </label>
        </div>
        
        <div class="metodo-trans cf">
        	<label for="transferencia">
	            <img src="img/blank.jpg" alt="">
	            <p style="border-bottom:1px solid #000;">Depósito o transferencia</p>
    	        <input id="transferencia" type="radio" name="metodo" class="" value="transferencia">
        	    <span class="right"><img src="img/hsbc-oxxo.jpg" alt="hsbc oxxo"></span>
            </label>
        </div>
	
    </div>
   <!--metodos de pago--> 
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
        <div class="pago-efectivo">
	        <h3>PAGO EN EFECTIVO</h3>
	        <input id="banco" type="radio" name="metodo" class="" value="repartidor">
	        <span>Pago al repartidor</span>
        </div>
    </section>
</section>
<!--include footer-->	
<?php include('views/footer.php'); ?>
<!--include footer-->	
</body>
</html> 