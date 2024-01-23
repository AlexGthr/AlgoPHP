<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.</br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php 

$age = 28;
$sexe = "H";
echo "Age : $age<br>";
echo "Sexe : $sexe<br>";

$condition1 = $sexe == "F" && $age >= 18 && $age <= 35;
$condition2 = $sexe == "H" && $age >= 20;

if ($condition1 ||  $condition2) {
    echo "La personne est imposable.";
}
else {
    echo "La personne n'est pas imposable.";
}

?>