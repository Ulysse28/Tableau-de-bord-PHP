<?php $style="public/css/styleWelcome.css"?>
<?php $title="Bienvenue ! ";?>
<?php ob_start();?>

<h1>Bienvenue Ulysse</h1>
<section id="flex">
    <div class="box" id="planning">
        <h3>Planning</h3>
        <p>Evenements du jour : </p>
        <ul>
            <li>8h-Faire mon CV</li>
            <li>10h-Coder mon portodolio</li>
        </ul>
    </div>
    <div class="box" id="todo">
        <h3>Todo-list</h3>
        <p>Tâches du jour :</p>
        <ul>
            <li>Coder</li>
            <li>Devenir Développeur</li>
        </ul>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>