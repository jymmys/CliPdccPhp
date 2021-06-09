<?php  

    require_once("client/cliente.php");
    require_once("model/SingleResponse.php");
    require_once("model/TokenRequest.php");
    require_once("model/Request.php");
    require_once("model/Catalogo.php");

    class serviceClient{
        public function ConsultarToken($tokenRequest)
        {
            $tokenResponse = new SingleResponse();
            try
            {
                $url = $tokenRequest->getUrl();
                $usuario = $tokenRequest->getUsername();
                $contrasena = $tokenRequest->getPassword();
                $metodo = "GET";
                $cliente = new Cliente();
                $resultado = $cliente->ConsultarToken($url,$usuario,$contrasena,$metodo);
            }
            catch (Exception $e)
            {
                // TODO: handle exception
                print_r($e);
            }
            return $resultado;
        }

        private function ObtenerToken($tokenRequest){
            try{
                $jsonToken = json_decode($this->ConsultarToken($tokenRequest),true);
            }catch (Exception $e){
                // TODO: handle exception
                print_r($e);
            }
            return $jsonToken["data"]["access_token"];
        }

        public function ConsultarCatalogo($request){
            $url = $request->getUrl();
            $urlToken = $request->getUrlToken();
            $usuario = $request->getUsuario();
            $contrasena = $request->getContrasena();
            $metodo = "GET";
            $tokenRequest = new TokenRequest();
            $tokenRequest->setUrl($urlToken);
            $tokenRequest->setUsername($usuario);
            $tokenRequest->setPassword($contrasena);
            try{
                $catalogo = new Catalogo();
                $catalogo = $request->getRequestBody();
                $token = $this->ObtenerToken($tokenRequest);
                $request->setToken($token);
                $cliente = new Cliente();
                $cliente->setUrl($url);
                $cliente->setMetodo($metodo);
                $cliente->setToken($token);
                $parametros = array(constantes::getId_Catalogo() => $catalogo->getIdCatalogo());
                $cliente->setParametros($parametros);
                $respuesta=$cliente->Ejecutar();
            }catch (Exception $e){
                // TODO: handle exception
                print_r($e);
            }
            return $respuesta;
        }
    }
?>