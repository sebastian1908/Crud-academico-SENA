<?php
require_once "conexion.php";
require_once "metodosCrud.php";

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsi</title>
</head>
<body>
    <!-- Formulario de Insertar Registro -->
    <form action="insertar.php" method="post">
        <label for="txtnombres">Nombres:
            <input type="text" name="txtnombres">
        </label>

        <label for="txtapellidos">Apellidos:
            <input type="text" name="txtapellidos">
        </label>

        <label for="txtprograma">Programa:
            <input type="text" name="txtprograma">
        </label>

        <button>Insertar</button>
    </form>


<!-- Formulario de Mostrar Registro -->
    <table style="border-collapse: collapse;" border="1">
        <tr>
            <td>Nombre(s):</td>
            <td>Apellido(s):</td>
            <td>Programa:</td>

            <!-- actualizar / Eliminar -->
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>

<?php
// crear el objeto de metodos.
$objeto=new metodos();
$sql="SELECT id,nombres,apellidos,programa from aprendiz";
$datos=$objeto->mostrarDatos($sql);

foreach($datos as $key){

?>
    <tr>
            <td><?php echo $key ['nombres']; ?></td>
            <td><?php echo $key ['apellidos']; ?></td>
            <td><?php echo $key ['programa']; ?></td>
            <!-- actualizar / eliminar -->
            <td><a href="editar.php?id=<?php echo $key['id']?>">Editar</td>
            <td><a href="eliminar.php?id=<?php echo $key['id']?>">Eliminar</td>

        </tr>
<?php
}

?>
    </table>
    
</body>
</html>