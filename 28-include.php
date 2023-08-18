<?php 
//metodo include: inserta en nuestro codigo un script procedente de otro archivo

include "25-forX.php";

include "25-for.php";

//include_once
include_once "25-for.php";

//metodo require: tiene la misma funcion que include, solo que si este archivo no se encuentra se lanzara un fatal error

require "25-forX.php";

require "25-for.php";

//metodo require once este metodo reconoce si el archivo especificado ya se habia pedido antes, de ser asi este no se ejecutara

require_once "25-for.php";
require_once "25-for.php";
?>