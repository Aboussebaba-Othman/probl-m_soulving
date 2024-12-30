<?php
class Utilisateur {
    public string $nom;
    public string $email;

    public function __construct(string $nom,string $email){
        $this->nom=$nom;
        $this->email=$email;
    }
    public function getNom(): string
    
    {
        return $this->nom;
    }
    public function getEmail(): string
    
    {
        return $this->email;
    }
    
    public function setNom()
    
    {
         $this->nom = $nom;
    }
    public function setEmail()
    
    {
         $this->email = $email;
    }
   
    public function afficherDetails(){
        echo "nom: {$this->nom}";
        echo "email: {$this->email}";
    }
}
?>