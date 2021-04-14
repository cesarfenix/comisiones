<?php  
require_once "model/Comision.php";
$Comision = new Comision($_POST["venta"]);
require_once "view/vresultado.php";
?>