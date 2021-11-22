DROP PROCEDURE IF EXISTS `getContact` 

DELIMITER |
CREATE PROCEDURE getContact
(
    IN   ID                             INT(5), 
    OUT  p_ID_Contact                     INT(5), 
    OUT  p_Nom_contact                    char(25), 
    OUT  p_Prenom_contact                 char(25), 
    OUT  p_Tel_contact                    int(11), 
    OUT  p_Tel2_contact                   int(11), 
    OUT  p_Mail_contact                   char(50), 
    OUT  p_NumeroAdresse_Contact          int(11), 
    OUT  p_LibelleAdresse_Contact         char(75), 
    OUT  p_ComplementAdresse_Contact      char(75), 
    OUT  p_VilleAdresse_Contact           char(75), 
    OUT  p_CodePostalAdresse_Contact      int(11)   
)
BEGIN 

SELECT 
    ID_Contact               ,
    Nom_contact              ,
    Prenom_contact           ,
    Tel_contact              ,
    Tel2_contact             ,
    Mail_contact             ,
    NumeroAdresse_Contact    ,
    LibelleAdresse_Contact   ,
    ComplementAdresse_Contact,
    VilleAdresse_Contact     ,
    CodePostalAdresse_Contact
INTO
    p_ID_Contact               ,
    p_Nom_contact              ,
    p_Prenom_contact           ,
    p_Tel_contact              ,
    p_Tel2_contact             ,
    p_Mail_contact             ,
    p_NumeroAdresse_Contact    ,
    p_LibelleAdresse_Contact   ,
    p_ComplementAdresse_Contact,
    p_VilleAdresse_Contact     ,
    p_CodePostalAdresse_Contact                
FROM   contact
WHERE  ID_Contact = p_ID_Contact ; 

END|
DELIMITER ;