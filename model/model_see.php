<?php
//on gère l'envoi du form dans cette page
function controlSQL($string){
    $forb=["DELETE","UPDATE","SELECT"];
    $string=str_replace($forb,"**",$string);
    return $string;
}

function verification($string){
    filter_var($string,FILTER_SANITIZE_STRING);
    controlSQL($string); //contre les injection SQL
    htmlspecialchars($string);//contre les injection HTML
    return $string;
}
function postIdiot(){
    require '../connect/detection.php';
    $nickname=$_POST["nickname"];
    $story=$_POST["story"];
    $id=$_GET["id_perso"];
    verification($nickname);
    verification($story);
    $sql_insert="INSERT INTO `user_story` (`id`, `nickname`, `story`,`id_perso`) VALUES (NULL, '$nickname', '$story', '$id')";
    $req=$link->prepare($sql_insert);
    //bindValue
    //bindParam
    $req->execute();
}
function listIdiot(){
    require '../connect/detection.php';
    $sql="SELECT * FROM user_story";
    $req=$link->query($sql);
    while ($data=$req->fetch(PDO::FETCH_ASSOC)){ ?>
         <span class="content_user">
                <div class="content_perso"><img src="../public/img/personnage/person<?php echo $data["id_perso"]?>.svg" class="img_perso"></div>
                <h1 class="nickname"><?php echo $data["nickname"] ?></h1><br>
            </span> 
            <span class="content_story">
                <p class="story" id="user_<?php echo $data["id"];?>">" <?php echo $data["story"] ?> "</p>
            </span>

    <?php }
}