<?php

    class Request{

        private $url;
        private $usuario;
        private $requestBody;
        private $contrasena;
        private $urlToken;
        private $token;

        public function __construct()
        {

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
         * Get the value of requestBody
         */ 
        public function getRequestBody()
        {
                return $this->requestBody;
        }

        /**
         * Set the value of requestBody
         *
         * @return  self
         */ 
        public function setRequestBody($requestBody)
        {
                $this->requestBody = $requestBody;

                return $this;
        }

        /**
         * Get the value of urlToken
         */ 
        public function getUrlToken()
        {
                return $this->urlToken;
        }

        /**
         * Set the value of urlToken
         *
         * @return  self
         */ 
        public function setUrlToken($urlToken)
        {
                $this->urlToken = $urlToken;

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
    }

?>
