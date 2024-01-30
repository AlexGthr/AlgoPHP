<?php 

class Titulaire {
    
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        $this->ville = $ville;
        $this->comptes = []; // Tableau DES comptes
    }


    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getDateDeNaissance(): DateTime
    {
        return $this->dateDeNaissance;
    }
    public function setDateDeNaissance(DateTime $dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }


    public function getVille(): string
    {
        return $this->ville;
    }
    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }


    // Method pour faire un calcul de l'age si besoin
    public function calculAge() {
        $age = date_diff($this->dateDeNaissance, new DateTime());
        return $age->format("%y ans");
    }

    // Method pour ajouter automatiquement un compte dans un tableau pour le lié au Titulaire
    public function addCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }

    // Method pour faire un affichage des comptes
    public function afficherCompte() {
        $result = "<h1> Compte bancaire de $this : </h1><br><ul>";

        foreach($this->comptes as $compte) {
            $result .= "<li>$compte</li><br>";
        }

        $result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return $this->nom. " " . $this->prenom;
    }
}
