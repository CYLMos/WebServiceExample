<?php
include("SoapDiscovery.class.php");
include("WebServiceFunction.php");
$disco = new SoapDiscovery('WebServiceFunction','soap');
$disco->getWSDL();

?>

