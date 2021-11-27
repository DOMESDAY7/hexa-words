<?php
function controlSQL($string){
    $forb=["DELETE","UPDATE","SELECT","<script>"];
    $string=str_replace($forb,"**",$string);//injection sql
    return $string;
}

function verification($string){
    filter_var($string,FILTER_SANITIZE_STRING);
    controlSQL($string);
}
function post(){
    require '../connect/detection.php';
    $nickname=$_POST["nickname"];
    $story=$_POST["story"];
    verification($nickname);
    verification($story);
    $sql_insert="INSERT INTO `user_story` (`id`, `nickname`, `story`,`id_perso`) VALUES (NULL, '$nickname', '$story', '$id')";
    $req=$link->prepare($sql_insert);
    //bindValue
    //bindParam
    $req->execute();
}
require '../view/write.php';