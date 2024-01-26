<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>

<?php 

// Je crée une variable URL qui contiendra l'url, et une variable nbaffichage qui
// prendra en compte le nombre d'affichage voulu.
$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nbaffichage = 8;

// Je crée ensuite la fonction pour repeter l'affichage
function repeterImage($url, $nbaffichage) {

    // Je crée une variable resultat vide, que je pourrais concatener pendants la boucle
    $resultat = "";

    // La boucle for qui continuera tant que $i est inférieur à nbaffichage
    for($i = 0; $i < $nbaffichage; $i++) {

        // J'insère la balise img autant de fois que la boucle tourne
        $resultat .= "<img src='$url'>";
        }

        // et je renvoi le resultat
        return $resultat;
}

echo repeterImage($url, $nbaffichage);