<?php 

    //requerimos la conexion a la base de datos
    require_once "conexion.php";

    //Creamos la clase ModeloCategorias instanciada de menu.controlador.php
    class ModeloCategorias{

        //Declaramos el metodo statico por que traemos parametros. Pasamos el parametro de la tabla
        static public function mdlMostrarCategorias($tabla){

            //Realizamos la conexión, con la clase Conexión y el metodo conectar. Hacemos la Sentencia SQL "SELECT * FROM $tabla (categorias)"
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            //Ejecutamos
            $stmt -> execute();

            //Retornamos varias filas
            return $stmt -> fetchAll();

            //Cerramos conexion o sentencia SQL 
            $stmt -> close();

            //Para mas seguridad anulamos el objeto PDO que es la variable $stmt
            $stmt = null;

        }

    }