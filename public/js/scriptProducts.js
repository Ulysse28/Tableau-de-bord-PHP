const divForm = document.createElement("div");
divForm.setAttribute("id", "divForm");
const bigBox = document.getElementById("bigBox");

//éléments du formulaire
let form = document.createElement('form');
form.setAttribute('method', 'post');
form.setAttribute('action', 'index.php?products=addProduct');
const titeForm = document.createElement('h3');
titeForm.textContent ="Ajouter un produit";

//NOM
const labelName = document.createElement('label');
labelName.textContent = "Nom : ";
const inputName = document.createElement('input');
inputName.setAttribute('type', 'text');
inputName.setAttribute("name", "nameProduct");

//PRIX
const labelPrice = document.createElement('label');
labelPrice.textContent = "Prix : ";
const inputPrice = document.createElement('input');
inputPrice.setAttribute('type', 'number');
inputPrice.setAttribute("name", "priceProduct");

//MAGASIN
const labelStore = document.createElement('label');
labelStore.textContent = "Magasin : ";
const inputStore = document.createElement('input');
inputStore.setAttribute('type', 'text');
inputStore.setAttribute('name', 'storeProduct');

//type de produit
const labelKind = document.createElement('label');
labelKind.textContent = "Type : ";
const selectKind = document.createElement('select');
selectKind.setAttribute('name', 'kindProduct');

const optionRecurrent = document.createElement('option');
optionRecurrent.textContent = "Recurrent";
optionRecurrent.setAttribute('value', 'recurrent');

const optionNormal = document.createElement('option');
optionNormal.textContent = "Normal";
optionNormal.setAttribute('name', 'normal');

//STOCK ACTUEL
const labelActualStock = document.createElement('label');
labelActualStock.textContent = "Stock Actuel";
const inputActualStock = document.createElement('input');
inputActualStock.setAttribute('type', 'number');
inputActualStock.setAttribute('name', 'actualStock');


//STCOK MINIMAL
const labelMinStock = document.createElement('label');
labelMinStock.textContent = "Stock Minimal";
const inputMinStock = document.createElement('input');
inputMinStock.setAttribute('type', 'number');
inputMinStock.setAttribute('name', 'minStock');

//BouttonValider
let buttonValidate = document.createElement('button');
buttonValidate.setAttribute('id', 'btnValider');
buttonValidate.textContent = "Valider";

//br
const br1 = document.createElement('br');
const br2 = document.createElement('br');
const br3 = document.createElement('br');
const br4 = document.createElement('br');
const br5 = document.createElement('br');
const br6= document.createElement('br');
const br7 = document.createElement('br');
const br8 = document.createElement('br');


//Boutton pour ajouter un produits --> crée un formulaire
let buttonAdd = document.getElementById('add');
buttonAdd.addEventListener('click', function(){
    form.appendChild(titeForm);
    form.appendChild(labelName);
    form.appendChild(inputName);
    form.appendChild(br1);
    form.appendChild(labelPrice);
    form.appendChild(inputPrice);
    form.appendChild(br2);
    form.appendChild(labelStore);
    form.appendChild(inputStore);
    form.appendChild(br3);
    form.appendChild(labelKind);
    selectKind.appendChild(optionRecurrent);
    selectKind.appendChild(optionNormal);
    form.appendChild(selectKind)
    form.appendChild(br4);
    form.appendChild(labelActualStock);
    form.appendChild(inputActualStock);
    form.appendChild(br5);
    form.appendChild(labelMinStock);
    form.appendChild(inputMinStock);
    form.appendChild(br6);
    form.appendChild(buttonValidate);
    divForm.appendChild(form);
    bigBox.appendChild(divForm);
})

