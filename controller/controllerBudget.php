<?php
require('model/BudgetManager.php');

function budget()
{
    $bugetManager = new BudgetManager();
    $answer = $bugetManager->getBudget();
    require('view/budgetView.php');
}

function updateSolde($newSolde)
{
    $budgetManager = new BudgetManager();
    $affectedLines = $budgetManager->postSolde($newSolde);
    if($affectedLines === false)
    {
        die('Impossible d ajouter le nouveau solde');
    }
    else{
        header('Location: index.php?action=budget');
    } 
}

function updateIncomes($newIncomes)
{
    $budgetManager = new BudgetManager();
    $affectedLines = $budgetManager->postIncomes($newIncomes);
    if($affectedLines === false)
    {
        die('impossible dajouter lke revenu');
    }
    else
    {
        header('Location: index.php?action=budget');
    }
}

function updateSavings($newSavings)
{
    $budgetManager = new BudgetManager();
    $affectedLines = $budgetManager->postSavings($newSavings);

    if($affectedLines === false)
    {
        die('impossible dajouter lke revenu');
    }
    else
    {
        header('Location: index.php?action=budget');
    }
}

function addExpense($date, $nature, $amount)
{
    $budgetManager = new BudgetManager();
    $affectedLines = $budgetManager->postExpense($date, $nature, $amount);
    $budgetManager->updateTotalExpense();
    if($affectedLines === false)
    {
        die('impossible dajouter lke revenu');
    }
    else
    {
        header('Location: index.php?action=budget');
    }
}