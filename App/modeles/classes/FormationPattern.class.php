<?php

    Class FormationPattern {

        //=================== INIT =========================
        private ID_formationPattern;
        private libelle_formationPattern;
        private descriptif_formation;

        //================= CONSTRUCTOR ====================

        public function __construct(string ID_formationPattern, string libelle_formationPattern, string descriptif_formation){
            $this->set_ID_formationPattern();
            $this->set_libelle_formationPattern();
            $this->set_descriptif_formation();
        }

        //=================== SETTERS =========================

    }