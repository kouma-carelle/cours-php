<?php
abstract class Form{
  abstract public function calculAire();
  abstract public function calculPerimetre();
}

class Cercle extends Form{
  
  public $rayon;
  public $pi;

  public function __construct($rayon , $pi){
   $this->rayon = $rayon; 
   $this->pi = $pi;
  }
  public function calculPerimetre(){
   return $this->pi * $this->rayon * 2;
  }

  public function calculAire(){
   return $this->pi * $this->rayon * 2;
}
}
$cercle = new Cercle(2, 3.14);
$cercleAire = $cercle->calculAire();
$cerclePerimetre = $cercle->calculPerimetre();
echo "Cercle \n";
echo "l'Aire du cercle est  $cercleAire \n";
echo "le perimetre du cercle est $cerclePerimetre \n";

class Rectangle extends Form{
  
  public $longueur;
  public $largeur;

  public function __construct($longueur, $largeur){
    $this->longueur = $longueur; 
    $this->largeur = $largeur;
  }
  public function calculPerimetre(){
   return $this->longueur * $this->largeur * 2;
  }

  public function calculAire(){
   return $this->longueur * $this->largeur;
}
}
$rectangle = new Rectangle(2, 5);

$rectangleAire = $rectangle->calculAire();
$rectanglePerimetre = $rectangle->calculPerimetre();

echo "Rectangle \n";
echo "l'Aire du Rectangle :  $rectangleAire \n";
echo "le perimetre du Rectangle : $rectanglePerimetre \n";

class Triangle extends Form{
  
  public $cote;
  public $base;
  public $hauteur;

  public function __construct($cote, $base, $hauteur){
    $this->cote = $cote; 
    $this->base = $base;
    $this->hauteur = $hauteur;
  }
  public function calculPerimetre(){
   return $this->cote + $this->cote + $this->cote;
  }
  public function calculAire(){
   return $this->base * $this->hauter *2;
}
}
$triangle = new Triangle(4, 2, 3);


$triangleAire = $triangle->calculAire();
$trianglePerimetre = $triangle->calculPerimetre();

echo "triangle \n";
echo "l'Aire du triangle :  $triangleAire \n";
echo "le perimetre du triangle : $trianglePerimetre \n";
