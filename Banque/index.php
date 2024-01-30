<?php

// Permet d'inclure mes class PHP au document
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});


$Titulaire1 = new Titulaire("Gauthier", "Alex", "17-01-1997", "Duppigheim");
$Titulaire2 = new Titulaire("Teste", "Teste", "17-01-1998", "Strasbourg");

$compte1 = new Compte("Compte courant", 1500, "€", $Titulaire1);
$compte2 = new Compte("Livret A", 3000, "€", $Titulaire1);
$compte3 = new Compte("Compte courant", 1500, "€", $Titulaire2);

echo $Titulaire1->afficherCompte();
echo $compte1->crediterCompte(600);
echo $compte2->crediterCompte(500);
echo $compte1->debiterCompte(100);
echo $compte1->debiterCompte(3000);
echo $Titulaire1->afficherCompte();
echo $compte1->virementCompte(50, $compte2);
echo $Titulaire1->afficherCompte();
