<?php
class Administrateur extends Utilisateur{
    public string $role;

    public function __construct(string $role){
        $this->role = $role;
    }
    public function getRole(){
        return $this->role;
    }
    public function setRole()
    
    {
         $this->role = $role;
    }
    public function afficherRole(){
        echo "Role: {$this->role}";
    }
    public function supprimerArticle($titre,$contenu){

    }
}
?>