<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
<ul><li>Poussin : entre 6 et 7 ans</li>
    <li>Pupille : entre 8 et 9 ans</li>
    <li>Minime : entre 10 et 11 ans</li>
    <li>Cadet : à partir de 12 ans</li>
</ul>
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php 

// Création de la variable AGE
$dateDeNaissance = 10;

// Teste des conditions puis affichage du resultat
if ($dateDeNaissance >= 6 && $dateDeNaissance <= 7) {
    echo "L'enfant qui à $dateDeNaissance ans appartient à la catégorie POUSSIN.";
}
else if ($dateDeNaissance >= 8 && $dateDeNaissance <= 9) {
    echo "L'enfant qui à $dateDeNaissance ans appartient à la catégorie PUPILLE.";
}
else if ($dateDeNaissance >= 10 && $dateDeNaissance <= 11) {
    echo "L'enfant qui à $dateDeNaissance ans appartient à la catégorie MINIME.";
}
else if ($dateDeNaissance >= 12) {
    echo "L'enfant qui à $dateDeNaissance ans appartient à la catégorie CADET.";
}
else {
    echo "Il n'y as pas de catégorie avec l'age ($dateDeNaissance) de l'enfant.";
}

?>


// POSSIBLE D'OPTIMISER EN COMMENCANT LES IF PAR LA VALEUR LA PLUS HAUTE ET DE CREE UNE VARIABLE QUI contient LA PHRASE POUR EVITER DE LA REECRIRE PLUSIEURS FOIS
