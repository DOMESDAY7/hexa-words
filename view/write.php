<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
    <link rel="stylesheet" href="../public/css/write.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet">

</head>
<body>   
    <form method="POST"  class="form" name="form" action="../controller/controller_see.php">
        <input type="text" name="nickname" placeholder="idiot's nickname" require class="nickname" maxlength="10" minlength="3">
        <textarea name="story"  cols="15" rows="5" class="why" placeholder="why she/he is so idiots ?" maxlength="280"></textarea>
        <input type="text" name="id_perso" value="<?php echo $id; ?>" style="display: none">
    </form>
    <button type="submit" name="sub" class="submit_button">Send the idiocy</button>
    <section class="content_perso">
        
        <pre class="buble">Hi! My name is <span class="name">...</span></pre>
        <img src="../public/img/personnage/person<?= $id ?>.svg" alt="" class="perso" >
    </section>
    
    <script src="../public/js/write.js"></script>
    
</body>
</html>