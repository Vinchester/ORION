const screenWidth = window.screen.width;
console.log(screenWidth);
if(screenWidth <= 600){
    var cardsdiv2 = document.querySelector(".cards");
    // var divcards = document.getElementsByClassName("cards");
    cardsdiv2.classList.remove("cards");
    cardsdiv2.classList.add("cardson");
    cardsdiv2.style.display = "contents";
}else{
    var cards = document.getElementsByClassName("cardsec");
    cards.style.height = "36vh";
}