<?php
function controlSQL($string){
    $forb=["DELETE","UPDATE","SELECT"];
    $string=str_replace($forb,"**",$string);//injection sql
    return $string;
}

function verification($string){
    filter_var($string,FILTER_SANITIZE_STRING);
    controlSQL($string);
    return $string;
}
function post($nickname,$story){
    require '../connect/detection.php';
    verification($nickname);
    verification($story);
    $sql_insert="INSERT INTO `user_story` (`id`, `nickname`, `story`,`id_perso`) VALUES (NULL, '$nickname', '$story', '$id')";
    $req=$link->prepare($sql_insert);
    //bindValue
    //bindParam
    $req->execute();
}
