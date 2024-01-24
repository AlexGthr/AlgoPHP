<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<h2>Résultat</h2>

<?php

// Je déclare mon tableau "KEY" -> "VALEUR"
$tableauPrenomLang = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

// Je tri mon tableau par ordre alphabétique
ksort($tableauPrenomLang);

// Je crée la boucle qui affichera le tableau
foreach($tableauPrenomLang as $prenom => $lang) {
switch ($lang) {
    case "FRA":
        echo "Salut $prenom ! <br>";
        break;
    case "ESP":
        echo "Hola $prenom ! <br>";
        break;
    case "ENG":
        echo "Hello $prenom ! <br>";
        break;
    default:
        echo "Je ne connais pas ta langue, désolé. Sorry. MEA CULPA";

}
}