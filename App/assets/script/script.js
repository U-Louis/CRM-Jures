// INITIALISATION DES VARIABLES
var habilitationOui = document.querySelector('#ouiHab1');
var habilitationNon = document.querySelector('#nonHab1');
var habilDiv = document.querySelector("#habilitationDiv");
var habAutre = document.querySelector("#habAutre");

// EVENT LISTENERS
var habOuiListener = habilitationOui.addEventListener("click", function() { visible(habilDiv); }, false);
var habNonListener = habilitationNon.addEventListener('click', hidden);

// FONCTIONS

function visible(div){
    div.setAttribute("class","visible");
}

function hidden(){
    habilDiv.setAttribute('class',"hidden");
}

