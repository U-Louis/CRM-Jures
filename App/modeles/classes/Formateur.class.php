<?php

    Class Formateur extends Contact{

        //=================== INIT =========================
        private $ID_formateur;

        //================= CONSTRUCTOR ====================
        public function __construct(
            string $ID_contact,
            string $Nom_contact,
            int $tel_contact,
            int $tel2_contact,
            string $mail_contact,
            int $numeroAdresse_contact,
            string $libelleAdresse_contact,
            string $complementAdresse_Contact,
            string $VilleAdresse_contact,
            int $codePostalAdresse_contact,
            //-----------end of inherited--------------------
            string $ID_formateur
        ){
            parent::__construct(
                string $ID_contact,
                string $Nom_contact,
                int $tel_contact,
                int $tel2_contact,
                string $mail_contact,
                int $numeroAdresse_contact,
                string $libelleAdresse_contact,
                string $complementAdresse_Contact,
                string $VilleAdresse_contact,
                int $codePostalAdresse_contact
            );
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