<?php

// Permet d'inclure mes class PHP au document
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Variable objet
$auteurUn = new Auteur("King", "Stephen");
$auteurDeux = new Auteur("Gauthier", "Alex");

$livreUn = new Livre("Ca", 1138, 1986, 20, $auteurUn);
$livreDeux = new Livre("Simetierre", 374, 1983, 15, $auteurUn);
$livreTrois = new Livre("Le fléau", 823, 1978, 14, $auteurUn);
$livreQuatre = new Livre("Shining", 447, 1977, 16, $auteurUn);
$livreCinq = new Livre("Teste", 500, 2024, 50, $auteurDeux);

echo $auteurUn->afficherBibliographie();
echo "<br><br>";
echo $auteurDeux->afficherBibliographie();