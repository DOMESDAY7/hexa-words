<?php

if ((!isset($_GET["id_perso"]) )|| ($_GET["id_perso"]==null)){
    header("Location:index.php?page=choice");
}else{
    $id=$_GET["id_perso"];
}
if( !isset($_POST["nickname"]) || !isset($_POST["id_perso"]) || !isset($_POST["story"])){
}else{
    $nickname = $_POST["nickname"];
    $id = $_POST["id_perso"];
    $story = $_POST["story"];
    if (postIdiot($id,$nickname,$story)){
        header("Location:?page=see");
    }
}

