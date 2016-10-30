<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web Service Test</title>
    </head>
    <body>
        <?php
            $options = array("location"=>"http://127.0.0.1/WebService/Server.php","uri"=>"http://127.0.0.1/WebService");           
            $client = new SoapClient("http://127.0.0.1/WebService/Server.php?wsdl",$options);
            $client->__getFunctions();
            echo $client->HelloWorld();
        ?>
    </body>
</html>
