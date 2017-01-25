<?php 

require __DIR__.'/../Models/Cloth.php';
class Products {

	private $Products;
	private $Vetement;

	public function __construct(){
		$this->Products=[
		["legume"=>new Product("1","pomme de terre","1")],
		["legume"=>new Product("3","tomate","1")]
		];
		$this->Vetement=[
		["vetement"=>new Cloth("22","vetement1","marque1","20")],
		["vetement"=>new Cloth("25","vetement2","marque2","35")],
		["vetement"=>new Cloth("32","vetement3","marque2","25")],
		];

	}
	public function getProducts() {
		return $this->Products;
	}
	public function getVetement() {
		return $this->Vetement;
	}

}


?>
