DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_Ajout_Jure`(IN `nom` CHAR(40), IN `prenom` CHAR(40), IN `tel` INT(10), IN `mail` CHAR(40), IN `numAd` INT(5), IN `rue` CHAR(40), IN `comp` CHAR(40), IN `ville` CHAR(40), IN `cp` INT(5), IN `entrepr` CHAR(40), IN `special` CHAR(40))
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
    VALUES (idContactJure,nom,prenom,tel,mail,numAd,rue,comp,ville,cp);

    
    INSERT INTO jure (ID_Jure,ID_Contact) VALUES (idJure,idContactJure);

    IF ( (SELECT COUNT(ID_Contact) from contact WHERE LOWER(Nom_contact) = LOWER(entrepr) AND Prenom_contact IS NULL)<1) THEN 
        INSERT INTO contact (ID_Contact,Nom_contact) VALUES (idContactEntreprise, LOWER(entrepr));
        INSERT INTO entreprise (ID_Entreprise, ID_Contact) VALUES (idEntreprise,idContactEntreprise);
    ELSE
        SELECT ID_Entreprise INTO idEntreprise FROM entreprise e JOIN contact c ON e.ID_Contact = c.ID_Contact WHERE LOWER(Nom_contact) = LOWER(entrepr);
    END IF;

    INSERT INTO travailler (ID_Entreprise, ID_Jure) VALUES (idEntreprise, idJure);
    
    IF ((SELECT COUNT(libelle_specialite) FROM specialite WHERE LOWER(libelle_specialite) = LOWER(special))<1) THEN
        INSERT INTO specialite (libelle_specialite) VALUES (LOWER(special));
    END IF;
    
    INSERT INTO specialiste (ID_Jure, libelle_specialite) VALUES (idJure, LOWER(special));    
END$$
DELIMITER ;
----------------------------------------------------------------------------------------------------------------------
--Jeu d'essai
--CALL prc_Ajout_Jure('Amandine','Pimentel de Andrade', 0768774674,'amandine.pda@gmail.com',6,'rue des marronniers','','Saint Gervais la forêt',41350,'Wazbukmuk','SQL23')
--CALL prc_Dele_Jure()
--CALL prc_Ajout_Jure('Manon', "Villard", 0768774674, 'manon.villard@gmail.com', 7, 'rue des marronniers', "", 'Saint Gervais la forêt', 41350, 'Facebrique', 'musculation')
--CALL prc_Delete_Jure()
--CALL prc_Ajout_Jure('Aurélie', 'Conan', 0768774674,'aurelie.conan@gmail.com', 8, 'rue des marronniers', '', 'Saint Gervais la forêt', 41350,'Labagarre', 'sql')
--CALL prc_Delete_Jure()


DELIMITER |
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_Delete_Jure`(IN `id` INT(10), IN `lib` CHAR(40))
BEGIN 

    BEGIN 
    DECLARE idEntreprise INT(10);
    DECLARE idContactEntreprise INT(10);
    DECLARE idJure INT(10);
    DECLARE lib CHAR(40);


    SELECT ID_Jure INTO idJure FROM jure WHERE ID_Contact = id;
     SELECT ID_Entreprise INTO idEntreprise FROM travailler WHERE ID_Jure = idJure;
      SELECT ID_Contact INTO idContactEntreprise FROM entreprise WHERE ID_Entreprise = idEntreprise;
     SELECT libelle_specialite INTO lib FROM specialiste WHERE ID_Jure = idJure;


 	  DELETE FROM specialiste WHERE ID_Jure = idJure;

    IF ((SELECT COUNT(ID_Jure) FROM specialiste WHERE LOWER(libelle_specialite) = LOWER(lib))= 0) THEN
        DELETE FROM specialite WHERE libelle_specialite = lib;
    END IF;

    DELETE FROM travailler WHERE ID_Jure = idJure; 

    DELETE FROM jure WHERE ID_Contact = id;

    IF ((SELECT COUNT(ID_Jure) FROM travailler WHERE ID_Entreprise = idEntreprise) = 0) THEN 
        DELETE FROM entreprise WHERE ID_Contact = idContactEntreprise;
        DELETE FROM contact WHERE ID_Contact = idContactEntreprise;
    END IF;

    DELETE FROM contact WHERE ID_Contact = id;



END|
DELIMITER ;
