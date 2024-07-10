    
<?php 
	   public function count($constraints){

       $this->db->select($this->tabla.".IdDocente");
       $this->db->from($this->tabla);
       $this->db->where($constraints);
       return $this->db->count_all_results();;
    
       }//end count

       public function count($constraints){

       $this->db->select($this->tabla.".IdDocente");
       $this->db->from($this->tabla);
       $this->db->where($constraints);
       return $this->db->count_all_results();;
    
       }//end count

       public function getFormacionA(){
 			$this->db->select('Nivel');
 			$this->db->from('FormacionAcademica');
 			$query->$this->db->get();
 			return $query->result();

       }

       public function getFormacionA()
       {
       	  $result->$this->formacionA->getFormarcion();
       	  echo json_encode($result);

       }


       $datos['Pt'] = $this->Tabla_Docente->count(array('NombramientoA' => 'PT'));
       $datos['Ph'] = $this->Tabla_Docente->count(array('NombramientoA' => 'PH'));

	   $datos['Docente'] = $this->Tabla_Docente->count(array('IdDocente' => $IdDocente));
       $datos['CursoObli'] = $this->Tabla_Cursos->count(array('TipoCurso' => 'Obligatorio'));
       $datos['CursoOpt'] = $this->Tabla_Cursos->count(array('TipoCurso' => 'Optativo'));

       return $datos;















		public $TAREA_DOCENTE_TODOS = 9;
		public $TAREA_DOCENTE_NUEVO = 10;
		public $TAREA_DOCENTE_AGREGAR = 11;
		public $TAREA_DOCENTE_DETALLES = 12;
		public $TAREA_DOCENTE_ACTUALIZAR = 13;
		public $TAREA_DOCENTE_BORRAR = 14;

		public $TAREA_FORMACIONACADEMICA_TODOS =15;
		public $TAREA_FORMACIONACADEMICA_NUEVO = 16;
		public $TAREA_FORMACIONACADEMICA_AGREGAR = 17;
		public $TAREA_FORMACIONACADEMICA_DETALLES = 18;
		public $TAREA_FORMACIONACADEMICA_ACTUALIZAR = 19;
		public $TAREA_FORMACIONACADEMICA_BORRAR = 21;

	    public $TAREA_RECONOCIMIENTOS_TODOS =22;
		public $TAREA_RECONOCIMIENTOS_NUEVO = 23;
		public $TAREA_RECONOCIMIENTOS_AGREGAR = 24;
		public $TAREA_RECONOCIMIENTOS_DETALLES = 25;
		public $TAREA_RECONOCIMIENTOS_ACTUALIZAR = 26;
		public $TAREA_RECONOCIMIENTOS_BORRAR = 27;

		public $TAREA_PRODUCTOSACADEMICOS_TODOS =28;
		public $TAREA_PRODUCTOSACADEMICOS_NUEVO = 29;
		public $TAREA_PRODUCTOSACADEMICOS_AGREGAR = 30;
		public $TAREA_PRODUCTOSACADEMICOS_DETALLES = 31;
		public $TAREA_PRODUCTOSACADEMICOS_ACTUALIZAR = 32;
		public $TAREA_PRODUCTOSACADEMICOS_BORRAR = 33;

		public $TAREA_PLANTAACADEMICA_TODOS =34;
		public $TAREA_PLANTAACADEMICA_NUEVO = 35;
		public $TAREA_PLANTAACADEMICA_AGREGAR = 36;
		public $TAREA_PLANTAACADEMICA_DETALLES = 37;
		public $TAREA_PLANTAACADEMICA_ACTUALIZAR = 38;
		public $TAREA_PLANTAACADEMICA_BORRAR = 39;

		public $TAREA_PARTICIPACION_TODOS =40;
		public $TAREA_PARTICIPACION_NUEVO = 41;
		public $TAREA_PARTICIPACION_AGREGAR = 44;
		public $TAREA_PARTICIPACION_DETALLES = 43;
		public $TAREA_PARTICIPACION_ACTUALIZAR = 44;
		public $TAREA_PARTICIPACION_BORRAR = 45;

		public $TAREA_GESTIONACADEMICA_TODOS =46;
		public $TAREA_GESTIONACADEMICA_NUEVO = 47;
		public $TAREA_GESTIONACADEMICA_AGREGAR = 48;
		public $TAREA_GESTIONACADEMICA_DETALLES = 49;
		public $TAREA_GESTIONACADEMICA_ACTUALIZAR = 50;
		public $TAREA_GESTIONACADEMICA_BORRAR = 51;

		public $TAREA_EXPERIENCIANOACADEMICA_TODOS = 52;
		public $TAREA_EXPERIENCIANOACADEMICA_NUEVO = 53;
		public $TAREA_EXPERIENCIANOACADEMICA_AGREGAR = 54;
		public $TAREA_EXPERIENCIANOACADEMICA_DETALLES = 55;
		public $TAREA_EXPERIENCIANOACADEMICA_ACTUALIZAR = 56;
		public $TAREA_EXPERIENCIANOACADEMICA_BORRAR = 57;

		public $TAREA_EXPERIENCIAINGENIERIL_TODOS = 58;
		public $TAREA_EXPERIENCIAINGENIERIL_NUEVO = 59;
		public $TAREA_EXPERIENCIAINGENIERIL_AGREGAR = 60;
		public $TAREA_EXPERIENCIAINGENIERIL_DETALLES = 61;
		public $TAREA_EXPERIENCIAINGENIERIL_ACTUALIZAR = 62;
		public $TAREA_EXPERIENCIAINGENIERIL_BORRAR = 63;

		public $TAREA_CURSOS_TODOS = 64;
		public $TAREA_CURSOS_NUEVO = 65;
		public $TAREA_CURSOS_AGREGAR = 66;
		public $TAREA_CURSOS_DETALLES = 67;
		public $TAREA_CURSOS_ACTUALIZAR = 68;
		public $TAREA_CURSOS_BORRAR = 69;

		public $TAREA_CDAD_TODOS = 70;
		public $TAREA_CDAD_NUEVO = 71;
		public $TAREA_CDAD_AGREGAR = 72;
		public $TAREA_CDAD_DETALLES = 73;
		public $TAREA_CDAD_ACTUALIZAR = 74;
		public $TAREA_CDAD_BORRAR = 75;

		public $TAREA_AREAESPECIALIDAD_TODOS = 76;
		public $TAREA_AREAESPECIALIDAD_NUEVO = 77;
		public $TAREA_AREAESPECIALIDAD_AGREGAR = 78;
		public $TAREA_AREAESPECIALIDAD_DETALLES = 79;
		public $TAREA_AREAESPECIALIDAD_ACTUALIZAR = 80;
		public $TAREA_AREAESPECIALIDAD_BORRAR = 81;

		public $TAREA_APORTACIONESPE_TODOS = 82;
		public $TAREA_APORTACIONESPE_NUEVO = 83;
		public $TAREA_APORTACIONESPE_AGREGAR = 84;
		public $TAREA_APORTACIONESPE_DETALLES = 85;
		public $TAREA_APORTACIONESPE_ACTUALIZAR = 86;
		public $TAREA_APORTACIONESPE_BORRAR = 87;

		public $TAREA_ACTIVIDADCURRICULAR_TODOS = 88;
		public $TAREA_ACTIVIDADCURRICULAR_NUEVO = 89;
		public $TAREA_ACTIVIDADCURRICULAR_AGREGAR = 90;
		public $TAREA_ACTIVIDADCURRICULAR_DETALLES = 91;
		public $TAREA_ACTIVIDADCURRICULAR_ACTUALIZAR = 92;
		public $TAREA_ACTIVIDADCURRICULAR_BORRAR = 93;

		public $TAREA_LOGROSNOACADEMICOS_TODOS = 94;
		public $TAREA_LOGROSNOACADEMICOS_NUEVO = 95;
		public $TAREA_LOGROSNOACADEMICOS_AGREGAR = 96;
		public $TAREA_LOGROSNOACADEMICOS_DETALLES = 97;
		public $TAREA_LOGROSNOACADEMICOS_ACTUALIZAR = 98;
		public $TAREA_LOGROSNOACADEMICOS_BORRAR = 99;

		public $TAREA_GRAFICAS = 100;







                    case $this->tareas->TAREA_DOCENTE_TODOS:
						redirect('panel/Cedula0/docente');
						break;
					case $this->tareas->TAREA_DOCENTE_NUEVO:
						redirect('panel/Cedula0/docente');
						break;
					case $this->tareas->TAREA_DOCENTE_DETALLES:
						redirect('panel/Cedula0/docente'.$parametro_uno);
						break;
					case $this->tareas->TAREA_DOCENTE_BORRAR:
						redirect('panel/Cedula0/docente'.$parametro_uno);
						break;


					case $this->tareas->TAREA_FORMACIONACADEMICA_TODOS:
						redirect('panel/Cedula0/formacionacademica');
						break;
					case $this->tareas->TAREA_FORMACIONACADEMICA_NUEVO:
						redirect('panel/Cedula0/formacionacademica');
						break;
					case $this->tareas->TAREA_FORMACIONACADEMICA_DETALLES:
						redirect('panel/Cedula0/formacionacademica'.$parametro_uno);
						break;
					case $this->tareas->TAREA_FORMACIONACADEMICA_BORRAR:
						redirect('panel/Cedula0/formacionacademica'.$parametro_uno);
						break;

					case $this->tareas->TAREA_RECONOCIMIENTOS_TODOS:
						redirect('panel/Cedula0/reconocimientos');
						break;
					case $this->tareas->TAREA_RECONOCIMIENTOS_NUEVO:
						redirect('panel/Cedula0/reconocimientos');
						break;
					case $this->tareas->TAREA_RECONOCIMIENTOS_DETALLES:
						redirect('panel/Cedula0/reconocimientos'.$parametro_uno);
						break;
					case $this->tareas->TAREA_RECONOCIMIENTOS_BORRAR:
						redirect('panel/Cedula0/reconocimientos'.$parametro_uno);
						break;

					case $this->tareas->TAREA_PRODUCTOSACADEMICOS_TODOS:
						redirect('panel/Cedula0/productosacademicos');
						break;
					case $this->tareas->TAREA_PRODUCTOSACADEMICOS_NUEVO:
						redirect('panel/Cedula0/productosacademicos');
						break;
					case $this->tareas->TAREA_PRODUCTOSACADEMICOS_DETALLES:
						redirect('panel/Cedula0/productosacademicos'.$parametro_uno);
						break;
					case $this->tareas->TAREA_PRODUCTOSACADEMICOS_BORRAR:
						redirect('panel/Cedula0/productosacademicos'.$parametro_uno);
						break;


					case $this->tareas->TAREA_PARTICIPACION_TODOS:
						redirect('panel/Cedula0/participacion');
						break;
					case $this->tareas->TAREA_PARTICIPACION_NUEVO:
						redirect('panel/Cedula0/participacion');
						break;
					case $this->tareas->TAREA_PARTICIPACION_DETALLES:
						redirect('panel/Cedula0/participacion'.$parametro_uno);
						break;
					case $this->tareas->TAREA_PARTICIPACION_BORRAR:
						redirect('panel/Cedula0/participacion'.$parametro_uno);
						break;


					case $this->tareas->TAREA_GESTIONACADEMICA_TODOS:
						redirect('panel/Cedula0/gestionacademica');
						break;
					case $this->tareas->TAREA_GESTIONACADEMICA_NUEVO:
						redirect('panel/Cedula0/gestionacademica');
						break;
					case $this->tareas->TAREA_GESTIONACADEMICA_DETALLES:
						redirect('panel/Cedula0/gestionacademica'.$parametro_uno);
						break;
					case $this->tareas->TAREA_GESTIONACADEMICA_BORRAR:
						redirect('panel/Cedula0/gestionacademica'.$parametro_uno);
						break;


					case $this->tareas->TAREA_EXPERIENCIANOACADEMICA_TODOS:
						redirect('panel/Cedula0/experiencianoacademica');
						break;
					case $this->tareas->TAREA_EXPERIENCIANOACADEMICA_NUEVO:
						redirect('panel/Cedula0/experiencianoacademica');
						break;
					case $this->tareas->TAREA_EXPERIENCIANOACADEMICA_DETALLES:
						redirect('panel/Cedula0/experiencianoacademica'.$parametro_uno);
						break;
					case $this->tareas->TAREA_EXPERIENCIANOACADEMICA_BORRAR:
						redirect('panel/Cedula0/experiencianoacademica'.$parametro_uno);
						break;


					case $this->tareas->TAREA_EXPERIENCIAINGENIERIL_TODOS:
						redirect('panel/Cedula0/experienciaingenieril');
						break;
					case $this->tareas->TAREA_EXPERIENCIAINGENIERIL_NUEVO:
						redirect('panel/Cedula0/experienciaingenieril');
						break;
					case $this->tareas->TAREA_EXPERIENCIAINGENIERIL_DETALLES:
						redirect('panel/Cedula0/experienciaingenieril'.$parametro_uno);
						break;
					case $this->tareas->TAREA_EXPERIENCIAINGENIERIL_BORRAR:
						redirect('panel/Cedula0/experienciaingenieril'.$parametro_uno);
						break;


					case $this->tareas->TAREA_CDAD_TODOS:
						redirect('panel/Cedula0/cdad');
						break;
					case $this->tareas->TAREA_CDAD_NUEVO:
						redirect('panel/Cedula0/cdad');
						break;
					case $this->tareas->TAREA_CDAD_DETALLES:
						redirect('panel/Cedula0/cdad'.$parametro_uno);
						break;
					case $this->tareas->TAREA_CDAD_BORRAR:
						redirect('panel/Cedula0/cdad'.$parametro_uno);
						break;



					case $this->tareas->TAREA_APORTACIONESPE_TODOS:
						redirect('panel/Cedula0/aportacionespe');
						break;
					case $this->tareas->TAREA_APORTACIONESPE_NUEVO:
						redirect('panel/Cedula0/aportacionespe');
						break;
					case $this->tareas->TAREA_APORTACIONESPE_DETALLES:
						redirect('panel/Cedula0/aportacionespe'.$parametro_uno);
						break;
					case $this->tareas->TAREA_APORTACIONESPE_BORRAR:
						redirect('panel/Cedula0/aportacionespe'.$parametro_uno);
						break;


					case $this->tareas->TAREA_ACTIVIDADCURRICULAR_TODOS:
						redirect('panel/Cedula0/actividadcurricular');
						break;
					case $this->tareas->TAREA_ACTIVIDADCURRICULAR_NUEVO:
						redirect('panel/Cedula0/actividadcurricular');
						break;
					case $this->tareas->TAREA_ACTIVIDADCURRICULAR_DETALLES:
						redirect('panel/Cedula0/actividadcurricular'.$parametro_uno);
						break;
					case $this->tareas->TAREA_ACTIVIDADCURRICULAR_BORRAR:
						redirect('panel/Cedula0/actividadcurricular'.$parametro_uno);
						break;

					case $this->tareas->TAREA_LOGROSNOACADEMICOS_TODOS:
						redirect('panel/Cedula0/logrosnoacademicos');
						break;
					case $this->tareas->TAREA_LOGROSNOACADEMICOS_NUEVO:
						redirect('panel/Cedula0/logrosnoacademicos');
						break;
					case $this->tareas->TAREA_LOGROSNOACADEMICOS_DETALLES:
						redirect('panel/Cedula0/logrosnoacademicos'.$parametro_uno);
						break;
					case $this->tareas->TAREA_LOGROSNOACADEMICOS_BORRAR:
						redirect('panel/Cedula0/logrosnoacademicos'.$parametro_uno);
						break;



					case $this->tareas->TAREA_PLANTAACADEMICA_TODOS:
						redirect('panel/Cedula1/plantaacademica');
						break;
					case $this->tareas->TAREA_PLANTAACADEMICA_NUEVO:
						redirect('panel/Cedula1/plantaacademica');
						break;
					case $this->tareas->TAREA_PLANTAACADEMICA_DETALLES:
						redirect('panel/Cedula1/plantaacademica'.$parametro_uno);
						break;
					case $this->tareas->TAREA_PLANTAACADEMICA_BORRAR:
						redirect('panel/Cedula1/plantaacademica'.$parametro_uno);
						break;


					case $this->tareas->TAREA_CURSOS_TODOS:
						redirect('panel/Cedula3/cursos');
						break;
					case $this->tareas->TAREA_CURSOS_NUEVO:
						redirect('panel/Cedula3/cursos');
						break;
					case $this->tareas->TAREA_CURSOS_DETALLES:
						redirect('panel/Cedula3/cursos'.$parametro_uno);
						break;
					case $this->tareas->TAREA_CURSOS_BORRAR:
						redirect('panel/Cedula3/cursos'.$parametro_uno);
						break;


					case $this->tareas->TAREA_AREAESPECIALIDAD_TODOS:
						redirect('panel/Cedula3/areaespecialidad');
						break;
					case $this->tareas->TAREA_AREAESPECIALIDAD_NUEVO:
						redirect('panel/Cedula3/areaespecialidad');
						break;
					case $this->tareas->TAREA_AREAESPECIALIDAD_DETALLES:
						redirect('panel/Cedula3/areaespecialidad'.$parametro_uno);
						break;
					case $this->tareas->TAREA_AREAESPECIALIDAD_BORRAR:
						redirect('panel/Cedula3/areaespecialidad'.$parametro_uno);
						break;

					case $this->tareas->TAREA_GRAFICAS:
						redirect('panel/');
						break;


					$counter = 1;
					


        echo"<h2 >Cédula 0</h2>";
            echo"<h5 >Apartado 1, 2 y 3</h5>";
            echo"<hr>";
            echo"<p>Número del profesor:</p><input type='int'  name='NumeroProfesor' placeholder='Ej. 000'  class='form-control' required='></input><p></p>";
            echo"<p>Nombre (s): </p><input type='text' name='Nombre' placeholder='Ej. Juan' class='form-control' required=""></input><p></p>";
            echo"<p>Apellido paterno: </p><input type='text' name='ApellidoPaterno' placeholder='Ej. Rosas' class='form-control' required=""></input><p></p>";
            echo"<p>Apellido materno: </p><input type='text' name='ApellidoMaterno' placeholder='Ej. Arauz' class='form-control' required=''></input><p></p>";
            echo"<p>Fecha de nacimiento: </p><input type='date'  name='FechaNacimiento' placeholder='Fecha de nacimiento' class='form-control' required=''></input><p></p><p></p>";
            echo"<p>Nombramiento actual: </p>";
              echo"<select name='NombramientoA' class='form-control' required="">";
              echo"<option selected value='0' class='form-control'>Elija una opción</option>";
              echo"<option value='PTC' class='form-control'>Profesor tiempo completo (PTC)</option>";
              echo"<option value='PA' class='form-control'>Profesor por asignatura (PA)</option>";
               echo"</select><p></p>";
               echo"<div class='row'>";
                   echo"<div class='col-md-5 col-sm-3 col-xs-3'>";
                       echo"<span class='help-block text-muted small-font' class='form-control' required=""> Fecha de ingreso a la universidad </span>";
                       echo"<input type='date' name='FechaIngreso' class='form-control' placeholder='2007' />";
                   echo"</div>";
                   echo"<div class='col-md-5 col-sm-3 col-xs-3'>";
                       echo"<span class='help-block text-muted small-font'class='form-control' required=''> Fecha de ingreso Programa Educativo TI</span>";
                       echo"<input type='date' name='FechaIngresoPE' class='form-control' placeholder='2010' />";
                   echo "</div>";
               echo "</div> <br>";






						
							$counter = 1;
							echo'<select name="IdCurso">'; 
                            foreach ($Cursos as $cursos) {
                                echo'<option>'
                                .$cursos->IdCurso.'
                                <option>':

                               
											
                            }//end foreach usuarios
                             echo'</select>';
					//Constantes  tareas
		public $TAREA_NONE = 1;
		public $TAREA_DASHBOARD = 2;
		public $TAREA_USUARIOS_TODOS = 3;
		public $TAREA_USUARIO_NUEVO = 4;
		//public $TAREA_USUARIO_AGREGAR = 40;
		public $TAREA_USUARIO_DETALLES = 5;
		public $TAREA_USUARIO_PERFIL = 6;
		//public $TAREA_USUARIO_PERFIL_ACTUALIZAR = 60;
		//public $TAREA_USUARIO_PASSWORD = 7;
		//public $TAREA_USUARIO_ACTUALIZAR = 70;
		public $TAREA_USUARIO_BORRAR = 7;
		public $TAREA_GRAFICAS = 20;
		public $TAREA_INICIOADMIN = 8;
		public $TAREA_LISTACEDULAS = 100;
		public $TAREA_LISTACONSULTAS = 101;
		public $TAREA_LISTAREGISTROS = 102;

		public $TAREA_GENERAL_CEDULA0 = 103;
		public $TAREA_GENERAL_CEDULA111 = 104;
		public $TAREA_GENERAL_CEDULA331 = 105;


		public $TAREA_CRUD0 = 106;
		public $TAREA_CRUD111 = 107;
		public $TAREA_CRUD331 = 108;


		public $TAREA_DOCENTE_TODOS = 9;
		public $TAREA_DOCENTE_NUEVO = 10;
		public $TAREA_DOCENTE_AGREGAR = 11;
		public $TAREA_DOCENTE_DETALLES = 12;
		public $TAREA_DOCENTE_ACTUALIZAR = 13;
		public $TAREA_DOCENTE_BORRAR = 14;

		public $TAREA_FORMACIONACADEMICA_TODOS =15;
		public $TAREA_FORMACIONACADEMICA_NUEVO = 16;
		public $TAREA_FORMACIONACADEMICA_AGREGAR = 17;
		public $TAREA_FORMACIONACADEMICA_DETALLES = 18;
		public $TAREA_FORMACIONACADEMICA_ACTUALIZAR = 19;
		public $TAREA_FORMACIONACADEMICA_BORRAR = 21;

	    public $TAREA_RECONOCIMIENTOS_TODOS =22;
		public $TAREA_RECONOCIMIENTOS_NUEVO = 23;
		public $TAREA_RECONOCIMIENTOS_AGREGAR = 24;
		public $TAREA_RECONOCIMIENTOS_DETALLES = 25;
		public $TAREA_RECONOCIMIENTOS_ACTUALIZAR = 26;
		public $TAREA_RECONOCIMIENTOS_BORRAR = 27;

		public $TAREA_PRODUCTOSACADEMICOS_TODOS =28;
		public $TAREA_PRODUCTOSACADEMICOS_NUEVO = 29;
		public $TAREA_PRODUCTOSACADEMICOS_AGREGAR = 30;
		public $TAREA_PRODUCTOSACADEMICOS_DETALLES = 31;
		public $TAREA_PRODUCTOSACADEMICOS_ACTUALIZAR = 32;
		public $TAREA_PRODUCTOSACADEMICOS_BORRAR = 33;

		public $TAREA_PLANTAACADEMICA_TODOS =34;
		public $TAREA_PLANTAACADEMICA_NUEVO = 35;
		public $TAREA_PLANTAACADEMICA_AGREGAR = 36;
		public $TAREA_PLANTAACADEMICA_DETALLES = 37;
		public $TAREA_PLANTAACADEMICA_ACTUALIZAR = 38;
		public $TAREA_PLANTAACADEMICA_BORRAR = 39;

		public $TAREA_PARTICIPACION_TODOS =40;
		public $TAREA_PARTICIPACION_NUEVO = 41;
		public $TAREA_PARTICIPACION_AGREGAR = 44;
		public $TAREA_PARTICIPACION_DETALLES = 43;
		public $TAREA_PARTICIPACION_ACTUALIZAR = 44;
		public $TAREA_PARTICIPACION_BORRAR = 45;

		public $TAREA_GESTIONACADEMICA_TODOS =46;
		public $TAREA_GESTIONACADEMICA_NUEVO = 47;
		public $TAREA_GESTIONACADEMICA_AGREGAR = 48;
		public $TAREA_GESTIONACADEMICA_DETALLES = 49;
		public $TAREA_GESTIONACADEMICA_ACTUALIZAR = 50;
		public $TAREA_GESTIONACADEMICA_BORRAR = 51;

		public $TAREA_EXPERIENCIANOACADEMICA_TODOS = 52;
		public $TAREA_EXPERIENCIANOACADEMICA_NUEVO = 53;
		public $TAREA_EXPERIENCIANOACADEMICA_AGREGAR = 54;
		public $TAREA_EXPERIENCIANOACADEMICA_DETALLES = 55;
		public $TAREA_EXPERIENCIANOACADEMICA_ACTUALIZAR = 56;
		public $TAREA_EXPERIENCIANOACADEMICA_BORRAR = 57;

		public $TAREA_EXPERIENCIAINGENIERIL_TODOS = 58;
		public $TAREA_EXPERIENCIAINGENIERIL_NUEVO = 59;
		public $TAREA_EXPERIENCIAINGENIERIL_AGREGAR = 60;
		public $TAREA_EXPERIENCIAINGENIERIL_DETALLES = 61;
		public $TAREA_EXPERIENCIAINGENIERIL_ACTUALIZAR = 62;
		public $TAREA_EXPERIENCIAINGENIERIL_BORRAR = 63;

		public $TAREA_CURSOS_TODOS = 64;
		public $TAREA_CURSOS_NUEVO = 65;
		public $TAREA_CURSOS_AGREGAR = 66;
		public $TAREA_CURSOS_DETALLES = 67;
		public $TAREA_CURSOS_ACTUALIZAR = 68;
		public $TAREA_CURSOS_BORRAR = 69;

		public $TAREA_CDAD_TODOS = 70;
		public $TAREA_CDAD_NUEVO = 71;
		public $TAREA_CDAD_AGREGAR = 72;
		public $TAREA_CDAD_DETALLES = 73;
		public $TAREA_CDAD_ACTUALIZAR = 74;
		public $TAREA_CDAD_BORRAR = 75;

		public $TAREA_AREAESPECIALIDAD_TODOS = 76;
		public $TAREA_AREAESPECIALIDAD_NUEVO = 77;
		public $TAREA_AREAESPECIALIDAD_AGREGAR = 78;
		public $TAREA_AREAESPECIALIDAD_DETALLES = 79;
		public $TAREA_AREAESPECIALIDAD_ACTUALIZAR = 80;
		public $TAREA_AREAESPECIALIDAD_BORRAR = 81;

		public $TAREA_APORTACIONESPE_TODOS = 82;
		public $TAREA_APORTACIONESPE_NUEVO = 83;
		public $TAREA_APORTACIONESPE_AGREGAR = 84;
		public $TAREA_APORTACIONESPE_DETALLES = 85;
		public $TAREA_APORTACIONESPE_ACTUALIZAR = 86;
		public $TAREA_APORTACIONESPE_BORRAR = 87;

		public $TAREA_ACTIVIDADCURRICULAR_TODOS = 88;
		public $TAREA_ACTIVIDADCURRICULAR_NUEVO = 89;
		public $TAREA_ACTIVIDADCURRICULAR_AGREGAR = 90;
		public $TAREA_ACTIVIDADCURRICULAR_DETALLES = 91;
		public $TAREA_ACTIVIDADCURRICULAR_ACTUALIZAR = 92;
		public $TAREA_ACTIVIDADCURRICULAR_BORRAR = 93;

		public $TAREA_LOGROSNOACADEMICOS_TODOS = 94;
		public $TAREA_LOGROSNOACADEMICOS_NUEVO = 95;
		public $TAREA_LOGROSNOACADEMICOS_AGREGAR = 96;
		public $TAREA_LOGROSNOACADEMICOS_DETALLES = 97;
		public $TAREA_LOGROSNOACADEMICOS_ACTUALIZAR = 98;
		public $TAREA_LOGROSNOACADEMICOS_BORRAR = 99;

		public $TAREA_LOGROSNOACADEMICOS_TODOS = 94;
		public $TAREA_LOGROSNOACADEMICOS_NUEVO = 95;
		public $TAREA_LOGROSNOACADEMICOS_AGREGAR = 96;
		public $TAREA_LOGROSNOACADEMICOS_DETALLES = 97;
		public $TAREA_LOGROSNOACADEMICOS_ACTUALIZAR = 98;
		public $TAREA_LOGROSNOACADEMICOS_BORRAR = 99;

		public $TAREA_BIBLIOGRAFIA_TODOS = 100;
		public $TAREA_BIBLIOGRAFIA_NUEVO = 101;
		public $TAREA_BIBLIOGRAFIA_AGREGAR = 102;
		public $TAREA_BIBLIOGRAFIA_DETALLES = 103;
		public $TAREA_BIBLIOGRAFIA_ACTUALIZAR = 104;
		public $TAREA_BIBLIOGRAFIA_BORRAR = 105;

		public $TAREA_CONTENIDOSINTETICO_TODOS = 106;
		public $TAREA_CONTENIDOSINTETICO_NUEVO = 107;
		public $TAREA_CONTENIDOSINTETICO_AGREGAR = 108;
		public $TAREA_CONTENIDOSINTETICO_DETALLES = 109;
		public $TAREA_CONTENIDOSINTETICO_ACTUALIZAR = 110;
		public $TAREA_CONTENIDOSINTETICO_BORRAR = 111;

		public $TAREA_ESTRATEGIASENS_TODOS = 112;
		public $TAREA_ESTRATEGIASENS_NUEVO = 113;
		public $TAREA_ESTRATEGIASENS_AGREGAR = 114;
		public $TAREA_ESTRATEGIASENS_DETALLES = 115;
		public $TAREA_ESTRATEGIASENS_ACTUALIZAR = 116;
		public $TAREA_ESTRATEGIASENS_BORRAR = 117;

		public $TAREA_ESTRATEGIASEVA_TODOS = 118;
		public $TAREA_ESTRATEGIASEVA_NUEVO = 119;
		public $TAREA_ESTRATEGIASEVA_AGREGAR = 120;
		public $TAREA_ESTRATEGIASEVA_DETALLES = 121;
		public $TAREA_ESTRATEGIASEVA_ACTUALIZAR = 122;
		public $TAREA_ESTRATEGIASEVA_BORRAR = 123;

		public $TAREA_ORGANISMOACREDITADOR_TODOS = 124;
		public $TAREA_ORGANISMOACREDITADOR_NUEVO = 125;
		public $TAREA_ORGANISMOACREDITADOR_AGREGAR = 126;
		public $TAREA_ORGANISMOACREDITADOR_DETALLES = 127;
		public $TAREA_ORGANISMOACREDITADOR_ACTUALIZAR = 128;
		public $TAREA_ORGANISMOACREDITADOR_BORRAR = 129;

		public $TAREA_PROGRAMACURSO_TODOS = 130;
		public $TAREA_PROGRAMACURSO_NUEVO = 131;
		public $TAREA_PROGRAMACURSO_AGREGAR = 132;
		public $TAREA_PROGRAMACURSO_DETALLES = 133;
		public $TAREA_PROGRAMACURSO_ACTUALIZAR = 134;
		public $TAREA_PROGRAMACURSO_BORRAR = 135;

		public $TAREA_MAPAAPORTACIONES_TODOS = 136;
		public $TAREA_MAPAAPORTACIONES_NUEVO = 137;
		public $TAREA_MAPAAPORTACIONES_AGREGAR = 138;
		public $TAREA_MAPAAPORTACIONES_DETALLES = 139;
		public $TAREA_MAPAAPORTACIONES_ACTUALIZAR = 140;
		public $TAREA_MAPAAPORTACIONES_BORRAR = 141;

	    public $TAREA_OBJETIVOSPE_TODOS = 0;
		public $TAREA_OBJETIVOSPE_NUEVO = 0;
		public $TAREA_OBJETIVOSPE_AGREGAR = 0;
		public $TAREA_OBJETIVOSPE_DETALLES = 0;
		public $TAREA_OBJETIVOSPE_ACTUALIZAR = 0;
		public $TAREA_OBJETIVOSPE_BORRAR = 0;

		public $TAREA_MAPAEQUIVALENCIA_TODOS = 142;
		public $TAREA_MAPAEQUIVALENCIA_NUEVO = 143;
		public $TAREA_MAPAEQUIVALENCIA_AGREGAR = 144;
		public $TAREA_MAPAEQUIVALENCIA_DETALLES = 145;
		public $TAREA_MAPAEQUIVALENCIA_ACTUALIZAR = 146;
		public $TAREA_MAPAEQUIVALENCIA_BORRAR = 147;



		public $TAREA_CRITERIOS_TODOS = 154;
		public $TAREA_CRITERIOS_NUEVO = 155;
		public $TAREA_CRITERIOS_AGREGAR = 156;
		public $TAREA_CRITERIOS_DETALLES = 157;
		public $TAREA_CRITERIOS_ACTUALIZAR = 158;
		public $TAREA_CRITERIOS_BORRAR = 159;

		public $TAREA_HERRAMIENTASVALORACION_TODOS = 160;
		public $TAREA_HERRAMIENTASVALORACION_NUEVO = 161;
		public $TAREA_HERRAMIENTASVALORACION_AGREGAR = 162;
		public $TAREA_HERRAMIENTASVALORACION_DETALLES = 163;
		public $TAREA_HERRAMIENTASVALORACION_ACTUALIZAR = 164;
		public $TAREA_HERRAMIENTASVALORACION_BORRAR = 165;

		public $TAREA_INDICADORES_TODOS = 166;
		public $TAREA_INDICADORES_NUEVO = 167;
		public $TAREA_INDICADORES_AGREGAR = 168;
		public $TAREA_INDICADORES_DETALLES = 169;
		public $TAREA_INDICADORES_ACTUALIZAR = 170;
		public $TAREA_INDICADORES_BORRAR = 171;

		public $TAREA_VALORACIONINDICES_TODOS = 172;
		public $TAREA_VALORACIONINDICES_NUEVO = 173;
		public $TAREA_VALORACIONINDICES_AGREGAR = 174;
		public $TAREA_VALORACIONINDICES_DETALLES = 175;
		public $TAREA_VALORACIONINDICES_ACTUALIZAR = 176;
		public $TAREA_VALORACIONINDICES_BORRAR = 177;

		public $TAREA_PLANMEJORA_TODOS = 178;
		public $TAREA_PLANMEJORA_NUEVO = 179;
		public $TAREA_PLANMEJORA_AGREGAR = 180;
		public $TAREA_PLANMEJORA_DETALLES = 181;
		public $TAREA_PLANMEJORA_ACTUALIZAR = 182;
		public $TAREA_PLANMEJORA_BORRAR = 183;

		public $TAREA_CARACTERISTICAS_TODOS = 184;
		public $TAREA_CARACTERISTICAS_NUEVO = 185;
		public $TAREA_CARACTERISTICAS_AGREGAR = 186;
		public $TAREA_CARACTERISTICAS_DETALLES = 187;
		public $TAREA_CARACTERISTICAS_ACTUALIZAR = 188;
		public $TAREA_CARACTERISTICAS_BORRAR = 189;

		public $TAREA_ESPACIOSFISICOS_TODOS = 190;
		public $TAREA_ESPACIOSFISICOS_NUEVO = 191;
		public $TAREA_ESPACIOSFISICOS_AGREGAR = 192;
		public $TAREA_ESPACIOSFISICOS_DETALLES = 193;
		public $TAREA_ESPACIOSFISICOS_ACTUALIZAR = 194;
		public $TAREA_ESPACIOSFISICOS_BORRAR = 195;

		public $TAREA_EQUIPOSUTILIZADOS_TODOS = 196;
		public $TAREA_EQUIPOSUTILIZADOS_NUEVO = 197;
		public $TAREA_CEQUIPOSUTILIZADOS_AGREGAR = 198;
		public $TAREA_EQUIPOSUTILIZADOS_DETALLES = 199;
		public $TAREA_EQUIPOSUTILIZADOS_ACTUALIZAR = 200;
		public $TAREA_EQUIPOSUTILIZADOS_BORRAR = 201;

		public $TAREA_EQUIPAMIENTOLABORATORIO_TODOS = 202;
		public $TAREA_EQUIPAMIENTOLABORATORIO_NUEVO = 203;
		public $TAREA_EQUIPAMIENTOLABORATORIO_AGREGAR = 204;
		public $TAREA_EQUIPAMIENTOLABORATORIO_DETALLES = 205;
		public $TAREA_EQUIPAMIENTOLABORATORIO_ACTUALIZAR = 206;
		public $TAREA_EQUIPAMIENTOLABORATORIO_BORRAR = 207;

		public $TAREA_OAPC_TODOS = 0;
		public $TAREA_OAPC_NUEVO = 0;
		public $TAREA_OAPC_AGREGAR = 0;
		public $TAREA_OAPC_DETALLES = 0;
		public $TAREA_OAPC_ACTUALIZAR = 0;
		public $TAREA_OAPC_BORRAR = 0;

		public $TAREA_VICURSOS_TODOS = 0;
		public $TAREA_VICURSOS_NUEVO = 0;
		public $TAREA_VICURSOS_AGREGAR = 0;
		public $TAREA_VICURSOS_DETALLES = 0;
		public $TAREA_VICURSOS_ACTUALIZAR = 0;
		public $TAREA_VICURSOS_BORRAR = 0;

		public $TAREA_EFCARAC_TODOS = 0;
		public $TAREA_EFCARAC_NUEVO = 0;
		public $TAREA_EFCARAC_AGREGAR = 0;
		public $TAREA_EFCARAC_DETALLES = 0;
		public $TAREA_EFCARAC_ACTUALIZAR = 0;
		public $TAREA_EFCARAC_BORRAR = 0;

	    public $TAREA_MECURSOS_TODOS = 0;
		public $TAREA_MECURSOS_NUEVO = 0;
		public $TAREA_MECURSOS_AGREGAR = 0;
		public $TAREA_MECURSOS_DETALLES = 0;
		public $TAREA_MECURSOS_ACTUALIZAR = 0;
		public $TAREA_MECURSOS_BORRAR = 0;

	    public $TAREA_BIBLPC_TODOS = 0;
		public $TAREA_BIBLPC_NUEVO = 0;
		public $TAREA_BIBLPC_AGREGAR = 0;
		public $TAREA_BIBLPC_DETALLES = 0;
		public $TAREA_BIBLPC_ACTUALIZAR = 0;
		public $TAREA_BIBLPC_BORRAR = 0;

	    public $TAREA_EEPC_TODOS = 0;
		public $TAREA_EEPC_NUEVO = 0;
		public $TAREA_EEPC_AGREGAR = 0;
		public $TAREA_EEPC_DETALLES = 0;
		public $TAREA_EEPC_ACTUALIZAR = 0;
		public $TAREA_EEPC_BORRAR = 0;


	    public $TAREA_EEVAPC_TODOS = 0;
		public $TAREA_EEVAPC_NUEVO = 0;
		public $TAREA_EEVAPC_AGREGAR = 0;
		public $TAREA_EEVAPC_DETALLES = 0;
		public $TAREA_EEVAPC_ACTUALIZAR = 0;
		public $TAREA_EEVAPC_BORRAR = 0;

	    public $TAREA_ELPC_TODOS = 0;
		public $TAREA_ELPC_NUEVO = 0;
		public $TAREA_ELPC_AGREGAR = 0;
		public $TAREA_ELPC_DETALLES = 0;
		public $TAREA_ELPC_ACTUALIZAR = 0;
		public $TAREA_ELPC_BORRAR = 0;

	    public $TAREA_HVCRI_TODOS = 0;
		public $TAREA_HVCRI_NUEVO = 0;
		public $TAREA_HVCRI_AGREGAR = 0;
		public $TAREA_HVCRI_DETALLES = 0;
		public $TAREA_HVCRI_ACTUALIZAR = 0;
		public $TAREA_HVCRI_BORRAR = 0;

	    public $TAREA_PAAC_TODOS = 0;
		public $TAREA_PAAC_NUEVO = 0;
		public $TAREA_PAAC_AGREGAR = 0;
		public $TAREA_PAAC_DETALLES = 0;
		public $TAREA_PAAC_ACTUALIZAR = 0;
		public $TAREA_PAAC_BORRAR = 0;

	    public $TAREA_PACURSOS_TODOS = 0;
		public $TAREA_PACURSOS_NUEVO = 0;
		public $TAREA_PACURSOS_AGREGAR = 0;
		public $TAREA_PACURSOS_DETALLES = 0;
		public $TAREA_PACURSOS_ACTUALIZAR = 0;
		public $TAREA_PACURSOS_BORRAR = 0;

	    public $TAREA_PCDOCENTE_TODOS = 0;
		public $TAREA_PCDOCENTE_NUEVO = 0;
		public $TAREA_PCDOCENTE_AGREGAR = 0;
		public $TAREA_PCDOCENTE_DETALLES = 0;
		public $TAREA_PCDOCENTE_ACTUALIZAR = 0;
		public $TAREA_PCDOCENTE_BORRAR = 0;

	    public $TAREA_PCHV_TODOS = 0;
		public $TAREA_PCHV_NUEVO = 0;
		public $TAREA_PCHV_AGREGAR = 0;
		public $TAREA_PCHV_DETALLES = 0;
		public $TAREA_PCHV_ACTUALIZAR = 0;
		public $TAREA_PCHV_BORRAR = 0;







$datos['FormacionAcademica'] = $this->Tabla_FormacionAcademica->select_all($Id);

public function select_all($Id){
		$this->db->select('*');
		$this->db->from($this->tabla);
		$this->db->join('Docente','FormacionAcademica.IdDocente = Docente.IdDocente');
		$this->db->where('FormacionAcademica.IdDocente',$Id);
		$rows = $this->db->get();
		return $rows->result();

	}//end select all
					



 ?>
