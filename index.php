<?php

include "attaque.php";

class Player {
    private $nom;
    private $vie;
    private $defense;
    private $attaques;

    public function __construct($nom,$vie,$defense,$attaques){
    $this -> nom = $nom;
    $this -> vie = $vie;
    $this -> defense = $defense;
    $this -> attaques = $attaques;
    }

    public function getVie() {
        return $this->vie;
    }
  
    public function attaquer($nom_attaque, $defenseur){
        // iterer 

        // Récupérer l'attaque au nom passé 
        // Puis récuperer la valeur d'attaque
        /**
         * Pour chaque `attaque` dans le tableau `attaques`, je souhaite :
         *  -> regarder si l'attaque courante à le nom d'attaque passe en parametre
         *  -> si c'est le cas, j'ai trouve la bonne attaque à utiliser
         *  -> je peux récupérer l'attaque (la mettre dans une variable resultat) et sortir de la boucle
         */
        $puissanceAttaque; // Déclaration de la variable puissanceAttaque
        foreach ($attaques as $attaque) {
            // Déclaration de `nomAttaqueCourante` et initialisation a $attaque->getNom()
            $nomAttaqueCourante = $attaque->getNom(); // J'utilise le getter pour avoir le nom
            if ($nomAttaqueCourante == $nom_attaque) {
                $puissanceAttaque = $attaque->computePuissanceAttaque();
                break;
            }
        }

        
        // Puis calculer les dégats
        // nouvelleVie = vieInitiale - puissanceAttaque
        // nouvelleVie = vieInitiale + defense -  puissanceAttaque
        $vieDefenseur = $defenseur->getVie();
        $nouvelleVieDuDefenseur = min(0, $vieDefenseur + $defenseur->getDefense() - $puissanceAttaque);
        // Mettre à jour la vie de l'adversaire
        $defense->setVie($nouvelleVieDuDefenseur);
       
    }
}

$tabAttaquesJeune = array($crochePied, $coupDeCasquette);
$tabAttaquesVielle= array($sermon, $coupDeCanne);

$leJeune = new player("leJeune",100,10,$tabAttaquesJeune);

$laVielle = new player("laVielle",100,5,$tabAttaquesVielle);


include "view.php";
?>
