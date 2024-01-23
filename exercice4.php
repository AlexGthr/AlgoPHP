<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phraseaTester = $phrase;
$phraseaTester = str_replace(' ', '', $phraseaTester);
$phraseaTester = strtoupper($phraseaTester);


if(strrev($phraseaTester) == $phraseaTester) {
    echo "« $phrase » est un Palindrome.";
}
else {
    echo "« $phrase » n'est pas un Palindrome.";
}

?>
