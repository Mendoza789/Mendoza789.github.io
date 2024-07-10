<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo_seccion; ?></h1>
        <a href="<?php echo base_url('principal/'.$this->tareas->TAREA_TENNIS_NUEVO); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<i class="fas fa-plus fa-sm text-white-50"></i> Agregar tennis
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
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Genero</th>
                            <th>Precio</th>
                            <th>Imagen</th>
							<th>Oferta</th>
							<th>Editar</th>
							<th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$counter = 1;
                            foreach ($tennis as $par) {
                                echo	'<tr>
											<th>'.$counter++.'</th>
                                            <th>'.$par->marca.'</th>
                                            <th>'.$par->modelo.'</th>
                                            <th>'.($par->genero==1 ? 'Mujer' : 'Hombre').'</th>
                                            <th>'.formato_moneda($par->precio).'</th>
                                            <th>
												<a href="'.base_url('principal/'.$this->tareas->TAREA_TENNIS_DETALLES.'/'.$par->id_tennis).'">
													<img class="img-fluid" src="'.base_url($this->constantes->IMG_DIR.$par->ruta_imagen).'" width="200px">
												</a>
											</th>
                                            <th>
												<a href="'.base_url('principal/'.$this->tareas->TAREA_OFERTA_DETALLES.'/'.$par->id_tennis).'" class="d-none d-sm-inline-block btn btn-sm btn-'.($par->id_oferta!=NULL ? 'success' : 'primary').' shadow-sm">
				 									<i class="fas fa-certificate fa-sm text-white-50"></i> '.($par->id_oferta!=NULL ? 'Modificar Oferta' : 'Nueva Oferta').'
				 								</a>
											</th>
                                            <th>
												<a href="'.base_url('principal/'.$this->tareas->TAREA_TENNIS_DETALLES.'/'.$par->id_tennis).'" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
				 									<i class="fas fa-pen fa-sm text-white-50"></i> Editar
				 								</a>
											</th>
											<th>
												<a href="'.base_url('principal/'.$this->tareas->TAREA_TENNIS_BORRAR.'/'.$par->id_tennis).'" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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
