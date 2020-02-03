var elem = document.getElementById("id");
elem.addEventListener(changeTexte(elem));
var color = document.getElementsByName("rouge");
color.addEventListener(changeColor(color));

function changeTexte(elem) 
{

    elem.textContent = "bonjour";
}

function changeColor(color) 
{
    color[0].textContent = "bleu";
}