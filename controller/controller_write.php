<?php

if ((!isset($_GET["id_perso"]) )|| ($_GET["id_perso"]==null)){
    header("Location:../view/choice.php");
}else{
    $id=$_GET["id_perso"];
}
require '../view/write.php';

