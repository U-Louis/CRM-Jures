<?php

    Class SessionExamen extends Formation{

        //=================== INIT =========================
        private $ID_sessionExamen;
        private $libelle_formation;
        private $date_debutFormation;
        private $date_finFormation;
        private $jures;
        
        //================= CONSTRUCTOR ====================
        public function __construct(string $ID_sessionExamenPattern, string $libelle_formation, string $date_debutFormation, string $date_finFormation, array $jures){
            $this->set_ID_sessionExamen();
            $this->set_libelle_sessionExamen();
            $this->set_debutSessionExamen();
            $this->set_finSessionExamen();
            $this->set_jures();
        }

        //================== SETTERS =======================
        protected function set_ID_sessionExamen(){
            $this->ID_sessionExamen = $ID_sessionExamen;
        }

        protected function set_libelle_sessionExamen(){
            $this->libelle_formation = $libelle_formation;
        }

        protected function set_debutSessionExamen(){
            //check format date
            //check if after today
            $this->date_debutFormation = $date_debutFormation;
        }

        protected function set_libelle_sessionExamen(){
            $this->libelle_formation = $libelle_formation;
        }

        protected function set_jures(){
            //check if juror is not busy on the same dates ?
            $this->jures = $jures;
        }

        //================== GETTERS =======================
        protected function get_ID_sessionExamen(){
            return $this->ID_sessionExamen;
        }

        protected function get_libelle_formation(){
            return $this->libelle_formation;
        }

        protected function get_date_debutFormation(){
            return $this->date_debutFormation;
        }

        protected function get_date_finFormation(){
            return $this->date_finFormation;
        }

        protected function get_jures(){
            return $this->jures;
        }

        //================== METHODS =======================

        /**
         * Check if several sessions are on the same date and notify it
         */
        protected function checkIfDatesCross(){
        }

        /**
         * Check if the session has at least one juror with OK status
         * Also notify if dates cross
         */
        protected function checkIfIsAllOk(){
        }

        //================== DISPLAY =======================
    }