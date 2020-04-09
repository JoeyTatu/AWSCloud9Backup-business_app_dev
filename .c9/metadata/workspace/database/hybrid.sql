{"changed":true,"filter":false,"title":"hybrid.sql","tooltip":"/database/hybrid.sql","value":"DROP SCHEMA IF EXISTS Hybrid;\nCREATE SCHEMA Hybrid;\nUSE Hybrid;\n\nCREATE TABLE User_Type(\nuser_type_id INT NOT NULL AUTO_INCREMENT,\t\nname ENUM('Customer', 'Company', 'Admin') NOT NULL,\nPRIMARY KEY (user_type_id)\n);\n\nCREATE TABLE Customer(\ncustomer_id INT NOT NULL AUTO_INCREMENT,\nfirst_name VARCHAR(100) NOT NULL,\nlast_name VARCHAR(100) NOT NULL,\nemail VARCHAR(100),\nphone_home VARCHAR(20), /* Not used for calculation, no need to be LONG*/\nphone_mobile VARCHAR(20), /* Not used for calculation, not needed to be LONG*/\nuser_type_id INT DEFAULT '1',\npassword VARCHAR(256) NOT NULL,\npassword_hashed VARCHAR(256) NOT NULL,\nlogin DATETIME NOT NULL,\nPRIMARY KEY (customer_id),\nFOREIGN KEY (user_type_id) REFERENCES User_Type(user_type_id)\n);\n\nCREATE TABLE Company(\ncompany_id INT NOT NULL AUTO_INCREMENT,\nname VARCHAR(100) NOT NULL,\naddress1 VARCHAR(100) NOT NULL,\naddress2 VARCHAR(100) NOT NULL,\ncity VARCHAR(100) NOT NULL,\neircode VARCHAR(7), /*D01AB23 or D01 AB23*/\nrep_first_name VARCHAR(100) NOT NULL,\nrep_last_name VARCHAR(100) NOT NULL,\nrep_email VARCHAR(100) NOT NULL,\nrep_phone VARCHAR(100) NOT NULL, /* Not used for calculation, not needed to be LONG*/\nuser_type_id INT DEFAULT '2',\npassword VARCHAR(256) NOT NULL,\npassword_hashed VARCHAR(256) NOT NULL,\nlogin DATETIME NOT NULL,\nPRIMARY KEY (company_id),\nFOREIGN KEY (user_type_id) REFERENCES User_Type(user_type_id)\n);\n\nCREATE TABLE Admin(\nadmin_id INT NOT NULL AUTO_INCREMENT,\nsession_id LONG NOT NULL,\nuser_type_id INT DEFAULT '3',\nlogin DATETIME NOT NULL,\nPRIMARY KEY (admin_id),\nFOREIGN KEY (user_type_id) REFERENCES User_Type(user_type_id)\n);","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":55,"column":0},"action":"insert","lines":["DROP SCHEMA IF EXISTS Hybrid;","CREATE SCHEMA Hybrid;","USE Hybrid;","","CREATE TABLE User_Type(","user_type_id INT NOT NULL AUTO_INCREMENT,\t","name ENUM('Customer', 'Company', 'Admin') NOT NULL,","PRIMARY KEY (user_type_id)",");","","CREATE TABLE Customer(","customer_id INT NOT NULL AUTO_INCREMENT,","first_name VARCHAR(100) NOT NULL,","last_name VARCHAR(100) NOT NULL,","email VARCHAR(100),","phone_home VARCHAR(20), /* Not used for calculation, no need to be LONG*/","phone_mobile VARCHAR(20), /* Not used for calculation, not needed to be LONG*/","user_type_id INT DEFAULT '1',","password VARCHAR(256) NOT NULL,","password_hashed VARCHAR(256) NOT NULL,","login DATETIME NOT NULL,","PRIMARY KEY (customer_id),","FOREIGN KEY (user_type_id) REFERENCES User_Type(user_type_id)",");","","CREATE TABLE Company(","company_id INT NOT NULL AUTO_INCREMENT,","name VARCHAR(100) NOT NULL,","address1 VARCHAR(100) NOT NULL,","address2 VARCHAR(100) NOT NULL,","city VARCHAR(100) NOT NULL,","eircode VARCHAR(7), /*D01AB23 or D01 AB23*/","rep_first_name VARCHAR(100) NOT NULL,","rep_last_name VARCHAR(100) NOT NULL,","rep_email VARCHAR(100) NOT NULL,","rep_phone VARCHAR(100) NOT NULL, /* Not used for calculation, not needed to be LONG*/","user_type_id INT DEFAULT '2',","password VARCHAR(256) NOT NULL,","password_hashed VARCHAR(256) NOT NULL,","login DATETIME NOT NULL,","PRIMARY KEY (company_id),","FOREIGN KEY (user_type_id) REFERENCES User_Type(user_type_id)",");","","CREATE TABLE Admin(","admin_id INT NOT NULL AUTO_INCREMENT,","session_id LONG NOT NULL,","user_type_id INT DEFAULT '3',","login DATETIME NOT NULL,","PRIMARY KEY (admin_id),","FOREIGN KEY (user_type_id) REFERENCES User_Type(user_type_id)",");","","","",""],"id":1}],[{"start":{"row":54,"column":0},"end":{"row":55,"column":0},"action":"remove","lines":["",""],"id":2},{"start":{"row":53,"column":0},"end":{"row":54,"column":0},"action":"remove","lines":["",""]},{"start":{"row":52,"column":0},"end":{"row":53,"column":0},"action":"remove","lines":["",""]},{"start":{"row":51,"column":2},"end":{"row":52,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":51,"column":2},"end":{"row":51,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"start","mode":"ace/mode/sql"}},"timestamp":1527006081553}