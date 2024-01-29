<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : 
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";
</p>

<h2>Résultat</h2>

<?php 

// Je crée la class Voiture
class Voiture {

    // Je déclare les attributs marque/modele
    protected string $marque;
    protected string $modele;

    public function __construct(string $marque, string $modele) {

        $this->marque = $marque;
        $this->modele = $modele;

    }

        // GET / SET  MARQUE
        public function getMarque()
        {
                return $this->marque;
        }
        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        // GET / SET  MODELE
        public function getModele()
        {
                return $this->modele;
        }
        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }

        // __toString
        public function __toString() {
            return $this->marque. " " .$this->modele;
        }

        // Method GETINFOS qui recupère le __tostring et l'affiche
        public function getInfos() {
            return $this;
        }
    }


class VoitureElec extends Voiture {
    
    // Je déclare l'attributs
    private int $autonomie;

    // Je crée la method construct avec deux paramètre en plus qui iront récupéré les éléments du construct PARENT
    public function __construct($marque, $modele, int $autonomie) {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

        // GET / SET  AUTONOMIE
    public function getAutonomie()
    {
        return $this->autonomie;
    }

    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;

        return $this;
    }

    // Method GETINFOS qui recupère le __tostring et l'affiche
    public function getInfos() {
        return $this." ".$this->autonomie;
    }
}


$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3", 100);

echo $v1->getInfos();
echo "<br>";
echo $ve1->getInfos();