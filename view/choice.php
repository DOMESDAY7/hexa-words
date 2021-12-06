<body>
    <main class="content">
        <button class="rand_button">randomize<br><span class="material-icons" id=refresh>refresh</span></button>
        <form method="GET" class="form">
            <input type="text" name="page" value="write" id =page>
            <input type="text" name="id_perso" class="hide">
        </form>
        <button type="submit" class="choose_button">Chooses <br><span class="material-icons">check</span></button>
        <section class="content_person"><img src="./public/img/personnage/person1.svg" alt="personnage" class="person">
        </section>
    </main>
    <img src="blob.svg" alt="" class="blob1">
    <img src="blob.svg" alt="" class="blob2">
    <script src="./public/js/choice.js "></script>
    <script>let nbphoto = <?= $nbphoto ?>;</script>
</body>

</html>