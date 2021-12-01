<body>   
    <form method="POST"  class="form" name="form" >
        <input type="text" name="nickname" placeholder="idiot's nickname"  class="nickname" maxlength="10" minlength="3" aria-required="true">
        <textarea name="story"  cols="15" rows="5" class="why" placeholder="why she/he is so idiots ?" maxlength="280"  aria-required="true"></textarea>
        <input type="text" name="id_perso" value="<?php echo $id; ?>" style="display: none" class="id_perso" >
    </form> 
    <button type="submit" name="sub" class="submit_button">Send the idiocy</button>
    <section class="content_perso">
        
        <pre class="buble">Hi! My name is <span class="name">...</span></pre>
        <img src="./public/img/personnage/person<?= $id ?>.svg" alt="" class="perso" >
    </section>
    
    <script src="./public/js/write.js"></script>
    
</body>
</html>