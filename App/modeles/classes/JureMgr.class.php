<?php
    spl_autoload_register(function($classe){
        include "classes/". $classe . ".class.php";
        });
    // require_once('modeles/classes/Contact.class.php');

    class JureMgr {
        /**
         * Permet d'obtenir la liste complète des noms de jurés
         * @return array renvoie tous les jurés présents dans la BDD
         */
        public static function read_all() : array {
            // request
            $sql = "SELECT c.ID_Contact,Nom_contact, Prenom_contact, GROUP_CONCAT(libelle_specialite) as libelle_specialite, Mail_contact FROM jure j JOIN contact c ON c.ID_Contact = j.ID_Contact
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
        /**
         * Permet de créer un nouveau juré
         */
        public static function create() {

            $connexionPDO = Connector::getConnexion();

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
            $special = $_POST["specialite1"];


            $result = $connexionPDO->prepare("SELECT Mail_contact FROM contact WHERE Mail_contact = ?");
            $result->execute(array($mail));
            $records = $result->fetchAll();

            if(!$records){

                $sql = "CALL prc_Ajout_Jure(:nom,:prenom,:tel,:mail,:numAd,:rue,:comp,:ville,:cp,:entrepr,:special)";
                
    
                $request = $connexionPDO->prepare($sql);
                $request->execute(array(':nom'=>$name, ':prenom'=>$prenom,':tel'=>$tel,':mail'=>$mail,':numAd'=>$numAdresse,':rue'=>$libelAdresse,':comp'=>$complAdresse,':ville'=>$vilAdresse,':cp'=>$cpAdresse,':entrepr'=>$entreprise,':special'=>$special));
                echo "<script>alert('Juré bien ajouté')</script>";
            }
            else{
                echo "<script>alert('utilisateur déjà enregistré')</script>";
                return null;
            }
           
            $request->closeCursor();
                Connector::disconnect();
        }
        /**
         * Permet de supprimer un juré qui n'a pas d'hailitation et qui n'appartient pas ç une session d'examens en cours
         */
        public static function delete() {

            $connexionPDO = Connector::getConnexion();

            $idDelete = $_POST["deleteJureId"];
            try{
                $result=$connexionPDO->prepare("SELECT ID_SessionExamen FROM statufier s JOIN jure j ON s.ID_Jure = j.ID_Jure JOIN contact c ON j.ID_Contact = c.ID_Contact WHERE c.ID_Contact=:id");
                $result->execute(array(':id'=>$idDelete));
                $records = $result->fetchAll();
    
                
                if(!$records){
                    $sql = "CALL prc_Delete_Jure(:id) ";
                    $request= $connexionPDO->prepare($sql);
                    $request->execute(array(':id'=>$idDelete));
    
                    echo "<script>alert('le juré a bien été supprimé')</script>";
                }
                else{
                    echo "<script>alert('le juré que vous voulez supprimer est lié à une session d'examen, vous ne pouvez donc pas le supprimer'</script>";
                }
                
                $result->closeCursor();

            }
            catch(PDOException $e){
                throw new Error ("Vous ne pouvez pas supprimer ce juré parce qu'il a une habilitation");
            }
            finally{
                Connector::disconnect();
            }

        }
    }
?>