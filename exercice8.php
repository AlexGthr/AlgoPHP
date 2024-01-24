<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme : <ul><li>1 * 8 = 8</li>
            <li>2 * 8 = 16</li>
            <li>3 * 8 = 24</li>
        </ul>
</p>

<h2>Résultat</h2>

<?php

// Création des variables qui contiennent les valeurs à calculer
$chiffre = 8;
$chiffreaCaculer = $chiffre;

echo "Boucle FOR : <br>";  // On crée une boucle FOR : for($i = 1; TANT QUE $i est inférieur ou égale à ..; On incrémente $i)
for($i = 1; $i <= 10; $i++) {
    $chiffreaCaculer = $chiffre * $i;
    echo "$chiffre * $i = $chiffreaCaculer <br>";
}

echo "<br>Boucle WHILE : <br>";  // Deuxieme possibilité avec WHILE : On définie $i ($j ici) puis while(TANT QUE $i <= 10 alors continue)
$j = 1;
while($j <= 10) {
    $chiffreaCaculer = $chiffre * $j;
    echo "$chiffre * $j = $chiffreaCaculer <br>";
    $j++;
}
?>