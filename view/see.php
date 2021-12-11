<body>
    <h1 class="title">Your are not alone</h1> <a href="?page=choice" class="write_btn">You have something to say?</a>
    <main>
        <?php
        listIdiot();
        ?>
    </main>
    <article class="rulesDef">
        <h5 class="titleArticle">Idiot:<span>Qualifie une personne sans intelligence.</span></h5>
        <h5 class="trueDef">Idiot fait ou comportement universel permettant au humain de se reconnaître éventuellement d'apprendre de leurs erreurs, peut devenir un mode de connaissance quant a nos erreurs. N'est pas incurrable</h5>
    </article>
    <script>
        localStorage.setItem("token","<?php echo $_SESSION["token"]; ?>")
    </script>
    <script src="./public/js/see.js"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    
</body>

</html>