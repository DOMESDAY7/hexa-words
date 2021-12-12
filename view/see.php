<body>
    <h1 class="title">Your are not alone</h1> <a href="?page=choice" class="write_btn">You have something to say?</a>
    <a href="?page=acceuil" class="home_btn">
        <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="loop" colors="primary:#FFFFFF,secondary:#FFFFFF" style="width:30px;height:30px">
        </lord-icon>
    </a>
    <main>
        <?php
        listIdiot();
        ?>
    </main>
    <article class="rulesDef">
        <h1 class="titleArticle">Idiot:</h1>
       
        <figure class="def">
            <blockquote>
                <ul>
                    <li class="wrongDef">Idiot:<span>Refers to a person without intelligence.</span></li>
                    <li>Idiot fact or universal behaviour that allows humans to recognize themselves eventually <b>learn from their mistakes</b> this can become a way of knowing about our mistakes. </li>
                    <li> Is not <b>incurable</b>.</li>
                </ul>
            </blockquote>
            <cite>-Someone who will become famous</cite>
        </figure>


    </article>
    <script>
        localStorage.setItem("token", "<?php echo $_SESSION["token"]; ?>")
    </script>
    <script src="./public/js/see.js"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>

</body>

</html>