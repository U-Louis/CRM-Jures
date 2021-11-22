<?php

    class Habilitation {
        
        //=================== INIT =========================
        private $ID_habilitation;
        private $libelle_habilitation;
        private $debut_habilitation;
        private $fin_habilitation;

        //================= CONSTRUCTOR ====================
        public function __construct(string $ID_habilitation, string $libelle_habilitation, string $debut_habilitation, string $fin_habilitation)
        {
            $this->set_ID_habilitation($ID_habilitation);
            $this->set_libelle_habilitation($libelle_habilitation);
            $this->set_debut_habilitation($debut_habilitation);
            $this->set_fin_habilitation($fin_habilitation);
        }

        //================== SETTERS =======================
        protected function set_ID_habilitation($ID_habilitation){
            $this->ID_habilitation = $ID_habilitation;
        }

        protected function set_libelle_habilitation($libelle_habilitation){
            $this->libelle_habilitation = $libelle_habilitation;
        }

        protected function set_debut_habilitation($debut_habilitation){
            $this->debut_habilitation = $debut_habilitation;
        }

        protected function set_fin_habilitation($fin_habilitation){
            $this->fin_habilitation = $fin_habilitation;
        }

        //================== GETTERS =======================
        protected function get_ID_habilitation(){
            return $this->ID_habilitation;
        }

        protected function get_libelle_habilitation(){
            return $this->libelle_habilitation;
        }

        protected function get_debut_habilitation(){
            return $this->debut_habilitation;
        }

        protected function get_fin_habilitation(){
            return $this->fin_habilitation;
        }

        //================== METHODS =======================

        /**
         * Check if the habilitation period marches the examSession period
         * @return bool
         */
        protected function isDatesCompatible(SessionExamen $sessionExamenToCheck) :bool{
            //if sessionExamenToCheck->date_debutSession >== $this->debut_habilitation
                //if sessionExamenToCheck->date_FinSession <== $this->fin_habilitation
            //return OK
        }
        
        //================== DISPLAY =======================
    }