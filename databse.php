<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=orionposts","root");
        $output = "Database connected";
        $headline = htmlspecialchars($_POST['headlineEn']);
        $imgurl = htmlspecialchars($_POST['imgurl']);
        $author = htmlspecialchars($_POST['author']);
        $posttext = htmlspecialchars($_POST['posttextEn']);
        // echo (($headline), ($posttext), ($author), ($imgurl));
        $sql = 'insert into `posts` set `headlineEn` = "' . $headline . '", `posttextEn`="' . $posttext . '", `img` = "' . $imgurl . '", `author` = "' . $author . '";';
        $rows = $pdo->exec($sql);
        header('Location:index.php');
        exit();
        // $sql = 'insert into `posts` ("headlineEn","posttextEn","img","author") values (:headlineEn,:posttextEn,:imgurl,:author);';
        // $rows = $pdo->prepare($sql);
        // $rows->bindValue((':headlineEn',$_POST["headlineEn"]),(':posttextEn',$_POST["posttextEn"]),(':imgurl',$_POST["imgurl"]),(':author',$_POST["author"]));
        // $rows->bindValue(':posttextEn',$_POST["posttextEn"]);
        // $rows->bindValue(':imgurl',$_POST["imgurl"]);
        // $rows->bindValue(':author',$_POST["author"]);
        // $rows->execute();
    }
    catch(ExceptionType $e){
        $output = "Unable to connect" . $e->getMessage();;
    }
    echo $output;
    echo $rows;
?>