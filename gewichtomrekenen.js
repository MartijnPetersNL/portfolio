let gewichtinput = document.querySelector("#gewicht-input");
let pounds = document.querySelector("#poundsOutput");
let ounces = document.querySelector("#ouncesOutput");
let grams = document.querySelector("#gramsOutput");

function omrekenen(omzet) {
  let kg = omzet.target.value;
  document.getElementById("poundsOutput").innerHTML = kg * 2.20462262;

  document.getElementById("ouncesOutput").innerHTML = kg * 35.2739619;

  document.getElementById("gramsOutput").innerHTML = kg * 1000;
  console.log(poundsOutput);
  console.log(kg);
}
function convertWeight() {
  let gewichtinput = 1;
  let pounds = gewichtinput * 2.20462262;
  let ounces = gewichtinput * 35.2739619;
  let grams = gewichtinput * 1000;
  console.log(gewichtinput);
  console.log(pounds, ounces, grams);
}
function copyString() {
  console.log("gfdgfd");
  /*var copypassword = document.getElementById("gewicht");
  copypassword.select();
  navigator.clipboard.writeText(copypassword.value);*/
  alert("gebruiker kopeerde wachtwoord");
}
