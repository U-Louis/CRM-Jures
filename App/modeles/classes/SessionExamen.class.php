<?php

    Class SessionExamen extends Formation{

        //=================== INIT =========================
        private $formationPattern;
        private $formation;
        private $ID_sessionExamen;
        private $libelle_formation;
        private $date_debutSession;
        private $date_FinSession;
        private $jures;
        
        //================= CONSTRUCTOR ====================
        public function __construct(
            object $formation,
            string $ID_sessionExamenPattern,
            string $libelle_formation,
            string $date_debutSession,
            string $date_FinSession,
            array $jures
        ){
            $this->set_attributesFromFormation($formation);
            parent::set_attributesFromPattern($this->formationPattern);
            $this->set_ID_sessionExamen($ID_sessionExamenPattern);
            $this->set_libelle_sessionExamen($libelle_formation);
            $this->set_debutSessionExamen($date_debutSession);
            $this->set_finSessionExamen($date_FinSession);
            $this->set_jures($jures);
        }

        //================== SETTERS =======================

        /**
         * Inherited attributes set with an instance of a parent object
         */
        private function set_attributesFromFormation($formation){
            $this->formationPattern = $formation->get_attributesFromPattern(); //with instance of grandparent object
            $this->ID_formation = $formation->get_ID_formation();
            $this->libelle_formation = $formation->get_libelle_formation();
            $this->date_debutFormation = $formation->get_date_debutFormation();
            $this->date_finFormation = $formation->get_date_finFormation();
            $this->formateur = $formation->get_formateur();
        }

        protected function set_ID_sessionExamen($ID_sessionExamen){
            $this->ID_sessionExamen = $ID_sessionExamen;
        }

        protected function set_libelle_sessionExamen($libelle_formation){
            $this->libelle_formation = $libelle_formation;
        }

        protected function set_debutSessionExamen($date_debutSession){
            //check format date
            //check if after today
            $this->date_debutSession = $date_debutSession;
        }

        protected function set_finSessionExamen($date_FinSession){
            $this->date_FinSession = $date_FinSession;
        }

        protected function set_jures($jures){
            //check if juror is not busy on the same dates ?
            //this check can be done with Habilitation::isDatesCompatible(period1start, period1end, period2start, period2end) refactored as a trait
            $this->jures = $jures;
        }

        //================== GETTERS =======================
        protected function get_ID_sessionExamen(){
            return $this->ID_sessionExamen;
        }

        protected function get_libelle_formation(){
            return $this->libelle_formation;
        }

        protected function get_date_debutSession(){
            return $this->date_debutSession;
        }

        protected function get_date_FinSession(){
            return $this->date_FinSession;
        }

        protected function get_jures(){
            return $this->jures;
        }

        protected function get_attributesFromFormation(){
            return $this->formation;
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