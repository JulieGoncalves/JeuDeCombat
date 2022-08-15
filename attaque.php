<?php

//Déclarer la class AttaqueRandom

class AttaqueRamdom {

    private $puissanceMin;
    private $puissanceMax;
    private $nomAttaque;

    public function __construct ($nomAttaque,$puissanceMin,$puissanceMax){
       $this -> puissanceMin = $puissanceMin;
       $this -> puissanceMax = $puissanceMax;
       $this -> nomAttaque = $nomAttaque;
       //initialiser l'attribut de l'objet lui-meme
       // A la fin du constructeur les attributs ont pour valeur la valeur passée en param du constructeur
    }

    public function computePuissanceAttaque(){
        return rand($this->puissanceMin,$this->puissanceMax); 
        // $this sert uniquement à acceder aux attributs ou aux methodes de l'objet courant syntaxe
        // retourne lui-même
        
    }
}

class AttaqueConstante { 
    
    private $constante;
    private $nomAttaque;

    //déclarer
    public function __construct ($nomAttaque,$constante){
       $this -> constante = $constante;
       $this -> nomAttaque = $nomAttaque;
    }

    //déclarer
    public function computePuissanceAttaque(){
        return $this-> constante;
        // $this sert uniquement à acceder aux attributs ou aux methodes de l'objet courant
        // retourne lui-même
    }
}

//instanciation des différentes attaques - on crée / on instancie des objets
$crochePied = new AttaqueRamdom("crochePied",5,40);
$crochePied->computePuissanceAttaque();

$coupDeCanne = new AttaqueRamdom("coupDeCanne",10,50);
$coupDeCanne ->computePuissanceAttaque();

$sermon = new AttaqueConstante("sermon",10);
$sermon ->computePuissanceAttaque();

$coupDeCasquette = new AttaqueConstante ("coupDeCasquette",5);
$coupDeCasquette ->computePuissanceAttaque();
// computePuissanceAttaque permet de donner une valeur à l'attaque

?>