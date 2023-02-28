// SELECTEURS

const clickBtn = document.querySelector("#btn-click");
const itemBtn1 = document.querySelector("#item-1");
const itemBtn2 = document.querySelector("#item-2");
const displayScore = document.querySelector("#score-display");
const itemsCost1 = document.querySelector("#cost1");
const itemsLevel1 = document.querySelector("#level1");
const itemsCost2 = document.querySelector("#cost2");
const itemsLevel2 = document.querySelector("#level2");

// VARIABLES
let score = 0;
let clickPower = 1;
let itemCost1 = 20;
let itemLevel1 = 0;
let itemCost2 = 40;
let itemLevel2 = 0;

// EVENT LISTENERS
clickBtn.addEventListener("click", () => {
  scoreValue(clickPower);
});

itemBtn1.addEventListener("click", () => {
  buyItem1();
});
itemBtn2.addEventListener("click", () => {
  buyItem2();
});


// =======================================> FUNCTIONS

// Fonction assignant le prix du premier item
function buyItem1() {
  if (score >= itemCost1) {
    score = score - itemCost1;
    itemLevel1++;
    itemCost1 = Math.round(itemCost1 * 1.2);

    //Affichage
    displayScore.innerHTML = score;
    itemsCost1.innerHTML = itemCost1;
    itemsLevel1.innerHTML = itemLevel1;
  }
}
// Fonction assignant le prix du second item
function buyItem2() {
  if (score >= itemCost2) {
    score = score - itemCost2;
    itemLevel2++;
    itemCost2 = Math.round(itemCost2 * 1.7);

    //Affichage
    displayScore.innerHTML = score;
    itemsCost2.innerHTML = itemCost2;
    itemsLevel2.innerHTML = itemLevel2;
  }
}

// Fonction assignant la valeur d'incrémentation du score
function scoreValue(value) {
  score = score + value;
  displayScore.innerHTML = score;
}

//Fonction auto-incrémentation en fonction du niveau
setInterval(function () {
  score = score + itemLevel1;
  score = score + itemLevel2 * 5;
  displayScore.innerHTML = score;
}, 1000);
