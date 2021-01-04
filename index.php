<?php
    require_once "controladores/plantilla.controlador.php";

//Creamos el objeto y instaciamos una clase que va estar en el controlador
$plantilla = new ControladorPlantilla();
//ejecutamos los metodos que tenga la clase plantilla
$plantilla -> plantilla();

