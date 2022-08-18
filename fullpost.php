<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/orionlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: bisque;">
<?php 
        try{
            $host = "localhost";
            $name = "root";
            $db = "orionposts";
            $table = "posts";
            $pdo = new PDO("mysql:host=sql8.freemysqlhosting.net;dbname=sql8513259;charset=utf8;","sql8513259","kqAFkszDdc");
            $output = "Database connected";
            $sql = "select * from `posts` where id = " . $_COOKIE['id'] . "";
            $result = $pdo->query($sql);
            // console.log($result);
            while($row = $result->fetch()){
                $idarray[] = $row['id'];
                $headlineEnarray[] = $row['headline' . $_COOKIE['language'] . ''];
                $posttextEn[] = $row['posttext' . $_COOKIE['language'] . ''];
                $imgurlarray[] = $row['img'];
                $authorarray[] = $row['author'];
            }
            // echo $jokes[2];
            // $rows = $pdo->exec($sql);
            // $row = mysqli_fetch_row($rows);
            // echo $_COOKIE['id'];
        }
        catch(ExceptionType $e){
            $output = "Unable to connect" . $e->getMessage();;
        }
    ?>
    <header id="head">
        <div class="fullhead">
            <a href="index.php" id="headline">ORION</a>
            <div class="headline2"><a href="index.php" ><img class="headlineimg" src="img/ORION.png"></a></div>
        </div>
        <!-- <a href="baseinsert.php">BaseInsert</a> -->
    </header>
    <div id="fullpage"></div>
    <script>
        var headlinearray = <?php echo '[`' . (implode('` , `', $headlineEnarray)) . '`]'; ?>;
        var posttextarray = <?php echo '[`' . (implode('` , `', $posttextEn)) . '`]';?>;
        var imgurl = <?php echo '[`' . (implode('` , `', $imgurlarray)) . '`]';?>;
        // console.log(headline);
        // alert(posttext);
        makeFullPost();
        function makeFullPost(){
            var headimg = document.createElement("div");
            headimg.classList.add("headimg");
            headimg.innerHTML = "<img src=" + imgurl[0] + ">";
            var headline = document.createElement("div");
            headline.classList.add("headlinediv");
            headline.innerHTML = "<p class='headline'>" + headlinearray[0] + "</p>";
            var posttext = document.createElement("div");
            posttext.classList.add("posttextdiv");
            posttext.innerHTML = "<p class='posttext'>" + posttextarray[0] + "</p>";
            var fullpage = document.getElementById("fullpage");
            fullpage.insertBefore(posttext, fullpage.firstChild);
            fullpage.insertBefore(headline, fullpage.firstChild);
            fullpage.insertBefore(headimg, fullpage.firstChild);
        }
    </script>
    <script src="header.js"></script>
</body>
</html>