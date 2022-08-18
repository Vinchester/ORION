<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=orionposts","root");
        $output = "Database connected";
        $headline = htmlspecialchars($_POST['headline' . $_COOKIE['postlang'] . '']);
        $imgurl = htmlspecialchars($_POST['imgurl']);
        $author = htmlspecialchars($_POST['author']);
        $posttext = htmlspecialchars($_POST['posttext' . $_COOKIE['postlang'] . '']);
        // echo (($headline), ($posttext), ($author), ($imgurl));
        $sql = 'insert into `posts` set `headlineEn` = "' . $headline . '", `posttextEn`="' . $posttext . '", `img` = "' . $imgurl . '", `author` = "' . $author . '";';
        $rows = $pdo->exec($sql);
        header('Location:index.php');
        exit();
    }
    catch(ExceptionType $e){
        $output = "Unable to connect" . $e->getMessage();;
    }
    echo $output;
    echo $rows;
?>