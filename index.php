<?php

if (!isset($_GET["page"])){
    header("Location:view/acceuil.php");
}else{
    if($_GET["page"]=="tell"){
        require './view/choice.php';
    }
}

