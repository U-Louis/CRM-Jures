<?php
    require_once('modeles/classes/Connector.class.php');
    require_once('modeles/classes/Jure.class.php');
    // require_once('modeles/classes/Contact.class.php');

    class JureMgr {
        /**
         * Permet d'obtenir la liste complète des jurés
         */
        public static function read_all_jureName() : array {
            // request
            $sql = "SELECT Nom_contact FROM jure j JOIN contact c ON c.ID_Contact = j.ID_Contact";

            // get connect
            $connexionPDO = Connector::getConnexion();

            // execute the request
            $request = $connexionPDO->prepare($sql);

            $request->execute();

            // define fetch mode

            //recover data
            $records = $request->fetchAll(PDO::FETCH_ASSOC);
            //close cursor and connexion
            $request->closeCursor();
            Connector::disconnect();

            return $records;

        }

        public static function read_all_jureHabilitation() : array{
            // request
            $sql = "SELECT Libelle_Habilitation FROM habilitation h
                    JOIN detenir d
                        ON d.ID_Habilitation = h.ID_Habilitation
                    JOIN jure j
                        ON j.ID_Jure = d.ID_Jure ";
            
            // get connect
            $connexionPDO=Connector::getConnexion();

            // execute the request
            $request = $connexionPDO->prepare($sql);
            $request->execute();

            // recover data
            $records = $request->fetchAll(PDO::FETCH_ASSOC);

            //close cursor and connexion
            $request->closeCursor();
            Connector::disconnect();

            return $records;
        }
    }

?>