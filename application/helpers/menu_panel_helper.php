<?php
    //ESTA FUNCIÓN ES TOTALMENTE DEPENDIENTE DEL FORMATO, ESTRUCTURA, ELEMENTOS Y ATRIBUTOS DE LA PLANTILLA UTILIZADA.
    //DEBE REVISARSE Y ADECUARSE PARA CADA PLANTILLA.
    if ( !function_exists('configurar_menu_lateral')) {
        function configurar_menu_lateral($rol_actual) {
            $CI =& get_instance();
            $CI->load->library('tareas');
            $CI->load->library('roles');
            $menu = array();

            $menu_item = array();
            $sub_menu_item = array();
            /*****************Menu cómun para todos********************************/
            //opción lateral Dashboard
            $menu_item = array();
            $menu_item['is_active'] = FALSE;
            $menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_DASHBOARD);;
            $menu_item['icon'] = 'fas fa-fw fa-tachometer-alt';
            $menu_item['text'] = 'Dashboard';
            $menu_item['sub_menu'] = array();
            $menu['dashboard'] = $menu_item;


                        //opción lateral Usuarios
            if(in_array($rol_actual, array($CI->roles->ROL_ADMINISTRADOR['clave']))){
                $menu_item = array();
                $menu_item['is_active'] = FALSE;
                $menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_USUARIOS_TODOS);
                $menu_item['icon'] = 'fas fa-fw fa-users';
                $menu_item['text'] = 'Usuarios';
                $menu_item['sub_menu'] = array();
                $menu['usuarios'] = $menu_item;
            }//end if rol con acceso a menú lateral Usuarios
            if(in_array($rol_actual, array($CI->roles->ROL_USUARIO['clave']))){
                $menu_item = array();
                $menu_item['is_active'] = FALSE;
                $menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_USUARIOS_TODOS);
                $menu_item['icon'] = 'fas fa-fw fa-users';
                $menu_item['text'] = 'Usuarios';
                $menu_item['sub_menu'] = array();
                $menu['usuarios'] = $menu_item;
            }//end if rol con acceso a menú lateral Usuarios


            //opción lateral Usuarios
            if(in_array($rol_actual, array($CI->roles->ROL_ADMINISTRADOR['clave']))){
                $menu_item = array();
                $menu_item['is_active'] = FALSE;
                $menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_USUARIOS_TODOS);
                $menu_item['icon'] = 'fas fa-fw fa-users';
                $menu_item['text'] = 'Usuarios';
                $menu_item['sub_menu'] = array();
                $menu['usuarios'] = $menu_item;
            }//end if rol con acceso a menú lateral Usuarios

            //submenú lateral Tennis
            $menu_item = array();
            $menu_item['is_active'] = FALSE;
            $menu_item['href'] = '#';
            $menu_item['icon'] = 'fas fa-fw fa-cog';
            $menu_item['text'] = 'Tennis';
            $menu_item['inner_header'] = 'Inventario';
            $menu_item['show'] = FALSE;
            $menu_item['sub_menu'] = array();

                //opción lateral Tennis > Todos
                $sub_menu_item = array();
                $sub_menu_item['is_active'] = FALSE;
                $sub_menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_TENNIS_TODOS);
                $sub_menu_item['text'] = 'Todos';
                $menu_item['sub_menu']['tennis_todos'] = $sub_menu_item;

                //opción lateral Tennis > Dama
                $sub_menu_item = array();
                $sub_menu_item['is_active'] = FALSE;
                $sub_menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_TENNIS_DAMA);
                $sub_menu_item['text'] = 'Dama';
                $menu_item['sub_menu']['tennis_dama'] = $sub_menu_item;

                //opción lateral Tennis > Dama
                $sub_menu_item = array();
                $sub_menu_item['is_active'] = FALSE;
                $sub_menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_TENNIS_CABALLERO);
                $sub_menu_item['text'] = 'Caballero';
                $menu_item['sub_menu']['tennis_caballero'] = $sub_menu_item;

            $menu['tennis'] = $menu_item;

            //opción lateral Ofertas
            $menu_item = array();
            $menu_item['is_active'] = FALSE;
            $menu_item['href'] = base_url('principal/'.$CI->tareas->TAREA_OFERTAS_TODAS);;
            $menu_item['icon'] = 'fas fa-fw fa-table';
            $menu_item['text'] = 'Ofertas';
            $menu_item['sub_menu'] = array();
            $menu['ofertas'] = $menu_item;

            return $menu;
        }//end function configurar_menu_lateral
    }//end exists configurar_menu_lateral

    if(!function_exists('activar_menu_item')){
        function activar_menu_item($tarea_actual, $menu){
            $CI =& get_instance();
            $CI->load->library('tareas');

            if($tarea_actual == $CI->tareas->TAREA_DASHBOARD){
                $menu['dashboard']['is_active'] = TRUE;
            }//end if tarea Dashboard
            else if($tarea_actual == $CI->tareas->TAREA_USUARIOS_TODOS){
                $menu['usuarios']['is_active'] = TRUE;
            }//end if tarea Usuarios Todos
            else if($tarea_actual == $CI->tareas->TAREA_USUARIO_NUEVO){
                $menu['usuarios']['is_active'] = TRUE;
            }//end if tarea Usuario Nuevo
            else if($tarea_actual == $CI->tareas->TAREA_USUARIO_DETALLES){
                $menu['usuarios']['is_active'] = TRUE;
            }//end if tarea Usuario Detalles
			else if($tarea_actual == $CI->tareas->TAREA_USUARIO_PERFIL){
                $menu['usuarios']['is_active'] = TRUE;
            }//end if tarea Usuario Perfil
            else if($tarea_actual == $CI->tareas->TAREA_TENNIS_TODOS){
                $menu['tennis']['is_active'] = TRUE;
                $menu['tennis']['show'] = TRUE;
                $menu['tennis']['sub_menu']['tennis_todos']['is_active'] = TRUE;
            }//end if tarea Tennis Todos
            else if($tarea_actual == $CI->tareas->TAREA_TENNIS_NUEVO){
                $menu['tennis']['is_active'] = TRUE;
                $menu['tennis']['show'] = TRUE;
                $menu['tennis']['sub_menu']['tennis_todos']['is_active'] = TRUE;
            }//end if tarea Tennis Nuevo
            else if($tarea_actual == $CI->tareas->TAREA_TENNIS_DETALLES){
                $menu['tennis']['is_active'] = TRUE;
                $menu['tennis']['show'] = TRUE;
                $menu['tennis']['sub_menu']['tennis_todos']['is_active'] = TRUE;
            }//end if tarea Tennis Detalles
            else if($tarea_actual == $CI->tareas->TAREA_TENNIS_DAMA){
                $menu['tennis']['is_active'] = TRUE;
                $menu['tennis']['show'] = TRUE;
                $menu['tennis']['sub_menu']['tennis_dama']['is_active'] = TRUE;
            }//end if tarea Tennis Dama
            else if($tarea_actual == $CI->tareas->TAREA_TENNIS_CABALLERO){
                $menu['tennis']['is_active'] = TRUE;
                $menu['tennis']['show'] = TRUE;
                $menu['tennis']['sub_menu']['tennis_caballero']['is_active'] = TRUE;
            }//end if tarea Tennis Caballero
            else if($tarea_actual == $CI->tareas->TAREA_OFERTAS_TODAS){
                $menu['ofertas']['is_active'] = TRUE;
            }//end if tarea Ofertas Todas
            else if($tarea_actual == $CI->tareas->TAREA_OFERTA_DETALLES){
                $menu['ofertas']['is_active'] = TRUE;
            }//end if tarea Oferta Detalles

            return $menu;
        }//end function activar_menu_item
    }//end exists activar_menu_item

    //ESTA FUNCIÓN ES TOTALMENTE DEPENDIENTE DEL FORMATO, ESTRUCTURA, ELEMENTOS Y ATRIBUTOS DE LA PLANTILLA UTILIZADA.
    //DEBE REVISARSE Y ADECUARSE PARA CADA PLANTILLA.
    if(!function_exists('crear_menu_lateral_panel')){
        function crear_menu_lateral_panel($tarea_actual, $rol_actual){
            $CI =& get_instance();
            $menu = configurar_menu_lateral($rol_actual);
            $menu = activar_menu_item($tarea_actual, $menu);
            $html = '';

            foreach ($menu as $menu_item) {
                if($menu_item['href'] != '#'){
                    $html .= '  <li class="nav-item'.(($menu_item['is_active'])?' active':'').'">
                                    <a class="nav-link" href="'.$menu_item['href'].'">
                                        <i class="'.$menu_item['icon'].'"></i>
                	                    <span>'.$menu_item['text'].'</span>
                                    </a>
            	                </li>';
                }//end if es una sección sencilla
                else{
                    $html .= '  <li class="nav-item'.(($menu_item['is_active'])?' active':'').'">
                	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                	                    <i class="'.$menu_item['icon'].'"></i>
                	                    <span>'.$menu_item['text'].'</span>
                	                </a>';

                    if(sizeof($menu_item['sub_menu']) > 0){
                        $html .= ' <div id="collapseTwo" class="collapse'.(($menu_item['show'])?' show':'').'" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                	                    <div class="bg-white py-2 collapse-inner rounded">
                	                        <h6 class="collapse-header">'.$menu_item['inner_header'].'</h6>';

                        foreach ($menu_item['sub_menu'] as $sub_menu_item){
                            $html .= '      <a class="collapse-item'.(($sub_menu_item['is_active'])?' active':'').'" href="'.$sub_menu_item['href'].'">'.$sub_menu_item['text'].'</a>';
                        }//end foreach opciones submenú

                	    $html .= '      </div>
                	                </div>';

                    }//end if hay opciones del submenú

                    $html .= '  </li>';
                }//end else es un submenú
            }//end of foreach

            return $html;
        }//end function crear_menu_lateral

    }//end exists crear_menu_lateral
