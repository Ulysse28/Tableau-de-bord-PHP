<?php
require('controller/controllerBudget.php');
require('controller/controllerProducts.php');
require('controller/controllerWelcome.php');

if(isset($_GET['action']))
{
    if($_GET['action'] == 'updateSolde'){
       updateSolde($_POST['newAmount']);  
    }
    elseif($_GET['action'] == 'updateIncomes')
    {
        updateIncomes($_POST['newAmountIncomes']);
    }
    elseif($_GET['action'] == 'updateSavings')
    {
        updateSavings($_POST['newSavings']);
    }
    elseif($_GET['action'] == 'addExpense')
    {
        addExpense($_POST['dateExpense'], $_POST['natureExpense'], $_POST['amountExpense']);
    }
    elseif($_GET['action']== 'budget')
    {
        budget();
    }
}

elseif(isset($_GET['page']))
{
    if($_GET['page'] == 'products')
    {
            displayProducts();
    }
    
}

elseif(isset($_GET['products']))
{
    if($_GET['products'] == 'addProduct')
    {
        addProduct($_POST['nameProduct'], $_POST['priceProduct'], $_POST['storeProduct'], $_POST['kindProduct'], $_POST['actualStock'], $_POST['minStock']);
       
    }
}
else{
    welcome();
}


