<?php

    Class Formateur extends Contact{

        //=================== INIT =========================
        private $contactAttributes;
        private $ID_formateur;

        //================= CONSTRUCTOR ====================
        public function __construct(object $contactAttributes, string $ID_formateur
        ){
            $this->set_attributesFromContact($contactAttributes);
            $this->set_ID_formateur();
        }

        //================== SETTERS =======================
        protected function set_ID_formateur();{
            $this->ID_formateur = $ID_formateur;
        }

        //================== GETTERS =======================
        protected function get_ID_formateur();{
            return $this->ID_formateur;
        }

        //================== METHODS =======================
        //================== DISPLAY =======================
    }