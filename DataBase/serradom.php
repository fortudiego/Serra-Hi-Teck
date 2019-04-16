<?php
/**
 * Created by PhpStorm.
 * User: Francesco
 * Date: 05/03/2019
 * Time: 09:28
 */
$host = "localhost";
$user = "root";
$password = "Francigobbi.03";
$db = "";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE serradom");
} catch (PDOException $e) {
    //echo("Connection failed: " . $e->getCode());
}
$pdo = null;

$db = "serradom";

$utenti =  "CREATE TABLE utenti ("
    . "username VARCHAR(255) PRIMARY KEY,"
    . "nome VARCHAR(255),"
    . "cognome VARCHAR(255),"
    . "email VARCHAR(255),"
    . "pwd VARCHAR(255),"
    . "flag_admin INT NOT NULL DEFAULT '0'"
    . ")";

$funzioni = "CREATE TABLE funzioni ("
    . "id_funzione INT PRIMARY KEY AUTO_INCREMENT,"
    . "nome_funzione VARCHAR(255),"
    . "src VARCHAR(255),"
    . "logo VARCHAR(255)"
    . ")";

$funzioni_utente = "CREATE TABLE funzioni_utente ("
    . "id_funzione INT,"
    . "FOREIGN KEY(id_funzione) REFERENCES funzioni(id_funzione),"
    . "username VARCHAR(255),"
    . "FOREIGN KEY(username) REFERENCES utenti(username),"
    . "PRIMARY KEY(id_funzione, username)"
    .")";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec($utenti);
    $pdo->exec($funzioni);
    $pdo->exec($funzioni_utente);
} catch (PDOException $e) {
   echo("Connection failed: " . $e->getCode());
}
$pdo = null;