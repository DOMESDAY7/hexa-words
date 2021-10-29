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
        <button type="submit">send the idiocy</button>
    </form>
    <section class="perso"></section>
    <?php 
    $link = new PDO('mysql:host=localhost;dbname=idiots', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $nickname=$_POST["nickname"];
    $story=$_POST["story"];
    if (!isset($nickname)||!isset($stroy)){
        die();
    }else{
    $sql_insert="INSERT INTO `user_story` (`id`, `nickname`, `story`) VALUES (NULL, '$nickname', '$story')";
    $req=$link->prepare($sql_insert);
    // verification($req)
    $req->execute();
    // function verification($string){
    //     $string=$string->bindValue(1);//contre les injections sql
    //      $string=htmlspecialchars($string,ENT_COMPAT); // contre les injections de script
    //      
    //     //autre truc à vérifier
    // }
    }    
    ?>
    <script src="script.js"></script>
    
</body>
</html>