<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
    <link rel="stylesheet" href="../public/css/write.css">
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
    
  


    
    ?>
    <script src="../public/js/write.js"></script>
    
</body>
</html>