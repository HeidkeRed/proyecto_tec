<?php
require_once('../config/conexion.php');

class Categoria
{
    public function __construct()
    {
        
    }

    // Método para insertar un registro en la tabla categoría
    public function insertar($nombre, $descripcion)
    {
        $sql = "INSERT INTO categoria (nombre, descripcion, condicion) 
                VALUES ('$nombre', '$descripcion', 1)";
        return ejecutarConsulta($sql);
    }

    // Método para editar un registro en la tabla categoría
    public function editar($idcategoria, $nombre, $descripcion)
    {
        $sql = "UPDATE categoria SET nombre = '$nombre', descripcion = '$descripcion' 
                WHERE id_categoria = $idcategoria";
        return ejecutarConsulta($sql);
    }

    // Método para desactivar una categoría (cambiar condición a 0)
    public function desactivar($idcategoria)
    {
        $sql = "UPDATE categoria SET condicion = 0 WHERE id_categoria = $idcategoria";
        return ejecutarConsulta($sql);
    }

    // Método para activar una categoría (cambiar condición a 1)
    public function activar($idcategoria)
    {
        $sql = "UPDATE categoria SET condicion = 1 WHERE id_categoria = $idcategoria";
        return ejecutarConsulta($sql);
    }

    // Método para mostrar los datos de una categoría
    public function mostrar($idcategoria)
    {
        $sql = "SELECT * FROM categoria WHERE id_categoria = $idcategoria";
        return ejecutarConsultaSimpleFila($sql);
    }

    // Método para listar todos los registros de la tabla categoría
    public function listar()
    {
        $sql = "SELECT * FROM categoria";
        return ejecutarConsulta($sql);
    }
}
?>
