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
    if ($id==null){
        header("Location:../choice");
    }
    echo "<script class='hide'>let id_perso= $id</script>";

    ?>
    <form method="POST"  class="form">
    
        <input type="text" name="nickname" placeholder="idiot's nickname" require class="nickname">
        <input type="text" name="story" placeholder="why she/he is so idiot?" require class="why">
        
       
    </form>
    <button type="submit" name="sub" class="submit_button">send the idiocy</button>
    
    <section class="content_perso"></section>
    <?php 
    
    if($_SERVER['SERVER_NAME']== 'localhost'){
    require '../connect/local.php';

    }else{
        require '../connect/server.php';
    }


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
            header("Location:./see-the-idiots")
            
        }
    } 
    
    ?>
    <script src="script.js"></script>
    
</body>
</html>