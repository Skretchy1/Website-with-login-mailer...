<?php

include 'db_connnection.php';

$conn = OpenCon();


$sql = "CREATE TABLE Uporabnik(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Ime VARCHAR(45) NOT NULL,
    Priimek VARCHAR(45) NOT NULL,
    Email VARCHAR(45) NOT NULL,
    Geslo VARCHAR(255) NOT NULL, 
    tk_Vrsta_Uporabnika INT NOT NULL
)

CREATE TABLE Vrsta_Uporabnika(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Naziv VARCHAR(45) NOT NULL
)

CREATE TABLE Izpit(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Ime VARCHAR(45) NOT NULL,
    Datum DATE NOT NULL,
    RokPrijave DATE NOT NULL,
    Čas TIME(1) NOT NULL,
    Vrsta_Izpita_ID INT NOT NULL,
    Ocena_ID INT NOT NULL,
    Predmet_ID INT NOT NULL
)

CREATE TABLE Vrsta_Izpita(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Naziv VARCHAR(45) NOT NULL
)

CREATE TABLE Ocena(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Statuss INT NOT NULL
)

CREATE TABLE Predmet(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Ime VARCHAR(45) NOT NULL,
    Točke INT NOT NULL,
    Izvajalec_ID INT NOT NULL
)

CREATE TABLE Izvajalec(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Ime VARCHAR(45) NOT NULL,
    Priimek VARCHAR(45) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table employees created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


CloseCon($conn);

?>