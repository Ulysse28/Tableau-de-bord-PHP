<?php

class BudgetManager
{
    public function getBudget()
    {
        $bdd = $this->dbConnect();
        $answer = $bdd->query('SELECT actual_amount, expenses, incomes, savings FROM budget');
        return $answer;
    }

    public function postSolde($newSolde)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE budget SET actual_amount = :budget WHERE id = 1');
        $affectedLines = $req->execute(array('budget' => $newSolde));
        return $affectedLines;
    }

    public function postIncomes($newIncomes)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE budget SET incomes = :incomes WHERE id = 1 ');
        $affectedLines = $req->execute(array('incomes' => $newIncomes));
        return $affectedLines;                  
    }

    public function postSavings($newSaving)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE budget SET savings = :savings WHERE id = 1');
        $affectedLines = $req->execute(array('savings' => $newSaving));
        return $affectedLines;
    }

    public function postExpense($date, $nature, $amount)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO expenses(date, nature, amount) VALUES(:date, :nature, :amount)');
    $affectedLines =  $req ->execute(array(
            'date'=>$date,
            'nature'=>$nature,
            'amount'=>$amount
        ));
        return $affectedLines;
    }

    public function updateTotalExpense()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query('SELECT SUM(amount) AS depense_totale FROM expenses');
        while($data = $req->fetch())
        {
            $depense_totale = $data['depense_totale'];
        }
        $req = $bdd->prepare('UPDATE budget SET expenses = :expenses WHERE id = 1');
        $req->execute(array('expenses'=>$depense_totale));
    }

    private function dbConnect()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=Tableau de Bord;charset=utf8', 'root', 'root');
            return $bdd;
        }
        catch (Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    }

}