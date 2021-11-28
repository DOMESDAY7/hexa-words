<?php 
try{
    $link = new PDO('mysql:host=localhost;dbname=idiots', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"));

}catch(Exception $e){
    die("Erreur:".$e->getMessage());
}
