<?php

//1-Creamos la clase creada en el menu.php
class ControladorCategorias{
    
    //2-Declaramos el metodo publico
    public function ctrMostrarCategorias(){
        
        //3-Enviamos un parametro al modelo con el nombre de la tabla
        $tabla = "categorias";
        
        //4-Pedimos respuesta al modelo, instanciando la clase ModeloCategorias, donde ejecuta el metodo mdlMostrarCategorias y le pasamos de parametro la $tabla
        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla);
        
        //5-y se lo retornamos a la vista
        return $respuesta;

    }
}
