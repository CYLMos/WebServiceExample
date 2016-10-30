<?php
include("WebServiceFunction.php");

$server = new SoapServer("WebServiceFunction.wsdl");
$server->setClass('WebServiceFunction');
$server->handle();
?>

