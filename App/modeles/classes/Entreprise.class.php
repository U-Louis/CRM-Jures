<?php

    Class Entreprise extends Contact{

        //=================== INIT =========================
        private $contactAttributes;
        private $ID_entreprise;

        //================= CONSTRUCTOR ====================
        public function __construct(string $ID_entreprise, object $contactAttributes){
            $this->set_attributesFromContact($contactAttributes);
            $this->set_ID_entreprise($ID_entreprise);
        }

        //================== SETTERS =======================        
        protected function set_ID_entreprise($ID_entreprise){
            $this->ID_entreprise = $ID_entreprise;
        }

        //================== GETTERS =======================
        protected function get_ID_entreprise(){
            return $this->ID_entreprise;
        }

        //================== METHODS =======================
        //================== DISPLAY =======================
    }