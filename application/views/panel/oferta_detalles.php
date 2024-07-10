<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo_seccion; ?></h1>
    </div>
    <div class="card shadow mb-4">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-6 mb-6 mb-sm-0">
					<div class="row">
						<div class="col-sm-6 mb-6 mb-sm-0">
							<label>Marca:<br><b><?php echo $info_tennis->marca; ?></b></label>
						</div>
						<div class="col-sm-6 mb-6 mb-sm-0">
							<label>Modelo:<br><b><?php echo $info_tennis->modelo; ?></b></label>
						</div>
					</div><!-- /.row -->

					<div class="row">
						<div class="col-sm-6 mb-6 mb-sm-0">
							<label>Color:<br><b><?php echo $info_tennis->color; ?></b></label>
						</div>
						<div class="col-sm-6 mb-6 mb-sm-0">
							<label>Talla:<br><b><?php echo $info_tennis->talla; ?></b></label>
						</div>
					</div><!-- /.row -->

					<div class="row">
						<div class="col-sm-6 mb-6 mb-sm-0">
							<label>Precio:<br><b><?php echo formato_moneda($info_tennis->precio); ?></b></label>
						</div>
						<div class="col-sm-6 mb-6 mb-sm-0">
							<label>Precio descuento:<br><b>
								<div id="precio-descuento">
									<?php
										if(isset($porcentaje)){
											echo formato_moneda($info_tennis->precio-($info_tennis->precio*$porcentaje/100));
										}//end if no existe una oferta
										else{
											echo formato_moneda($info_tennis->precio);
										}//end else existe una oferta
									?>
								</div></b>
							</label>
						</div>
					</div><!-- /.row -->
				</div><!-- /.col-sm-6 mb-6 mb-sm-0 -->

				<div class="col-sm-6 mb-6 mb-sm-0">
					<div class="row">
						<div class="col-sm-4 mb-4 mb-sm-0">
							<label>Género: <b><?php echo ($info_tennis->genero==1 ? 'Mujer' : 'Hombre') ?></b></label>
						</div>
						<div class="col-sm-4 mb-4 mb-sm-0">
							<img class="img-fluid" src="<?php echo base_url($this->constantes->IMG_DIR.$info_tennis->ruta_imagen); ?>" width="250px">
						</div>
						<div class="col-sm-4 mb-4 mb-sm-0">

						</div>
					</div><!-- /.row -->
				</div><!-- /.col-sm-6 mb-6 mb-sm-0 -->
			</div><!-- /.row -->
		</div><!-- /.card-body -->
	</div><!-- /.card shadow -->

	<div class="card shadow mb-4">
		<div class="card-body">
            <?php
                $parametros = array('class' => 'user');
                echo form_open(base_url('panel/oferta_detalles/actualizar'), $parametros);
            ?>
				<div class="form-group row">
					<input type="hidden" name="id_tennis" value="<?php echo $info_tennis->id_tennis; ?>">
					<div class="col-sm-3">
						<label>Porcentaje de descuento: </label>
						<?php
                            $value = 0;
                            if(isset($porcentaje)){
                                $value = $porcentaje;
                            }//end if hay oferta
                            $parametros = array('type'=>'number', 'class'=>'form-control form-control-user', 'id'=>'descuento', 'name'=>'descuento', 'value'=>$value, 'min'=>'0', 'step'=>'1', 'onchange'=>'actualizarPrecio()', 'required'=>TRUE);
                            echo form_input($parametros);
						?>
					</div>
					<div class="col-sm-4">
						<label>Fecha de fin de oferta: </label>
						<?php
                            $value = '';
                            if(isset($fin_oferta)){
                                $value = $fin_oferta;
                            }//end if hay oferta
                            $parametros = array('type'=>'date', 'class'=>'form-control form-control-user', 'name'=>'validez', 'value'=>$value, 'required'=>TRUE);
                            echo form_input($parametros);
						?>
					</div>
					<div class="col-sm-5">
						<br>
						<center>
                            <?php
                                echo form_submit('actualizar-oferta', 'Agregar/Actualizar oferta', array('id'=>'boton-actualizar', 'class' => 'btn btn-primary btn-user'));

                                $parametros = array('class'=>'btn btn-google btn-user', 'value'=>'regresar', 'onclick'=>'window.history.back()', 'content'=>'Regresar');
                                echo form_button($parametros);
                            ?>
						</center>
					</div>
				</div><!-- /.form-group row -->
            <?php echo form_close(); ?><!-- /.form -->
		</div><!-- /.card-body -->
	</div><!-- /.card shadow -->
</div><!-- /.container-fluid -->

<script type="text/javascript">
	function actualizarPrecio(){
		//se obtiene el porcentaje de descuento
		let porcentaje = document.getElementById('descuento').value;
		//se obtiene el precio actual
		let precio = <?php echo $info_tennis->precio; ?>;
		//se calcula el precio con descuento
		let precioDescuento = precio-(precio*porcentaje/100);
		//se actualiza el precio con descuento
		const formatoMoneda = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' });
		document.getElementById("precio-descuento").innerHTML = formatoMoneda.format(precioDescuento);
	}//end actualizarPrecio
</script>
