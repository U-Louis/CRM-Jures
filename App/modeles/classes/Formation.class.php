<?php

    Class Formation extends FormationPattern{

        //=================== INIT =========================
        private $ID_formation;
        private $libelle_formation;
        private $date_debutFormation;
        private $date_finFormation;
        private $formateur;
        
        //================= CONSTRUCTOR ====================
        public function __construct(string $ID_formationPattern, string $libelle_formation, string $date_debutFormation, string $date_finFormation, object $formateur){
            $this->set_ID_formation();
            $this->set_libelle_formation();
            $this->set_debutFormation();
            $this->set_finFormation();
            $this->set_formateur();
        }

        //================== SETTERS =======================
        protected function set_ID_formation(){
            $this->ID_formation = $ID_formation;
        }

        protected function set_libelle_formation(){
            $this->libelle_formation = $libelle_formation;
        }

        protected function set_debutFormation(){
            //check format date
            //check if after today
            $this->date_debutFormation = $date_debutFormation;
        }

        protected function set_finFormation(){
            //check format date
            //check if after debut
            $this->date_finFormation = $date_finFormation;
        }

        protected function set_formateur(){
            $this->formateur = $formateur;
        }


        //================== GETTERS =======================
        protected function get_ID_formation(){
            return $this->ID_formation;
        }

        protected function get_libelle_formation(){
            return $this->libelle_formation;
        }

        protected function get_debutFormation(){
            return $this->date_debutFormation;
        }

        protected function get_finFormation(){
            return $this->date_finFormation;
        }

        protected function get_formateur(){
            return $this->formateur;
        }

        //================== METHODS =======================
        //================== DISPLAY =======================
    }