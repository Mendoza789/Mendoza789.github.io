<?php
    if ( !function_exists('navegacion_portal')) {
        function navegacion_portal($tarea_actual) {
            $CI =& get_instance();
            $CI->load->library('paginas');

            $menu_inicio = FALSE;
            $menu_ofertas = FALSE;

            $menu_catalogo = FALSE;
            $submenu_catalogo_dama = FALSE;
            $submenu_catalogo_caballlero = FALSE;

            $menu_galeria = FALSE;
            $menu_contacto = FALSE;

            $menu_acerca_de = FALSE;
            $submenu_acerca_de_sitio = FALSE;
            $submenu_acerca_de_autor = FALSE;

            if($tarea_actual == $CI->paginas->PAGINA_INICIO){
                $menu_inicio = TRUE;
            }//end if página inicio
            else if($tarea_actual == $CI->paginas->PAGINA_OFERTAS){
                $menu_ofertas = TRUE;
            }//end if página ofertas
            else if($tarea_actual == $CI->paginas->PAGINA_TENNIS_DAMA){
                $menu_catalogo = TRUE;
                $submenu_catalogo_dama = TRUE;
            }//end if página tennis dama
            else if($tarea_actual == $CI->paginas->PAGINA_TENNIS_CABALLERO){
                $menu_catalogo = TRUE;
                $submenu_catalogo_caballlero = TRUE;
            }//end if página tennis caballero
            else if($tarea_actual == $CI->paginas->PAGINA_GALERIA){
                $menu_galeria = TRUE;
            }//end if página galería
            else if($tarea_actual == $CI->paginas->PAGINA_CONTACTO){
                $menu_contacto = TRUE;
            }//end if página contact|
            else if($tarea_actual == $CI->paginas->PAGINA_ACERCA_DEL_SITIO){
                $menu_acerca_de = TRUE;
                $submenu_acerca_de_sitio = TRUE;
            }//end if página acerca del sitio
            else if($tarea_actual == $CI->paginas->PAGINA_ACERCA_DEL_AUTOR){
                $menu_acerca_de = TRUE;
                $submenu_acerca_de_autor = TRUE;
            }//end if página acerca del autor

            $navegacion =   '<nav id="mainav" class="hoc clear">
                				<ul class="clear">
                					<li'.($menu_inicio ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_INICIO).'">Home</a></li>
                					<li'.($menu_ofertas ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_OFERTAS).'">Ofertas</a></li>
                					<li'.($menu_catalogo ? ' class="active"' : '').'><a class="drop" href="#">Catálogo de Tennis</a>
                						<ul>
                							<li'.($submenu_catalogo_dama ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_TENNIS_DAMA).'">Dama</a></li>
                							<li'.($submenu_catalogo_caballlero ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_TENNIS_CABALLERO).'">Caballero</a></li>
                						</ul>
                					</li>
                					<li'.($menu_galeria ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_GALERIA).'">Galería</a></li>
                					<li'.($menu_contacto ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_CONTACTO).'">Contacto</a></li>
                					<li'.($menu_acerca_de ? ' class="active"' : '').'><a class="drop" href="#">Acerca de</a>
                						<ul>
                							<li'.($submenu_acerca_de_sitio ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_ACERCA_DEL_SITIO).'">El sitio</a></li>
                							<li'.($submenu_acerca_de_autor ? ' class="active"' : '').'><a href="'.base_url('principal/'.$CI->paginas->PAGINA_ACERCA_DEL_AUTOR).'">El autor</a></li>
                						</ul>
                					</li>
                				</ul>
                			</nav>';

            return $navegacion;
        }//end function navegacion_portal
    }//end !function_exists
