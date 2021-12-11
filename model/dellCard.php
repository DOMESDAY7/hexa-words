<?php
require '../connect/detection.php';
$id_card=$_GET["id_card"];
$sql = " DELETE FROM `user_story` WHERE `user_story`.`id` = $id_card";
$link ->query($sql);