<?php

    class Connector {

        //=================== INIT =========================
        private static $connexion;

        //================= CONSTRUCTOR ====================
        //================== SETTERS =======================
        //================== GETTERS =======================

        //================== METHODS =======================
        /**
         * Connects to the BDD set in the params.ini
         */
        public static function connect() {
            $file = 'C:\wamp64\www\CRM-Jures\App\params.ini';
            if (file_exists($file)) {
                $params = parse_ini_file($file,true);
                extract($params['connexion']);
                $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd."; charset=utf8";                
                $mysqlPDO = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                Connector::$connexion = $mysqlPDO;                
                return Connector::$connexion;
            } else {
                throw new Exception("No param found");
            }
        }

        /**
         * On call, closes the current connexion
         */
        public static function disconnect(){
            Connector::$connexion = null;
        }

        /**
         * Returns a new connexion or the existing one (singleton)
         */
        public static function getConnexion() {
            if (Connector::$connexion != null) {
                return Connector::$connexion;
            } else {
                return Connector::connect();
            }
        }
    }

?>