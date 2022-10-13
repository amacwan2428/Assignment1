drop database IF EXISTS bank;
CREATE DATABASE bank;
use bank;
CREATE TABLE `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL  
) ;


CREATE TABLE `account` (
  `idAccount` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  `idclient` int(11) NOT NULL,
    CONSTRAINT FK_client_account FOREIGN KEY (`idclient`)
    REFERENCES client(`idclient`)
);

CREATE TABLE `producType` (
  `idProducType` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nameProduct` varchar(200) NOT NULL  
);

CREATE TABLE `accountProduct` (
  `idAccountProduct` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `idAccount` int(11) NOT NULL,
  `idProducType` int(11) NOT NULL,
  `balance` decimal(11,2) NOT NULL,
  CONSTRAINT FK_accountProduct_account FOREIGN KEY (`idAccount`)
  REFERENCES account(`idAccount`),
  CONSTRAINT FK_accountProduct_producType FOREIGN KEY (`idProducType`)
  REFERENCES producType(`idProducType`)  
);

CREATE TABLE `accountProductTransac` (
  `idAccountProductTransac` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `idAccountProduct` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  CONSTRAINT FK_accountPT_accP FOREIGN KEY (`idAccountProduct`)
  REFERENCES accountProduct(`idAccountProduct`)  
);

CREATE TABLE `eTransac` (    
  `idETransac` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `idAccountProductTransac` int(11) NOT NULL,
  `payeeName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `interacQuestion` varchar(250) NOT NULL,
  `interacAnswer` varchar(250) NOT NULL,
  CONSTRAINT FK_eTransac_accountPT FOREIGN KEY (`idAccountProductTransac`)
  REFERENCES accountProductTransac(`idAccountProductTransac`)  
);