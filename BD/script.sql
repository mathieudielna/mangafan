#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id_note Int  Auto_increment  NOT NULL ,
        bleu    Int NOT NULL ,
        rouge   Int NOT NULL
	,CONSTRAINT note_PK PRIMARY KEY (id_note)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: manga
#------------------------------------------------------------

CREATE TABLE manga(
        id_manga    Int  Auto_increment  NOT NULL ,
        auteur      Varchar (50) NOT NULL ,
        version     Varchar (80) NOT NULL ,
        description Varchar (300) NOT NULL ,
        titre       Varchar (50) NOT NULL ,
        id_note     Int NOT NULL
	,CONSTRAINT manga_AK UNIQUE (titre)
	,CONSTRAINT manga_PK PRIMARY KEY (id_manga)

	,CONSTRAINT manga_note_FK FOREIGN KEY (id_note) REFERENCES note(id_note)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commentaire
#------------------------------------------------------------

CREATE TABLE commentaire(
        id_commentaire Int  Auto_increment  NOT NULL ,
        pseudo         Varchar (50) NOT NULL ,
        commentaire    Varchar (280) NOT NULL ,
        id_manga       Int NOT NULL
	,CONSTRAINT commentaire_PK PRIMARY KEY (id_commentaire)

	,CONSTRAINT commentaire_manga_FK FOREIGN KEY (id_manga) REFERENCES manga(id_manga)
)ENGINE=InnoDB;

INSERT INTO note(bleu, rouge)
VALUES(0,0);
INSERT INTO manga(titre, auteur, version, description, id_note)
VALUES ('Naruto','Masashi Kishimoto','animé/manga','Naruto est un shōnen manga écrit et dessiné par Masashi Kishimoto...',1);

INSERT INTO note(bleu, rouge)
VALUES(0,0);
INSERT INTO manga(titre, auteur, version, description, id_note)
VALUES ('Naruto Shipudden','Masashi Kishimoto','animé/manga','Naruto (Japanese: NARUTO （ ナルト ） ) is a Japanese manga...',2);

INSERT INTO note(bleu, rouge)
VALUES(0,0);
INSERT INTO manga(titre, auteur, version, description, id_note)
VALUES ('One piece','Eiichirō Oda','animé/manga','Il s agit tout simplement du fabuleux trésor du Seigneur des Pirates, Gol D. Roger...',3);
	

INSERT INTO note(bleu, rouge)
VALUES(0,0);
INSERT INTO manga(titre, auteur, version, description, id_note)
VALUES ('My hero Acadamia','Kōhei Horikoshi','animé/manga','Tout d abord on sait que Izuku a un père qui s appelle Hisashi Midoriya,son Alter lui permet...',4);

INSERT INTO note(bleu, rouge)
VALUES(0,0);
INSERT INTO manga(titre, auteur, version, description, id_note)
VALUES ('Fullmetal Alchemist','Hiromu Arakawa','animé/manga','Fullmetal Alchemist, est un manga d Hiromu Arakawa...',5);

