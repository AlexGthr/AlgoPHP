<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
</p>

<h2>Résultat</h2>

<?php 

// je déclare mes variables
$prix = 152;
$montantPayer = 200;
$monnaieARendre = $montantPayer - $prix;

echo "Montant à payer : $prix €<br>";
echo "Montant versé : $montantPayer €<br>";
echo "Reste à payer : $monnaieARendre €<br>";
echo "*******************<br>";

// Je déclare les variables des billets/piece 

$billet10 = 10;
$billet5 = 5;
$piece2 = 2;
$piece1 = 1;
$reste;

// Calcul du nombre de billet à rendre

$nbbillet10 = floor($monnaieARendre / $billet10);
$reste = $monnaieARendre - floor($billet10 * $nbbillet10);

$nbbillet5 = floor($reste / $billet5);
$reste = $reste - floor($billet5 * $nbbillet5);

$nbpiece2 = floor($reste / $piece2);
$reste = $reste - floor($piece2 * $nbpiece2);

$nbpiece1 = floor($reste / $piece1);
$reste = $reste - floor($piece1 * $nbpiece1);

echo "Rendue de monnaie :<br>";
echo "$nbbillet10 billets de 10 € // $nbbillet5 billets de 5 € // $nbpiece2 pièce de 2 € // $nbpiece1 pièce de 1 €.";
