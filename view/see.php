<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See the idiots</title>
    <link rel="stylesheet" href="../public/css/see.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet"> 
    <!-- http://localhost/hexa-words/see-the-idiots/ -->
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
            $link = new PDO('mysql:host=localhost;dbname=idiots', 'root', '', array
            (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $sql_show="SELECT `id`,`id_perso`,`nickname`,`story` FROM `user_story`";
            $req=$link->query($sql_show);

    ?>
    <header>

    </header>
    
    <main>
        <h1 class="title">Your are not alone</h1>
        <?php
        while($data=$req->fetch(PDO::FETCH_ASSOC)){
        ?>
            <span class="content_user">
                <div class="content_perso"><img src="../choice/personnage/person<?php echo $data["id_perso"]?>.png" class="img_perso"></div>
                <h1 class="nickname"><?php echo $data["nickname"] ?></h1><br>
            </span> 
            <span class="content_story">
                <p class="story" id="user_<?php echo $data["id"];?>">" <?php echo $data["story"] ?> "</p>
            </span>
        <?php 
        }
    ?>

    </main>
    <script src="../public/js/see.js"></script>
</body>
</html>