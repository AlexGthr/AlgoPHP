<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales</p>

<h2>Résultat</h2>

<?php 

$noteEleve = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbnoteEleve = count($noteEleve);
$moyenne = array_sum($noteEleve)/$nbnoteEleve;

echo "Les notes obtenus par l'élève sont : ";

for($i = 0; $i < $nbnoteEleve; $i++) {
    echo $noteEleve[$i].", ";
}

echo "<br>Sa moyenne générale est donc de : ".number_format($moyenne, 2);
