<?php
    /*CONTROLADORES*/
    require_once "controladores/plantilla.controlador.php";
    require_once "controladores/menu.controlador.php";

    /*MODELOS*/
    require_once "modelos/menu.modelo.php";

//Creamos el objeto y instaciamos una clase que va estar en el controlador
$plantilla = new ControladorPlantilla();
//ejecutamos los metodos que tenga la clase plantilla
$plantilla -> plantilla();

