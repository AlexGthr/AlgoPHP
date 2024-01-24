<h1>Exercice 1</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui". </br>
   Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase. (espaces inclus).</p>

<h2>Résultat</h2>

<?php

$contenuPhrase = "Notre formation DL commence aujourd'hui"; // Création de la variable qui contient la phrase
$nbcontenuPhrase = strlen($contenuPhrase); // On utilise STRLEN() pour compter le nombre de caractère et on le stock dans la variable $nbcontenuPhrase
echo "La phrase « $contenuPhrase » contient $nbcontenuPhrase caractères."; // Puis on affiche le resultat

?>