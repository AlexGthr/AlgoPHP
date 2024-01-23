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

$age = 10;

if ($age >= 6 && $age <= 7) {
    $cat = "POUSSIN";
}
else if ($age >= 8 && $age <= 9) {
    echo "L'enfant qui à $age ans appartient à la catégorie PUPILLE.";
}
else if ($age >= 10 && $age <= 11) {
    echo "L'enfant qui à $age ans appartient à la catégorie MINIME.";
}
else if ($age >= 12) {
    echo "L'enfant qui à $age ans appartient à la catégorie CADET.";
}
else {
    echo "Il n'y as pas de catégorie avec l'age ($age) de l'enfant.";
}

?>
