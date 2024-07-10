<?php
    // ------------------------------------------------------------------------
    if ( !function_exists('is_rol_permitido')) {
        function is_rol_permitido($clave_tarea=-1, $clave_rol=-1){
            $permiso = FALSE;
            $CI =& get_instance();
            switch ($clave_tarea) {
                case $CI->tareas->TAREA_NONE:
                    $permiso = FALSE;
                	break;
                //**************************************************
                case $CI->tareas->TAREA_DASHBOARD:
                case $CI->tareas->TAREA_USUARIO_PERFIL:
                case $CI->tareas->TAREA_TENNIS_TODOS:
                case $CI->tareas->TAREA_TENNIS_NUEVO:
                case $CI->tareas->TAREA_TENNIS_DETALLES:
                case $CI->tareas->TAREA_TENNIS_DAMA:
                case $CI->tareas->TAREA_TENNIS_CABALLERO:
                case $CI->tareas->TAREA_OFERTAS_TODAS:
                case $CI->tareas->TAREA_OFERTA_DETALLES:
                    $roles_permitidos = array($CI->roles->ROL_USUARIO['clave'],
                                              $CI->roles->ROL_ADMINISTRADOR['clave']
                                            );

                    $permiso = in_array($clave_rol, $roles_permitidos);
                	break;
                //**************************************************
                case $CI->tareas->TAREA_USUARIOS_TODOS:
                case $CI->tareas->TAREA_USUARIO_NUEVO:
                case $CI->tareas->TAREA_USUARIO_DETALLES:
                    $roles_permitidos = array($CI->roles->ROL_ADMINISTRADOR['clave']);

                    $permiso = in_array($clave_rol, $roles_permitidos);
                	break;
                //**************************************************
            }//end switch tareas

            return $permiso;
        }//end is_rol_permitido
    }//end no existe funcion is_rol_permitido
