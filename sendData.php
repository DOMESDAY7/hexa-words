<?php 
$data = json_decode(stripslashes(file_get_contents("php://input")),true);
require 'model/model.php';
postIdiot($data);