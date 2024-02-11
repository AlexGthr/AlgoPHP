<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité <br>
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

</p>

<h2>Résultat</h2>

<?php 

// On crée les variables qui vont permettrent le calcul
$prixUnitaire = 9.99;
$quantite = 5;
$tva = 0.2;
$totalTVA = ($prixUnitaire * $quantite) * $tva;
$total = $prixUnitaire * $quantite + $totalTVA;

// Puis on affiche le resultat
echo "Prix unitaire de l'article : $prixUnitaire<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : $total €";

?>
