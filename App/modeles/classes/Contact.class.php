<?php

    Class Contact{

        //=================== INIT =========================
        protected $ID_contact;
        protected $Nom_contact;
        protected $tel_contact;
        protected $tel2_contact;
        protected $mail_contact;
        protected $numeroAdresse_contact;
        protected $libelleAdresse_contact;
        protected $complementAdresse_Contact;
        protected $VilleAdresse_contact;
        protected $codePostalAdresse_contact;
        
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
            int $codePostalAdresse_contact
        ){
            $this->set_ID_contact($ID_contact);
            $this->set_Nom_contact($Nom_contact);
            $this->set_tel_contact($tel_contact);
            $this->set_tel2_contact($tel2_contact);
            $this->set_mail_contact($mail_contact);
            $this->set_numeroAdresse_contact($numeroAdresse_contact);
            $this->set_libelleAdresse_contact($libelleAdresse_contact);
            $this->set_complementAdresse_Contact($complementAdresse_Contact);
            $this->set_VilleAdresse_contact($VilleAdresse_contact);
            $this->set_codePostalAdresse_contact($codePostalAdresse_contact);
        }

        //================== SETTERS =======================
        protected function set_ID_contact();{
            $this->ID_contact = $ID_contact;
        }

        protected function set_Nom_contact();{
            $this->Nom_contact = $Nom_contact;
        }

        protected function set_tel_contact();{
            $this->tel_contact = $tel_contact;
        }

        protected function set_tel2_contact();{
            $this->tel2_contact = $tel2_contact;
        }

        protected function set_mail_contact();{
            $this->mail_contact = $mail_contact;
        }

        protected function set_numeroAdresse_contact();{
            $this->numeroAdresse_contact = $numeroAdresse_contact;
        }

        protected function set_libelleAdresse_contact();{
            $this->libelleAdresse_contact = $libelleAdresse_contact;
        }

        protected function set_complementAdresse_Contact();{
            $this->complementAdresse_Contact = $complementAdresse_Contact;
        }

        protected function set_VilleAdresse_contact();{
            $this->VilleAdresse_contact = $VilleAdresse_contact;
        }

        protected function set_codePostalAdresse_contact();{
            $this->codePostalAdresse_contact = $codePostalAdresse_contact;
        }

        //================== GETTERS =======================
        protected function get_ID_contact();{
            return $this->ID_contact;
        }

        protected function get_Nom_contact();{
            return $this->Nom_contact;
        }

        protected function get_tel_contact();{
            return $this->tel_contact;
        }

        protected function get_tel2_contact();{
            return $this->tel2_contact;
        }

        protected function get_mail_contact();{
            return $this->mail_contact;
        }

        protected function get_numeroAdresse_contact();{
            return $this->numeroAdresse_contact;
        }

        protected function get_libelleAdresse_contact();{
            return $this->libelleAdresse_contact;
        }

        protected function get_complementAdresse_Contact();{
            return $this->complementAdresse_Contact;
        }

        protected function get_VilleAdresse_contact();{
            return $this->VilleAdresse_contact;
        }
        
        protected function get_codePostalAdresse_contact();{
            return $this->codePostalAdresse_contact;
        }

        //================== METHODS =======================

        /**
         * Parent method for setting the children attributes, those are provided by an instance of a parent Contact object
         */
        protected function set_attributesFromContact(Contact $contactAttributes){
            $this->ID_contact = $contactAttributes->get_ID_contact();
            $this->Nom_contact = $contactAttributes->get_Nom_contact();
            $this->tel_contact = $contactAttributes->get_tel_contact();
            $this->tel2_contact = $contactAttributes->get_tel2_contact();
            $this->mail_contact = $contactAttributes->get_mail_contact();
            $this->numeroAdresse_contact = $contactAttributes->get_numeroAdresse_contact();
            $this->libelleAdresse_contact = $contactAttributes->get_libelleAdresse_contact();
            $this->complementAdresse_Contact = $contactAttributes->get_complementAdresse_Contact();
            $this->VilleAdresse_contact = $contactAttributes->get_VilleAdresse_contact();
            $this->codePostalAdresse_contact = $contactAttributes->get_codePostalAdresse_contact();
        }

        //================== DISPLAY =======================
    }