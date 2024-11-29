// HTML DOM elementen
//13:22
const typeCount = 5;
const resultEL = document.getElementById("result");
const generateEL = document.getElementById("generate");
const lengthEL = document.getElementById("length");
const randomFunctie = {
  lower: getRandomLower,
  upper: getRandomUpper,
  number: getRandomNumber,
  symbol: getRandomSymbol,
};
// wanneer je op generatie knop drukt /generatie event
generateEL.addEventListener("click", () => {
  const length = +lengthEL.nodeValue;

  console.log(typeof length);
  resultEL.innerText = generatePassword(length);
});
// Genereer wachtwoord funcie
function generatePassword(length) {
  //1. Initaties pw variable
  //2 loop over length call generator function
  // add final pw to the pw var and return

  let generatedPassword = "";

  console.log("");
  const typesArr = [{ lower }, { upper }, { number }, { symbol }];
  for (let i = 0; i < typesCount; i++) {
    typesArr.forEach((type) => {
      const funcName = Object.keys(type)[0];
      console.log("funcName:", funcName);

      generatedPassword += randomFunctie[funcName]();
    });
  }
  const finalPassword = generatedPassword.slice(0, length);

  return finalPassword;
}

/* generator functies */
// kleine letters
function getRandomLower() {
  return String.fromCharCode(Math.floor(Math.random() * 26) + 97);
}
// hoofletters
// 65 want hoofdleters beginnen bij het 65ste web charset
function getRandomUpper() {
  return String.fromCharCode(Math.floor(Math.random() * 26) + 65);
}
// nummers 0-9
function getRandomNumber() {
  return String.fromCharCode(Math.floor(Math.random() * 10) + 48);
}
// speciale symbolen
function getRandomSymbol() {
  const symbolen = "!@#$%^&*(){}[]=<>/,.";
  return symbolen[Math.floor(Math.random() * symbolen.length)];
}
/* console.log(Math.floor(Math.random() * 26) + 97); */
console.log(getRandomNumber());
/*willen hele decimale nummers afronden
met marth.floor en er zijn 26 letters in het alfabet */
// math.random ()
