<?php

require_once "../capa_conexion/conexion.php";
require_once "../capa_logica/crudQuiebre.php";
$obj = new crudQuiebre();


$datos = array(

    $_POST['idquiebre'], //0
    $_POST['quiebre_contacto1s'], //1
    $_POST['quiebre_celular1s'], //2
    $_POST['quiebre_contacto2s'], //3
    $_POST['quiebre_celular2s'], //4
    $_POST['quiebre_numero_problemas'], //5
    $_POST['ncobservacioness'] //5

);


try {
    $resultado = $obj->agregarQuiebreComentario($datos);
    echo json_encode($resultado);
    //print_r($resultado);
} catch (Exception $exc) {
    header("HTTP/1.1 500");
    echo $exc->getMessage();
}
