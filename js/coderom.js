var elem = document.getElementById("id");
var color = document.getElementsByName("rouge")
elem.addEventListener(changeTexte());
color.addEventListener(changeColor());

function changeTexte() {

    elem.textContent = "bonjour";
}

function changeColor() {

    elem.textContent = "bleu";
}