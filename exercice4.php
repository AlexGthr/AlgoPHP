<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne"; // On crée la variable
$phraseaTester = $phrase; // On crée une nouvelle variable qui va contenir la valeur de la première, qui servira à tester la condition
$phraseaTester = str_replace(' ', '', $phraseaTester); // On utilise STR_REPLACE() pour retirer les espaces
$phraseaTester = strtoupper($phraseaTester); // On utilise STRTOUPPER() pour mettre la valeur en majuscule STRTOLOWER() pour la miniscule


if(strrev($phraseaTester) == $phraseaTester) {    // On crée la condition SI STRREV() (permet d'inverser les caractères d'une valeur A B C D -> D C B A)
    echo "« $phrase » est un Palindrome.";
}
else {
    echo "« $phrase » n'est pas un Palindrome.";
}

?>
