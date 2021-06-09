<?php

  require_once("services/serviceClient.php");

  $servicio = new serviceClient();
  $token = new TokenRequest();

  $token->setUrl('https://40.112.183.181:8081/api/seguridad/solicitar-token');
  $token->setUsername($_SERVER["HTTP_USERNAME"]);
  $token->setPassword($_SERVER["HTTP_PASSWORD"]);
  echo $servicio->ConsultarToken($token);
?>
