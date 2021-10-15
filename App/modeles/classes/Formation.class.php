<?php

    Class Formation extends FormationPattern{

        //=================== INIT =========================
        protected $FormationPattern;
        protected $ID_formation;
        protected $libelle_formation;
        protected $date_debutFormation;
        protected $date_finFormation;
        protected $formateur;
        private $sessionsExamens;

        //================= CONSTRUCTOR ====================
        public function __construct(
            object $FormationPattern,
            string $ID_formation,
            string $libelle_formation,
            string $date_debutFormation,
            string $date_finFormation,
            object $formateur,
            array $sessionsExamens
        ){
            $this->set_attributesFromPattern();
            $this->set_ID_formation();
            $this->set_libelle_formation();
            $this->set_debutFormation();
            $this->set_finFormation();
            $this->set_formateur();
            $this->set_sessionsExamens();
        }

        //================== SETTERS =======================
        
        /**
         * Inherited attributes set with an instance of a parent object
         */
        protected function set_attributesFromPattern(){
            $this->ID_formationPattern = $FormationPattern->get_ID_formationPattern();
            $this->libelle_formationPattern = $FormationPattern->get_libelle_formationPattern();
            $this->description_formation = $FormationPattern->get_description_formation();
            $this->neededHabilitations = $FormationPattern->get_neededHabilitations();
        }
        
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

        protected function set_sessionsExamens(){
            $this->sessionsExamens = $sessionsExamens;
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

        protected function get_sessionsExamens(){
            return $this->sessionsExamens;
        }

        protected function get_attributesFromPattern(){
            return $this->FormationPattern;
        }

        //================== METHODS =======================
        //================== DISPLAY =======================
    }