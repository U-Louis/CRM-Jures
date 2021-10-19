<?php
    Class Jure extends Contact{

        //=================== INIT =========================
        private $contactAttributes;
        private $ID_jure;
        private $participations_sessions;
        private $habilitations;
        private $specialites;
        private $entreprisesEmployeurs;

        //================= CONSTRUCTOR ====================
        public function __construct(
            object $contactAttributes,
            string $ID_jure,
            array $participations_sessions,
            array $habilitations,
            array $specialites,
            array $entreprisesEmployeurs
        ){
            $this->set_attributesFromContact($contactAttributes);
            $this->set_ID_jure($ID_jure);
            $this->set_participations_sessions($participations_sessions);
            $this->set_habilitations($habilitations);
            $this->set_specialites($specialites);
            $this->set_entreprisesEmployeurs($entreprisesEmployeurs);        
        }

        //================== SETTERS =======================
        protected function set_ID_jure($ID_jure){
            $this->ID_jure = $ID_jure;
        }

        protected function set_participations_sessions($participations_sessions){
            $this->participations_sessions = $participations_sessions;
        }

        protected function set_habilitations($habilitations){
            $this->habilitations = $habilitations;
        }

        protected function set_specialites($specialites){
            $this->specialites = $specialites;
        }

        protected function set_entreprisesEmployeurs($entreprisesEmployeurs){
            $this->entreprisesEmployeurs = $entreprisesEmployeurs;
        }

        //================== GETTERS =======================
        protected function get_ID_jure(){
            return $this->ID_jure;
        }

        protected function get_participations_sessions(){
            return $this->participations_sessions;
        }

        protected function get_habilitations(){
            return $this->habilitations;
        }

        protected function get_specialites(){
            return $this->specialites;
        }

        protected function get_entreprisesEmployeurs(){
            return $this->entreprisesEmployeurs;
        }

        //================== METHODS =======================

        /**
         * Check if the juror has the right hab, up to date, for a sessionExam
         * @param SessionExamen
         * @return bool
         */
        // protected function isHab(SessionExamen $sessionExamenToCheck) : bool{
        //         //foreach in $this->habilitations
        //             //if Habilitation->libelle_habilitation === $sessionExamenToCheck->neededHabilitations
        //                 //if Habilitation->isDatesCompatible($sessionExamToCheck)
        //             //return TRUE
        // }

        /**
         * Check if the juror has another session planned on the same date
         * If so, notify it
         * @param SessionExamen
         */
        protected function isAvailable(SessionExamen $sessionExamenToCheck){
        }

        /**
         * Call isHab() & isAvailable()
         * @param SessionExamen
         */
        protected function isOk(SessionExamen $sessionExamenToCheck){
        }

        //================== DISPLAY =======================
    }