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
                echo form_open(base_url('panel/usuario_nuevo/agregar'), $parametros);
            ?>
				<div class="form-group row">
					<div class="col-sm-4 mb-3 mb-sm-0">
						<label>Nombre: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'nombre', 'placeholder'=>'Nombre', 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Apellido paterno: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'ap-paterno', 'placeholder'=>'Apellido Paterno', 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Apellido materno: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'ap-materno', 'placeholder'=>'Apellido Materno', 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-4">
						<label>Correo electrónico: </label>
                        <?php
                            $parametros = array('type'=>'email', 'class'=>'form-control form-control-user', 'name'=>'email', 'placeholder'=>'Correo Electrónico', 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Fecha de Nacimiento: </label>
                        <?php
                            $parametros = array('type'=>'date', 'class'=>'form-control form-control-user', 'name'=>'fecha-nacimiento', 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Rol: </label><br>
                        <?php
                            $parametros = array('id'=>'radio-admin', 'name'=>'rol', 'value'=>'0');
                            echo form_radio($parametros);
                        ?>
                        <label for="radio-admin"> Administrador</label><br>
                        <?php
                            $parametros = array('id'=>'radio-usuario', 'name'=>'rol', 'value'=>'1', 'checked'=>TRUE);
                            echo form_radio($parametros);
                        ?>
						<label for="radio-usuario"> Usuario</label><br>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
                        <?php
                            $parametros = array('id'=>'password', 'class'=>'form-control form-control-user', 'name'=>'password', 'placeholder'=>'Contraseña', 'onkeyup'=>'check();', 'required'=>TRUE);
                            echo form_password($parametros);
                        ?>
					</div>
					<div class="col-sm-6">
                        <?php
                            $parametros = array('id'=>'password-confirm', 'class'=>'form-control form-control-user', 'name'=>'password-confirmado', 'placeholder'=>'Confirmar Contraseña', 'onkeyup'=>'check();', 'required'=>TRUE);
                            echo form_password($parametros);
                        ?>
					</div>
					<span id='message'></span>
				</div>
				<div class="form-group row">
					<div class="col-sm-12">
							<span id='message'></span>
					</div>
				</div>
                <?php
                    echo form_submit('agregar-usuario', 'Agregar usuario', array('id'=>'boton-enviar', 'class' => 'btn btn-primary btn-user'));
                ?>
				<a href="<?php echo base_url('principal/'.$this->tareas->TAREA_USUARIOS_TODOS); ?>" class="btn btn-google btn-user">Cancelar</a>

            <?php echo form_close(); ?>
		</div><!-- /.card-body -->
	</div><!-- /.card shadow -->
</div><!-- /.container-fluid -->

<script type="text/javascript">
	var check = function() {
		if (document.getElementById('password').value ==
			document.getElementById('password-confirm').value) {
			document.getElementById('message').style.color = 'green';
			document.getElementById('message').innerHTML = 'Contraseñas iguales';
			document.getElementById('boton-enviar').disabled = false;
		} else {
			document.getElementById('message').style.color = 'red';
			document.getElementById('message').innerHTML = 'Contraseñas distintas';
			document.getElementById('boton-enviar').disabled = true;
		}
	}
</script>
