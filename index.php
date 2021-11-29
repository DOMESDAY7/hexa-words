<?php

if (!isset($_GET["page"])){
    header("Location:view/acceuil.php");
}else{
    if($_GET["page"]=="tell"){
       header('Location:view/choice.php');
    }
    if ($_GET["page"]=="see"){
        header('Location:view/see.php');
    }
}

