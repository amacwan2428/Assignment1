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
  `idaccount` int(11) NOT NULL AUTO_INCREMENT  PRIMARY 	KEY,
  `number` int(11) NOT NULL,
  `balance` decimal(11,2) NOT NULL,
  `idclient` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `isCreditCard` tinyint(1) NOT NULL,
  CONSTRAINT FK_client_account FOREIGN KEY (`idclient`)
    REFERENCES client(`idclient`)
);

CREATE TABLE `eTransac` (    
  `idETransac` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `idaccount` int(11) NOT NULL,
  `payeeName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `interacQuestion` varchar(250) NOT NULL,
  `interacAnswer` varchar(250) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  CONSTRAINT FK_eTransac_account FOREIGN KEY (`idaccount`)
  REFERENCES account(`idaccount`)  
);


insert into client values(0,'user1','user1','name user1','150 king ST','647 123456','test@mail.com');

insert into account values(0,123456,5000,1,'savings',0);
insert into account (idaccount,balance,idclient,iscreditcard,number,type) values(0,350,1,0,151478,'Checking Account');

insert into account (idaccount,balance,idclient,iscreditcard,number,type) values(0,350,1,1,151478,'VISA');
insert into account (idaccount,balance,idclient,iscreditcard,number,type) values(0,350,1,1,151478,'MASTER CARD');

commit;

DELIMITER $$
CREATE TRIGGER etransac_trig
AFTER INSERT ON `etransac` FOR EACH ROW
begin

       UPDATE account
       SET balance = balance - NEW.AMOUNT
       WHERE idaccount = NEW.idaccount;
       
END;
$$
DELIMITER ;