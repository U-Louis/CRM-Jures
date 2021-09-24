#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Contact
#------------------------------------------------------------

CREATE TABLE Contact(
        ID_Contact                Char (5) NOT NULL ,
        Nom_contact               Char (25) NOT NULL ,
        Prenom_contact            Char (25) ,
        Tel_contact               Int ,
        Tel2_contact              Int ,
        Mail_contact              Char (50) ,
        NumeroAdresse_Contact     Int ,
        LibelleAdresse_Contact    Char (75) ,
        ComplementAdresse_Contact Char (75) ,
        VilleAdresse_Contact      Char (75) ,
        CodePostalAdresse_Contact Int
	,CONSTRAINT Contact_PK PRIMARY KEY (ID_Contact)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Formateur
#------------------------------------------------------------

CREATE TABLE Formateur(
        ID_formateur Char (5) NOT NULL ,
        ID_Contact   Char (5) NOT NULL
	,CONSTRAINT Formateur_PK PRIMARY KEY (ID_formateur)

	,CONSTRAINT Formateur_Contact_FK FOREIGN KEY (ID_Contact) REFERENCES Contact(ID_Contact)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Entreprise
#------------------------------------------------------------

CREATE TABLE Entreprise(
        ID_Entreprise Char (5) NOT NULL ,
        ID_Contact    Char (5) NOT NULL
	,CONSTRAINT Entreprise_PK PRIMARY KEY (ID_Entreprise)

	,CONSTRAINT Entreprise_Contact_FK FOREIGN KEY (ID_Contact) REFERENCES Contact(ID_Contact)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Jure
#------------------------------------------------------------

CREATE TABLE Jure(
        ID_Jure    Char (5) NOT NULL ,
        ID_Contact Char (5) NOT NULL
	,CONSTRAINT Jure_PK PRIMARY KEY (ID_Jure)

	,CONSTRAINT Jure_Contact_FK FOREIGN KEY (ID_Contact) REFERENCES Contact(ID_Contact)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Habilitation
#------------------------------------------------------------

CREATE TABLE Habilitation(
        ID_Habilitation            Char (5) NOT NULL ,
        Libelle_Habilitation       Char (50) NOT NULL ,
        DebutValidite_Habilitation Date ,
        FinValidite_Habilitation   Date ,
        VisibleVALCES              Bool NOT NULL ,
        VisibleCERES               Bool NOT NULL ,
        EnAttenteValidation        Bool NOT NULL
	,CONSTRAINT Habilitation_PK PRIMARY KEY (ID_Habilitation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: SessionExamen
#------------------------------------------------------------

CREATE TABLE SessionExamen(
        ID_SessionExamen      Char (5) NOT NULL ,
        Libelle_SessionExamen Char (50) NOT NULL ,
        Debut_SessionExamen   Date ,
        Fin_SessionExamen     Date
	,CONSTRAINT SessionExamen_PK PRIMARY KEY (ID_SessionExamen)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FormationPattern
#------------------------------------------------------------

CREATE TABLE FormationPattern(
        ID_formationPattern     Char (5) NOT NULL ,
        Libelle_formationPatern Char (255) NOT NULL ,
        Descriptif_formation    Char (255)
	,CONSTRAINT FormationPattern_PK PRIMARY KEY (ID_formationPattern)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Formation
#------------------------------------------------------------

CREATE TABLE Formation(
        ID_formation        Char (5) NOT NULL ,
        Libelle_Formation   Char (255) NOT NULL ,
        Date_DebutFormation Date ,
        Date_FinFormation   Date ,
        ID_formateur        Char (5) NOT NULL ,
        ID_formationPattern Char (5) NOT NULL
	,CONSTRAINT Formation_PK PRIMARY KEY (ID_formation)

	,CONSTRAINT Formation_Formateur_FK FOREIGN KEY (ID_formateur) REFERENCES Formateur(ID_formateur)
	,CONSTRAINT Formation_FormationPattern0_FK FOREIGN KEY (ID_formationPattern) REFERENCES FormationPattern(ID_formationPattern)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        ID_Utilisateur         Int NOT NULL ,
        Nom_Utilisateur        Char (50) NOT NULL ,
        MotDePasse_Utilisateur Char (50) ,
        Statut_Utilisateur     Char (50)
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (ID_Utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: specialite
#------------------------------------------------------------

CREATE TABLE specialite(
        libelle_specialite Char (50) NOT NULL
	,CONSTRAINT specialite_PK PRIMARY KEY (libelle_specialite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Détenir
#------------------------------------------------------------

CREATE TABLE Detenir(
        ID_Habilitation Char (5) NOT NULL ,
        ID_Jure         Char (5) NOT NULL
	,CONSTRAINT Detenir_PK PRIMARY KEY (ID_Habilitation,ID_Jure)

	,CONSTRAINT Detenir_Habilitation_FK FOREIGN KEY (ID_Habilitation) REFERENCES Habilitation(ID_Habilitation)
	,CONSTRAINT Detenir_Jure0_FK FOREIGN KEY (ID_Jure) REFERENCES Jure(ID_Jure)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Travailler
#------------------------------------------------------------

CREATE TABLE Travailler(
        ID_Entreprise Char (5) NOT NULL ,
        ID_Jure       Char (5) NOT NULL
	,CONSTRAINT Travailler_PK PRIMARY KEY (ID_Entreprise,ID_Jure)

	,CONSTRAINT Travailler_Entreprise_FK FOREIGN KEY (ID_Entreprise) REFERENCES Entreprise(ID_Entreprise)
	,CONSTRAINT Travailler_Jure0_FK FOREIGN KEY (ID_Jure) REFERENCES Jure(ID_Jure)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Statufier
#------------------------------------------------------------

CREATE TABLE Statufier(
        ID_Jure          Char (5) NOT NULL ,
        ID_SessionExamen Char (5) NOT NULL ,
        Commentaire      Char (5) ,
        Statut           Char (5) NOT NULL
	,CONSTRAINT Statufier_PK PRIMARY KEY (ID_Jure,ID_SessionExamen)

	,CONSTRAINT Statufier_Jure_FK FOREIGN KEY (ID_Jure) REFERENCES Jure(ID_Jure)
	,CONSTRAINT Statufier_SessionExamen0_FK FOREIGN KEY (ID_SessionExamen) REFERENCES SessionExamen(ID_SessionExamen)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Conclure
#------------------------------------------------------------

CREATE TABLE Conclure(
        ID_SessionExamen Char (5) NOT NULL ,
        ID_formation     Char (5) NOT NULL
	,CONSTRAINT Conclure_PK PRIMARY KEY (ID_SessionExamen,ID_formation)

	,CONSTRAINT Conclure_SessionExamen_FK FOREIGN KEY (ID_SessionExamen) REFERENCES SessionExamen(ID_SessionExamen)
	,CONSTRAINT Conclure_Formation0_FK FOREIGN KEY (ID_formation) REFERENCES Formation(ID_formation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: correspondre
#------------------------------------------------------------

CREATE TABLE correspondre(
        ID_formationPattern Char (5) NOT NULL ,
        ID_Habilitation     Char (5) NOT NULL
	,CONSTRAINT correspondre_PK PRIMARY KEY (ID_formationPattern,ID_Habilitation)

	,CONSTRAINT correspondre_FormationPattern_FK FOREIGN KEY (ID_formationPattern) REFERENCES FormationPattern(ID_formationPattern)
	,CONSTRAINT correspondre_Habilitation0_FK FOREIGN KEY (ID_Habilitation) REFERENCES Habilitation(ID_Habilitation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: specialiste
#------------------------------------------------------------

CREATE TABLE specialiste(
        ID_Jure            Char (5) NOT NULL ,
        libelle_specialite Char (50) NOT NULL
	,CONSTRAINT specialiste_PK PRIMARY KEY (ID_Jure,libelle_specialite)

	,CONSTRAINT specialiste_Jure_FK FOREIGN KEY (ID_Jure) REFERENCES Jure(ID_Jure)
	,CONSTRAINT specialiste_specialite0_FK FOREIGN KEY (libelle_specialite) REFERENCES specialite(libelle_specialite)
)ENGINE=InnoDB;