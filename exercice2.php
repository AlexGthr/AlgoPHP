<h1>Exercice 2</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$contenuPhrase = "Notre formation DL commence aujourd'hui";
$nbmotscontenuPhrase = str_word_count($contenuPhrase);
echo "La phrase « $contenuPhrase » contient $nbmotscontenuPhrase mots.";

?>