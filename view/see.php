<body>
    <h1 class="title">Your are not alone</h1> <a href="?page=choice" class="write_btn">You have something to say?</a>
    <main>
        <?php
        listIdiot();
        ?>
    </main>
    <script>
        localStorage.setItem("token","<?php echo $_SESSION["token"]; ?>")
    </script>
    <script src="./public/js/see.js"></script>
    
</body>

</html>