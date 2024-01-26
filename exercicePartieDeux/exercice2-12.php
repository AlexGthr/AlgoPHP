<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d'afficher les informations d'une variable.
Soit le tableau suivant : 
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.;</p>

<h2>Résultat</h2>

<?php 

// Je déclare mon tableau
$tableauValeurs = [true, "texte", 10, 25.369, array("valeur1", "valeur2")];

// Puis grâce à $i et une boucle FOR j'affiche chaque element séparément
for ($i = 0; $i < count($tableauValeurs); $i++) {
    echo var_dump($tableauValeurs[$i])."<br>";
}

