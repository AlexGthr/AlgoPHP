<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php 

$prixFranc = 100;
$prixEuro = $prixFranc / 6.55957;
$format_prixEuro = number_format($prixEuro, 2);

echo "Montant en francs : $prixFranc <br>";
echo "$prixFranc francs = $format_prixEuro €.";

?>