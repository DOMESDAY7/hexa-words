<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choice</title>
    <!-- localhost/hexa-words/choice -->
    <link rel="stylesheet" href="../public/css/choice.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <!-- icone -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="shortcut icon" href="../public//img/fav.svg" type="image/x-icon">
</head>

<body>
    <main class="content">
        <button class="rand_button">randomize<br><span class="material-icons" id=refresh>refresh</span></button>
        <form method="GET" action="../controller/controller_write.php" class="form">
            <input type="text" name="id_perso" class="hide">
        </form>
        <button type="submit" class="choose_button">Chooses <br><span class="material-icons">
check
</span></button>
        <section class="content_person"><img src="../public/img/personnage/person1.svg" alt="personnage" class="person"></section>
    </main>
    <img src="blob.svg" alt="" class="blob1">
    <img src="blob.svg" alt="" class="blob2">
    <script src="../public/js/choice.js "></script>

</body>

</html>