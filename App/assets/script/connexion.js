// INITIALISATION DES VARIABLES
var idConnect = document.querySelector("#connectID");
var pswdConnect = document.querySelector("#connectPswd");
var bntConnect = document.querySelector("#connectBtn");

// EVENTLISTENERS
var submit = bntConnect.addEventListener('click', connexion);

// FONCTIONS

function connexion(){
    alert(idConnect.value + " " + pswdConnect.value);
}