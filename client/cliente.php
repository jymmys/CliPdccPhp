<?php

    require_once("util/constantes.php");

    class Cliente {
        
        protected $url;
        protected $metodo;
        protected $json;
        protected $usuario;
        protected $contrasena;
        protected $parametros;
        protected $token;

        protected $constantes;

        public function __construct()
        {
        }

        public function __construct1(string $url, string $metodo,string $usuario, string $contrasena, string $json)
        {
            $this->url=$url;
            $this->metodo=$metodo;
            $this->usuario=$usuario;
            $this->contrasena=$contrasena;
            $this->json=$json;
        }
        public function __construct2(string $url, string $metodo, string $token, string $json)
        {
            $this->url = $url;
            $this->metodo = $metodo;
            $this->token = $token;
            $this->json = $json;
        }

        public function __construct3(string $url, string $metodo, string $token, array $parametros)
        {
            $this->url = $url;
            $this->metodo = $metodo;
            $this->token = $token;
            $this->parametros = $parametros;
        }

        /**
         * Get the value of url
         */ 
        public function getUrl()
        {
            return $this->url;
        }

        /**
         * Set the value of url
         *
         * @return  self
         */ 
        public function setUrl($url)
        {
            $this->url = $url;

            return $this;
        }

        /**
         * Get the value of metodo
         */ 
        public function getMetodo()
        {
            return $this->metodo;
        }

        /**
         * Set the value of metodo
         *
         * @return  self
         */ 
        public function setMetodo($metodo)
        {
            $this->metodo = $metodo;

            return $this;
        }

        /**
         * Get the value of json
         */ 
        public function getJson()
        {
            return $this->json;
        }

        /**
         * Set the value of json
         *
         * @return  self
         */ 
        public function setJson($json)
        {
            $this->json = $json;

            return $this;
        }

        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
            return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;

            return $this;
        }

        /**
         * Get the value of contrasena
         */ 
        public function getContrasena()
        {
            return $this->contrasena;
        }

        /**
         * Set the value of contrasena
         *
         * @return  self
         */ 
        public function setContrasena($contrasena)
        {
            $this->contrasena = $contrasena;

            return $this;
        }

        /**
         * Get the value of parametros
         */ 
        public function getParametros()
        {
            return $this->parametros;
        }

        /**
         * Set the value of parametros
         *
         * @return  self
         */ 
        public function setParametros($parametros)
        {
            $this->parametros = $parametros;

            return $this;
        }

        /**
         * Get the value of token
         */ 
        public function getToken()
        {
                return $this->token;
        }

        /**
         * Set the value of token
         *
         * @return  self
         */ 
        public function setToken($token)
        {
                $this->token = $token;

                return $this;
        }

        public function Ejecutar()
        {
            // TODO Auto-generated method stub
            try
            {
                if(strcmp($this->getMetodo(), constantes::getGET())==0){
                    $urlFinal=$this->getUrl()."?".http_build_query($this->getParametros());
                }else{
                    $urlFinal=$this->getUrl();
                }
                //header("Content-Type: application/json; charset=UTF-8");
                // $this->setUrl($this->url);
                // $this->setUsuario($this->usuario);
                // $this->setContrasena($this->contrasena);
                // $this->setMetodo($this->metodo);
                $curl = curl_init();
                $cabeceras = array(constantes::getHeaderAutorizacion().":".$this->getToken());
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $urlFinal,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => $this->getMetodo(),
                    CURLOPT_HTTPHEADER => $cabeceras,
                    CURLOPT_SSL_VERIFYPEER => false,
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
            }
            catch (Exception $e)
            {
                return $e->getMessage();
            }
        }

        public function ConsultarToken($url,$usuario,$contrasena,$metodo)
        {
            // TODO Auto-generated method stub
            try
            {
                header("Content-Type: application/json; charset=UTF-8");
                $this->setUrl($url);
                $this->setUsuario($usuario);
                $this->setContrasena($contrasena);
                $this->setMetodo($metodo);
                $curl = curl_init();
                $cabeceras = array(constantes::getHeaderContrasena().":".$this->getContrasena(),constantes::getHeaderUsuario().":".$this->getUsuario());
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $this->getUrl(),
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => $this->getMetodo(),
                    CURLOPT_HTTPHEADER => $cabeceras,
                    CURLOPT_SSL_VERIFYPEER => false,
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
            }
            catch (Exception $e)
            {
                return $e->getMessage();
            }
        }
    }


?>