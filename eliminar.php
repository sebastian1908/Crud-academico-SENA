<?php

// Modulo Eliminar:

$id=$_GET['id'];

require_once "conexion.php";
require_once "metodosCrud.php";


$objeto=new metodos();
if ($objeto->eliminarDatos($id)==1){
    header("Location:index.php");
}
else
{
    echo "Error al borrar el resgistro";
}



?>