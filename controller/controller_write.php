<?php

if ((!isset($_GET["id_perso"]) )|| ($_GET["id_perso"]==null)){
    header("Location:../view/choice.php");
}else{
    $id=$_GET["id_perso"];
}
require '../model/model_write.php';
require '../view/write.php';
if (isset($_POST["sub"])){
    post($_POST["nickname"],$_POST["story"]);
}
