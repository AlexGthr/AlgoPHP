<?php 

class Compte {
    private string $libelle;
    private int $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire) {

        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }

    

    /**
     * Get the value of libelle
     */ 
    public function getLibelle(): string
    {
        return $this->libelle;
    }
    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde(): int
    {
        return $this->solde;
    }
    public function setSolde(int $solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of devise
     */ 
    public function getDevise(): string
    {
        return $this->devise;
    }
    public function setDevise(string $devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }
    public function setTitulaire(Titulaire $titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }


    // Method pour créditer un compte.
    public function crediterCompte($soldeAAjouter) {
        $this->solde = $this->solde + $soldeAAjouter;
        return "<br><br>Bonjour ".$this->titulaire." ! Vous avez bien rajouter $soldeAAjouter ".$this->devise." au compte ".$this->libelle.". <br>Solde du compte : ".$this->solde." ".$this->devise; 
    }

    // Method pour debiter un compte
    public function debiterCompte($soldeADebiter) {
        if($this->solde > $soldeADebiter) {

            $this->solde = $this->solde - $soldeADebiter;

            return "<br><br>Bonjour ".$this->titulaire." !
             Vous avez bien retirer $soldeADebiter ".$this->devise." au compte ".$this->libelle.".
             <br>Solde du compte : ".$this->solde." ".$this->devise;
        }
        else {
            return "<br><br>Opérations impossible. Pas assez de fond.";
        }
    }

    // Method pour faire un virement d'un compte à un autre
    public function virementCompte($montantVirement, $compte) {
        if ($montantVirement < $this->solde && $montantVirement < $compte->solde) {
            $this->solde = $this->solde + $montantVirement;
            $compte->solde = $compte->solde - $montantVirement;
            
            return "Bonjour ".$this->titulaire." ! Votre virement de $montantVirement depuis le compte « ".$compte->libelle." » vers le compte « ".$this->libelle." » à bien été enrengistrer."; 
        }
        else {
            return "une erreur est survenue";
        }
    }

    public function __toString() {
        return $this->libelle." ".$this->solde;
    }
}