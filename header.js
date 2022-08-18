var head = document.getElementById("head");
var foot = document.getElementById("extrainfodiv");
var body = document.querySelector("body");
function fullinfo(){
    foot.style.display = "block";
    body.style.overflow = "hidden";
}
function hideinfo(){
    foot.style.display = "none";
    body.style.overflow = "scroll";
}