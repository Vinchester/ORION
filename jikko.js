// var idarray = <?php echo '[ ' . (implode(' , ', $idarray)) . ']'; ?>;
//var headlineEn = <?php echo '["' . (implode('" , "', $headlineEnarray)) . '"]'?>;
//var posttextEn = <?php echo '["' . (implode('" , "', $posttextEn)) . '"]'?>;
var i = 0;
while(i < idarrray.length){
    document.body.onload = addElement();
    function addElement(){
        if(idarray[i] % 2){
            var card02 = document.createElement("div");
            card02.classList.add("card02");
            // var card02imgdiv = "div";
            // card02imgdiv.classList.add("img02");
            // card02imgdiv.innerHTML = ""
            var card02textdiv = document.createElement("div");
            card02textdiv.classList.add("arttext");
            card02textdiv.innerHTML = '<p class="articleheadline">' + headlineEn[i] + '</p>';
            card02textdiv.innerHTML = '<p class="articlepretext">' + posttextEn[i] + '</p>';
            var cardselem = document.getElementById("cards");
            cardselem.insertBefore(card02, cardselem.firstChild);
            card02.insertBefore(card02textdiv, card02.firstChild);
            i++;
        }
    }
}
// while(i < idarray.length){
        //     document.body.onload = addElement();
        //     function addElement(){
        //         var elem01 = document.createElement("div");
        //         elem01.classList.add("card02");
        //         // var card02imgurl = document.createElement("div");
        //         // card02imgurl.classList.add("img02");
        //         // card02imgurl.innerHTML = "<img src='img/article" + idarray[1] + ".jpg'>";
        //         var card02text = document.createElement("div");
        //         card02text.classList.add("arttext");
        //         card02text.innerHTML = ""
        //         var cardselem = document.getElementById("cards");
        //         cardselem.insertBefore(elem01, cardselem.firstChild);
        //         elem01.insertBefore(card02text, elem01.firstChild);
        //         elem01.insertBefore(card02imgurl, elem01.firstChild);
        //     }
        //     i++
        // }