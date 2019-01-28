//how to ask questions.
//Jquery
//welke voor geschreven functies zijn er.
//Delen in github.

console.log("main.js 001");

// // Variables
var HalloGorilla = "Hi Gorilla!";
var GorillaText = "Ik ben een ";

var GorillaGetal_a = 16;
var GorillaGetal_b = 8;
var GorillaGetal_c;

////////////////////////////////////////////////////////////////////////////////////////////////

//Operators
// +	Addition
// -	Subtraction
// *	Multiplication
// /	Division
// %	Modulus (Division Remainder)
// ++	Increment
// --  Decrement

// console.log(GorillaGetal_c);

GorillaGetal_c = GorillaGetal_a + GorillaGetal_b;

//console.log(GorillaGetal_c); //Print het argument in de console (F12 in GoogleChrome);

//GorillaText = GorillaText + 'Gorilla!';

//GorillaText += "Gorilla!";

//console.log(GorillaText);   //Print het argument in de console (F12 in GoogleChrome);

////////////////////////////////////////////////////////////////////////////////////////////////

//Arrays
var GorillaAfbeeldingen = [
  "img/Gorilla1.jpg",
  "img/Gorilla2.jpg",
  "img/Gorilla3.jpg",
  "img/Gorilla4.jpg"
];

// GorillaAfbeeldingen[0] = "Yeaah!";

// console.log(GorillaAfbeeldingen);
// console.log(GorillaAfbeeldingen[1]);

////////////////////////////////////////////////////////////////////////////////////////////////

//Functions

function GorillaTaken() {
  console.log("Taak 1");
  console.log("Taak 2");
  console.log("Taak 3");
  console.log("Taak 4");
}

// GorillaTaken();
// GorillaTaken();
// GorillaTaken();

////////////////////////////////////////////////////////////////////////////////////////////////

//Functions met parameters
var nameVanGebruiker2 = "Joep";

function roepGorillaBijNaam(naamVanGorilla, auto) {
  console.log("Heee Gorilla met de naam: " + naamVanGorilla);
  console.log(auto);
}

//roepGorillaBijNaam("thomas");

//roepGorillaBijNaam(nameVanGebruiker2);

//roepGorillaBijNaam("Harambe", "Opel");

////////////////////////////////////////////////////////////////////////////////////////////////

// Function die iets returnen

function OptellenVanBananen(bananen_A, bananen_B){

    var totaalAantalBananen = bananen_A + bananen_B;

    //console.log(totaalAantalBananen);

    return totaalAantalBananen;

}

//var totaalBananen = OptellenVanBananen(8, 16) + OptellenVanBananen(16, 32);

//console.log(OptellenVanBananen(8, 16));

// console.log(OptellenVanBananen(16, 32));

function getRandomColor() {
  var letters = "0123456789ABCDEF";

  var color = "#";

  for (var i = 0; i < 6; i++) {
    var random = Math.random() * 16;
    //console.log(random);

    var afgerondGetal = Math.floor(random);
    //console.log(afgerondGetal);

    color += letters[afgerondGetal];

    //console.log(color);
  }

  return color;
}

//getRandomColor();

// console.log(getRandomColor());
// console.log(getRandomColor());
// console.log(getRandomColor());
// console.log(getRandomColor());
// console.log(getRandomColor());

////////////////////////////////////////////////////////////////////////////////////////////////

// DOM
window.onload = function() {
  var teller = 0;

  var h1Counter = document.getElementById("h1Counter");

  console.log(h1Counter);

  document.addEventListener("click", addCounter);

  function addCounter() {
    teller++;
    h1Counter.innerHTML = teller;
    console.log(h1Counter.innerHTML);
  }

  var imgClicker = document.getElementById("imgClicker");

  console.log(imgClicker);

  imgClicker.addEventListener("click", changeImg);

  var GorillaAfbeeldingen = [
    "img/Gorilla1.jpg",
    "img/Gorilla2.jpg",
    "img/Gorilla3.jpg",
    "img/Gorilla4.jpg"
  ];

  //console.log(GorillaAfbeeldingen[0]);

  var index = 0;

  function gitgitgit() {
    console.log("Github");
    console.log("Finished User Story 200532444");
  }

  function changeImg() {
    console.log("changeImg index: " + index);

    imgClicker.src = GorillaAfbeeldingen[index];

    index++;

    if (index > 3) {
      index = 0;
    }
  }

  // /* The text */
  // var h2Text = "Hallo Gorilla's wat vinden jullie nou van Javascript?";
  // var i = 0;

  // function typeWriter(text){
  //     console.log(i);
  //     if (i < text.length) {
  //         document.getElementById("h2Text").innerHTML += text.charAt(i);
  //         i++;
  //         setTimeout(function(){ typeWriter(h2Text) }, 75);
  //     }
  // }

  // typeWriter(h2Text);
};
