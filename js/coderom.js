setTimeout(function() {
    console.log("I'm here!")
}, 5000);

console.log("Where are you?");
var elem = document.getElementById('id');
elem.addEventListener(changeColor());

function changeColor() {

    elem.textContent = "bonjour";
}