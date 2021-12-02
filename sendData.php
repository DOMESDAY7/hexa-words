<?php 
$data = json_decode(stripslashes(file_get_contents("php://input")),true);
// var_dump($data);
require 'model/model.php';
postIdiot($data);