<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choice</title>
    <!-- localhost/hexa-words/choice -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
</head>
<body>
    <img src="blob.svg" alt="" class="blob1">
    <img src="blob.svg" alt="" class="blob2">
    <div class="content">
    <button class="rand_button">randomize</button>
    <form method="GET" action="../write/index.php">
    <input type="text" name="id_perso" class="hide">
    <button type="submit" class="choose_button">Chooses <br><img src="arrow.svg" alt=""></button>
    </form>
    <img src="./personnage/person1.png" alt="personnage" class="person">
    </div>
    <script src="script.js "></script>
   
</body>
</html>