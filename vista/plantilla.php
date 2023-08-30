<?php

include_once "vista/modulo/cabecera.php";
// isset determina si la variable esta definida y no es null
if(isset($_GET["ruta"])){
   if($_GET["ruta"]== "inicio"||
      $_GET["ruta"]== "iniciarSesion"||
      $_GET["ruta"]== "registrar"){

        include_once "vista/modulo/".$_GET["ruta"].".php";
      }
  
}else{

}

include_once "vista/modulo/pie.php" ;