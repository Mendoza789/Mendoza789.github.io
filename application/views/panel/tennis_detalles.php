<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo_seccion; ?></h1>
    </div>
    <div class="card shadow mb-4">
		<div class="card-body">
            <?php
                $parametros = array('class' => 'user');
                echo form_open_multipart(base_url('panel/tennis_detalles/actualizar'), $parametros);
            ?>
				<div class="form-group row">
					<div class="col-sm-3 mb-3 mb-sm-0">
                        <?php
                            echo form_hidden('id_tennis', $info_tennis->id_tennis);
                        ?>
						<label>Marca: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'marca', 'placeholder'=>'Marca', 'value'=>$info_tennis->marca, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-3">
						<label>Modelo: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'modelo', 'placeholder'=>'Modelo', 'value'=>$info_tennis->modelo, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-3">
						<label>Color: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'color', 'placeholder'=>'Color', 'value'=>$info_tennis->color, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-3">
						<label>Talla: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'talla', 'placeholder'=>'Talla', 'value'=>$info_tennis->talla, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label>Género: </label><br>
                        <label>Rol: </label><br>
                        <?php
                            $parametros = array('id'=>'radio-mujer', 'name'=>'genero', 'value'=>'1', 'checked'=>($info_tennis->genero==1 ? TRUE : FALSE));
                            echo form_radio($parametros);
                        ?>
                        <label for="radio-mujer"> Mujer</label><br>
                        <?php
                            $parametros = array('id'=>'radio-hombre', 'name'=>'genero', 'value'=>'0', 'checked'=>($info_tennis->genero==0 ? TRUE : FALSE));
                            echo form_radio($parametros);
                        ?>
                        <label for="radio-hombre"> Hombre</label><br>
					</div>
					<div class="col-sm-2">
						<label>Precio: </label>
                        <?php
                            $parametros = array('type'=>'number', 'class'=>'form-control form-control-user', 'name'=>'precio', 'value'=>$info_tennis->precio, 'min'=>'0.0', 'step'=>'.01', 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-2">
						<label style="text-align:left;">Descripción: </label>
					</div>
					<div class="col-sm-6">
                        <?php
                            $parametros = array('name'=>'descripcion', 'rows'=>'4', 'cols'=>'28', 'value'=>$info_tennis->descripcion);
                            echo form_textarea($parametros);
                        ?>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-8">
						<label>Imagen: </label>
                        <?php
                            $parametros = array('class'=>'form-control','id'=>'imagen', 'name'=>'imagen');
                            echo form_upload($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<div>
							<img class="img-fluid" id="img-preview" src="<?php echo base_url($this->constantes->IMG_DIR.$info_tennis->ruta_imagen); ?>" width="250px">
						</div>
					</div>
                    <?php
                        echo form_hidden('imagen-actual', $info_tennis->ruta_imagen);
                    ?>
				</div>
				<center>
                    <?php
                        echo form_submit('actualizar-tennis', 'Actualizar tennis', array('id'=>'boton-actualizar', 'class' => 'btn btn-primary btn-user'));

                        $parametros = array('class'=>'btn btn-google btn-user', 'value'=>'regresar', 'onclick'=>'window.history.back()', 'content'=>'Regresar');
                        echo form_button($parametros);
                    ?>
				</center>

            <?php echo form_close(); ?>
		</div><!-- /.card-body -->
	</div><!-- /.card shadow -->

</div><!-- /.container-fluid -->

<script type="text/javascript">
	document.getElementById("imagen").onchange = function(e) {
		// Se crea un objeto FileReader
		let reader = new FileReader();
		// Se leé el archivo seleccionado y se pasa como argumento al objeto FileReader
		reader.readAsDataURL(e.target.files[0]);
		// Se visualiza la imagen una vez que fue cargada en el objeto FileReader
		reader.onload = function(){
			let imgPreview = document.getElementById('img-preview');
			imgPreview.src = reader.result;
		};
	}
</script>
