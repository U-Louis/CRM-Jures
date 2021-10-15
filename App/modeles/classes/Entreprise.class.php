<?php

    Class Entreprise extends Contact{

        //=================== INIT =========================
        private $ID_entreprise;

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
            string $ID_entreprise
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
            $this->set_ID_entreprise();
        }

        //================== SETTERS =======================
        protected function set_ID_entreprise();{
            $this->ID_entreprise = $ID_entreprise;
        }

        //================== GETTERS =======================
        protected function get_ID_entreprise();{
            return $this->ID_entreprise;
        }

        //================== METHODS =======================
        //================== DISPLAY =======================
    }