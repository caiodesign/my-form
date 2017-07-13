<?php
function getUrl(){
  $serverName = $_SERVER['SERVER_NAME'];
  $uri = "/server/form/public";
  $http = "http://";
  echo $http . $serverName . $uri;
}

function getHomeUrl(){
  $serverName = $_SERVER['SERVER_NAME'];
  $http = "http://";
  echo $http . $serverName;
}

function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) {
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  mail($para, $assunto, nl2br($mensagem), $headers);
}


function logotipo(){
  $logoUrl = "http://www.foster.com.br/images/logo-foster-home.png";
  echo $logoUrl;
}


 ?>
