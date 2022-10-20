<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "controladores/servicios.controlador.php";
require_once "modelos/servicios.modelo.php";

require_once "controladores/zonas.controlador.php";
require_once "modelos/zonas.modelo.php";

require_once "controladores/departamentos.controlador.php";
require_once "modelos/departamentos.modelo.php";

require_once "controladores/reservas.controlador.php";
require_once "modelos/reservas.modelo.php";

require_once "controladores/usuarios.controlador.php";
require_once "modelos/usuarios.modelo.php";

require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
