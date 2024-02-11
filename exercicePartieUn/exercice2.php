<h1>Exercice 2</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$contenuPhrase = "Notre formation DL commence aujourd'hui"; // Création de la variable
$nbmotscontenuPhrase = str_word_count($contenuPhrase); // On stock dans une autre variable le nombre de mots grâce à STR_WORD_COUNT()
echo "La phrase « $contenuPhrase » contient $nbmotscontenuPhrase mots."; // Puis on l'affiche

?>