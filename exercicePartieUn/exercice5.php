<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php 

$prixFranc = 100;  // On crée la variable
$prixEuro = $prixFranc / 6.55957;  // On crée la variable qui va calculer le taux
$format_prixEuro = number_format($prixEuro, 2); // On crée une nouvelle variable qui va contenir le resultat final suivis du NUMBER_FORMAT($VARIABLE, NOMBRE DECIMAL APRES VIRGULE) 

// Puis on affiche le resultat
echo "Montant en francs : $prixFranc <br>";
echo "$prixFranc francs = $format_prixEuro €.";

?>