<?php

    class constantes {

        public function __construct()
        {
        }

        const HEADER_AUTORIZACION = "autorizacion";
        public static function getHeaderAutorizacion(){
            return self::HEADER_AUTORIZACION;
        }
        const HEADER_USUARIO = "username";
        public static function getHeaderUsuario(){
            return self::HEADER_USUARIO;
        }
        const HEADER_CONTRASENA = "password";
        public static function getHeaderContrasena(){
            return self::HEADER_CONTRASENA;
        }
        const FORMATO_SENCILLO_FECHA = "YYYY-MM-DD";
        const DATA = "data";
        const RESPUESTA = "respuesta";
        public static function getRespuesta(){
            return self::RESPUESTA;
        }
        const GET = "GET";
        public static function getGET(){
            return self::GET;
        }
        const ID_CATALOGO = "idCatalogo";
        public static function getId_Catalogo(){
            return self::ID_CATALOGO;
        }
        const NOMBRE = "nombre";
        const NUMERO_DOCUMENTO = "numeroDocumento";
        const TIPO_DOCUMENTO = "tipoDocumento";
        const CHARSET = "UTF8";
    }
?>