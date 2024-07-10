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
                echo form_open(base_url('panel/usuario_perfil/actualizar'), $parametros);
            ?>
				<div class="form-group row">
					<div class="col-sm-4 mb-3 mb-sm-0">
                        <?php
                            echo form_hidden('id_usuario', $info_usuario->id_usuario);
                        ?>
						<label>Nombre: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'nombre', 'placeholder'=>'Nombre', 'value'=>$info_usuario->nombre_usuario, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Apellido paterno: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'ap-paterno', 'placeholder'=>'Apellido Paterno', 'value'=>$info_usuario->ap_paterno_usuario, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Apellido materno: </label>
                        <?php
                            $parametros = array('class'=>'form-control form-control-user', 'name'=>'ap-materno', 'placeholder'=>'Apellido Materno', 'value'=>$info_usuario->ap_materno_usuario, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-4">
						<label>Correo electrónico: </label>
                        <?php
                            $parametros = array('type'=>'email', 'class'=>'form-control form-control-user', 'name'=>'email', 'placeholder'=>'Correo Electrónico', 'value'=>$info_usuario->email_usuario, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Fecha de Nacimiento: </label>
                        <?php
                            $parametros = array('type'=>'date', 'class'=>'form-control form-control-user', 'name'=>'fecha-nacimiento', 'value'=>$info_usuario->fecha_nacimiento, 'required'=>TRUE);
                            echo form_input($parametros);
                        ?>
					</div>
					<div class="col-sm-4">
						<label>Rol: </label><br>
                        <?php
                            $parametros = array('id'=>'radio-admin', 'name'=>'rol', 'value'=>'0', 'checked'=>($info_usuario->rol_usuario==0 ? TRUE : FALSE));
                            echo form_radio($parametros);
                        ?>
                        <label for="radio-admin"> Administrador</label><br>
                        <?php
                            $parametros = array('id'=>'radio-usuario', 'name'=>'rol', 'value'=>'1', 'checked'=>($info_usuario->rol_usuario==1 ? TRUE : FALSE));
                            echo form_radio($parametros);
                        ?>
						<label for="radio-usuario"> Usuario</label><br>
					</div>
				</div>
                <?php
                    echo form_submit('actualizar-informacion', 'Actualizar información', array('id'=>'boton-actualizar', 'class' => 'btn btn-primary btn-user'));
                ?>
				<a href="<?php echo base_url('principal/'.$this->tareas->TAREA_USUARIOS_TODOS); ?>" class="btn btn-google btn-user">Regresar a Usuarios</a>

            <?php echo form_close(); ?>
		</div><!-- /.card-body -->
	</div><!-- /.card shadow -->
</div><!-- /.container-fluid -->
