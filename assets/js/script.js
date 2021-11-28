
let brands = document.getElementsByClassName("brands");
let brandsButtons = document.getElementsByClassName("cButton");
let rowCatalog = document.getElementsByClassName("rowCatalog");
let items = document.getElementsByClassName("items");

var myCarousel = document.querySelector('#carouselExampleControls')

let menuButton = document.getElementsByClassName("menuButton")[0];
let menuRow = document.getElementsByClassName("menuRow")[0];
menuButton.onclick = () => {
    menuButton.classList.toggle("activeMenuButton");
    menuRow.classList.toggle("activeMenuRow");
}

let buyButtons = document.getElementsByClassName("buyButton");
let orderForm = document.getElementsByClassName("cartRow")[0];
let brandsRow = document.getElementsByClassName("brandsRow")[0];
let sliderRow = document.getElementsByClassName("sliderRow")[0];
let cardsRow = document.getElementsByClassName("cardsRow")[0];
let cardsTitleRow = document.getElementsByClassName("cardsTitleRow")[0];

let products = document.getElementsByClassName("modelName");
let costs = document.getElementsByClassName("cost");
let productNameInput = document.getElementById("productName");
let productCostInput = document.getElementById("productCost");

for (let i = 0; i < buyButtons.length; i++) {
    buyButtons[i].addEventListener("click", function() {
        document.forms.orderForm.reset();
        buttonsControl(products[i], costs[i]);
        for(let q = 0; q < brands.length; q++){
            rowCatalog[q].style.display = "none"
            brands[q].classList.remove("openedCatalogLink");
        }
        brandsRow.classList.add("displayNone");
        sliderRow.classList.add("displayNone");
        cardsRow.classList.add("displayNone");
        cardsTitleRow.classList.add("displayNone");
        orderForm.classList.add("cartRowActive");
        orderForm.scrollIntoView({
            behavior: "smooth",
            block:    "center" 
         });
    }, false);
}

let cardButtons = document.getElementsByClassName("cardButton");
let cardModels = document.getElementsByClassName("cardModelName");
let cardCosts = document.getElementsByClassName("cardCost");

for (let i = 0; i < cardButtons.length; i++) {
    cardButtons[i].addEventListener("click", function() {
        document.forms.orderForm.reset();
        buttonsControl(cardModels[i], cardCosts[i]);
        for(let q = 0; q < brands.length; q++){
            rowCatalog[q].style.display = "none"
            brands[q].classList.remove("openedCatalogLink");
        }
        brandsRow.classList.add("displayNone");
        sliderRow.classList.add("displayNone");
        cardsRow.classList.add("displayNone");
        cardsTitleRow.classList.add("displayNone");
        orderForm.classList.add("cartRowActive");
        orderForm.scrollIntoView({
            behavior: "smooth",
            block:    "center" 
         });
    }, false);
}

let cardInfoButtons = document.getElementsByClassName("cardInfoButton")
for (let i = 0; i < cardInfoButtons.length; i++) {
    cardInfoButtons[i].addEventListener("click", function() {
        document.forms.orderForm.reset();
        buttonsControl(cardModels[i], cardCosts[i]);
        for(let q = 0; q < brands.length; q++){
            rowCatalog[q].style.display = "none"
            brands[q].classList.remove("openedCatalogLink");
        }
        brandsRow.classList.add("displayNone");
        sliderRow.classList.add("displayNone");
        cardsRow.classList.add("displayNone");
        cardsTitleRow.classList.add("displayNone");
        orderForm.classList.add("cartRowActive");
        orderForm.scrollIntoView({
            behavior: "smooth",
            block:    "center" 
         });
    }, false);
}

let aboutButtons = document.getElementsByClassName("aboutButton");
let cardMoreInfo = document.getElementsByClassName("cardMoreInfo");
let catalogCards = document.getElementsByClassName("catalogCards");
let closeInfo = document.getElementsByClassName("closeInfo");

for (let i = 0; i < aboutButtons.length; i++) {
    aboutButtons[i].addEventListener("click", function() {
        cardMoreInfo[i].classList.add("activeCardMoreInfo");
        cardsRow.classList.add("activeCardsRow");
        for(let i = 0; i < catalogCards.length; i++){
            catalogCards[i].classList.add('displayNone')
        }
        cardMoreInfo[i].scrollIntoView({
            behavior: "smooth",
            block:    "center",
         });
    }, false);
}

for (let i = 0; i < closeInfo.length; i++) {
    closeInfo[i].addEventListener("click", function() {
        cardMoreInfo[i].classList.remove("activeCardMoreInfo");
        cardsRow.classList.remove("activeCardsRow");
        for(let i = 0; i < catalogCards.length; i++){
            catalogCards[i].classList.remove('displayNone')
        }
        catalogCards[i].scrollIntoView({
            behavior: "smooth",
            block:    "center" 
         });
    }, false);
}
  
function buttonsControl(products, costs){
    productNameInput.value = products.innerHTML;
    productCostInput.value = costs.innerHTML;
}



let c = 0;
let arg = true;
myCarousel.addEventListener('slide.bs.carousel', function (event) {
    if(arg == true){
        let targetClasses = event.relatedTarget.classList;
        brands[c].classList.remove('activeBrand')

        if(targetClasses[1] == "item1"){
            c = 0;
        }
        if(targetClasses[1] == "item2"){
            c = 1;
        }
        if(targetClasses[1] == "item3"){
            c = 2;
        }
        if(targetClasses[1] == "item4"){
            c = 3;
        }
        brands[c].classList.add('activeBrand')
        }
})

let previousCatalog = 0;
let temp = 0;
for(let i = 0; i < brands.length; i++){
    brands[i].onclick = () => {
        orderForm.classList.remove("cartRowActive");
        for(let q = 0; q < brands.length; q++){
            rowCatalog[q].style.display = "none";
            brands[q].classList.remove("openedCatalogLink");
        }
        brands[i].classList.add("openedCatalogLink");
        rowCatalog[i].style.display = "flex";
        rowCatalog[i].scrollIntoView({
            behavior: "smooth",
            block:    "start" 
         });
         
    }

    brandsButtons[i].onclick = () => {
        orderForm.classList.remove("cartRowActive");
        for(let q = 0; q < brands.length; q++){
            rowCatalog[q].style.display = "none";
            brands[q].classList.remove("openedCatalogLink");
        }
        brands[i].classList.add("openedCatalogLink");
        rowCatalog[i].style.display = "flex";
        rowCatalog[i].scrollIntoView({
            behavior: "smooth",
            block:    "start" 
         });
    }
}

let closeOrderButton = document.getElementById("closeOrder");
closeOrderButton.onclick = () => {
    brandsRow.classList.remove("displayNone");
    sliderRow.classList.remove("displayNone");
    cardsRow.classList.remove("displayNone");
    cardsTitleRow.classList.remove("displayNone");
    for(let i = 0; i < cardMoreInfo.length; i++){
        cardMoreInfo[i].classList.remove("activeCardMoreInfo");
    }
    cardsRow.classList.remove("activeCardsRow");
    for(let i = 0; i < catalogCards.length; i++){
        catalogCards[i].classList.remove('displayNone')
    }
    document.forms.orderForm.reset();
    catalogBody.scrollIntoView({
        behavior: "smooth",
        block:    "start" 
     });
     setTimeout("orderForm.classList.remove(\"cartRowActive\")", 500);
    
}