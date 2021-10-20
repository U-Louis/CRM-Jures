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
            $sql = "SELECT Nom_contact, Prenom_contact, GROUP_CONCAT(libelle_specialite) as libelle_specialite, Mail_contact FROM jure j JOIN contact c ON c.ID_Contact = j.ID_Contact
            LEFT JOIN detenir d
                ON j.ID_Jure = d.ID_Jure
            JOIN specialiste sp
                ON j.ID_Jure = sp.ID_Jure
            GROUP BY c.ID_contact
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

        public static function create() {
            if(!isset($_POST["nomContact"]) && isset($_POST["prenomContact"]) && isset($_POST["tel"]) && isset($_POST["mail"]) && isset($_POST["numAdresse"]) && isset($_POST["libelAdresse"]) && isset($_POST["vilAdresse"]) && isset($_POST["CPAdresse"])){
                return null;
            }

            $name = $_POST["nomContact"];
            $prenom = $_POST["prenomContact"];
            $tel = $_POST["tel"];
            $mail = $_POST["mail"];
            $numAdresse = $_POST["numAdresse"];
            $libelAdresse = $_POST["libelAdresse"];
            $complAdresse = $_POST["comAdresse"];
            $vilAdresse = $_POST["vilAdresse"];
            $cpAdresse = $_POST["CPAdresse"];
            $entreprise = $_POST["entreprise"];

            $sql = "INSERT INTO contact (Nom_contact,Prenom_contact,Tel_contact, Mail_contact, NumeroAdresse_Contact, LibelleAdresse_Contact, ComplementAdresse_Contact, VilleAdresse_Contact, CodePostalAdresse_Contact)
            VALUES (:nom,:prenom,:tel,:mail,:numAd,:rue,:comp,:ville,:cp);

            INSERT INTO jure (ID_Contact)
                SELECT ID_Contact
                FROM contact
                WHERE Nom_contact = :nom AND Prenom_contact = :prenom;
            
            INSERT INTO contact (Nom_contact) VALUES (:entrepr);

            INSERT INTO entreprise (ID_Contact)
                SELECT ID_Contact
                FROM contact
                WHERE Nom_contact = :entrepr;

            ";
            
            
            $connexionPDO = Connector::getConnexion();
            $request = $connexionPDO->prepare($sql);
            $request->execute(array(':nom'=>$name, ':prenom'=>$prenom,':tel'=>$tel,':mail'=>$mail,':numAd'=>$numAdresse,':rue'=>$libelAdresse,':comp'=>$complAdresse,':ville'=>$vilAdresse,':cp'=>$cpAdresse,':entrepr'=>$entreprise));

            $request->closeCursor();
            Connector::disconnect();
        }
    }
?>