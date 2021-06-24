/*/
@Yimis Torreglosa Diaz
/*/
<?php

    class Conductor
    {
        //Variable
        private $Conductor;

    
        //CONSTRUCTOR
        public function __construct()
        {
            //
        }

        // METODOS GETTERS y SETTERS

        //Get
        public function getConductor()
        {
            return $this->Conductor;
        }

        //Set
        public function setConductor($Conductor)
        {
            $this->Conductor = $Conductor;
            return $this;
        }
    }

?>
