#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE PorteFolio_DB;
use PorteFolio_DB;

#------------------------------------------------------------
#--Table: type
#------------------------------------------------------------

CREATE TABLE type(
        Id  Int  Auto_increment  NOT NULL ,
        Nom Varchar (50) NOT NULL
	,CONSTRAINT type_PK PRIMARY KEY (Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#--Table: Language
#------------------------------------------------------------

CREATE TABLE Language(
        Id      Int  Auto_increment  NOT NULL ,
        Nom     Varchar (50) NOT NULL ,
        Image   Varchar (50) NOT NULL ,
        Id_type Int NOT NULL
	,CONSTRAINT Language_PK PRIMARY KEY (Id)

	,CONSTRAINT Language_type_FK FOREIGN KEY (Id_type) REFERENCES type(Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#--Table: LienProjet
#------------------------------------------------------------

CREATE TABLE LienProjet(
        Id       Int  Auto_increment  NOT NULL ,
        Lien_git Varchar (50) NULL,
        Lien_PlayStore Varchar (50) NULL,
        Lien_AppStore Varchar (50) NULL
	,CONSTRAINT LienProjet_PK PRIMARY KEY (Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#--Table: Contenu
#------------------------------------------------------------

CREATE TABLE Contenu(
        Id            Int  Auto_increment  NOT NULL ,
        Description   Varchar (50) NOT NULL ,
        Id_LienProjet Int NOT NULL
	,CONSTRAINT Contenu_PK PRIMARY KEY (Id)

	,CONSTRAINT Contenu_LienProjet_FK FOREIGN KEY (Id_LienProjet) REFERENCES LienProjet(Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#--Table: Utilisé
#------------------------------------------------------------

CREATE TABLE Utilise(
        Id Int  Auto_increment  NOT NULL
	,CONSTRAINT Utilise_PK PRIMARY KEY (Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#--Table: Projet
#------------------------------------------------------------

CREATE TABLE Projet(
        TAG        Varchar (50) NOT NULL ,
        Date       Date NOT NULL ,
        Image      Varchar (50) NOT NULL ,
        Titre      Varchar (50) NOT NULL ,
        Id_Contenu Int NOT NULL ,
        Id_Utilise Int NOT NULL
	,CONSTRAINT Projet_PK PRIMARY KEY (TAG)

	,CONSTRAINT Projet_Contenu_FK FOREIGN KEY (Id_Contenu) REFERENCES Contenu(Id)
	,CONSTRAINT Projet_Utilise0_FK FOREIGN KEY (Id_Utilise) REFERENCES Utilise(Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#--Table: UtilisePourProjet
#------------------------------------------------------------

CREATE TABLE UtilisePourProjet(
        Id_Language Int NOT NULL ,
        Id_Utilise Int NOT NULL
	,CONSTRAINT UtilisePourProjet_PK PRIMARY KEY (Id_Language,Id_Utilise)

	,CONSTRAINT UtilisePourProjet_Language_FK FOREIGN KEY (Id_Language) REFERENCES Language(Id)
	,CONSTRAINT UtilisePourProjet_Utilise0_FK FOREIGN KEY (Id_Utilise) REFERENCES Utilise(Id)
)ENGINE=InnoDB;

