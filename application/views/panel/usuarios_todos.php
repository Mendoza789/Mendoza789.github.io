<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo_seccion; ?></h1>
        <a href="<?php echo base_url('principal/'.$this->tareas->TAREA_USUARIO_NUEVO); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<i class="fas fa-plus fa-sm text-white-50"></i> Agregar usuario
		</a>
    </div>

    <!-- Table -->
	<div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Email</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$counter = 1;
                            foreach ($usuarios as $usuario) {
                                echo	'<tr>
											<th>'.$counter++.'</th>
											<th>
												<a href="'.base_url('principal/'.$this->tareas->TAREA_USUARIO_DETALLES).'/'.$usuario->id_usuario.'">
				 									'.$usuario->nombre_usuario.' '.$usuario->ap_paterno_usuario.' '.$usuario->ap_materno_usuario.'
				 								</a>
											</th>
                                            <th>'.($usuario->rol_usuario==0?'Administrador':($usuario->rol_usuario==1?'Usuario':'Error')).'</th>
                                            <th>'.$usuario->email_usuario.'</th>
                                            <th>
												<a href="'.base_url('principal/'.$this->tareas->TAREA_USUARIO_DETALLES).'/'.$usuario->id_usuario.'" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
				 									<i class="fas fa-pen fa-sm text-white-50"></i> Editar
				 								</a>
											</th>
											<th>
												<a href="'.base_url('principal/'.$this->tareas->TAREA_USUARIO_BORRAR).'/'.$usuario->id_usuario.'" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
				 									<i class="fas fa-trash fa-sm text-white-50"></i> Borrar
				 								</a>
											</th>
                                        </tr>';
                            }//end foreach usuarios
						?>
					</tbody>
                </table>
            </div>
        </div>
    </div>
</div> <!-- /.container-fluid -->
