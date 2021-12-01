<?php
if (!isset($_GET["page"])){
    $page="acceuil";
    require 'view/head.php';
    require 'view/acceuil.php';
}else{
    $page = $_GET["page"];
    require 'model/model.php';
    require 'view/head.php';
    if($page=="write"){
        require 'controller/controller_write.php';
    }

    require 'view/'.$page.'.php';
}



