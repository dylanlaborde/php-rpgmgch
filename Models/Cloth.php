<?php 

require 'Product.php';

class Cloth extends Product{

	private $brand;

	public function __construct($id,$name,$brand,$price){
		$this->setId($id);
		$this->setName($name);
		$this->setBrand($brand);
		$this->setPrice($price);
	}
	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($brand){
		$this->brand=$brand;
	}
 
	public function try(){

	}
}
 ?>