<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. 

v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3

Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :</p>

<h2>Résultat</h2>

<?php 

class Voiture {
    public string $marque;
    public string $modele;
    public string $nbPortes;
    public int $vitesseActuel;
    public bool $demarrer;

    // Fonction __construct
    public function __construct(string $marque, string $modele, string $nbPortes, int $vitesseActuel = 0, bool $demarrer = false) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuel = $vitesseActuel;
        $this->demarrer = $demarrer;
    }


    // ======= GET SET $marque =======
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    // ======= GET SET $modele =======
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    // ======= GET SET $nbPortes =======
    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
        return $this;
    }

    // ======= GET SET $vitesseActuel =======
    public function getVitesseActuel()
    {
        return $this->vitesseActuel;
    }
    public function setVitesseActuel($vitesseActuel)
    {
        $this->vitesseActuel = $vitesseActuel;
        return $this;
    }

    // ======= GET SET $demarrer =======
    public function getDemarrer()
    {
        return $this->demarrer;
    }
    public function setDemarrer($demarrer)
    {
        $this->demarrer = $demarrer;
        return $this;
    }


    public function __toString() {
        return $this->marque." ".$this->modele." " .$this->nbPortes." ". $this->vitesseActuel." ". $this->demarrer."<br>";
    }


    public function demarrerVehicule($demarrer) {
        if ($this->getDemarrer(false)) {
            $this->setDemarrer(true);
            echo "Le véhicule".$this->getMarque." ".$this->getModele." démarre.";
        }
        else {
            echo "Le véhicule".$this->getMarque." ".$this->getModele." démarre.";
        }
        return $demarrer;
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo $v2;

echo demarrerVehicule($v1);