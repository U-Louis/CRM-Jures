

DELIMITER |
CREATE PROCEDURE getContact2(
    IN ID INT(5),
    OUT listParams TEXT(1000)
    )
BEGIN
    DECLARE finished INTEGER DEFAULT 0;
    DECLARE ID_Contact                     INT(5) DEFAULT 0;
    DECLARE Nom_contact                    char(25) DEFAULT "";
    DECLARE Prenom_contact                 char(25) DEFAULT "";
    DECLARE Tel_contact                    int(11) DEFAULT 0;
    DECLARE Tel2_contact                   int(11) DEFAULT 0;
    DECLARE Mail_contact                   char(50) DEFAULT "";
    DECLARE NumeroAdresse_Contact          int(11) DEFAULT 0;
    DECLARE LibelleAdresse_Contact         char(75) DEFAULT "";
    DECLARE ComplementAdresse_Contact      char(75) DEFAULT "";
    DECLARE VilleAdresse_Contact           char(75) DEFAULT "";
    DECLARE CodePostalAdresse_Contact      int(1) DEFAULT 0;


    DECLARE myCursor CURSOR FOR 
        SELECT *
        FROM contact
        WHERE ID_Contact = ID

    DECLARE CONTINUE HANDLER
        FOR NOT FOUND SET finished = 1;     /* déclenchement du flag quand la boucle passe sur une ligne vide du tableau*/

    OPEN myCursor;
        getlist : LOOP      /*boucle infinie*/
            FETCH myCursor INTO 
                ID_Contact                ,
                Nom_contact                  ,
                Prenom_contact               ,
                Tel_contact                ,
                Tel2_contact               ,
                Mail_contact                 ,
                NumeroAdresse_Contact      ,
                LibelleAdresse_Contact       ,
                ComplementAdresse_Contact    ,
                VilleAdresse_Contact         ,
                CodePostalAdresse_Contact

            IF finished = 1 THEN  
                LEAVE getlist; 
            END IF;
           --SET listParams = CONCAT(listeFouD,nomfou,";", confou,";", numcom, ";" );
        END LOOP getlist;
    CLOSE myCursor;
SELECT * INTO listParams;

END
DELIMITER ;