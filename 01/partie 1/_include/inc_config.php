<?php
const MODE_PROD=false;
session_start();
const DB_SERVER = "localhost";
const DB_NAME = "baseagence";
const DB_USER = "root";
const DB_PWD="";
//création d'un object connexion 
$link = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER,DB_PWD);
//définit le charset pour les échanges de données avec le serveur de BDD
$link->exec("SET CHARACTER SET UTF8");
//Définit le mode de la méthode fetch par défaut
$link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//déclenche une exception en cas d'erreur : stop l'éxécution
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$nomApplication = "Agence Immobilière";
$menu=array(
    ["acheter.php","Acheter"], 
    ["louer.php","Louer"],    
    ["vendre.php","Vendre"],   
    ["contactClient.php","Contact client"],   
    ["creerdatabase.php","RAZ BDD"],
    ["dataset.php","jeu de données"]
);

require "inc_fonction.php";
?>