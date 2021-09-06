const btnAction = document.getElementById("btnAction");
let btnRadioBudget = document.getElementsByClassName("inputRadio");
const bigBox = document.getElementById("bigBox");
//div container qui contient le formulaire
const divForm = document.createElement("div");
divForm.setAttribute("id", "divForm");
const br1 = document.createElement("br");
const br2 = document.createElement("br");
const br3 = document.createElement('br');
//elements HTML pour créer les formulaires de modification
const form = document.createElement("form");
form.setAttribute('id', 'formulaire');
form.setAttribute('method', 'post');

const labelTitleForm = document.createElement('h3');
const labelOldAmount = document.createElement("label");
const labelNewAmount = document.createElement("label");
const inputNewAmount = document.createElement("input");
inputNewAmount.setAttribute("type", "number");
const btnValider = document.createElement("button");

//formulaire pour les economies
const inputSavings = document.createElement('input');
inputSavings.setAttribute('type', 'number');
inputSavings.setAttribute('name', 'newSavings');
const buttonAddSavings = document.createElement('button');
buttonAddSavings.setAttribute('id', 'buttonAddSavings');
const buttonRemoveSavings = document.createElement('button');
buttonRemoveSavings.setAttribute('id', 'buttonRemoveSavings');

//form expenses
const labelDateExpense = document.createElement('label');
const inputDateExpense = document.createElement('input');
inputDateExpense.setAttribute('type', 'date');
inputDateExpense.setAttribute('name', 'dateExpense');
const labelNatureExpense = document.createElement('label');
const inputNatureExpense = document.createElement('input');
inputNatureExpense.setAttribute('type', 'text');
inputNatureExpense.setAttribute('name', 'natureExpense');
const labelAmountExpense = document.createElement('label');
const InputAmountExpense = document.createElement('input');
InputAmountExpense.setAttribute('type', 'number');
InputAmountExpense.setAttribute('name', 'amountExpense');

btnAction.addEventListener("click", function () {
  for (element of btnRadioBudget) {
    if (element.checked === true) {
      switch (element.id) {
        case "solde":
          addForm("solde");
          addEndForm();
          break;

        case "depenses":
          addFormExpenses();
          addEndForm();
          break;

        case "revenus":
          addForm("revenus");
          addEndForm();
          break;

        case "economies":
          addFormSavings();
          addEndForm();
          break;
      }
    }
  }

  btnAction.disabled = true;
});

//function qui crée le formulaire pour modifier la solde actuelle ou le revenu
function addForm(element) {
  if(element === "solde"){
    labelTitleForm.textContent = "Modification du solde";
     amount = actual_amount;
    inputNewAmount.setAttribute('name', 'newAmount');
    form.setAttribute('action', 'index.php?action=updateSolde');

  }else{
    labelTitleForm.textContent = "Modification des revenus";
    amount = incomes;
    inputNewAmount.setAttribute('name','newAmountIncomes');
    form.setAttribute('action', 'index.php?action=updateIncomes');
  
  }
  form.appendChild(labelTitleForm);
  labelOldAmount.textContent = "Dernier "+ element + " " + amount  ;
  labelOldAmount.setAttribute("id", "labelOldAmount");
  form.appendChild(labelOldAmount);
  form.appendChild(br1);
  labelNewAmount.textContent = "Nouveau " + element + " : ";
  form.appendChild(labelNewAmount);
  form.appendChild(inputNewAmount);
  form.appendChild(br2);
}

btnValider.addEventListener("click", function () {
  bigBox.removeChild(form);
  btnAction.disbaled = false;
});

//Savings form
function addFormSavings(){
  form.setAttribute('action', 'index.php?action=updateSavings');
  labelTitleForm.textContent = "Modifications des économies";
  form.appendChild(labelTitleForm);
  inputSavings.setAttribute('value', savings);
  form.appendChild(inputSavings);
  form.appendChild(br1);
  buttonAddSavings.textContent="Ajouter 5";
  form.appendChild(buttonAddSavings);
  buttonRemoveSavings.textContent = "Enlever 5";
  form.appendChild(buttonRemoveSavings);
  form.appendChild(br2);
}

//expenses form
function addFormExpenses(){
  form.setAttribute('action', 'index.php?action=addExpense');
  labelTitleForm.textContent = "Ajouter des dépenses";
  form.appendChild(labelTitleForm);
  labelDateExpense.textContent = "Date : ";
  form.appendChild(labelDateExpense);
  form.appendChild(inputDateExpense);
  form.appendChild(br1);
  labelNatureExpense.textContent = "Nature : ";
  form.appendChild(labelNatureExpense);
  form.appendChild(inputNatureExpense);
  form.appendChild(br2);
  labelAmountExpense.textContent = "Montant : ";
  form.appendChild(labelAmountExpense);
  form.appendChild(InputAmountExpense);
  form.appendChild(br3);
}

//end's form
function addEndForm(){
  btnValider.textContent = "Valider";
  btnValider.setAttribute("id", "btnValider");
  form.appendChild(btnValider);
  divForm.appendChild(form);
  bigBox.appendChild(divForm);
}

buttonAddSavings.addEventListener('click', function(e){
  e.preventDefault();
  savings = Number(savings) + 5;
  inputSavings.setAttribute('value', savings);
})

buttonRemoveSavings.addEventListener('click', function(e){
  e.preventDefault();
  savings = Number(savings) - 5;
  inputSavings.setAttribute('value', savings);
})