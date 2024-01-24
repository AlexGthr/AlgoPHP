<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.</br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php 


// On crée les variables
$dateDeNaissance = 28;
$sexe = "H";
echo "Age : $dateDeNaissance<br>";
echo "Sexe : $sexe<br>";

// On crée nos conditions en booléen
$condition1 = $sexe == "F" && $dateDeNaissance >= 18 && $dateDeNaissance <= 35;
$condition2 = $sexe == "H" && $dateDeNaissance >= 20;

// On crée le if/else avec nos conditions
if ($condition1 ||  $condition2) { 
    echo "La personne est imposable.";
}
else {
    echo "La personne n'est pas imposable.";
}

?>