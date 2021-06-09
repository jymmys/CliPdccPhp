<?php

  require_once("services/serviceClient.php");

  $servicio = new serviceClient();
  $request = new Request();


  $request->setUrl('https://40.112.183.181:8083/api/catalogo/consultar');
  $request->setUrlToken('https://40.112.183.181:8081/api/seguridad/solicitar-token');
  $request->setUsuario($_SERVER["HTTP_USERNAME"]);
  $request->setContrasena($_SERVER["HTTP_PASSWORD"]);
  $catalogo = new Catalogo();
  $catalogo->setIdCatalogo($_GET[constantes::getId_Catalogo()]);
  $request->setRequestBody($catalogo);
  echo $servicio->ConsultarCatalogo($request);
?>
