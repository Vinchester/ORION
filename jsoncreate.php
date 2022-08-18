<?php
    $host = "localhost";
    $name = "root";
    $db = "orionposts";
    $table = "posts";
    $pdo = new PDO("mysql:host=localhost;dbname=orionposts","root");
    $sql = `select CONCAT ("[",GROUP_CONCAT(CONCAT("{id:'",id,"'"),CONCAT ("headlineEn:'",headlineEn,"'"),CONCAT (", posttextEn:'",posttextEn,"'}")),"]") as json from location into outfile "D:/WampServer/www/ORION/output.txt"`;
    $pdo->exec($sql);
?>