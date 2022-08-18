<!DOCTYPE html>
<html lang="ua">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORION — NEWS</title>
    <link rel="shortcut icon" href="img/orionlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        try{
            $host = "localhost";
            $name = "root";
            $db = "orionposts";
            $table = "posts";
            $pdo = new PDO("mysql:host=sql8.freemysqlhosting.net;dbname=sql8513259;charset=utf8;","sql8513259","kqAFkszDdc");
            $output = "Database connected";
            // $headline = htmlspecialchars($_POST["headline"]);
            // // $command = htmlspecialchars($_POST['command']);  
            // $posttext = htmlspecialchars($_POST['posttext']);
            // $imgurl = htmlspecialchars($_POST['imgurl']);
            $lang = ($_COOKIE['language']);
            $sql = "select `id`,`headline" . $lang . "`,`posttext" . $lang . "`,`img`,`author` from `posts` where `headline" . $lang . "` is not null ORDER BY `id` DESC LIMIT 50;";
            $result = $pdo->query($sql);
            // console.log($result);
            while($row = $result->fetch()){
                $idarray[] = $row['id'];
                $headlineEnarray[] = $row['headline' . $lang . ''];
                $posttextEn[] = $row['posttext' . $lang . ''];
                $imgurlarray[] = $row['img'];
                $authorarray[] = $row['author'];
            }
            // echo $jokes[2];
            // $rows = $pdo->exec($sql);
            // $row = mysqli_fetch_row($rows);
        }
        catch(ExceptionType $e){
            $output = "Unable to connect" . $e->getMessage();;
        }
    ?>
    <?php require("header.php")?>
    <div id="extrainfodiv">
        <p onclick="hideinfo()" id="hidebar">Hide bar</p>
        <p>Change language</p>
        <select id="languages">
            <option value="En">English</option>
            <option value="Ua">Ukrainian</option>
            <option value="Ru">Russian</option>
        </select>
        <button id="changelang">Change language</button>
        <table class="tableextra">
            <tr>
                <th>Contacts</th>
                <th>Copyright</th>
            </tr>
            <tr>
                <td>E-mail: aimpmra@gmail.com</td>
                <td>2022</td>
            </tr>
            <tr>
                <td>Phone number: +37360348241</td>
                <td>ORION inc.</td>
            </tr>
        </table>
    </div>
    <div id="artforphone">
        <div id="cardz"></div>
    </div>
    <div id="articles">
        <div id="card001"></div>
        <div id="cards"></div>
    </div>
    <script type="text/javascript">
        var idarray = <?php echo '[ ' . (implode(' , ', $idarray)) . ']'; ?>.reverse();
        var headlineEn = <?php echo '[`' . (implode('` , `', $headlineEnarray)) . '`]'?>.reverse();
        var posttextEn = <?php echo '[`' . (implode('` , `', $posttextEn)) . '`]'?>.reverse();
        var imgurl = <?php echo '["' . (implode('" , "', $imgurlarray)) . '"]'?>.reverse();
        var author = <?php echo '["' . (implode('" , "', $authorarray)) . '"]'?>.reverse();
        var i = 0;
        var y = 0;
        while(i < idarray.length){
            addElement();
            function addElement(){
                if (window.innerWidth < 600) {
                    addElementOnPhone();
                    i++;
                }else{
                    if((idarray[i] % 2) !== 0 && y !== 2){
                    makecard02();
                    i++;
                    // y++;
                    }else if((idarray[i] % 2) === 0 && y !== 2){
                        makecard01();
                        i++;
                    }
                    // }else if(y === 2){
                    //     makecard01();
                    //     i++;
                    //     y = 0;
                    // }
                }
            }
        }
        function addElementOnPhone(){
            let card = document.createElement("div");
            card.classList.add("cardforphone");
            card.setAttribute("id",idarray[i]);
            card.setAttribute("onclick","getName(this.id)");
            let card0textdiv = document.createElement("div");//text div creation
            card0textdiv.classList.add("arttext");//text div class added
            card0textdiv.innerHTML = '<p class="articlepretext">' + posttextEn[i] + '</p>';//Post text added
            let headlinetext = document.createElement("p");//haedline created
            headlinetext.classList.add("articlepretext");//headline class added
            headlinetext.innerHTML = '<p class="articleheadline">' + headlineEn[i] + '<br><p class="author">'+ author[i] + '</p>' +'</p>';//
            let cardselem = document.getElementById("cardz");
            let imgurlarray = document.createElement("div");
            imgurlarray.classList.add("img02");
            imgurlarray.innerHTML = '<img loading="lazy" src="' + imgurl[i] + '">';
            cardselem.insertBefore(card, cardselem.firstChild);
            card.insertBefore(card0textdiv, card.firstChild);//headline inserting
            card0textdiv.insertBefore(headlinetext, card0textdiv.firstChild);//Article text inserting
            card.insertBefore(imgurlarray, card.firstChild);
        }
        function makecard02(){
            let card02 = document.createElement("div");
            card02.classList.add("card02");
            card02.setAttribute("id",idarray[i]);
            card02.setAttribute("onclick","getName(this.id)");
            var card02textdiv = document.createElement("div");//text div creation
            card02textdiv.classList.add("arttext");//text div class added
            card02textdiv.innerHTML = '<p class="articlepretext">' + posttextEn[i] + '</p>';//Post text added
            let headlinetext = document.createElement("p");//haedline created
            headlinetext.classList.add("articlepretext");//headline class added
            headlinetext.innerHTML = '<p class="articleheadline">' + headlineEn[i] + '<br><p class="author">'+ author[i] + '</p>' +'</p>';//
            let cardselem = document.getElementById("cards");
            let imgurlarray = document.createElement("div");
            imgurlarray.classList.add("img02");
            imgurlarray.innerHTML = '<img loading="lazy" src="' + imgurl[i] + '">';
            cardselem.insertBefore(card02, cardselem.firstChild);
            card02.insertBefore(card02textdiv, card02.firstChild);//headline inserting
            card02textdiv.insertBefore(headlinetext, card02textdiv.firstChild);//Article text inserting
            card02.insertBefore(imgurlarray, card02.firstChild);
        }
        function makecard01(){
            let card01 = document.createElement("div");
            card01.classList.add("card01");
            card01.setAttribute("id",idarray[i]);
            card01.setAttribute("onclick","getName(this.id)");
            let card01textdiv = document.createElement("div");//text div creation
            card01textdiv.classList.add("arttext");//text div class added
            card01textdiv.innerHTML = '<p class="articlepretext">' + posttextEn[i] + '</p>';//Post text added
            let headlinetext = document.createElement("p");//haedline created
            headlinetext.classList.add("articlepretext");//headline class added
            headlinetext.innerHTML = '<p class="articleheadline">' + headlineEn[i] + '<br><p class="author">'+ author[i] + '</p>' +'</p>';//
            let articleselem = document.getElementById("card001");
            let imgurlarray = document.createElement("div");
            imgurlarray.classList.add("img02");
            imgurlarray.innerHTML = '<img loading="lazy" src="' + imgurl[i] + '">';
            articleselem.insertBefore(card01, articleselem.firstChild);
            card01.insertBefore(card01textdiv, card01.firstChild);
            card01textdiv.insertBefore(headlinetext, card01textdiv.firstChild);
            card01.insertBefore(imgurlarray, card01.firstChild);
        }
        function getName(name){
            document.cookie = "id = " + name + "";
            window.location.href = "fullpost.php";
            console.log(document.cookie);
        }
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("changelang").onclick = function(){
                let language = document.getElementById("languages").value;
                document.cookie = "language=" + language + "";
                location.reload();
            }
        });
        console.log(document.cookie);

    </script>
    <script src="header.js"></script>
</body>
</html>