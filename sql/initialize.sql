-- Active: 1768521664416@@127.0.0.1@3306@esercizi
CREATE TABLE Viaggio(
    idviaggio INT PRIMARY KEY AUTO_INCREMENT,
    luogo VARCHAR(200),
    descrizione VARCHAR(250),
    data_partenza DATE,
    idnazione INT NOT NULL,
    FOREIGN KEY (idnazione) REFERENCES Nazione(idnazione)
)

CREATE TABLE Nazione(
    idnazione INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100)
)