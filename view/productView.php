<?php $style="public/css/styleProducts.css"?>
<?php $title="Produits-Liste de courses";?>
<?php ob_start();?>

<h1>Liste de courses</h1>

<button id="add">Ajouter</button>
<button id="update">Modifier</button>
<button id="delete">Supprimer</button>
<button id="deleteAll">Tout supprimer</button>

<div id="bigBox">
<table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Magasin</th>
        <th>Type de produit</th>
        <th>Stock Actuel</th>
        <th>Stock Minimale</th>
    </tr>
<?php
while($data = $answer->fetch())
{
    $productData = array();
    $allProductData = array()
    ?>
    <tr>
        <td> <?= $data['name'];    $productData[]  = $data['name'];  ?> </td>
       
        <td> <?= $data['price'];?> </td>
        <td> <?= $data['store'];?> </td>
        <td> <?= $data['kind'];?> </td>
        <td> <?= $data['actualStock'];?> </td>
        <td> <?= $data['minStock'];?> </td>
</tr>
   <?php
}
$answer -> closeCursor();
?>
</table>
</div>
<script type="text/javascript" src="public/js/scriptProducts.js"></script>
<?php $content =ob_get_clean();?>
<?php require('template.php');?>