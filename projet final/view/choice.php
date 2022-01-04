<body>

    <main class="content">
        <h1 class="title_choice">Choose your avatar</h1>
        <button class="rand_button unselect">Randomize<br><span class="material-icons" id=refresh>refresh</span></button>
        <form method="GET" class="form">
            <input type="text" name="page" value="write" id=page>
            <input type="text" name="id_perso" class="hide">
        </form>
        <button type="submit" class="choose_button unselect">Chooses <br><span class="material-icons">check</span></button>
        <section class="content_person"><img src="./public/img/personnage/person1.svg" alt="idiot" class="person">
        </section>
        <a href="?page=accueille" class="home_btn">
            <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="loop" colors="primary:#FFFFFF,secondary:#FFFFFF" style="width:50px;height:50px">
            </lord-icon>
        </a>
    </main>

    <script src="./public/js/choice.js "></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script>
        let nbphoto = <?= $nbphoto ?>;
    </script>
</body>

</html>