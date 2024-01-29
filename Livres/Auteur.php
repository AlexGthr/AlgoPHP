<?php 

class Auteur {
    
    private string $nom;
    private string $prenom;
    private array $livres; // Tableau LIVRES

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = []; // Tableau LIVRES
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

    public function addLivre(Livre $livre) {
        $this->livres[] = $livre; // Method pour ajouter un livre à mon tableau
    }

    // Method pour afficher les informations
    public function afficherBibliographie() {
        $result = "<h1> Bibliographie de $this : </h1><br>
                    <ul>";
        
        foreach($this->livres as $livre) {
            $result .= "<li>$livre</li><br>";
        }$result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return $this->nom. " " . $this->prenom;
    }
}

?>