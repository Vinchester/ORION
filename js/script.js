function backchange(id){
    var card = document.getElementById(id);
    // var cardname = card.id.substr(4);
    // var cardwidth = card.style.width.slice(0, -1);
    var cardw = card.id;
    console.log(cardw);
    // var cardimg = document.getElementById(`img${cardname}`);
    // cardimg.style.width = "105%";
    // cardimg.style.transition = "0.5s";
    card.style.backgroundColor = "rgb(65, 151, 232)";
    // card.style.width = `${Number(cardwidth) + 1}%`;
    // console.log(card.style.width);
    card.style.transition = "0.5s";
}
function backchangeback(id){
    var card = document.getElementById(id);
    var cardw = card.id;
    // var cardwidth = card.style.width.slice(0, -1);
    card.style.backgroundColor = "#AAD2D2";
    // card.style.width = `${Number(cardwidth) - 1}%`;
    // console.log(card.style.width);
    card.style.transition = "0.5s";
}