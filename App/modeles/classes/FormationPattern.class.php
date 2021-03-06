<?php

    Class FormationPattern {

        //=================== INIT =========================
        protected $ID_formationPattern;
        protected $libelle_formationPattern;
        protected $description_formation;
        protected $neededHabilitations;

        //================= CONSTRUCTOR ====================
        public function __construct(
            string $ID_formationPattern,
            string $libelle_formationPattern,
            string $description_formation,
            array $neededHabilitations
        ){
            $this->set_ID_formationPattern($ID_formationPattern);
            $this->set_libelle_formationPattern($libelle_formationPattern);
            $this->set_description_formation($description_formation);
            $this->set_neededHabilitations($neededHabilitations);
        }

        //================== SETTERS =======================
        protected function set_ID_formationPattern($ID_formationPattern){
            $this->ID_formationPattern = $ID_formationPattern;
        }

        protected function set_libelle_formationPattern($libelle_formationPattern){
            $this->libelle_formationPattern = $libelle_formationPattern;
        }

        protected function set_description_formation($description_formation){
            $this->description_formation = $description_formation;
        }

        protected function set_neededHabilitations($neededHabilitations){
            $this->neededHabilitations = $neededHabilitations;
        }

        //================== GETTERS =======================
        protected function get_ID_formationPattern(){
            return $this->ID_forgationPattern;
        }

        protected function get_libelle_formationPattern(){
            return $this->libellg_formationPattern;
        }

        protected function get_description_formation(){
            return $this->description_formation;
        }

        protected function get_neededHabilitations(){
            return $this->neededHabilitations;
        }

        //================== METHODS =======================
        //================== DISPLAY =======================
    }