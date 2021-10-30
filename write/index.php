<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $id=$_GET["id_perso"];
    echo "<script class='hide'>let id_perso= $id</script>";

    ?>
    <form method="POST">
        <input type="text" name="nickname" placeholder="idiot's nickname" require>
        <input type="text" name="story" placeholder="why she/he is so idiot?" require>
        <button type="submit" name="sub">send the idiocy</button>
    </form>
    <section class="perso"></section>
    <?php 
    $link = new PDO('mysql:host=localhost;dbname=idiots', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    if (isset($_POST["sub"])){
        $nickname=$_POST["nickname"];
        $story=$_POST["story"];
        if (!isset($nickname)||!isset($story)){
            die();
        }else{
            function verification($string){
                htmlspecialchars("$string"); // contre les injections de script
                $sign=["DELETE","FROM", "UPDATE","SELECT","<script>","</script>"];
                $string=str_replace($sign,"ᓚᘏᗢ",$string);//contre les injections sql
                return $string; 
            }
            $sql_insert="INSERT INTO `user_story` (`id`, `nickname`, `story`,`id_perso`) VALUES (NULL, '$nickname', '$story', '$id')";
            $req=$link->prepare($sql_insert);
            $req=verification($req);
            $req->execute();
            
        }
    } 
    
    ?>
    <script src="script.js"></script>
    
</body>
</html>