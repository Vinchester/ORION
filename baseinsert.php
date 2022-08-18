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
        <input type="submit" value="Submit">
    </form>
    <script src="header.js"></script>
</body>
</html>