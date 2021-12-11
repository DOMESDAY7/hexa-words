<?php
session_start();
//on gère l'envoi du form dans cette page
function controlSQL($string)
{
    $forb = ["DELETE", "UPDATE", "SELECT"];
    $string = str_replace($forb, "**", $string);
    return $string;
}

function verification($string)
{
    filter_var($string, FILTER_SANITIZE_STRING);
    controlSQL($string); //contre les injection SQL
    htmlspecialchars($string); //contre les injection HTML
    return $string;
}
function postIdiot($id, $nickname, $story,$token)
{
    try {
        require './connect/detection.php';
        $nickname = verification($nickname);
        $nickname = htmlspecialchars($nickname);
        $nickname = filter_var($nickname, FILTER_SANITIZE_ADD_SLASHES);
        $story = verification($story);
        $story = htmlspecialchars($story);
        $story = filter_var($story, FILTER_SANITIZE_ADD_SLASHES);
        $sql_insert = "INSERT INTO `user_story` (`id`, `nickname`, `story`,`id_perso`,`token`) VALUES (NULL, '$nickname', '$story', '$id','$token')";
        $req = $link->prepare($sql_insert);
        //bindValue
        //bindParam
        $req->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
function listIdiot()
{
    require './connect/detection.php';
    $sql = "SELECT * FROM user_story ORDER BY id DESC";
    $req = $link->query($sql);
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {

?>

        <div class="content_card">
        <span class="material-icons-outlined cross" id="<?php echo $data["id"] ?>">highlight_off</span>
            <div class="content_perso"><img src="./public/img/personnage/person<?php echo $data["id_perso"] ?>.svg" class="img_perso"></div>
            <h1 class="nickname"><?php echo $data["nickname"] ?></h1><br>
            <section class="content_story">
                <p class="story" id="user_<?php echo $data["id"]; ?>">" <?php echo $data["story"] ?> "</p>
            </section>
            <input type="text" data-token='<?php echo $data["token"]; ?>' style="display:none">
        </div>


<?php }
}
function createToken(){
    $token= openssl_random_pseudo_bytes(16);
    $token=bin2hex($token);
    return $token;
}

// on compte le nombre de fichier dans le dossier
$nbphoto= count(glob("./public/img/personnage/*.*"));
