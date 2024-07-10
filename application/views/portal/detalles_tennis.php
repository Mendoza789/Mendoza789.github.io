        <div class="wrapper row3">
        	<main class="hoc container clear">
        		<!-- main body -->
        		<!-- ################################################################################################ -->
        		<div class="content">
                    <?php $precio_descuento = $detalles_tennis->precio-($detalles_tennis->precio*$detalles_tennis->descuento/100); ?>
        			<h1><?php echo $detalles_tennis->marca.' '.$detalles_tennis->modelo; ?></h1>
        			<img class="img-fluid imgl borderedbox inspace-5" src="<?php echo base_url($this->constantes->IMG_DIR.$detalles_tennis->ruta_imagen); ?>" style="width:400px;">
        			<p>
        				<b><?php echo $detalles_tennis->genero==1?'Mujer':'Hombre'; ?></b>
        			</p>
        			<p>
        				Color: <b><?php echo $detalles_tennis->color; ?></b>
        			</p>
        			<p>
        				Talla: <b><?php echo $detalles_tennis->talla; ?></b>
        			</p>
        			<p>
        				<?php
        					echo ($detalles_tennis->descuento==null ? 'Precio: <b>$'.number_format($detalles_tennis->precio,2,'.',',').'</b>'
        					                                : 'Precio: <del><b>$'.number_format($detalles_tennis->precio,2,'.',',').'</b></del>
        													   <br>
        													   Precio con descuento: <b>$'.number_format($precio_descuento,2,'.',',').'</b>');
        				?>
        			</p>
        			<p>
        				<?php
        					echo ($detalles_tennis->descuento!=null ? 'Oferta válida hasta <b>'.$detalles_tennis->fin_oferta.'</b>' : '' );
        				?>
        			</p>
        			<p>
        				Descripción: <br><b><?php echo $detalles_tennis->descripcion; ?></b>
        			</p>
        		<!-- ################################################################################################ -->
        		</div>
        		<center>
        			<button class="btn" onclick="window.history.back()">Regresar</button>
        		</center>
        		<!-- ################################################################################################ -->
        		<!-- / main body -->
        		<div class="clear"></div>
        	</main>
        </div>
