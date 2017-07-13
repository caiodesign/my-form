<?php

function Connect()
{
 $dbhost = "localhost"; //endereço do servidor
 $dbuser = "root"; //usuário
 $dbpass = ""; //senha
 $dbname = "form"; //nome do banco

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
