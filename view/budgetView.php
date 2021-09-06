<?php $style = "public/css/styleBudget.css"?>
<?php $title="Budget"; ?>

<?php ob_start();?>
    <?php
while($data = $answer->fetch())
{
    ?>
    <h1>Budget</h1>
    <menu>

    </menu>
    <button id="btnAction">Actions</button>
    <div id="bigBox">
        <section id="container">
            <section class="element">
                <input class="inputRadio" id="solde" name="budget" type="radio">
                <label>Solde Actuel : <?= htmlspecialchars($data['actual_amount']); ?></label><br>
            </section>
            <section class="element">
                <input class="inputRadio" id="depenses" name="budget" type="radio">
                <label>Dépenses : <?= htmlspecialchars($data['expenses']); ?> </label><br>
            </section>
            <section class="element">
                <input class="inputRadio" id="revenus" name="budget" type="radio">
                <label>Revenus : <?= htmlspecialchars($data['incomes']); ?> </label><br>
            </section>
            <section class="element">
                <input class="inputRadio" id="economies" name="budget" type="radio">
                <label>Economies : <?= htmlspecialchars($data['savings']); ?> </label>
            </section>
        </section>
    </div>
    <?php
$actual_amount = $data['actual_amount'];
$expenses = $data['expenses'];
$incomes = $data['incomes'];
$savings = $data['savings'];
?>
    <script>
    <?php
       echo "let actual_amount ='$actual_amount';";
       echo "let expenses = '$expenses';";
       echo "let incomes = '$incomes';";
       echo "let savings = '$savings';";
   ?>
    </script>
    <?php   
}
$answer ->closeCursor();
?>
 <script type="text/javascript" src="public/js/scriptBudget.js"></script>
<?php $content = ob_get_clean(); ?>
   
<?php require('template.php'); ?>