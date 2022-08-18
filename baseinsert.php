<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News</title>
    <link rel="shortcut icon" href="img/orionlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#dbd5d5;">
    <?php require("header.php");?>
    <form class="forminsert" action="databse.php" method="post">
        <p>Your headline:<br><input required minlength="5" class="inputarea" type="text" name="headlineEn"></p>
        <p>Your text for post:<br><textarea required minlength="20" class="inputarea" cols="30" rows="10" name="posttextEn"></textarea></p>
        <p>Photo for headline(URL):<br><input required class="inputarea" type="text" name="imgurl"></p>
        <p>Your name:<br><input required class="inputarea" type="text" name="author"></p>
        <select id="languages">
            <option value="En" selected>English</option>
            <option value="Ru">Russian</option>
            <option value="Ua">Ukrainian</option>
        </select>
        <button id="changelanguage">Change post language</button>
        <input type="submit" value="Submit">
    </form>
    <script src="header.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("changelanguage").onclick = function(){
                let language = document.getElementById("languages").value;
                document.cookie = "postlang=" + language + "";
            }
        });
        console.log(document.cookie);
    </script>
</body>
</html>