<?php

    //Creamos la clase Conexion
    class Conexion{
        
        //Declaramos una funcion publica
        public function conectar(){

            //Creamos una variable link donde instanciamos una clase PDO ahi metemos los parametros para la conexion a la base de datos
            $link = new PDO("mysql:host=localhost;dbname=coconecan-db",
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                        );
                        
            //Retornamos la variable link
            return $link;

        }

    }