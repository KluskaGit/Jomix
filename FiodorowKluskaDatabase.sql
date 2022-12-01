DROP DATABASE If EXISTS m28441_jomix;
CREATE DATABASE m28441_jomix;
use m28441_jomix;



DROP TABLE IF EXISTS uzytkownicy;
CREATE TABLE uzytkownicy
(
    userID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    imie varchar(55),
    nazwisko varchar(55),
    login varchar(55),
    haslo varchar(256),
    admin tinyint(1),
    email varchar(55),
    nr_tel varchar(9),
    kraj varchar(55),
    kod_pocztowy varchar(6),
    poczta varchar(55),
    adres1 varchar(55),
    adres2 varchar(55),
    koszykID int(11)
);

DROP TABLE IF EXISTS koszyk;
CREATE TABLE koszyk
(
    koszykID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userID int(11) NOT NULL,
    produktID int(11) NOT NULL,
    ilosc int NOT NULL DEFAULT 1,
    cena float(11) NOT NULL
  
);

ALTER TABLE uzytkownicy
ADD CONSTRAINT FOREIGN KEY (koszykID) REFERENCES koszyk (koszykID);


DROP TABLE IF EXISTS zamowienia;
CREATE TABLE zamowienia
(
    zamowienieID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userID int(11) NOT NULL,
    status_zamowienia varchar(55) NOT NULL,
    kwota_zamowienia float(11) NOT NULL,
    platnoscID int(11) NOT NULL,
    dostawaID int(11) NOT NULL,
    data_zamowienia DATETIME,
    email varchar(55),
    nr_tel varchar(9),
    kraj varchar(55),
    kod_pocztowy varchar(6),
    poczta varchar(55),
    adres1 varchar(55),
    adres2 varchar(55)
    
);

ALTER TABLE zamowienia
ADD CONSTRAINT FOREIGN KEY (userID) REFERENCES uzytkownicy (userID);

DROP TABLE IF EXISTS szczegoly_zamowienia;
CREATE TABLE szczegoly_zamowienia
(
    szczegoly_zamowieniaID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    zamowienieID int(11) NOT NULL,
    produktID int(11) NOT NULL,
    ilosc int NOT NULL DEFAULT 1,
    cena float(11)
);

ALTER TABLE szczegoly_zamowienia
ADD CONSTRAINT FOREIGN KEY (zamowienieID) REFERENCES zamowienia (zamowienieID);

DROP TABLE IF EXISTS produkty;
CREATE TABLE produkty
(
    produktID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userID int(11),
    kategoriaID int(11) NOT NULL,
    nazwa_produktu varchar(55) NOT NULL,
    opis_produktu varchar(300),
    ilosc int(11) NOT NULL,
    cena float(6) NOT NULL,
    promocja float NOT NULL DEFAULT 0,
    SKU varchar(100) NOT NULL,
    img_url varchar(256)
);

ALTER TABLE produkty
ADD CONSTRAINT FOREIGN KEY (userID) REFERENCES uzytkownicy (userID);



DROP TABLE IF EXISTS szczegoly_produktu;
CREATE TABLE szczegoly_produktu
(
    produktID int(11) NOT NULL,
    nazwa_rozmiaru varchar(11)
);


ALTER TABLE szczegoly_produktu
ADD CONSTRAINT FOREIGN KEY (produktID) REFERENCES produkty (produktID);



DROP TABLE IF EXISTS kategorie;
CREATE TABLE kategorie
(
    kategoriaID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nazwa_kategorii varchar(55) NOT NULL
);


ALTER TABLE produkty
ADD CONSTRAINT FOREIGN KEY (kategoriaID) REFERENCES kategorie (kategoriaID);

DROP TABLE IF EXISTS platnosc;
CREATE TABLE platnosc
(
    platnoscID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    metoda_platnosci int(11) NOT NULL
);

ALTER TABLE zamowienia
ADD CONSTRAINT FOREIGN KEY (platnoscID) REFERENCES platnosc (platnoscID);



DROP TABLE IF EXISTS Dostawcy;
CREATE TABLE Dostawcy
(
    dostawcyID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nazwa_dostawcy varchar(55) NOT NULL,
    cena_dostawy float(11) NOT NULL
);

ALTER TABLE zamowienia
ADD CONSTRAINT FOREIGN KEY (dostawaID) REFERENCES Dostawcy (dostawcyID);


INSERT INTO rozmiary (nazwa_rozmiaru)
    values ("S"),("M"),("L"),("XL"),("XXL");


INSERT INTO kategorie (nazwa_kategorii)
    values ("Sukienki"),("Bluzki"),("Komplety"),("Spódnice"),("Spodnie");

INSERT INTO produkty (    
    userID, kategoriaID, nazwa_produktu, opis_produktu, rozmiarID, ilosc, cena, promocja, SKU, img_url)
    values (1,1,"Sukienka dresowa Tessa musztardowy","Sukienka dresowa Tessa idealnie sprawdzi się w wielu jesiennych stylizacjach. Posiada rozcięcia na bokach, które dodają jej oryginalnego charakteru. Golf w formie komina to doskonała opcja na wietrzne dni, dodatkowo jest świetnym elementem ozdobnym.",);


