// Select your input element.
var valNum = document.getElementById("inputKilograms");

// Listen for input event on numInput.

function weightConverter(valNum) {
  document.getElementById("outputpounds").innerHTML =
    Math.round(valNum / 2.2046) / 1000;
  Math.abs(valNum);
  document.getElementById("outputounces").innerHTML =
    Math.round(valNum * 35.2739619) / 1000;
  document.getElementById("outputgrams").innerHTML = Math.round(valNum * 1000);
}
