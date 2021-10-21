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
            $special = $_POST["specialite1"];

            $sql = "
                DELIMITER |

                CREATE PROCEDURE prc_Ajout_Jure(
                    IN nom CHAR(40),
                    IN prenom CHAR(40),
                    IN tel INT(10),
                    IN mail CHAR(40),
                    IN numAd INT(5),
                    IN rue CHAR(40),
                    IN comp CHAR(40),
                    IN ville CHAR(40),
                    IN cp INT(5),
                    IN entrepr CHAR(40)
                )
                BEGIN
                    DECLARE @maxIdContact INT(10) = SELECT MAX(ID_Contact) FROM contact
                    DECLARE @idContactJure INT(10) = SELECT MAX(ID_Contact)+1 FROM contact
                    DECLARE @idContactEntreprise INT(10) = SELECT MAX(ID_Contact)+2 FROM contact
                    DECLARE @idJure INT(10) = SELECT MAX(ID_Jure)+1 FROM jure
                    DECLARE @idEntreprise INT(10) = SELECT MAX(ID_Entreprise)+1 FROM entreprise

                    INSERT INTO contact (ID_Contact, Nom_contact,Prenom_contact,Tel_contact, Mail_contact, NumeroAdresse_Contact, LibelleAdresse_Contact, ComplementAdresse_Contact, VilleAdresse_Contact, CodePostalAdresse_Contact)
                    VALUES (@maxIdContact,nom,prenom,tel,mail,numAd,rue,comp,ville,cp)

                    
                    INSERT INTO jure (ID_Jure,ID_Contact) VALUES (@idJure,(SELECT ID_Contact FROM contact WHERE ID_Contact=@idContactJure))
                
                    INSERT INTO contact (ID_Contact,Nom_contact) VALUES (@idEntreprise, entrepr)

                    IF (COUNT(SELECT * FROM contact WHERE Nom_contact = :entrepr AND Prenom_contact = NULL)<1) THEN 
                        INSERT INTO entreprise (ID_Entreprise, ID_Contact) VALUES (@idEntreprise,@idContactEntreprise)
                    ELSE
                        @idEntreprise = SELECT ID_Entreprise FROM entreprise e JOIN contact c ON e.ID_Contact = c.ID_Contact WHERE Nom_contact = entrepr
                    END IF

                    INSERT INTO travailler (ID_Entreprise, ID_Jure) VALUES (@idEntreprise, @idContactJure)
                END|

                DELIMITER ;
            ";
            
            
            $connexionPDO = Connector::getConnexion();
            $request = $connexionPDO->prepare($sql);
            $request->execute(array('nom'=>$name, ':prenom'=>$prenom,':tel'=>$tel,':mail'=>$mail,':numAd'=>$numAdresse,':rue'=>$libelAdresse,':comp'=>$complAdresse,':ville'=>$vilAdresse,':cp'=>$cpAdresse,':entrepr'=>$entreprise, ':special'=>$special));

            $request->closeCursor();
            Connector::disconnect();
        }
    }
?>




DELIMITER |

CREATE PROCEDURE prc_Ajout_Jure(
    IN nom CHAR(40),
    IN prenom CHAR(40),
    IN tel INT(10),
    IN mail CHAR(40),
    IN numAd INT(5),
    IN rue CHAR(40),
    IN comp CHAR(40),
    IN ville CHAR(40),
    IN cp INT(5),
    IN entrepr CHAR(40)
)
BEGIN
    DECLARE maxIdContact INT(10);
    DECLARE idContactJure INT(10);
    DECLARE idContactEntreprise INT(10);
    DECLARE idJure INT(10);
    DECLARE idEntreprise INT(10);
    
    SELECT MAX(ID_Contact) INTO maxIdContact FROM contact;
    SET idContactJure := maxIdContact+1;
    SET idContactEntreprise := maxIdContact+2;
    SELECT MAX(ID_Jure)+1 INTO idJure FROM jure;
    SELECT MAX(ID_Entreprise)+1 INTO idEntreprise FROM entreprise;

    INSERT INTO contact (ID_Contact, Nom_contact,Prenom_contact,Tel_contact, Mail_contact, NumeroAdresse_Contact, LibelleAdresse_Contact, ComplementAdresse_Contact, VilleAdresse_Contact, CodePostalAdresse_Contact)
    VALUES (maxIdContact,nom,prenom,tel,mail,numAd,rue,comp,ville,cp);

    
    INSERT INTO jure (ID_Jure,ID_Contact) VALUES (idJure,idContactJure);

    IF (COUNT(SELECT * FROM contact WHERE Nom_contact = entrepr AND Prenom_contact = NULL)<1) THEN 
        INSERT INTO entreprise (ID_Entreprise, ID_Contact) VALUES (idEntreprise,idContactEntreprise);
        INSERT INTO contact (ID_Contact,Nom_contact) VALUES (idEntreprise, entrepr);
    ELSE
        SELECT ID_Entreprise INTO idEntreprise FROM entreprise e JOIN contact c ON e.ID_Contact = c.ID_Contact WHERE Nom_contact = entrepr;
    END IF;

    INSERT INTO travailler (ID_Entreprise, ID_Jure) VALUES (idEntreprise, idJure);
END|

DELIMITER ;