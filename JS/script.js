// SELECTEURS
const displayScore = document.querySelector("#score-display");
const displayScoreSecond = document.querySelector("#scoreSecond");
const clickBtn = document.querySelector("#btn-click");
const saveBtn = document.querySelector("#save-btn");
const resetBtn = document.querySelector("#reset-btn");
const itemBtn1 = document.querySelector("#item-1");
const itemBtn2 = document.querySelector("#item-2");
const itemBtn3 = document.querySelector("#item-3");
const itemBtn4 = document.querySelector("#item-4");
const itemsCost1 = document.querySelector("#cost1");
const itemsCost2 = document.querySelector("#cost2");
const itemsCost3 = document.querySelector("#cost3");
const itemsCost4 = document.querySelector("#cost4");
const itemsLevel1 = document.querySelector("#level1");
const itemsLevel2 = document.querySelector("#level2");
const itemsLevel3 = document.querySelector("#level3");
const itemsLevel4 = document.querySelector("#level4");

// VARIABLES
let score = 0;
let clickValue = 1;
let itemCost1 = 20;
let itemLevel1 = 0;
let itemCost2 = 40;
let itemLevel2 = 0;
let itemCost3 = 100;
let itemLevel3 = 0;
let itemCost4 = 1000;
let itemLevel4 = 0;

// EVENT LISTENERS
clickBtn.addEventListener("click", () => {
  scoreValue(clickValue);
});
itemBtn1.addEventListener("click", () => {
  buyItem1();
});
itemBtn2.addEventListener("click", () => {
  buyItem2();
});
itemBtn3.addEventListener("click", () => {
  buyItem3();
});
itemBtn4.addEventListener("click", () => {
  buyItem4();
});
saveBtn.addEventListener("click", (e) => {
  e.preventDefault();
  saveGame();
});
resetBtn.addEventListener("click", () => {
  resetGame();
});

// =======================================> FUNCTIONS

//Fonction pour charger la partie entamée //TODO #7
function loadGame() {
  let savedGame = JSON.parse(localStorage.getItem("gameSave"));
  if (typeof savedGame.score !== "undefined") score = savedGame.score;
  if (typeof savedGame.clickValue !== "undefined")
    clickValue = savedGame.clickValue;
  if (typeof savedGame.itemCost1 !== "undefined")
    itemCost1 = savedGame.itemCost1;
  if (typeof savedGame.itemLevel1 !== "undefined")
    itemLevel1 = savedGame.itemLevel1;
  if (typeof savedGame.itemCost2 !== "undefined")
    itemCost2 = savedGame.itemCost2;
  if (typeof savedGame.itemLevel2 !== "undefined")
    itemLevel2 = savedGame.itemLevel2;
  if (typeof savedGame.itemCost3 !== "undefined")
    itemCost3 = savedGame.itemCost3;
  if (typeof savedGame.itemlevel3 !== "undefined")
    itemLevel3 = savedGame.itemLevel3;
  if (typeof savedGame.itemCost4 !== "undefined")
    itemCost4 = savedGame.itemCost4;
  if (typeof savedGame.itemlevel4 !== "undefined")
    itemLevel4 = savedGame.itemLevel4;
}

//FONCTIONS DES ITEMS //TODO #4
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
    scoreSecondUpdate();
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
    scoreSecondUpdate();
  }
}
// Fonction assignant le prix du troisiéme item
function buyItem3() {
  if (score >= itemCost3) {
    score = score - itemCost3;
    itemLevel3++;
    itemCost3 = Math.round(itemCost3 * 1.7);

    //Affichage
    displayScore.innerHTML = score;
    itemsCost3.innerHTML = itemCost3;
    itemsLevel3.innerHTML = itemLevel3;
    scoreSecondUpdate();
  }
}
// Fonction assignant le prix du quatrième item
function buyItem4() {
  if (score >= itemCost4) {
    score = score - itemCost4;
    itemLevel4++;
    itemCost4 = Math.round(itemCost4 * 1.7);

    //Affichage
    displayScore.innerHTML = score;
    itemsCost4.innerHTML = itemCost4;
    itemsLevel4.innerHTML = itemLevel4;
    scoreSecondUpdate();
  }
}

// Fonction assignant la valeur d'incrémentation du score //TODO #1
function scoreValue(value) {
  score = score + value;
  displayScore.innerHTML = score;
}

// Fonction pour donner la valeur du click à chaques secondes //TODO #2
function scoreSecondUpdate() {
  scorePerSecond =
  itemLevel1 + itemLevel2 * 5 + itemLevel3 * 20 + itemLevel4 * 70;
  displayScoreSecond.innerHTML = `${scorePerSecond} <i class="fa-sharp fa-solid fa-ghost"></i> par seconde`;
}
//Fonction pour sauvegarder la partie en Local //TODO #5
function saveGame() {
  let gameSave = {
    score: score,
    clickValue: clickValue,
    itemCost1: itemCost1,
    itemLevel1: itemLevel1,
    itemCost2: itemCost2,
    itemLevel2: itemLevel2,
    itemCost3: itemCost3,
    itemLevel3: itemLevel3,
    itemCost4: itemCost4,
    itemLevel4: itemLevel4,
  };
  localStorage.setItem("gameSave", JSON.stringify(gameSave));
}

//Fonction pour Reset la partie //TODO #9
function resetGame() {
  if (confirm("Êtes vous sur de vouloir recommencer la partie?")) {
    let gameSave = {};
    localStorage.setItem("gameSave", JSON.stringify(gameSave));
    location.reload();
  }
}

//Au chargement de la page je lance la récupération de la sauvegarde //TODO #8
window.onload = function () {
  loadGame();
  scoreSecondUpdate();
  displayScore.innerHTML = score;
  itemsCost1.innerHTML = itemCost1;
  itemsLevel1.innerHTML = itemLevel1;
  itemsCost2.innerHTML = itemCost2;
  itemsLevel2.innerHTML = itemLevel2;
  itemsCost3.innerHTML = itemCost3;
  itemsLevel3.innerHTML = itemLevel3;
  itemsCost4.innerHTML = itemCost4;
  itemsLevel4.innerHTML = itemLevel4;
};

//Fonction auto-incrémentation en fonction du niveau //TODO #3
setInterval(function () {
  score = score + itemLevel1;
  score = score + itemLevel2 * 5;
  score = score + itemLevel3 * 20;
  score = score + itemLevel4 * 70;
  displayScore.innerHTML = score;
  //Ici on ajoute un display de plus, dans le titre de la page pour la visibilitée dans l'onglet en temps réél
  document.title = score + " Ghost - Clicker";
}, 1000);

// Fonction permettant la sauvegarde automatique toutes les 50 secondes //TODO #6
setInterval(function () {
  saveGame();
}, 50000);
