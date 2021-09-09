<?php
function cargarControlador($controlador)
{
    $nombreControlador=ucwords($controlador)."controller";
    $archivoControlador="controllers/$nombreControlador.php";

    if(!is_file($archivoControlador)){
        $archivoControlador="controllers".CONTROLADOR_PRINCIPAL."php";
    }
    
    require_once $archivoControlador;
    $control= new $nombreControlador;

    return $control;
}

function cargarAccion($controlador,$accion, $id=null)
{
    if(isset($accion)&& method_exists($controlador,$accion)){
        if($id==null)
        {
            $controlador->$accion();
        }
        {
            $controlador->$accion($id);
        }
        
    }

    else{
        $controlador->ACCION_PRINCIPAL();
    }
}

?>