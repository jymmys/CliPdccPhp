<?php

  require_once("services/serviceClient.php");
  print_r($_SERVER);

  $servicio = new serviceClient();
  $token = new TokenRequest();

  //$token->setUrl('https://40.112.183.181:8081/api/seguridad/solicitar-token');
  //$token->setUsername('vucecr');
  //$token->setPassword('VuCrU&c2V3');
  //echo $servicio->ConsultarToken($token);
/*
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://40.112.183.181:8081/api/seguridad/solicitar-token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'password: VuCrU&c2V3',
    'username: vucecr'
  ),
  CURLOPT_SSL_VERIFYPEER => false,
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
*/
?>
