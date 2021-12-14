<?php 
$data = json_decode(stripslashes(file_get_contents("php://input")),true);
// $data = json_decode($data);
var_dump($data);
$nickname = $data["nickname"];
$id = $data["id_perso"];
$story = $data["story"];
require './model/model.php';
postIdiot($id,$nickname,$story,$token);