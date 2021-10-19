<?php
    spl_autoload_register(function($classe){
        include "classes/". $classe . ".class.php";
        });
    // require_once('modeles/classes/Contact.class.php');

    class JureMgr {
        /**
         * Permet d'obtenir la liste complète des noms de jurés
         */
        public static function read_all() : array {
            // request
            $sql = "SELECT Nom_contact, Prenom_contact, Libelle_Habilitation, s.libelle_specialite, Mail_contact FROM jure j JOIN contact c ON c.ID_Contact = j.ID_Contact
            LEFT JOIN detenir d
                ON j.ID_Jure = d.ID_Jure
            JOIN habilitation h
                ON d.ID_Habilitation = h.ID_Habilitation
            JOIN specialiste sp
                ON j.ID_Jure = sp.ID_Jure
            JOIN specialite s
                ON sp.libelle_specialite = s.libelle_specialite
            ORDER BY Nom_contact";

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
    }
?>