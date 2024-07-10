<?php

    if ( !function_exists('formato_moneda')) {
        function formato_moneda($cantidad=0) {
            return '$'.number_format($cantidad,2,'.',',');
        }//end navegacion_portal
    }//end if !function_exists
