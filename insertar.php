<?php

// Modulo PHP:

require_once "conexion.php";
require_once "metodosCrud.php";

$nombre=$_POST['txtnombres'];
$apellido=$_POST['txtapellidos'];
$programa=$_POST['txtprograma'];

$datos=array($nombre,$apellido,$programa);

// Crear el objeto.
$objeto=new metodos();
if($objeto->insertarDatos($datos)==1){
    header("Location:index.php");
}
else{
    echo "Error al registrar los datos";
}

?>