<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php 

$dateAnniversaire = new DateTime("17-01-1985");
$dateDuJour = new DateTime("21-05-2018");
$interval = $dateAnniversaire->diff($dateDuJour);


echo "Affichage (si la date courante est le ".$dateDuJour->format("d/m/Y").", et la date de naissance le ".$dateAnniversaire->format("d/m/Y")." :";
echo "<br> Age de la personne : ".$interval->y . " années, " . $interval->m . " mois et ". $interval->d. " jours.";
