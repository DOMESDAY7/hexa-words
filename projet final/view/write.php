<body>
    <a href="?page=choice" class="choice_btn">
    <lord-icon
    src="https://cdn.lordicon.com/bgywtgwo.json"
    trigger="loop"
    colors="primary:#FFFFFF,secondary:#FFFFFF"
    style="width:30px;height:30px">
</lord-icon>
    </a>
    <form method="POST" class="form" name="form">
        <input type="text" name="nickname" placeholder="idiot's nickname" class="nickname" maxlength="10" minlength="3" aria-required="true" autofocus>
        <textarea name="story" cols="15" rows="5" class="why" placeholder="why she/he is so idiots ?" maxlength="280" aria-required="true"></textarea>
        <input type="text" name="id_perso" value="<?= $id ?>" style="display: none" class="id_perso">
        <h5 class="message"></h5>
    </form>
    <button type="submit" name="sub" class="submit_button">Send the idiocy<lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#FFFFFF,secondary:#FFFFFF" style="width:30px;height:30px">
        </lord-icon></button>
    <section class="content_perso">
        <pre class="buble">Hi! My name is <span class="name">...</span></pre>
        <img src="./public/img/personnage/person<?= $id ?>.svg" alt="" class="perso">
    </section>

    <script src="./public/js/write.js"></script>
    
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>

</body>

</html>