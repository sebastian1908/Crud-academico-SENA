<?php
// metodo de mostrar datos.
class metodos{
    public function mostrarDatos($sql){
        // Se conecta a la base de datos
        $dato=new conectar();
        $conexion=$dato->conexion();

        // operacion que muestra los registros en la tabla.
        $resultado=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($resultado,MYSQLI_ASSOC);

    }

    public function insertarDatos($datos){
        // Conexion con la base de datos
        $dato=new conectar();
        $conexion=$dato->conexion();

        // sentencia de insercion de datos
        $sql="INSERT INTO aprendiz(nombres,apellidos,programa) value('$datos[0]','$datos[1]'
        ,'$datos[2]')";

        // envio de los datos del registro.
        return $resultado=mysqli_query($conexion,$sql);
    }

    public function modificarDatos(){

    }

    public function eliminarDatos($id){
        $dato=new conectar();
        $conexion=$dato->conexion();

        $sql="DELETE from aprendiz where id='$id'";
        return $resultado=mysqli_query($conexion,$sql);
    }
}

?>