#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Contact
#------------------------------------------------------------

CREATE TABLE Contact(
        ID_Contact                Char (5) NOT NULL ,
        Nom_contact               Char (25) NOT NULL ,
        Prenom_contact            Char (25) NOT NULL ,
        Tel_contact               Int NOT NULL ,
        Tel2_contact              Int NOT NULL ,
        Mail_contact              Char (50) NOT NULL ,
        NumeroAdresse_Contact     Int NOT NULL ,
        LibelleAdresse_Contact    Char (75) NOT NULL ,
        ComplementAdresse_Contact Char (75) NOT NULL ,
        VilleAdresse_Contact      Char (75) NOT NULL ,
        CodePostalAdresse_Contact Int NOT NULL
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
        ID_Jure         Char (5) NOT NULL ,
        Specialite_Jure Char (50) NOT NULL ,
        ID_Contact      Char (5) NOT NULL
	,CONSTRAINT Jure_PK PRIMARY KEY (ID_Jure)

	,CONSTRAINT Jure_Contact_FK FOREIGN KEY (ID_Contact) REFERENCES Contact(ID_Contact)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Habilitation
#------------------------------------------------------------

CREATE TABLE Habilitation(
        ID_Habilitation            Char (5) NOT NULL ,
        Libelle_Habilitation       Char (50) NOT NULL ,
        DebutValidite_Habilitation Date NOT NULL ,
        FinValidite_Habilitation   Date NOT NULL ,
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
        Debut_SessionExamen   Date NOT NULL ,
        Fin_SessionExamen     Date NOT NULL
	,CONSTRAINT SessionExamen_PK PRIMARY KEY (ID_SessionExamen)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MailPattern
#------------------------------------------------------------

CREATE TABLE MailPattern(
        Libelle_MailPattern Char (255) NOT NULL ,
        Content_MailPatern  Char NOT NULL
	,CONSTRAINT MailPattern_PK PRIMARY KEY (Libelle_MailPattern)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Service
#------------------------------------------------------------

CREATE TABLE Service(
        Libelle_Service Char (50) NOT NULL ,
        Mail_Service    Char (50) NOT NULL
	,CONSTRAINT Service_PK PRIMARY KEY (Libelle_Service)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FormationPattern
#------------------------------------------------------------

CREATE TABLE FormationPattern(
        ID_formationPattern     Char (5) NOT NULL ,
        Libelle_formationPatern Char (255) NOT NULL ,
        Descriptif_formation    Char (500) NOT NULL
	,CONSTRAINT FormationPattern_PK PRIMARY KEY (ID_formationPattern)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Formation
#------------------------------------------------------------

CREATE TABLE Formation(
        ID_formation        Char (5) NOT NULL ,
        Libelle_Formation   Char (255) NOT NULL ,
        Date_DebutFormation Date NOT NULL ,
        Date_FinFormation   Date NOT NULL ,
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
        MotDePasse_Utilisateur Char (50) NOT NULL ,
        Statut_Utilisateur     Char (50) NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (ID_Utilisateur)
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
# Table: Proposer
#------------------------------------------------------------

CREATE TABLE Proposer(
        ID_Entreprise Char (5) NOT NULL ,
        ID_Jure       Char (5) NOT NULL
	,CONSTRAINT Proposer_PK PRIMARY KEY (ID_Entreprise,ID_Jure)

	,CONSTRAINT Proposer_Entreprise_FK FOREIGN KEY (ID_Entreprise) REFERENCES Entreprise(ID_Entreprise)
	,CONSTRAINT Proposer_Jure0_FK FOREIGN KEY (ID_Jure) REFERENCES Jure(ID_Jure)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Statufier
#------------------------------------------------------------

CREATE TABLE Statufier(
        ID_Jure          Char (5) NOT NULL ,
        ID_SessionExamen Char (5) NOT NULL ,
        Commentaire      Char (5) NOT NULL ,
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