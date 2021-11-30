<?php

if ((!isset($_GET["id_perso"]) )|| ($_GET["id_perso"]==null)){
    header("Location:index.php?page=choice");
}else{
    $id=$_GET["id_perso"];
}


